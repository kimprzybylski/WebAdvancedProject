<?php
/**
 * Created by PhpStorm.
 * User: kimprzybylski
 * Date: 17/05/17
 * Time: 18:04
 */

require_once '../vendor/autoload.php';

use \model\PDOEventRepository;
use \view\EventJsonView;
use \controller\EventController;

$user = 'root';
$password = 'user';
$database = 'MonkeyBusinessDB';
$pdo = null;

try {
    $pdo  = new PDO("mysql:host=;dbname=$database", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $eventPDORepository = new PDOEventRepository($pdo);
    $eventJsonView = new EventJsonView();
    $eventController = new EventController($eventPDORepository, $eventJsonView);

    /*$startDate = isset($_GET['startDate']) ? $_GET['startDate'] : null;
    $endDate = isset($_GET['endDate']) ? $_GET['endDate'] : null;
    $personId = isset($_GET['personId']) ? $_GET['personId'] : null;
    $eventController->handleFindByPersonIdAndDate($personId,$startDate, $endDate);*/

    $eventController->handleFindAllEvents();
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    //$eventController->handleDelete($id);

} catch (PDOException $exception) {
    var_dump($exception->getMessage());
}