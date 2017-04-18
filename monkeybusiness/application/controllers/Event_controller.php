<?php

/**
 * Created by PhpStorm.
 * User: kimprzybylski
 * Date: 9/04/17
 * Time: 14:23
 */
class Event_controller extends CI_Controller
{

    function index() {
        if($_GET == null) {
            $this->load->model('Event_model');
            $data['records'] = $this->Event_model->get_all_events();
            $this->load->helper('url');
            $this->load->view('Event_view', $data);
        }
        else {
            $this->load->model('Event_model');
            $from = $_GET["from"];
            $until = $_GET["until"];
            $data['records'] = $this->Event_model->get_event_by_date($from, $until);
            $this->load->helper('url');
            $this->load->view('Event_view', $data);
        }
    }

    function read_event_by_id() {
        $this->load->model('Event_model');
        $id = $this->uri->segment('2');
        $data['records'] = $this->Event_model->get_event_by_id($id);
        $this->load->helper('url');
        $this->load->view('Event_view', $data);
    }

    function read_event_by_personid() {
        $this->load->model('Event_model');
        $id = $this->uri->segment('3');
        $data['records'] = $this->Event_model->get_event_by_personid($id);
        $this->load->helper('url');
        $this->load->view('Event_view', $data);
    }

    function read_event_by_personid_date() {
        $this->load->model('Event_model');
        $personId = $this->uri->segment('2');
        $from = $_GET["from"];
        $until = $_GET["until"];
        $data['records'] = $this->Event_model->get_event_by_personid_date($personId,$from, $until);
        $this->load->helper('url');
        $this->load->view('Event_view', $data);
    }

    function create() {
        $this->load->model('Event_model');

        $data = array(
            'name' => $this->input->post('name'),
            'startDate' => $this->input->post('startDate'),
            'endDate' => $this->input->post('endDate'),
            'personId' =>$this->input->post('personId')
        );

        $this->Event_model->create($data);

        $data['records'] = $this->Event_model->get_all_events();
        $this->load->helper('url');
        $this->load->view('Event_view', $data);
    }

    function update() {
        $this->load->model('Event_model');

        $data = array(
            'name' => $this->input->post('name'),
            'startDate' => $this->input->post('startDate'),
            'endDate' => $this->input->post('endDate'),
            'personId' => $this->input->post('personId')
        );

        $old_id = $this->input->post('old_id');
        $this->Event_model->update($data, $old_id);

        $data['records'] = $this->Event_model->get_all_events();
        $this->load->helper('url');
        $this->load->view('Event_view', $data);
    }

    function delete() {
        $this->load->model('Event_model');
        $id = $this->uri->segment('3');
        $this->Event_model->delete($id);

        $data['records'] = $this->Event_model->get_all_events();
        $this->load->helper('url');
        $this->load->view('Event_view', $data);
    }

    function create_event_view() {
        $this->load->helper('form');
        $this->load->view('Event_create');
    }

    function update_event_view() {
        $this->load->helper('form');
        $id = $this->uri->segment('3');
        $this->load->model('Event_model');
        $data['records'] = $this->Event_model->get_event_by_id($id);
        $data['old_id'] = $id;
        $this->load->view('Event_update',$data);
    }
}