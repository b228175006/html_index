<?php 
namespace Admin\Controller;
use Think\Controller;
/**
 * 快递管理控制器
 */
class KdindexController extends CommonController {
	//快递管理首页
	public function kdindex(){
		$db = M('num');
		$result = $db->select();
		$this->assign('num',$result);
		$this->display();
	}
	//批量添加
	public function piliang(){
		$id = I('id');
		$num = I('num');
		$message = I('message');
		$status = I('message');
		$db = M('wuliu');
		$data = array(
			'message' => $message,
			'status' => $status,
			'time' => time()
			);
		$i = 0;
		foreach ($num as $v) {
			$data['num'] = $v;
			$result = $db->data($data)->add();
			$i++;
		}
		if ($result) {
			$this->success("成功添加{$i}条信息",U('/Admin/Kdindex/kdindex'));
		}else{
			$this->error('添加失败');
		}

	}
	//新增快递
	public function addkd(){
		$this->display();
	}
	//新增快递表单
	public function addkdpost(){
		$num = I('num');
		$kdgs = I('kdgs');
		$fuser = I('fuser');
		$suser = I('suser');
		$fadd = I('fadd');
		$sadd = I('sadd');
		$ftel = I('ftel');
		$stel = I('stel');
		$data = array(
			'num'=> $num,
			'kdgs'=> $kdgs,
			'fuser'=> $fuser,
			'suser'=> $suser,
			'fadd'=> $fadd,
			'sadd'=> $sadd,
			'ftel'=> $ftel,
			'stel' => $stel,
			'time'=>time()
			);
		$db = M('num');
		$result = $db->where("num = $num")->count();
		if ($result>=1) {
			$this->error('重复的快递单号');
		}else{
			$result2 = $db->data($data)->add();
			if ($result2) {
				$this->success('添加成功',U('/Admin/Kdindex/addkd'));
			}else{
				$this->error('添加失败');
			}
		}
	}
	//修改快递
	public function inskd(){
		$nu = I('num');
		$id = I('id');
		$db = M('num');
		$num = $db->where("id = $id")->select();//快递信息
		//物流详情
		$db2 = M('wuliu');
		$wuliu = $db2->where("num = $nu")->select();

		$this->assign('wuliu',$wuliu);
		$this->assign('num',$num);
		$this->display();
	}
	//修改快递表单
	public function inskdpost(){
		$id = I('id');
		$num = I('num');
		$kdgs = I('kdgs');
		$fuser = I('fuser');
		$suser = I('suser');
		$fadd = I('fadd');
		$sadd = I('sadd');
		$ftel = I('ftel');
		$stel = I('stel');
		$data = array(
			'num'=> $num,
			'kdgs'=> $kdgs,
			'fuser'=> $fuser,
			'suser'=> $suser,
			'fadd'=> $fadd,
			'sadd'=> $sadd,
			'ftel'=> $ftel,
			'stel' => $stel,
			'time'=>time()
			);
		$db = M('num');
		$result = $db->where("num = $num and id != $id")->count();
		if ($result>=1) {
			$this->error('重复的快递单号');
		}else{
			$result2 = $db->where("id = $id")->data($data)->save();
			if ($result2) {
				$this->success('修改成功',U('/Admin/Kdindex/inskd',array('id'=>$id,'num'=>$num)));
			}else{
				$this->error('修改失败');
			}
		}
	}
	public function delkd(){
		$id = I('id');
		$num = I('num');
		$db = M('wuliu');
		$result = $db->where("num = $num")->delete();
        $db2 = M('num');
        $result2 = $db2->where("id = $id")->delete();
        if ($result2) { 
           $this->success('删除成功',U('/Admin/Kdindex/kdindex'));
        }else{
           $this->error('删除失败');
        }
	}
	//新增物流信息
	public function addwuliu(){
		$nid = I('nid');
		$num = I('num');
		$message = I('message');
		$status = I('status');

		$data = array(
			'num' => $num,
			'message' => $message,
			'status' => $status,
			'time' => time()
			);
		$db = M('wuliu');
		$result = $db->data($data)->add();
		if ($result) { 
           $this->success('添加成功',U('/Admin/Kdindex/inskd',array('id'=>$nid,'num'=>$num)));
        }else{
           $this->error('添加失败');
        }
	}
	//删除物流信息
	public function delwuliu(){
		$num = I('num');
		$page = I('page');
		$id = I('id');
        $db = M('wuliu');
        $result = $db->where("id = $id")->delete();
        if ($result) { 
           $this->success('删除成功',U('/Admin/Kdindex/inskd',array('id'=>$page,'num'=>$num)));
        }else{
           $this->error('删除失败');
        }
	}
}
 ?>