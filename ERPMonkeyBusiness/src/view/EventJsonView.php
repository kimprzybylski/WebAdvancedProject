<?php namespace view;
/**
 * Created by PhpStorm.
 * User: kimprzybylski
 * Date: 17/05/17
 * Time: 13:51
 */
//require_once 'View.php';



class EventJsonView implements View
{
    public function show(array $data)
    {
        header('Content-Type: application/json');

        if (isset($data['event'])) {
            $event = $data['event'];
            echo json_encode(['Id' => $event->getId(), 'Name' => $event->getName(), 'StartDate' => $event->getStartDate(), 'EndDate' => $event->getEndDate(), 'PersonId' => $event->getPersonId()]);
        } else {
            echo '{}';
        }
    }
}
