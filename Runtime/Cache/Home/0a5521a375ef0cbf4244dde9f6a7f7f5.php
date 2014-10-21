<?php if (!defined('THINK_PATH')) exit();?><!-- 头部 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/weiphp2.0/Public/Home/css/font-awesome.css?v=<?php echo SITE_VERSION;?>" media="all">
	<link rel="stylesheet" type="text/css" href="/weiphp2.0/Public/Home/css/mobile_module.css?v=<?php echo SITE_VERSION;?>" media="all">
    <script type="text/javascript" src="/weiphp2.0/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/weiphp2.0/Public/Home/js/prefixfree.min.js"></script>
    <script type="text/javascript" src="/weiphp2.0/Public/Home/js/m/dialog.js?v=<?php echo SITE_VERSION;?>"></script>
    <script type="text/javascript" src="/weiphp2.0/Public/Home/js/m/flipsnap.min.js"></script>
    <script type="text/javascript" src="/weiphp2.0/Public/Home/js/m/mobile_module.js?v=<?php echo SITE_VERSION;?>"></script>
    <script type="text/javascript" src="/weiphp2.0/Public/Home/js/admin_common.js?v=<?php echo SITE_VERSION;?>"></script>
	<title><?php echo empty($page_title) ? C('WEB_SITE_TITLE') : $page_title; ?></title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
    <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="pragma">
    <meta content="0" http-equiv="expires">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" href="<?php echo SITE_URL;?>/favicon.ico">
</head>	
<link rel="stylesheet" type="text/css" href="<?php echo ADDON_PUBLIC_PATH;?>/suggest.css" media="all">

<body>
	<div class="container body">
    	<img src="<?php echo ADDON_PUBLIC_PATH;?>/images/suggest_head.png" width="100%"/>
    	<div class="p_10"> 
            <!-- 表单 -->
            <form method="post">
              <!-- 基础文档模型 -->
              <div id="tab1" class="tab-pane">
                   <?php if($need_nickname): ?><div class="form-item cf">
                        <label class="item-label">姓名</label>
                        <div class="controls">
                          <input type="text" class="text input-medium" name="nickname" id="nickname" value="<?php echo ($user["nickname"]); ?>">
                         </div>
                   </div><?php endif; ?>
                   <?php if($need_mobile): ?><div class="form-item cf">
                        <label class="item-label">联系方式</label>
                        <div class="controls">
                          <input type="text" class="text input-large" name="mobile" id="mobile" value="<?php echo ($user["mobile"]); ?>">
                      	</div>
                   </div><?php endif; ?>
                   <div class="form-item cf">
                        <label class="item-label">内容</label>
                        <div class="controls">
                          <label class="textarea input-large"><textarea name="content" id="content"></textarea></label>
                        </div>
                   </div>                
                   <div class="form-item cf tb pt_10">
                		<button class="home_btn submit-btn mb_10 flex_1" id="submit" type="submit" target-form="form-horizontal">提  交</button>
                  </div>
          	</div>
            </form>
        </div>
        <p class="copyright">2014&copy;WeiPHP</p>
        <script type="text/javascript">
			$('.submit-btn').click(function(){
				//$.Dialog.loading();//loading等待调用  loading完成$.Dialog.close();关闭loading
				//$.Dialog.success();//成功调用 提示一秒后自动关闭
				if($('#truename').val()!=undefined && $('#truename').val()==""){
					$.Dialog.fail("请填写姓名！");//成功调用 提示一秒后自动关闭
					return false;
				}
				if($('#mobile').val()!=undefined && $('#mobile').val()==""){
					$.Dialog.fail("请填写联系方式！");//成功调用 提示一秒后自动关闭
					return false;
				}
				if($('#content').val()==""){
					$.Dialog.fail("请填写留言内容！");//成功调用 提示一秒后自动关闭
					return false;
				}
				})
		</script>
    </div>
</body>
</html>