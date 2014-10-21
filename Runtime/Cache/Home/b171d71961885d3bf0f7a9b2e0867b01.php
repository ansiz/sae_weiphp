<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<meta content="遵循Apache2开源协议,免费提供使用,微信功能插件化开发,多公众号管理,配置简单" name="keywords"/>
<meta content="weiphp 简洁强大开源的微信公众平台开发框架微信功能插件化开发,多公众号管理,配置简单" name="description"/>
<link rel="shortcut icon" href="<?php echo SITE_URL;?>/favicon.ico">
<title><?php echo empty($page_title) ? C('WEB_SITE_TITLE') : $page_title; ?></title>
<link href="/weiphp2.0/Public/static/font-awesome/css/font-awesome.min.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet">
<link href="/weiphp2.0/Public/Home/css/base.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet">
<link href="/weiphp2.0/Public/Home/css/module.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet">
<link href="/weiphp2.0/Public/Home/css/weiphp.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/weiphp2.0/Public/static/bootstrap/js/html5shiv.js?v=<?php echo SITE_VERSION;?>"></script>
<![endif]-->

<!--[if lt IE 9]>
<script type="text/javascript" src="/weiphp2.0/Public/static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!---蓝锂002适配修改 QQ:125682133--->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="/weiphp2.0/Public/static/jquery-2.0.3.min.js"></script>
<!--<![endif]-->
<script type="text/javascript" src="/weiphp2.0/Public/static/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/weiphp2.0/Public/static/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="/weiphp2.0/Public/Home/js/dialog.js?v=<?php echo SITE_VERSION;?>"></script>
<script type="text/javascript" src="/weiphp2.0/Public/Home/js/admin_common.js?v=<?php echo SITE_VERSION;?>"></script>
<script type="text/javascript" src="/weiphp2.0/Public/Home/js/admin_image.js?v=<?php echo SITE_VERSION;?>"></script>
<script type="text/javascript">
var  STATIC = "/weiphp2.0/Public/static";
var  ROOT = "/weiphp2.0";
</script>
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

</head>
<body id="login_body" <?php if(C('LOGIN_BACKGROUP')) { ?> style="background:#fff url('<?php echo C('LOGIN_BACKGROUP');?>') repeat center center" <?php } ?> >
	<!-- 主体 -->
    <?php $m = strtolower(MODULE_NAME); $c = strtolower(CONTROLLER_NAME); $a = strtolower(ACTION_NAME); $ad = ucfirst ( parse_name ( $_REQUEST['_addons'], 1 ) ); $navClass[$ad] = 'active'; $navClass[$m.'_'.$c.'_'.$a] = 'active'; $addonList = D ( 'Addons' )->getWeixinList (false, array(), true); ?>
	
<div class="login_top_btn">
      <?php if(!C('SYSTEM_CLOSE_REGISTER')) { ?><a class="btn" href="<?php echo U('User/register');?>">新用户注册</a> <?php } ?>
      <?php if(!C('SYSTEM_CLOSE_ADMIN')) { ?><a class="btn" href="<?php echo U('admin/index/index');?>" target="_blank">后台管理</a> <?php } ?>
      <?php if(!C('SYSTEM_CLOSE_WIKI')) { ?><a class="btn" href="http://www.weiphp.cn/wiki" target="_blank">二次开发教程</a> <?php } ?>
      <?php if(!C('SYSTEM_CLOSE_BBS')) { ?><a class="btn" href="http://bbs.weiphp.cn" target="_blank">官方论坛</a> <?php } ?>
</div>
<section class="login_box">
	<form class="login-form" action="/weiphp2.0/index.php?s=/home/user/login.html" method="post">
    	<a href="<?php echo SITE_URL;?>">
        <?php if(!C('SYSTEM_LOGO')) { ?>
       		<div class="logo_icon"></div>
       		<div class="logo_text"><span class="beta"></span></div>
            
            <?php } else { ?>
            <img src="<?php echo C('SYSTEM_LOGO');?>" />
            <?php } ?>
    	</a>
      	<div class="form_title">
        	简洁强大的微信公众平台开发框架
      	</div>
          <div class="form_body">
          		<div class="input_panel">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">用户名</label>
                    <div class="controls">
                      <span class="fa fa-user"></span>
                      <input type="text" id="inputEmail" class="span3" placeholder="请输入用户名"  ajaxurl="/member/checkUserNameUnique.html" errormsg="请填写1-16位用户名" nullmsg="请填写用户名" datatype="*1-16" value="" name="username">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputPassword">密码</label>
                    <div class="controls">
                      <span class="fa fa-key"></span>
                      <input type="password" id="inputPassword"  class="span3" placeholder="请输入密码"  errormsg="密码为6-20位" nullmsg="请填写密码" datatype="*6-20" name="password">
                    </div>
                  </div>
                  <?php if(C('WEB_SITE_VERIFY')) { ?>
                  <div class="control-group">
                    <label class="control-label" for="inputPassword">验证码</label>
                    <div class="controls">
                       <span class="fa fa-keyboard-o"></span>
                      <input type="text" id="verify" class="span3" placeholder="请输入验证码"  errormsg="请填写5位验证码" nullmsg="请填写验证码" datatype="*5-5" name="verify">
                      <a href="javascript:;" class="reloadverify_a">换一张?</a>
                    </div>
                  </div>
                  
                  <?php } ?>
               </div>
              <?php if(C('WEB_SITE_VERIFY')) { ?>
              
              <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <img class="verifyimg reloadverify" alt="点击切换" src="<?php echo U('verify');?>" style="cursor:pointer;">
                </div>
              </div>
              <?php } ?>
              <div class="controls Validform_checktip text-warning"></div>
              <div class="control-group">
                <div class="controls">
				 <input type="checkbox" id="checkbox" class="regular-checkbox"/><label for="checkbox"></label>
				  自动登录
                </div>
                <div class="controls">
                  <button type="submit" class="btn btn-large">登 录</button>
                </div>
              </div>
          </div>
       </form>
</section>

	<!-- /主体 -->

	<!-- 底部 -->
	
    <!-- 底部
    ================================================== -->
<footer class="footer">
      <div class="container">
          <p>
          	<a href="<?php echo U('Home/Index/about');?>" target="_blank">关于我们</a>  |  
            <a href="<?php echo U('home/index/help');?>" target="_blank">使用说明</a>   |   
            本系统由<a href="http://www.weiphp.cn" target="_blank">weiphp</a>强力驱动
            </p>
      </div>
</footer>

<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/weiphp2.0", //当前网站地址
		"APP"    : "/weiphp2.0/index.php?s=", //当前项目地址
		"PUBLIC" : "/weiphp2.0/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>

	<script type="text/javascript">       
    	$(document)		   
	    	.ajaxStart(function(){
	    		$("button:submit").addClass("log-in").attr("disabled", true);
	    	})
	    	.ajaxStop(function(){
	    		$("button:submit").removeClass("log-in").attr("disabled", false);
	    	});


    	$("form").submit(function(){
    		var self = $(this);
    		$.post(self.attr("action"), self.serialize(), success, "json");
    		return false;

    		function success(data){
    			if(data.status){
    				window.location.href = data.url;
    			} else {
    				self.find(".Validform_checktip").text(data.info);
    				//刷新验证码
    				$(".reloadverify").click();
    			}
    		}
    	});

		$(function(){
			var verifyimg = $(".verifyimg").attr("src");
            $(".reloadverify,.reloadverify_a").click(function(){
                if( verifyimg.indexOf('?')>0){
                    $(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
                }else{
                    $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
                }
            });
			$('input').focus(function(){
				$(this).parent().find('.fa').css('color','#1dbd03');
				})
			$('input').blur(function(){
				$(this).parent().find('.fa').css('color','#aaa');
				})
		});
	</script>
 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>

	<!-- /底部 -->
</body>
</html>