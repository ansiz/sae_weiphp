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
<body>
	<!-- 头部 -->
	<!-- 提示 -->
<div id="top-alert" class="top-alert-tips alert-error" style="display: none;">
  <a class="close" href="javascript:;"><b class="fa fa-times-circle"></b></a>
  <div class="alert-content">这是内容</div>
</div>
<!-- 导航条
================================================== -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
       <a class="brand" title="<?php echo C('WEB_SITE_TITLE');?>" href="<?php echo U('index/index');?>"><img height="45" src="<?php if(C('SYSTEM_LOGO')) { echo C('SYSTEM_LOGO'); }else{ ?>/weiphp2.0/Public/Home/images/top_logo.png?v=<?php echo SITE_VERSION;?> <?php } ?>" title="<?php echo C('WEB_SITE_TITLE');?>"/></a>
            
            
            <div class="top_nav">
                <?php if(is_login()): ?><ul class="nav" style="margin-right:0">
                    	<li class="dropdown">						     
                             <!-- 显示代码bug修改 -->
							 <?php if($mp_ids_list > 0): if(!empty($$member_public["public_name"])): ?><a href="<?php echo U('home/MemberPublic/lists');?>" class="dropdown-toggle login-nav" data-toggle="dropdown" title="公众号管理">公众号管理								
									  <b class="pl_5 fa fa-sort-down"></b></a><?php endif; ?>							
								  <?php if(empty($$member_public["public_name"])): ?><a href="#" class="dropdown-toggle login-nav" data-toggle="dropdown" title="<?php echo ($member_public["public_name"]); ?>"><?php echo (msubstr_local($member_public["public_name"],0,5,'utf-8')); ?><b class="pl_5 fa fa-sort-down"></b></a><?php endif; ?>		
							 <?php else: ?>
							     <a href="#" class="dropdown-toggle login-nav" data-toggle="dropdown" title="未设置公众号"><font color="red">未设置公众号</font>						
									  <b class="pl_5 fa fa-sort-down"></b></a><?php endif; ?>
                            <ul class="dropdown-menu" style="display:none">
							    <!-- 显示代码bug修改 	
								  <li><a href="<?php echo U('home/MemberPublic/lists');?>">公众号管理</a></li>	
								-->									
                                <?php if(is_array($member_public_list)): $i = 0; $__LIST__ = $member_public_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('home/MemberPublic/changPublic','id='.$vo['id']);?>" title="<?php echo ($vo["public_name"]); ?>"><?php echo (msubstr_local($vo["public_name"],0,5,'utf-8')); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </li>
                        <li class="dropdown admin_nav">
                            <a href="#" class="dropdown-toggle login-nav" data-toggle="dropdown" style=""><?php echo get_username();?> <b class="pl_5 fa fa-sort-down"></b></a>
                            <ul class="dropdown-menu" style="display:none">
                                <li><a href="<?php echo U('Admin/index/index');?>">后台管理</a></li>
                                <li><a href="<?php echo U('User/profile');?>">修改密码</a></li>
                                <li><a href="<?php echo U('User/logout');?>">退出</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php else: ?>
                    <ul class="nav" style="margin-right:0">
                    	<li style="padding-right:20px">你好!欢迎来到<?php echo C('WEB_SITE_TITLE');?></li>
                        <li>
                            <a href="<?php echo U('User/login');?>">登录</a>
                        </li>
                        <li>
                            <a href="<?php echo U('User/register');?>">注册</a>
                        </li>
                        <li>
                            <a href="<?php echo U('admin/index/index');?>" style="padding-right:0">后台入口</a>
                        </li>
                    </ul><?php endif; ?>
            </div>
        </div>
</div>
	<!-- /头部 -->
	
	<!-- 主体 -->
	
<?php if(!is_login()){ Cookie ( '__forward__', $_SERVER ['REQUEST_URI'] ); redirect(U('home/user/login')); } if(isset($_GET['sidenav'])){ $navClass[$_GET['sidenav']] = 'active'; }else{ $m = strtolower(MODULE_NAME); $c = strtolower(CONTROLLER_NAME); $a = strtolower(ACTION_NAME); $navClass[$m] = $navClass[$m.'_'.$c] = $navClass[$m.'_'.$c.'_'.$a] = 'active'; $ad = ucfirst ( parse_name ( $_REQUEST['_addons'], 1 ) ); $cl = ucfirst ( parse_name ( $_REQUEST['_controller'], 1 ) ); $navClass[$ad] = $navClass[$ad.'_'.$cl] = 'active'; } $addonList = D ( 'Addons' )->getWeixinList (false, array(), true); $categorys = M ( 'addon_category' )->order ( 'sort asc, id desc' )->select (); foreach($categorys as &$cate){ foreach($addonList as $k=>$a){ if($cate['id']==intval($a['cate_id'])){ $cate['addons'][] = $a; unset($addonList[$k]); } } } ?>
<div id="main-container" class="container">
	<div class="sidebar">
    	<ul class="sidenav">
          <li>
              <a class="sidenav_parent" href="javascript:;"><b class="ficon fa fa-plus-square"></b>帐号管理</a>
              <ul class="sidenav_sub" style="display:none">
                  <li class="<?php echo ($navClass['home_memberpublic']); ?>"> <a href="<?php echo U('Home/MemberPublic/lists');?>">公众号管理 </a> <b class="active_arrow"></b></li>
                  <li class="<?php echo ($navClass['home_index_main']); ?>"> <a href="<?php echo U('Home/Index/main');?>">插件管理 </a> <b class="active_arrow"></b></li>
                  <li class="<?php echo ($navClass['home_creditconfig_lists']); ?>"> <a href="<?php echo U('Home/CreditConfig/lists');?>">积分配置 </a> <b class="active_arrow"></b></li>
                  <li class="<?php echo ($navClass['home_keyword']); ?>"> <a href="<?php echo U('Home/Keyword/lists');?>">关键词维护 </a> <b class="active_arrow"></b></li>
                  <li class="<?php echo ($navClass['home_cascade']); ?>"> <a href="<?php echo U('Home/Cascade/lists');?>">级联数据管理 </a> <b class="active_arrow"></b></li>
             </ul>
          </li>
          
          <?php if(is_array($categorys)): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ca): $mod = ($i % 2 );++$i;?><li>
              <a class="sidenav_parent" href="javascript:;"><b class="ficon fa fa-plus-square"></b><?php echo ($ca["title"]); ?></a>
              <ul class="sidenav_sub" style="display:none">
                  <?php if(is_array($ca["addons"])): $i = 0; $__LIST__ = $ca["addons"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="<?php echo ($navClass[$vo[name]]); ?>"> <a href="<?php echo ($vo[addons_url]); ?>" title="<?php echo ($vo["description"]); ?>"> 
                      <i class="icon-chevron-right"><?php if(!empty($vo['icon'])) { ?> <img src="<?php echo ($vo["icon"]); ?>" /> <?php } ?> </i>
                      <?php echo ($vo["title"]); ?> </a><b class="active_arrow"></b></li><?php endforeach; endif; else: echo "" ;endif; ?>
             </ul>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
          
          <li>
              <a class="sidenav_parent" href="javascript:;"><b class="ficon fa fa-plus-square "></b>其它功能</a>
              <ul class="sidenav_sub" style="display:none">
              <?php if(is_array($addonList)): $i = 0; $__LIST__ = $addonList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="<?php echo ($navClass[$vo[name]]); ?>"> <a href="<?php echo ($vo[addons_url]); ?>" title="<?php echo ($vo["description"]); ?>"> 
              <i class="icon-chevron-right"><?php if(!empty($vo['icon'])) { ?> <img src="<?php echo ($vo["icon"]); ?>" /> <?php } ?> </i>
              <?php echo ($vo["title"]); ?> </a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
          </li>
        </ul>
  </div>
<div class="main_body">
	
<link href="<?php echo ADDON_PUBLIC_PATH;?>/leaflets.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet" type="text/css">
<div class="span9 page_message">
	<section id="contents">
      <ul class="tab-nav nav">
  <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="<?php echo ($vo["class"]); ?>"><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?><span class="arrow fa fa-sort-up"></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="sub-tab-nav">
      <?php if(!empty($sub_nav)): ?><ul class="sub_tab">
       <?php if(is_array($sub_nav)): $i = 0; $__LIST__ = $sub_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a class="<?php echo ($vo["class"]); ?>" href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?><span class="arrow fa fa-sort-up"></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
<!--          <li><a class="cur" href="<?php echo addons_url('WeiSite://footer/lists');?>">底部菜单配置</a></li>
          <li><a href="<?php echo addons_url('WeiSite://footer/template');?>">底部菜单模板</a></li>-->
      </ul><?php endif; ?>
      
</div> 
<?php if(!empty($normal_tips)): ?><p class="normal_tips"><b class="fa fa-info-circle"></b> <?php echo ($normal_tips); ?></p><?php endif; ?>
      <div class="tab-content"> 
        <form action="<?php echo U('config');?>" class="form-horizontal fl" method="post">
            <?php if(empty($custom_config)): if(is_array($data['config'])): foreach($data['config'] as $o_key=>$form): ?><div class="form-item cf">
                        <label class="item-label">
                            <?php echo ((isset($form["title"]) && ($form["title"] !== ""))?($form["title"]):''); ?>
                            <?php if(isset($form["tip"])): ?><span class="check-tips"><?php echo ($form["tip"]); ?></span><?php endif; ?>
                        </label>
                            <?php switch($form["type"]): case "text": ?><div class="controls">
                                    <input type="text" name="config[<?php echo ($o_key); ?>]" class="text input-large" value="<?php echo ($form["value"]); ?>">
                                </div><?php break;?>
                                <?php case "password": ?><div class="controls">
                                    <input type="password" name="config[<?php echo ($o_key); ?>]" class="text input-large" value="<?php echo ($form["value"]); ?>">
                                </div><?php break;?>
                                <?php case "hidden": ?><input type="hidden" name="config[<?php echo ($o_key); ?>]" value="<?php echo ($form["value"]); ?>"><?php break;?>
                                <?php case "radio": ?><div class="controls">
                                    <?php if(is_array($form["options"])): foreach($form["options"] as $opt_k=>$opt): ?><label class="radio">
                                            <input type="radio" name="config[<?php echo ($o_key); ?>]" value="<?php echo ($opt_k); ?>" <?php if(($form["value"]) == $opt_k): ?>checked<?php endif; ?>><?php echo ($opt); ?>
                                        </label><?php endforeach; endif; ?>
                                </div><?php break;?>
                                <?php case "checkbox": ?><div class="controls">
                                    <?php if(is_array($form["options"])): foreach($form["options"] as $opt_k=>$opt): ?><label class="checkbox">
                                            <?php is_null($form["value"]) && $form["value"] = array(); ?>
                                            <input type="checkbox" name="config[<?php echo ($o_key); ?>][]" value="<?php echo ($opt_k); ?>" <?php if(in_array(($opt_k), is_array($form["value"])?$form["value"]:explode(',',$form["value"]))): ?>checked<?php endif; ?>><?php echo ($opt); ?>
                                        </label><?php endforeach; endif; ?>
                                </div><?php break;?>
                                <?php case "select": ?><div class="controls">
                                    <select name="config[<?php echo ($o_key); ?>]">
                                        <?php if(is_array($form["options"])): foreach($form["options"] as $opt_k=>$opt): ?><option value="<?php echo ($opt_k); ?>" <?php if(($form["value"]) == $opt_k): ?>selected<?php endif; ?>><?php echo ($opt); ?></option><?php endforeach; endif; ?>
                                    </select>
                                </div><?php break;?>
                                <?php case "textarea": ?><div class="controls">
                                    <label class="textarea input-large">
                                        <textarea name="config[<?php echo ($o_key); ?>]"><?php echo ($form["value"]); ?></textarea>
                                    </label>
                                </div><?php break;?>
                                <?php case "picture": ?><div class="controls uploadrow">
                                    <input type="file" id="upload_picture_<?php echo ($o_key); ?>">
                                    <input type="hidden" name="config[<?php echo ($o_key); ?>]" id="cover_id_<?php echo ($o_key); ?>" value="<?php echo ($form['value']); ?>"/>
                                    <div class="upload-img-box">
                                      <?php if(!empty($form['value'])): ?><div class="upload-pre-item"><img src="/weiphp2.0<?php echo (get_cover($form['value'],'path')); ?>"/></div><?php endif; ?>
                                    </div>
                                  </div>
                                  <script type="text/javascript">
                                        //上传图片
                                        /* 初始化上传插件 */
                                        $("#upload_picture_<?php echo ($o_key); ?>").uploadify({
                                            "height"          : 120,
                                            "swf"             : "/weiphp2.0/Public/static/uploadify/uploadify.swf",
                                            "fileObjName"     : "download",
                                            "buttonText"      : "上传图片",
                                            "uploader"        : "<?php echo U('home/File/uploadPicture',array('session_id'=>session_id()));?>",
                                            "width"           : 120,
                                            'removeTimeout'	  : 1,
                                            'fileTypeExts'	  : '*.jpg; *.png; *.gif;',
                                            "onUploadSuccess" : uploadPicture<?php echo ($o_key); ?>
                                        });
                                        function uploadPicture<?php echo ($o_key); ?>(file, data){
                                            var data = $.parseJSON(data);
                                            var src = '';
                                            if(data.status){
                                                $("#cover_id_<?php echo ($o_key); ?>").val(data.id);
                                                src = data.url || '/weiphp2.0' + data.path;
                                                $("#leaflets .qrcode img").attr('src',src);
												$("#cover_id_<?php echo ($o_key); ?>").parent().find('.upload-img-box').html(
                                                '<div class="upload-pre-item"><img width="120" height="120" src="' + src + '"/></div>'
                                            );
                                            } else {
                                                updateAlert(data.info);
                                                setTimeout(function(){
                                                    $('#top-alert').find('button').click();
                                                    $(that).removeClass('disabled').prop('disabled',false);
                                                },1500);
                                            }
                                        }
                                        </script><?php break;?>                            
                                <?php case "group": ?><ul class="tab-nav nav">
                                        <?php if(is_array($form["options"])): $i = 0; $__LIST__ = $form["options"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><li data-tab="tab<?php echo ($i); ?>" <?php if(($i) == "1"): ?>class="current"<?php endif; ?>><a href="javascript:void(0);"><?php echo ($li["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                    <div class="tab-content">
                                    <?php if(is_array($form["options"])): $i = 0; $__LIST__ = $form["options"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?><div id="tab<?php echo ($i); ?>" class="tab-pane <?php if(($i) == "1"): ?>in<?php endif; ?> tab<?php echo ($i); ?>">
                                            <?php if(is_array($tab['options'])): foreach($tab['options'] as $o_tab_key=>$tab_form): ?><label class="item-label">
                                                <?php echo ((isset($tab_form["title"]) && ($tab_form["title"] !== ""))?($tab_form["title"]):''); ?>
                                                <?php if(isset($tab_form["tip"])): ?><span class="check-tips"><?php echo ($tab_form["tip"]); ?></span><?php endif; ?>
                                            </label>
                                            <div class="controls">
                                                <?php switch($tab_form["type"]): case "text": ?><input type="text" name="config[<?php echo ($o_tab_key); ?>]" class="text input-large" value="<?php echo ($tab_form["value"]); ?>"><?php break;?>
                                                    <?php case "password": ?><input type="password" name="config[<?php echo ($o_tab_key); ?>]" class="text input-large" value="<?php echo ($tab_form["value"]); ?>"><?php break;?>
                                                    <?php case "hidden": ?><input type="hidden" name="config[<?php echo ($o_tab_key); ?>]" value="<?php echo ($tab_form["value"]); ?>"><?php break;?>
                                                    <?php case "radio": if(is_array($tab_form["options"])): foreach($tab_form["options"] as $opt_k=>$opt): ?><label class="radio">
                                                                <input type="radio" name="config[<?php echo ($o_tab_key); ?>]" value="<?php echo ($opt_k); ?>" <?php if(($tab_form["value"]) == $opt_k): ?>checked<?php endif; ?>><?php echo ($opt); ?>
                                                            </label><?php endforeach; endif; break;?>
                                                    <?php case "checkbox": if(is_array($tab_form["options"])): foreach($tab_form["options"] as $opt_k=>$opt): ?><label class="checkbox">
                                                                <?php is_null($tab_form["value"]) && $tab_form["value"] = array(); ?>
                                                                <input type="checkbox" name="config[<?php echo ($o_tab_key); ?>][]" value="<?php echo ($opt_k); ?>" <?php if(in_array(($opt_k), is_array($tab_form["value"])?$tab_form["value"]:explode(',',$tab_form["value"]))): ?>checked<?php endif; ?>><?php echo ($opt); ?>
                                                            </label><?php endforeach; endif; break;?>
                                                    <?php case "select": ?><select name="config[<?php echo ($o_tab_key); ?>]">
                                                            <?php if(is_array($tab_form["options"])): foreach($tab_form["options"] as $opt_k=>$opt): ?><option value="<?php echo ($opt_k); ?>" <?php if(($tab_form["value"]) == $opt_k): ?>selected<?php endif; ?>><?php echo ($opt); ?></option><?php endforeach; endif; ?>
                                                        </select><?php break;?>
                                                    <?php case "textarea": ?><label class="textarea input-large">
                                                            <textarea name="config[<?php echo ($o_tab_key); ?>]"><?php echo ($tab_form["value"]); ?></textarea>
                                                        </label><?php break; endswitch;?>
                                                </div><?php endforeach; endif; ?>
                                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div><?php break; endswitch;?>
    
                        </div><?php endforeach; endif; ?>
            <?php else: ?>
                <?php if(isset($custom_config)): echo ($custom_config); endif; endif; ?>
            <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" readonly>
            <button type="submit" class="btn submit-btn ajax-post" target-form="form-horizontal">确 定</button><br/><br/>
            <a href="<?php echo U('home/Index/leaflets', array('token'=>get_token()));?>" class="btn submit-btn btn-yellow" target="_blank">查看推广页</a>
            
        </form>
        <!-- 右侧 -->
        <div class="preview fr">
            <div id="leaflets" style="width:430px;">
                <div class="container body">
                    <h1><?php echo ($config["title"]); ?></h1>
                    <div class="qrcode">
                        <img src="<?php echo ($config["img"]); ?>"/>
                    </div>
                    <div class="qr_tips">请使用微信扫描二维码关注此公众号</div>
                    <div class="desc">
                        <?php echo ($config["info"]); ?>
                    </div>
                    <p class="copyright"><?php echo ($config["copyright"]); ?></p>
                </div>
                
            </div>
        </div>
      </div>
    </section>
 </div>

</div>
</div>
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

<script type="text/javascript" charset="utf-8">
	//导航高亮
    $('.side-sub-menu').find('a[href="<?php echo U('Addons/index');?>"]').closest('li').addClass('current');
    if($('ul.tab-nav').length){
    	//当有tab时，返回按钮不显示
    	$('.btn-return').hide();
    }
	$(function(){
		//支持tab
		showTab();
	})
	$('input[name="config[copyright]"]').keyup(function(){
		$('#leaflets .copyright').html($(this).val());
		});
	$('textarea[name="config[info]"]').keyup(function(){
		$('#leaflets .desc').html($(this).val());
		});
	$('input[name="config[title]"]').keyup(function(){
		$('#leaflets h1').html($(this).val());
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