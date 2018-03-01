<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 23.02.2018
 * Time: 19:55
 */

namespace DB;


use blog\Post;

$path = $_SERVER["DOCUMENT_ROOT"];
require_once($path . "/db/logic/interfaces/InterfaceDbManager.php");
require_once($path . "/db/logic/DbConnector.php");
require_once($path . "/db/logic/Post.php");


class PostManager implements InterfaceDbManager {
	private $database;


	function __construct(){

		$this->database = DbConnector::Load("blogblog","root","");


	}

	function Get($id){

		$st = $this->database->prepare("select * from posts where postid=:id");
		$st->execute(array("id"=>$id));
		$post = $st->fetch();
		return $post;

	}
	function GetSegment($firstId,$length){


		$st = $this->database->prepare("select * from posts where postid >= :id");
		$st->execute(array(":id"=>$firstId));
		$posts = $st->fetchAll();
 		$posts = array_slice($posts,0,$length);

		return $posts;
	}

	function Count(){
		$st = $this->database->prepare("select COUNT('postid') from posts");
		$st->execute();
		$result = $st->fetch();
			return $result[0];
	}

	function Write($entry){
		$currentDate = date('Y-m-d');
		$sql = "INSERT INTO posts (title, content,date) VALUES (:title, :content,:date)";
		$st = $this->database->prepare($sql);

		$st->bindValue(':title',$entry->getTitle());
		$st->bindValue(':content',$entry->getContent());
		$st->bindValue(':date',$currentDate);

		$isGood = $st->execute();
		if($isGood){
			return true;
		} else return false;
	}

	function Update($id,Post $entry){
		$dateupdate = date('Y-m-d');

		$sql = "UPDATE posts SET title=?,content=?,dateupdate=? WHERE postid=?";

		$st = $this->database->prepare($sql);

		$isUpdate = $st->execute(array($entry->getTitle(),$entry->getContent(),$dateupdate,$id));

		if($isUpdate){
			return true;
		}else return false;
	}

	function Remove($id){
		$st = $this->database->prepare("DELETE FROM posts WHERE postid =:id");
		$del =	$st->execute(array(":id"=>$id));

		$del = $st->execute();
		if($del){
			return true;
		}else return false;
	}

}