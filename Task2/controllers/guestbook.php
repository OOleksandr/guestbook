<?php
class Controllers_Guestbook extends Controller 
{	
	private $member;	
	function __set($name,$val)
	{
		$this->member[$name] = $val;
	}
	function __get($name) 
	{
		return $this->member;	
	}   
	function lists() 
	{
		$t=new Models_Guestbook;
		$obj= $t->show_lists();
		$this->obj=$obj;
	}
	function view() 
	{
		$t=new Models_Guestbook;
		$obj= $t->view();
		$this->obj=$obj; 
	}
	function form()
	{
		$t=new Models_Guestbook;
		$obj= $t->add();
		$this->obj=$obj; 
	}
	function del()
	{
		$t=new Models_Guestbook;
		$obj= $t->del();
		$this->obj=$obj; 
	}
} 
?> 
 
 