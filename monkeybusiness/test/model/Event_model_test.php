<?php


require_once 'application/models/Event_model.php';
require_once 'system/core/Model.php';

class Event_model_Test extends PHPUnit_Framework_TestCase
{
    public function test_GetAllEvents_ReturnAllEvents() {
        $suppliers = array('id' => '1', 'name' => 'test1', 'startDate' => ' 2017-04-04', 'endDate' => '2017-04-05', 'personId' => '1');

        // Create a stub
        require_once(APPPATH . '/application/models/Event_model.php');
        $stub = $this->getMockBuilder('Event_model').getMock();

        // configure the stub
        $stub->expects($this->atLeastOnce())->method('get_all_events')->wil($this->returnValue(['id' => $suppliers[0]['id'], 'name' => $suppliers[0]['name'], 'startDate' => $suppliers[0]['startDate'], 'endDate' => $suppliers[0]['endDate'], 'personId' => $suppliers[0]['personId']]));

        $result = $this->ci->suppliers->get_all_events();

        $this->assertEquals($result[0]['id'], $suppliers[0]['id']);
    }

    public function test_GetEventById_ReturnEvent(){
        $suppliers = array('id' => '1', 'name' => 'test1', 'startDate' => ' 2017-04-04', 'endDate' => '2017-04-05', 'personId' => '1');

        // Create a stub
        require_once(APPPATH . '/application/models/Event_model.php');
        $stub = $this->getMockBuilder('Event_model').getMock();

        // configure the stub
        $stub->expects($this->atLeastOnce())->method('get_event_by_id')->wil($this->returnValue(['id' => $suppliers[0]['id'], 'name' => $suppliers[0]['name'], 'startDate' => $suppliers[0]['startDate'], 'endDate' => $suppliers[0]['endDate'], 'personId' => $suppliers[0]['personId']]));

        $result = $this->ci->suppliers->get_event_by_id('1');

        $this->assertEquals($result[0]['id'], $suppliers[0]['id']);
    }

    public function test_GetEventByPersonid_ReturnEventWithPersonid() {
        $suppliers = array('id' => '1', 'name' => 'test1', 'startDate' => ' 2017-04-04', 'endDate' => '2017-04-05', 'personId' => '1');

        // Create a stub
        require_once(APPPATH . '/application/models/Event_model.php');
        $stub = $this->getMockBuilder('Event_model').getMock();

        // configure the stub
        $stub->expects($this->atLeastOnce())->method('get_event_by_personid')->wil($this->returnValue(['id' => $suppliers[0]['id'], 'name' => $suppliers[0]['name'], 'startDate' => $suppliers[0]['startDate'], 'endDate' => $suppliers[0]['endDate'], 'personId' => $suppliers[0]['personId']]));

        $result = $this->ci->suppliers->get_event_by_personId('1');

        $this->assertEquals($result[0]['id'], $suppliers[0]['id']);
    }

    public function test_GetEventByDate_ReturnEventWithDate() {
        $suppliers = array('id' => '1', 'name' => 'test1', 'startDate' => ' 2017-04-04', 'endDate' => '2017-04-05', 'personId' => '1');

        // Create a stub
        require_once(APPPATH . '/application/models/Event_model.php');
        $stub = $this->getMockBuilder('Event_model').getMock();

        // configure the stub
        $stub->expects($this->atLeastOnce())->method('get_event_by_date')->wil($this->returnValue(['id' => $suppliers[0]['id'], 'name' => $suppliers[0]['name'], 'startDate' => $suppliers[0]['startDate'], 'endDate' => $suppliers[0]['endDate'], 'personId' => $suppliers[0]['personId']]));

        $result = $this->ci->suppliers->get_event_by_date('2017-04-04', '2017-04-05');

        $this->assertEquals($result[0]['id'], $suppliers[0]['id']);
    }

    public function test_GetEventByPersonidDate_ReturnEventWithPersonIdDate() {
        $suppliers = array('id' => '1', 'name' => 'test1', 'startDate' => ' 2017-04-04', 'endDate' => '2017-04-05', 'personId' => '1');

        // Create a stub
        require_once(APPPATH . '/application/models/Event_model.php');
        $stub = $this->getMockBuilder('Event_model').getMock();

        // configure the stub
        $stub->expects($this->atLeastOnce())->method('get_event_by_personid_date')->wil($this->returnValue(['id' => $suppliers[0]['id'], 'name' => $suppliers[0]['name'], 'startDate' => $suppliers[0]['startDate'], 'endDate' => $suppliers[0]['endDate'], 'personId' => $suppliers[0]['personId']]));

        $result = $this->ci->suppliers->get_event_by_personId_date('1', '2017-04-04', '2017-04-05');

        $this->assertEquals($result[0]['id'], $suppliers[0]['id']);
    }

    public function test_create_ReturnTrue() {
        $suppliers = array('id' => '1', 'name' => 'test1', 'startDate' => ' 2017-04-04', 'endDate' => '2017-04-05', 'personId' => '1');

        // Create a stub
        require_once(APPPATH . '/application/models/Event_model.php');
        $stub = $this->getMockBuilder('Event_model').getMock();

        // configure the stub
        $stub->expects($this->atLeastOnce())->method('create')->wil($this->returnValue(true));

        $result = $this->ci->suppliers->create($suppliers);

        $this->returnTrue($result);
    }

    public function test_Update_ReturnTrue() {
        $suppliers = array('id' => '1', 'name' => 'test1', 'startDate' => ' 2017-04-04', 'endDate' => '2017-04-05', 'personId' => '1');

        // Create a stub
        require_once(APPPATH . '/application/models/Event_model.php');
        $stub = $this->getMockBuilder('Event_model').getMock();

        // configure the stub
        $stub->expects($this->atLeastOnce())->method('update')->wil($this->returnValue(true));

        $result = $this->ci->suppliers->update($suppliers , '1');

        $this->returnTrue($result);
    }

    public function test_Delete_deleteEvent_ReturnTrue() {
        $suppliers = array('id' => '1', 'name' => 'test1', 'startDate' => ' 2017-04-04', 'endDate' => '2017-04-05', 'personId' => '1');

        // Create a stub
        require_once(APPPATH . '/application/models/Event_model.php');
        $stub = $this->getMockBuilder('Event_model').getMock();

        // configure the stub
        $stub->expects($this->atLeastOnce())->method('delete')->wil($this->returnValue(true));

        $result = $this->ci->suppliers->delete('1');

        $this->returnTrue($result);
    }
}
