<?php
namespace app\controllers;

class Test extends \app\core\Controller{

	function index(){
		$this->view('Test/AjaxForm');
	}

	function feedback(){
		foreach ($_GET as $key=>$value){
			echo "GET: $key => $value";
		}
		foreach ($_POST as $key=>$value){
			echo "GET: $key => $value";
		}
	}
}