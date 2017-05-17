<?php
/**
 * Created by PhpStorm.
 * User: kimprzybylski
 * Date: 13/05/17
 * Time: 20:34
 */

/*require_once 'model/PDOEventRepository.php';
require_once 'view/EventJsonView.php';
require_once 'controller/EventContreller.php';*/

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

    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $eventController->handleFindEventById($id);

} catch (PDOException $exception) {
    var_dump($exception->getMessage());
}