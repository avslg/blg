<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 23.02.2018
 * Time: 18:29
 */


class JsonReturn{

	static function getJson($jsonArray){
		header("Content-type:application/json; charset=utf-8");
	echo json_encode($jsonArray);
	}

}

