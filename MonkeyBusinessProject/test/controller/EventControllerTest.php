<?php
/**
 * Created by PhpStorm.
 * User: kimprzybylski
 * Date: 17/05/17
 * Time: 20:22
 */


require_once 'vendor/autoload.php';

use \model\Event;
use \controller\EventController;

class EventControllerTest extends PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->mockEventRepository = $this->getMockBuilder('model\EventRepository')
            ->getMock();
        $this->mockView = $this->getMockBuilder('view\View')
            ->getMock();
    }

    public function tearDown()
    {
        $this->mockEventRepository = null;
        $this->mockView = null;
    }

    public function testHandleFindAllEvents_eventFound_stringWithIdNameStartDateEndDatePersonId()
    {
        $events = array();
        $event = new Event(1, 'testEvent', '2017-03-01', '2017-03-02', 2);
        array_push($events, $event);
        $this->mockEventRepository->expects($this->atLeastOnce())
            ->method('findAllEvents')
            ->will($this->returnValue($events));

        $this->mockView->expects($this->atLeastOnce())
            ->method('show')
            ->will($this->returnCallback(function ($object) {
                $event = $object['event'];
                printf("{Id :\"%d\",\"Name\":\"%s\",\"StartDate\":\"%s\",\"EndDate\":\"%s\",\"PersonId\":\"%d\"}", $event->getId(), $event->getName(), $event->getStartDate(), $event->getEndDate(), $event->getPersonId());
            }));

        $eventController = new EventController($this->mockEventRepository, $this->mockView);
        $eventController->handleFindAllEvents();
        $this->expectOutputString(sprintf("{Id :\"%d\",\"Name\":\"%s\",\"StartDate\":\"%s\",\"EndDate\":\"%s\",\"PersonId\":\"%d\"}", $event->getId(), $event->getName(), $event->getStartDate(), $event->getEndDate(), $event->getPersonId()));
    }

    public function test_handleFindAllEvents_eventFound_returnStringEmpty()
    {
        $events = array();
        $this->mockEventRepository->expects($this->atLeastOnce())
            ->method('findAllEvents')
            ->will($this->returnValue($events));

        $this->mockView->expects($this->atLeastOnce())
            ->method('show')
            ->will($this->returnCallback(function ($object) {
                echo '';
            }));

        $eventController = new EventController($this->mockEventRepository, $this->mockView);
        $eventController->handleFindAllEvents();
        $this->expectOutputString('');
    }

    public function testHandleFindEventById_eventFound_stringWithIdNameStartDateEndDatePersonId()
    {
        $event = new Event(1, 'testEvent', '2017-03-01', '2017-03-02', 2);
        $this->mockEventRepository->expects($this->atLeastOnce())
            ->method('findEventById')
            ->will($this->returnValue($event));

        $this->mockView->expects($this->atLeastOnce())
            ->method('show')
            ->will($this->returnCallback(function ($object) {
                $event = $object['event'];
                printf("{Id :\"%d\",\"Name\":\"%s\",\"StartDate\":\"%s\",\"EndDate\":\"%s\",\"PersonId\":\"%d\"}", $event->getId(), $event->getName(), $event->getStartDate(), $event->getEndDate(), $event->getPersonId());
            }));

        $eventController = new EventController($this->mockEventRepository, $this->mockView);
        $eventController->handleFindEventById($event->getId());
        $this->expectOutputString(sprintf("{Id :\"%d\",\"Name\":\"%s\",\"StartDate\":\"%s\",\"EndDate\":\"%s\",\"PersonId\":\"%d\"}", $event->getId(), $event->getName(), $event->getStartDate(), $event->getEndDate(), $event->getPersonId()));
    }

    public function test_handleFindEventById_eventFound_returnStringEmpty()
    {
        $this->mockEventRepository->expects($this->atLeastOnce())
            ->method('findEventById')
            ->will($this->returnValue(null));

        $this->mockView->expects($this->atLeastOnce())
            ->method('show')
            ->will($this->returnCallback(function ($object) {
                echo '';
            }));

        $eventController = new EventController($this->mockEventRepository, $this->mockView);
        $eventController->handleFindEventById(1);
        $this->expectOutputString('');
    }

    public function testHandleFindEventByPersonId_eventFound_arrayWithIdNameStartDateEndDatePersonId()
    {
        $events = array();
        $event = new Event(1, 'testEvent', '2017-03-01', '2017-03-02', 2);
        array_push($events, $event);
        $this->mockEventRepository->expects($this->atLeastOnce())
            ->method('findEventByPersonId')
            ->will($this->returnValue($events));

        $this->mockView->expects($this->atLeastOnce())
            ->method('show')
            ->will($this->returnCallback(function ($object) {
                $event = $object['event'];
                printf("{Id :\"%d\",\"Name\":\"%s\",\"StartDate\":\"%s\",\"EndDate\":\"%s\",\"PersonId\":\"%d\"}", $event->getId(), $event->getName(), $event->getStartDate(), $event->getEndDate(), $event->getPersonId());
            }));

        $eventController = new EventController($this->mockEventRepository, $this->mockView);
        $eventController->handleFindEventById($events[0]->getId());
        $this->expectOutputString(sprintf("{Id :\"%d\",\"Name\":\"%s\",\"StartDate\":\"%s\",\"EndDate\":\"%s\",\"PersonId\":\"%d\"}", $event->getId(), $event->getName(), $event->getStartDate(), $event->getEndDate(), $event->getPersonId()));
    }

    public function test_handleFindEventByPersonId_eventFound_returnStringEmpty()
    {
        $events = array();
        $this->mockEventRepository->expects($this->atLeastOnce())
            ->method('findEventByPersonId')
            ->will($this->returnValue($events));

        $this->mockView->expects($this->atLeastOnce())
            ->method('show')
            ->will($this->returnCallback(function ($object) {
                echo '';
            }));

        $eventController = new EventController($this->mockEventRepository, $this->mockView);
        $eventController->handleFindEventById(1);
        $this->expectOutputString('');
    }
}