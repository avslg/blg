<?php
$path = $_SERVER["DOCUMENT_ROOT"];

require_once($path . "/db/logic/PostManager.php");
require_once($path ."/db/logic/Post.php");
require_once($path ."/db/json.php");

class ControllerManager {


	static public function getView($controller,$action){
		if($controller == "admin"){
			require_once($_SERVER["DOCUMENT_ROOT"] . "/template/admin.php");
			return;
		}

	   if($controller == "post"){

		   $pm = new DB\PostManager();

		   switch ($action) {
			   case "create":{
				   $isJson= $_POST['json'];
				    if(!$isJson){
					   require_once($_SERVER["DOCUMENT_ROOT"] . "/template/create.php");
					   break;
				    }else{
				        $title = $_POST['title'];
				        $content = $_POST['content'];
					    $pst = new blog\Post(null,$title,$content,null);

					    $result = $pm->Write($pst);
					    return JsonReturn::getJson($result);
				    }
			   }
			   case "remove":{


				    $isJson= $_GET['json'];
				   $id = $_GET['id'];

				   if(!$isJson){
					   require_once($_SERVER["DOCUMENT_ROOT"] . "/template/remove.php");
					   break;}
					   else{
						  $result = $pm->Remove($id);
						  return JsonReturn::getJson($result);

					   }
			   }
			   case "update":{
				   $isJson= $_POST['json'];

				   $id = $_POST['id'];
				       $title = $_POST['title'];
				       $content = $_POST['content'];

					   if(!$isJson){
						   require_once($_SERVER["DOCUMENT_ROOT"] . "/template/update.php");
						   break;
					   }
					   else{

						   $pst = new \blog\Post($id,$title,$content,null);
						   $pm->Update($id,$pst);
						   break;
					   }
			   }

			   case "count":{
				   $result = $pm->Count();
				   $result = array(array(
				   	"count" => $result)
			        );
				   return JsonReturn::getJson($result);
			       break;
			   }

			   case "view":{
				   $id = $_GET['id'];
				   $isJson =  $_GET['json'];

				   if($isJson == "false"){
					   require_once( $_SERVER["DOCUMENT_ROOT"] . "/template/post.php" );
					   break;
					   return;
				   }else{
					   if(isset($id)){
						   //$post = $pm->Get(--$id);
						   $post = $pm->Get($id);
						   return JsonReturn::getJson($post);
					   }
					   return;
				   }
			   }

			   case "get":{

				   $id = $_GET['id'];
				   $isJson =  $_GET['json'];
				   $lastid = $_GET['lastid'];
				   if(!$lastid){
				   	$lastid = null;
				   }


				   if($isJson == "false"){
					    require_once( $_SERVER["DOCUMENT_ROOT"] . "/template/post.php" );
					    break;
					    return;
				   }else{
					    if(isset($id) && !isset($lastid)){
						    $post = $pm->Get($id);
						    return JsonReturn::getJson($post);
					    }

					    if(isset($id) && isset($lastid)){
						    $length = $lastid - $id;
						    $length++;

						    $posts = $pm->GetSegment($id,$length);
						    return JsonReturn::getJson($posts);
					    }
					    return;
				    }
	                break;
			   }



			   default: require_once( $_SERVER["DOCUMENT_ROOT"] . "/template/post.php" );
		   }

		   return;
	   }







	   require_once($_SERVER["DOCUMENT_ROOT"] . "/template/main.php");


}


}


