<?php 
namespace Admin\Controller;
use Think\Controller;
/**
 * 后台登录控制器
 */
Class LoginController extends Controller{
	//登录页面视图
	Public function index(){
		$this->display();

	}

	//登录验证
	Public function login(){
		if (!IS_POST) E('无效的页面');
		 $db=M('login');
		 $user=$db->where(array('username'=>I('username')))->find();
		 // if (!$user || $user['psw'] != I('psw','',md5)) {
		 if (!$user || $user['psw'] != I('psw')) {
		 	$this->error('账号或密码错误');
		 }
		 //更新最后一次登录时间及IP
		 $data=array(
		 	'id'=>$user['id'],
		 	'logintime' => time(),
		 	'loginip'=> get_client_ip()
		 	);
		$db->save($data);

		session('uid',$user['id']);
		session('username',$user['username']);
		session('logintime',date('Y-m-d H:i:s',$user['logintime']));
		session('loginip',$user['loginip']);
		$this->redirect('/Admin/Index/index');
	}
	//修改密码页面
	public function inspsw()
	{
		$db = M('login');
		$login = $db->select();
		$this->assign('login',$login);
		$this->display();
	}
	//修改密码表单
	public function inspswpost()
	{
		
		$psw = I('psw');
		$psw2 = I('psw2');

		if ($psw == $psw2) {
			$db = M('login');
			$id = I('id');
			$data = array(
				'id'=>$id,
				'psw' => $psw 
				);
			$result = $db->save($data);
			if ($result) {
				$this->success('修改成功',U('/Admin/Login/inspsw'));
			}else{
				$this->error('修改失败');
			}
		}else{
			$this->error('两次密码输入不一致');
		}
		
	}
	//登出
	Public function loginout(){
		session(null);
		$this->success('您已安全退出', U('/Admin/Login/index'));
		}
		

}
?>
