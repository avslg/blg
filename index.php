<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 23.02.2018
 * Time: 21:09
 */

require_once("controller/ControllerManager.php");

$controller = $_GET['controller'];
$action = $_GET['action'];



if(isset($_POST['controller'])){
	$controller = $_GET['controller'];
}
if(isset($_POST['action'])){
	$controller = $_GET['action'];
}



ControllerManager::getView($controller,$action);