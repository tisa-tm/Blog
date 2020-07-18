<?php
class post{
	private $postid;
	private $date;
	private $content;
	private $title;
	//private $image;
	private $userid;

	function getPostid(){
		return $this->postid;
	}
	function getDate(){
		return $this->date;
	}
	function getContent(){
		return $this->content;
	}
	function getTitle(){
		return $this->title;
	}
	function getUserid(){
		return $this->userid;
	}


	function getPostid($postid){
		$this->postid=$postid;
	}
	function getDate($date){
		$this->date=$date;
	}
	function getContent($content){
		$this->content=$content;
	}
	function getTitle($title){
		$this->title=$title;
	}
	function getUserid($userid){
		$this->userid=$userid;
	}

}
?>