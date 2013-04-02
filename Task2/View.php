<?php
	class View
	{
		private function getRoute()
		{
			if (empty($_GET['route']))
			{
				$route = 'index';
			}
			else
			{
				$route = $_GET['route'];
			}
			return $route;
		}

		private function getController()
		{
			$route="guestbook";
			$path_contr = 'controllers/';
			$controller= $path_contr.$route.'.php';
			return $controller;
		}

		public function getView()
		{
			$route=$this->getRoute();
			$path_view = 'views/guestbook/';
			if($route=="index" || $route=="lists" || $route=="del"){
				$view = $path_view . 'lists.tpl';
			}
			else{
				$view = $path_view . $route . '.tpl';
			}
			return $view;
		}

		public function Run()
		{ 
			$controller=$this->getController();
			$cl=explode('.', $controller);
			$cl=$cl[0];
			$name_contr=str_replace("/", "_", $cl);
			$contr=new $name_contr;
			$route=$this->getRoute();
			if($route=="index" || $route=="lists"){
				$contr->lists();
			}
			if($route=="view"){
				$contr->view();
			}
			if($route=="form"){
				$contr->form();
			}
			$member=$contr->member;
			return $member;
		}
	}
?>