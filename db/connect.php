<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 23.02.2018
 * Time: 18:35
 */

require_once("json.php");

$fakejson = array(
	array('postid'=>1,
	      'title'  => "Заголовок1",
	      'content'  => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
		  'images' => array(
			  array(
				  'imageid'  => 1,
				  'name'  => "cat1.jpg"
			  ),
			  array(
				  'imageid'  => 2,
				  'name'  => "dog.jpg"
			  )
		  )
		),
	array('postid'=>2,
	      'title'  => "Заголовок 222",
	      'content'  => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
	      'images' => array(
		      array(
			      'imageid'  => 1,
			      'name'  => "cat1.jpg"
		      ),
		      array(
			      'imageid'  => 2,
			      'name'  => "dog.jpg"
		      )
	      )
	),
	array('postid'=>3,
	      'title'  => "Заголовок 333",
	      'content'  => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
	      'images' => array(
		      array(
			      'imageid'  => 1,
			      'name'  => "cat1.jpg"
		      ),
		      array(
			      'imageid'  => 2,
			      'name'  => "dog.jpg"
		      )
	      )
	),
	array('postid'=>4,
	      'title'  => "Заголовок 444",
	      'content'  => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
	      'images' => array(
		      array(
			      'imageid'  => 1,
			      'name'  => "cat1.jpg"
		      ),
		      array(
			      'imageid'  => 2,
			      'name'  => "dog.jpg"
		      )
	      )
	),
	array('postid'=>5,
	      'title'  => "Заголовок 555",
	      'content'  => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
	      'images' => array(
		      array(
			      'imageid'  => 1,
			      'name'  => "cat1.jpg"
		      ),
		      array(
			      'imageid'  => 2,
			      'name'  => "dog.jpg"
		      )
	      )
	),
	array('postid'=>6,
	      'title'  => "Заголовок 666",
	      'content'  => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
	      'images' => array(
		      array(
			      'imageid'  => 1,
			      'name'  => "cat1.jpg"
		      ),
		      array(
			      'imageid'  => 2,
			      'name'  => "dog.jpg"
		      )
	      )
	),
	array('postid'=>7,
	      'title'  => "Заголовок 7777",
	      'content'  => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
	      'images' => array(
		      array(
			      'imageid'  => 1,
			      'name'  => "cat1.jpg"
		      ),
		      array(
			      'imageid'  => 2,
			      'name'  => "dog.jpg"
		      )
	      )
	),

);



$fakejson = array_slice($fakejson,2);

echo JsonReturn::getJson($fakejson);


