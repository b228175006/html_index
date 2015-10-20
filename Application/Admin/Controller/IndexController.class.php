<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
   //首页
   public function index(){
      $db = M('keyword');
      $result = $db->select();
      $this->assign('keyword',$result);
   	$this->display();
   }
   //首页内容修改
   public function indexpost()
   {
      if(!IS_POST) E('无效的页面');
                   $id = I('id');
                   $description = I('description');
                   $keyword = I('keyword');
                   $db = M('keyword');
                   $data = array(
                      'description' => $description,
                      'keyword' => $keyword,
                      );

                   $result = $db->where("id = $id")->data($data)->save();
                   if ($result) { 
                      $this->success('修改成功',U('/Admin/Index/index'));
                   }else{
                      $this->error('修改失败');
                   }
   }
   //关于我们
   public function aboutus(){
      $db = M('about');
      $result = $db->select();
      $this->assign('about',$result);
   	$this->display();
   }
   //关于我们修改表单
   public function aboutuspost()
   {
      if(!IS_POST) E('无效的页面');
             $id = I('id');
             $title = I('title');
             $main = I('main');
             $db = M('about');
             $data = array(
                'title' => $title,
                'main' => $main,
                );

             $result = $db->where("id = $id")->data($data)->save();
             if ($result) { 
                $this->success('修改成功',U('/Admin/Index/aboutus'));
             }else{
                $this->error('修改失败');
             }
   }
   //联系我们
   public function callus(){
         $db = M('lianxi');
         $result = $db->select();
         $this->assign('call',$result);
         $this->display();
   }
   //联系我们修改表单
   public function calluspost()
   {
      if(!IS_POST) E('无效的页面');
             $id = I('id');
             $gongsi = I('gongsi');
             $lianxi = I('lianxi');
             $usertel = I('usertel');
             $db = M('lianxi');
             $data = array(
                'gongsi' => $gongsi,
                'lianxi' => $lianxi,
                'usertel' => $usertel
                );

             $result = $db->where("id = $id")->data($data)->save();
             if ($result) { 
                $this->success('修改成功',U('/Admin/Index/callus'));
             }else{
                $this->error('修改失败');
             }
   }
   //新闻中心
   public function news(){
     
      $db = M('news'); 
      $count = $db->count();
      $page = new \Lib\Page($count);
      
      $limit = $page->firstRow.','.$page->listRows;
      $result = $db->order('id DESC')->limit($limit)->select();
      $this->page = $page->show();
     
      $this->assign('news',$result);
   	$this->display();
   }
   //新增新闻页面
   public function addnews()
   {
      $this->display();
   }
   //新增新闻表单
   public function addnewspost()
   {
     if(!IS_POST) E('无效的页面');
      $title = I('title');
      $main = I('main');
   
      $db = M('news');
      $data = array(
         'title' => $title,
         'main' => $main,
         'time' => time()
         );
      $result = $db->data($data)->add();
      if ($result) { 
         $this->success('添加成功',U('/Admin/Index/news'));
      }else{
         $this->error('添加失败');
      }
   }
   //修改新闻页面
   public function insnews()
     {
         $db = M('news');
         $id = I('id');
         $result = $db->where("id = $id")->select();
         $this->assign('news',$result);
         $this->display();
     }  
   //修改新闻表单
   public function insnewspost()
   {
      if(!IS_POST) E('无效的页面');
       $id = I('id');
       $title = I('title');
       $main = I('main');
       $db = M('news');
       $data = array(
          'title' => $title,
          'main' => $main,
          );

       $result = $db->where("id = $id")->data($data)->save();
       if ($result) { 
          $this->success('修改成功',U('/Admin/Index/news'));
       }else{
          $this->error('修改失败');
       }
   }
   //删除新闻
   public function delnews()
     {
        $id = I('id');
        $db = M('news');
        $result = $db->where("id = $id")->delete();
        if ($result) { 
           $this->success('删除成功',U('/Admin/Index/news'));
        }else{
           $this->error('删除失败');
        }
     } 
   //主营业务
   public function zhuying(){
      $db = M('yewu');
            $result = $db->select();
            $this->assign('yewu',$result);
            $this->display();
   }
   //主营业务修改
   public function zhuyingpost()
   {
      if(!IS_POST) E('无效的页面');
                   $id = I('id');
                   $title = I('title');
                   $main = I('main');
                   $db = M('yewu');
                   $data = array(
                      'title' => $title,
                      'main' => $main,
                      );

                   $result = $db->where("id = $id")->data($data)->save();
                   if ($result) { 
                      $this->success('修改成功',U('/Admin/Index/zhuying'));
                   }else{
                      $this->error('修改失败');
                   }
   }
   //合作单位
   public function hezuo(){
      $db = M('andorther');
            $result = $db->order('paixu DESC')->select();
            $this->assign('andorther',$result);
            $this->display();
   }
   //新增合作单位
   public function addhezuo()
   {
      $this->display();
   }
   //新增合作表单
   public function addhezuopost()
   {
     if(!IS_POST) E('无效的页面');
      $name = I('name');
      $link = I('link');
      $paixu = I('paixu');
      $db = M('andorther');
      $data = array(
         'name' => $name,
         'link' => $link,
         'paixu'=> $paixu
         );
      $result = $db->data($data)->add();
      if ($result) { 
         $this->success('添加成功',U('/Admin/Index/hezuo'));
      }else{
         $this->error('添加失败');
      }
   }
   //修改合作页面
   public function inshezuo()
     {
         $db = M('andorther');
         $id = I('id');
         $result = $db->where("id = $id")->select();
         $this->assign('hezuo',$result);
         $this->display();
     }  
   //修改合作表单
   public function inshezuopost()
   {
      if(!IS_POST) E('无效的页面');
       $id = I('id');
       $name = I('name');
       $link = I('link');
       $paixu = I('paixu');
       $db = M('andorther');
       $data = array(
          'name' => $name,
          'link' => $link,
          'paixu'=> $paixu
          );

       $result = $db->where("id = $id")->data($data)->save();
       if ($result) { 
          $this->success('修改成功',U('/Admin/Index/hezuo'));
       }else{
          $this->error('修改失败');
       }
   }
   //删除合作
   public function delhezuo()
     {
        $id = I('id');
        $db = M('andorther');
        $result = $db->where("id = $id")->delete();
        if ($result) { 
           $this->success('删除成功',U('/Admin/Index/hezuo'));
        }else{
           $this->error('删除失败');
        }
     } 
}