<?php
/**
 * Created by PhpStorm.
 * User: kimprzybylski
 * Date: 13/05/17
 * Time: 20:34
 */

require_once 'model/PDOEventRepository.php';

/*$event = new Event(1, 'testEvent', '2017-03-01', '2017-03-02', 2);
print_r($event);*/

$user = 'root';
$password = 'user';
$database = 'MonkeyBusinessDB';
$pdo = null;

try {
    $pdo  = new PDO("mysql:host=;dbname=$database", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $eventPDORepository = new PDOEventRepository($pdo);
    $eventPDORepository->addEvent('testEvent', '2017-01-01', '2017-04-01', 2);

} catch (PDOException $exception) {
    var_dump($exception->getMessage());
}