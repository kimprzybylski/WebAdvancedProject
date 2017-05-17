<?php
/**
 * Created by PhpStorm.
 * User: kimprzybylski
 * Date: 17/05/17
 * Time: 18:34
 */

namespace controller;

use model\EventRepository;
use view\View;

class EventController
{
    private $eventRepository;
    private $view;

    public function __construct(EventRepository $eventRepository, View $view)
    {
        $this->eventRepository = $eventRepository;
        $this->view = $view;
    }

    public function handleFindAllEvents(){
        $events = $this->eventRepository->findAllEvents();
        if(count($events) >0){
            foreach ($events as $event) {
                $this->view->show(['event' => $event]);
            }
        }
    }

    public function handleFindEventById($id = null)
    {
        $event = $this->eventRepository->findEventById($id);
        $this->view->show(['event' => $event]);
    }

    public function handleFindEventByPersonId($personId = null){
        $events = $this->eventRepository->findEventByPersonId($personId);
        if(count($events) >0){
            foreach ($events as $event) {
                $this->view->show(['event' => $event]);
            }
        }
    }

    public function handleFindEventByDate($startDate = null, $endDate = null){
        $events = $this->eventRepository->findEventByDate($startDate, $endDate);
        foreach ($events as $event) {
            $this->view->show(['event' => $event]);
        }
    }

    public function handleFindByPersonIdAndDate($personId, $startDate, $endDate){
        $events = $this->eventRepository->findEventByPersonIdAndDate($personId, $startDate, $endDate);
        foreach ($events as $event) {
            $this->view->show(['event' => $event]);
        }
    }

    public function handleAddEvent($name, $startDate, $endDate, $personId){
        $this->eventRepository->addEvent($name, $startDate, $endDate, $personId);
    }

    public function handleUpdateEvent($id, $name, $startDate, $endDate, $personId){
        $this->eventRepository->updateEvent($id, $name, $startDate, $endDate, $personId);
    }

    public function handleDelete($id){
        $this->eventRepository->deleteEvent($id);
    }

}

/*
    public function findEventByPersonIdAndDate($personId, $startDate, $endDate);
    public function addEvent($name, $startDate, $endDate, $personId);
    public function updateEvent($id, $name, $startDate, $endDate, $personId);
    public function deleteEvent($id);*/