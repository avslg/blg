<?php

namespace blog;
class Post {
	protected $id;
	protected $title;
	protected $content;
	protected $images = array();

	public function __construct($id,$title,$content,$images=null) {
		$this->id = $id;
		$this->title = $title;
		$this->content = $content;
		if($images){
			foreach ($images as $img){
				array_push($this->images,$img);
			}
		}
	}
	public function getTitle(){
		return $this->title;
	}
	public function getContent(){
		return $this->content;
	}
	public function getId(){
		return $this->id;
	}



}