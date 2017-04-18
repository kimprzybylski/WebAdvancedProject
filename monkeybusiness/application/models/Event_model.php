<?php

/**
 * Created by PhpStorm.
 * User: kimprzybylski
 * Date: 9/04/17
 * Time: 14:50
 */
class Event_model extends CI_Model
{
    function get_all_events() {
        $query = $this->db->get("Events");
        return $query->result();
    }

    function get_event_by_id($id) {
        $query = $this->db->select()->from("Events")->where('Id', $id)->get();
        return $query->result();
    }

    function get_event_by_personid($personId) {
        $query = $this->db->select()->from("Events")->where('PersonId', $personId)->get();
        return $query->result();
    }

    function get_event_by_date($from, $until) {
        $query = $this->db->get_where("Events", array("startDate"=>$from, "endDate"=>$until));
        return $query->result();
    }

    function get_event_by_personid_date($personId, $from, $until) {
        $query = $this->db->get_where("Events", array("personId"=>$personId, "startDate"=>$from, "endDate"=>$until));
        return $query->result();
    }

    function create($data) {
        if ($this->db->insert("Events", $data)){
            return true;
        }
        return false;
    }

    function update($data, $old_id) {
        $this->db->set($data);
        $this->db->where("Id", $old_id);
        $this->db->update("Events", $data);
    }

    function delete($id) {
        if ($this->db->delete("Events", "Id = ".$id)) {
            return true;
        }
    }
}