<?php

require_once 'src/model/Event.php';
require_once 'src/model/PDOEventRepository.php';

class PDOEventRepositoryTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->mockPDO = $this->getMockBuilder('PDO')
            ->disableOriginalConstructor()
            ->getMock();

        $this->mockPDOStatement = $this->getMockBuilder('PDOStatement')
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function tearDown()
    {
        $this->mockPDO = null;
        $this->mockPDOStatement = null;
    }

   /* public function testFindAllEvents_Exists_ArrayEventObject()
    {
        $event = new Event(1, 'testEvent', '2017-03-01', '2017-03-02', 2);
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetch')
            ->will($this->returnValue([['Id' => $event->getId(), 'Name' => $event->getName(), 'StartDate' => $event->getStartDate(), 'EndDate' => $event->getEndDate(), 'PersonId' => $event->getPersonId()]]));

        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));

        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findAllEvents();

        $this->assertEquals($event, $actualEvent);
    }*/

    public function testFindAllEvents_exeptionThrownFromPDO_Null()
    {
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute')->will($this->throwException(new PDOException()));


        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));

        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventById(2);

        $this->assertNull($actualEvent);
    }

    public function testFindEventById_idExists_EventObject()
    {
        $event = new Event(1, 'testEvent', '2017-03-01', '2017-03-02', 2);
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetchAll')
            ->will($this->returnValue([['Id' => $event->getId(), 'Name' => $event->getName(), 'StartDate' => $event->getStartDate(), 'EndDate' => $event->getEndDate(), 'PersonId' => $event->getPersonId()]]));

        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));

        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventById($event->getId());

        $this->assertEquals($event, $actualEvent);
    }

    public function testFindEventById_idDoesNotExist_Null()
    {
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetchAll')
            ->will($this->returnValue([]));

        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));

        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventById(222);

        $this->assertNull($actualEvent);
    }

    public function testFindEventById_exeptionThrownFromPDO_Null()
    {
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam')->will($this->throwException(new PDOException()));


        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));

        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventById(2);

        $this->assertNull($actualEvent);
    }

    /*public function testFindEventByPersonId_idExists_ArrayEventObject()
    {
        $event = new Event(1, 'testEvent', '2017-03-01', '2017-03-02', 2);
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetch')
            ->will($this->returnValue([['Id' => $event->getId(), 'Name' => $event->getName(), 'StartDate' => $event->getStartDate(), 'EndDate' => $event->getEndDate(), 'PersonId' => $event->getPersonId()]]));

        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));

        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventByPersonId($event->getPersonId());

        $this->assertEquals($event, $actualEvent);
    }*/

    public function testFindEventByPersonId_idDoesNotExist_Null()
    {
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetch')
            ->will($this->returnValue([]));

        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));

        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventByPersonId(222);

        $this->assertEmpty($actualEvent);
    }

    public function testFindEventByPersonId_exeptionThrownFromPDO_Null()
    {
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam')->will($this->throwException(new PDOException()));


        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));

        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventByPersonId(1);

        $this->assertNull($actualEvent);
    }

    /*public function testFindEventByDate_idExists_ArrayEventObject()
    {
        $event = new Event(1, 'testEvent', '2017-03-01', '2017-03-02', 2);
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetch')
            ->will($this->returnValue([['Id' => $event->getId(), 'Name' => $event->getName(), 'StartDate' => $event->getStartDate(), 'EndDate' => $event->getEndDate(), 'PersonId' => $event->getPersonId()]]));

        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));

        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventByDate($event->getStartDate(), $event->getEndDate());

        $this->assertEquals($event, $actualEvent);
    }*/

    public function testFindEventByDate_dateDoesNotExist_Null()
    {
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetch')
            ->will($this->returnValue([]));

        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));

        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventByDate('2017-31-01', '2017-31-01');

        $this->assertEmpty($actualEvent);
    }

    public function testFindEventByDate_exeptionThrownFromPDO_Null()
    {
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam')->will($this->throwException(new PDOException()));


        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));

        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventByDate('2017-01-01', '2017-01-02');

        $this->assertNull($actualEvent);
    }

    /*public function testFindEventByPersonIdDate_dateAndPersonIdExists_ArrayEventObjects()
    {
        $event = new Event(1, "name", "startDate", "endDate", 2);
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetch')
            ->will($this->returnValue([['Id' => $event->getId(), 'Name' => $event->getName(), 'StartDate' => $event->getStartDate(), 'EndDate' => $event->getEndDate(), 'PersonId' => $event->getPersonId()]]));

        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));

        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventByPersonIdAndDate($event->getPersonId(),$event->getStartDate(), $event->getEndDate());

        $this->assertEquals($event, $actualEvent);
    }*/

    public function testFindEventByPersonIdAndDate_dateAndPersonIdDoNotExist_Null()
    {
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetch')
            ->will($this->returnValue([]));

        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));

        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventByDate(200, "start", "end");

        $this->assertEmpty($actualEvent);
    }

    public function testFindEventByPersonIdAndDate_exeptionThrownFromPDO_Null()
    {
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam')->will($this->throwException(new PDOException()));


        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));

        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventByDate(1, "startDate", "endDate");

        $this->assertNull($actualEvent);
    }

    public function testAddEvent_EventAdded_True(){
        //Arrange
        $pdoEventRepository = new PDOEventRepository($this->mockPDO);

        //Act
        $result = $pdoEventRepository->addEvent('testEvent', '2017-03-01', '2017-03-02', 2);

        //Assert
        $this->assertTrue($result);

        /*$event = new Event(1, 'testEvent', '2017-03-01', '2017-03-02', 2);
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');


        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute')->will($this->returnValue(true));



        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $result = $pdoRepository->addEvent($event->getName(), $event->getStartDate(), $event->getEndDate(), $event->getPersonId());

        $this->assertTrue($result);*/
    }

    public function testDeleteEvent_idExist_True() {
        $event = new Event(1, 'testEvent', '2017-03-01', '2017-03-02', 2);

        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('prepare');

        $pdoEventRepository = new PDOEventRepository($this->mockPDO);
        $pdoEventRepository->deleteEvent(1);

    }
}
