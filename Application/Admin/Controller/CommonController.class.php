<?php 
namespace Admin\Controller;
use Think\Controller;
Class CommonController extends Controller{
	Public function _initialize(){
		if (!isset($_SESSION['uid'])) {
			$this->redirect('/Admin/Login/index');
		}
	}
}
 ?>