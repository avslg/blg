<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 23.02.2018
 * Time: 20:12
 */

namespace DB;


interface InterfaceDbManager {

	function Get($id);
	function GetSegment($firstEntryID,$endEntryID);
	function Remove($id);
	function Write($entry);
}