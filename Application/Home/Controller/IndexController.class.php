<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
   //首页
   public function index(){
      $db = M('about');
      $db1 = M('andorther');
      $db2 = M('lianxi');
      $db3 = M('news');
      $db4 = M('yewu');
      $db5 = M('keyword');

      $about = $db->select();
      $andorther = $db1->order('paixu DESC')->select();
      $lianxi = $db2->select();
      
      $yewu = $db4->select();
      $keyword = $db5->select();

      $count = $db3->count();
      $page = new \Lib\Page($count);
      $limit = $page->firstRow.','.$page->listRows;
      $news = $db3->order('id DESC')->limit($limit)->select();
      $this->page = $page->show();

      $this->assign('andorther',$andorther);
      $this->assign('lianxi',$lianxi);
      $this->assign('about',$about);
      $this->assign('yewu',$yewu);
      $this->assign('news',$news);
      $this->assign('keyword',$keyword);
   	$this->display();
   }
   //快递查询表单
   public function kdpost(){
         $com = I('com');
         $nu = I('nu','','trim');
         if ($com == '0') {
            $this->error('请选择快递公司');
         }else if ($nu == '') {
            $this->error('填写快递单号');
         }
            $where = array(
               'num' => $nu,
               'kdgs' => $com
               );
            $dbk = M('wuliu');
            $wuliu = $dbk->where("num = $nu")->order('time DESC')->select();
            $dbn = M('num');
            $num = $dbn->where($where)->select();
            $this->assign('num',$num);
            $this->assign('wuliu',$wuliu);
         $com2 =  strtoupper($com);
         $this->assign('com',$com2);

         $db5 = M('keyword');
          $keyword = $db5->select();
           $this->assign('keyword',$keyword);
         $db = M('about');
         $db1 = M('andorther');
         $db2 = M('lianxi');
         $db3 = M('news');
         $db4 = M('yewu');

         $about = $db->select();
         $andorther = $db1->select();
         $lianxi = $db2->select();
         $news = $db3->select();
         $yewu = $db4->select();

         $this->assign('andorther',$andorther);
         $this->assign('lianxi',$lianxi);
         $this->assign('about',$about);
         $this->assign('yewu',$yewu);
         $this->assign('news',$news);
         $this->display();
   	
   }
   //关于我们
   public function aboutus(){
   	$db = M('about');
      $db1 = M('andorther');
      $db2 = M('lianxi');
      $db3 = M('news');
      $db4 = M('yewu');

      $db5 = M('keyword');
       $keyword = $db5->select();
        $this->assign('keyword',$keyword);
      $about = $db->select();
      $andorther = $db1->select();
      $lianxi = $db2->select();
      $news = $db3->select();
      $yewu = $db4->select();

      $this->assign('andorther',$andorther);
      $this->assign('lianxi',$lianxi);
      $this->assign('about',$about);
      $this->assign('yewu',$yewu);
      $this->assign('news',$news);
      $this->display();
   }
   //联系我们
   public function callus(){
   	$db = M('about');
      $db1 = M('andorther');
      $db2 = M('lianxi');
      $db3 = M('news');
      $db4 = M('yewu');
      $db5 = M('keyword');
       $keyword = $db5->select();
        $this->assign('keyword',$keyword);
      $about = $db->select();
      $andorther = $db1->select();
      $lianxi = $db2->select();
      $news = $db3->select();
      $yewu = $db4->select();

      $this->assign('andorther',$andorther);
      $this->assign('lianxi',$lianxi);
      $this->assign('about',$about);
      $this->assign('yewu',$yewu);
      $this->assign('news',$news);
      $this->display();
   }
   //新闻列表
   public function newlist(){
      $db = M('about');
      $db1 = M('andorther');
      $db2 = M('lianxi');
      $db3 = M('news');
      $db4 = M('yewu');
      $db5 = M('keyword');
       $keyword = $db5->select();
        $this->assign('keyword',$keyword);

      $count = $db3->count();
      $page = new \Lib\Page($count);
      $limit = $page->firstRow.','.$page->listRows;
      $news = $db3->order('id DESC')->limit($limit)->select();
      $this->page = $page->show();

      $about = $db->select();
      $andorther = $db1->select();
      $lianxi = $db2->select();
      // $news = $db3->select();
      $yewu = $db4->select();

      $this->assign('andorther',$andorther);
      $this->assign('lianxi',$lianxi);
      $this->assign('about',$about);
      $this->assign('yewu',$yewu);
      $this->assign('news',$news);
      $this->display();
   }
   //新闻中心
   public function news(){
         $id = I('id');
         $where = array('id'=>$id);

         $db = M('about');
         $db1 = M('andorther');
         $db2 = M('lianxi');
         $db3 = M('news');
         $db4 = M('yewu');
         $db5 = M('keyword');
          $keyword = $db5->select();
           $this->assign('keyword',$keyword);
         $about = $db->select();
         $andorther = $db1->select();
         $lianxi = $db2->select();
         $news = $db3->where($where)->select();
         $yewu = $db4->select();
         // print_r($news);
         // die;
         $this->assign('andorther',$andorther);
         $this->assign('lianxi',$lianxi);
         $this->assign('about',$about);
         $this->assign('yewu',$yewu);
         $this->assign('news',$news);

         $this->display();
   }
}