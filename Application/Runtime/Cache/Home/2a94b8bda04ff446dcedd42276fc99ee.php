<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo ($lianxi["0"]["gongsi"]); ?></title>
	<meta name="description" content="<?php echo ($keyword["0"]["description"]); ?>"> 
	<meta name="keyword" content="<?php echo ($keyword["0"]["keyword"]); ?>"> 
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/kdindex/Public/css/index.css">
	
  </head>
  <body>	
  	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo U('/Home/Index/index');?>"><!-- 成都文扬国际货运有限公司 --><?php echo ($lianxi["0"]["gongsi"]); ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo U('/Home/Index/aboutus');?>">关于我们</a></li>
       <!--  <li><a href="<?php echo U('/Home/Index/callus');?>">联系我们</a></li> -->
        <li><a href="<?php echo U('/Home/Index/newlist');?>">新闻中心</a></li>
        
      </ul>
	  <ul class="nav navbar-nav navbar-right">
  		<li>
        <a><!-- 联系人：麻洪新 &nbsp &nbsp 联系电话：15202885218 -->
          联系人：<?php echo ($lianxi["0"]["lianxi"]); ?>&nbsp &nbsp 联系电话：<?php echo ($lianxi["0"]["usertel"]); ?>
        </a>
      </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  			 	<!-- 轮播图 -->
  			 	<div class="main">
  			 		 	
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <img src="/kdindex/Public/image/bg1.jpg" alt="...">
					      <div class="carousel-caption">
					      <h1><?php echo ($lianxi["0"]["gongsi"]); ?></h1>
					      </div>
					    </div>
					  </div>
					</div>
					<div class="text-center" id="formmain">
				 			<form class="form-inline" method="post" action="<?php echo U('/Home/Index/kdpost');?>">
				 			  <div class="form-group">
				 			  <label for="kdgs">请选择快递公司：</label>
				 			    <select name="com" id="com" class="form-control">
				 			    	<option value="0">选择快递公司</option>
				 			    	<option value="dhl">DHL</option>
				 			    	<option value="ups">UPS</option>
				 			    	<option value="fedexcn">FedEx</option>
				 			    	<option value="tnt">TNT</option>
				 			    </select>
				 			  </div>
				 			  <div class="form-group">
				 			    <label for="kdnum">运单号：</label>
				 			    <input type="text" class="form-control" id="kdnum" name="nu" placeholder="运单号">
				 			  </div>
				 			  <input type="submit" class="btn btn-default" value="查询">
				 			  <!-- <button type="remove" class="btn btn-default">重置</button> -->
				 			</form>
				 		</div>
				</div>
				<!-- 轮播图结束 -->
 	<div class="contarner">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="zhuying">
				<!-- 主营业务 -->
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title"><!-- 主营业务 --><?php echo ($yewu["0"]["title"]); ?></h3>
				  </div>
				  <div class="panel-body">
				  <!-- <dl>
				  	<dt>
				  		快递
				  	</dt>
				  	<dt>海运</dt>
				  	<dd>海运地区</dd>
				  	<dd>台湾、日本、新加坡、俄罗斯</dd>
				  </dl> -->
				  <pre><?php echo ($yewu["0"]["main"]); ?></pre>
				  </div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8" id="about">
				<!-- 公司介绍 -->
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title"><!-- 关于我们 --><?php echo ($about["0"]["title"]); ?></h3>
				  </div>
				  <div class="panel-body">
				 <!--    成都文扬国际货运有限公司成立于2008年，公司经营国际快递、空运、海运综合运输服务企业。代理DHL、UPS、FedEx、TNT的最低折扣。公司优势：台湾、日本、韩国、新加坡、马来西亚、迪拜专线。公司以客户为尊，量身设计运输方案，为企业节约时间和成本，诚信经营，服务周到。 
					当天取件，当天上网。价格实惠，方便快捷。可走大小货、粉末、液体、食品、电池、化妆品等等均可出口。只有你想不到的，没有我们做不到的，欢迎询价！  -->
					<pre><?php echo ($about["0"]["main"]); ?></pre>
				  </div>
				</div>
			</div>
		</div>
 		<div class="row">
 			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 				<!-- 新闻中心 -->
				<div class="panel panel-default" id="news">
				  <div class="panel-heading">
				    <h3 class="panel-title">新闻中心</h3>
				  </div>
				  <?php if(is_array($news)): foreach($news as $key=>$n): ?><div class="panel-body">
					    <a href="<?php echo U('/Home/Index/news',array('id'=>$n['id']));?>"><?php echo ($n["title"]); ?></a>					  
					  </div><?php endforeach; endif; ?>
				  <?php echo ($page); ?>
				  <!-- <div class="panel-body">
				    Panel content
				  </div>
				  <div class="panel-body">
				    Panel content
				  </div>
				<div class="panel-body">
				  Panel content
				</div> -->
				</div>
 			</div>
 		</div>


 	</div>
  	
<div id="footer" class="text-left">
	<address>
		<strong>合作单位</strong>
		
		<?php if(is_array($andorther)): foreach($andorther as $key=>$n): ?><a href="<?php echo ($n["link"]); ?>" target="_blank"><?php echo ($n["name"]); ?></a><?php endforeach; endif; ?>
		<p style="display:inline-block;color:rgb(34,34,34);float:right;">Coding by @毕_立于礼</p> 
	 </address>

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>