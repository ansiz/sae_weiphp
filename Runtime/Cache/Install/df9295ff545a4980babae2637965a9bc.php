<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WeiPHP 安装</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="/weiphp2.0/Public/static/bootstrap/css/bootstrap.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet">
        <link href="/weiphp2.0/Public/static/bootstrap/css/bootstrap-responsive.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet">
        <link href="/weiphp2.0/Public/Install/css/install.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js?v=<?php echo SITE_VERSION;?>"></script>
        <![endif]-->
        <script src="/weiphp2.0/Public/static/jquery-1.10.2.min.js"></script>
        <script src="/weiphp2.0/Public/static/bootstrap/js/bootstrap.js?v=<?php echo SITE_VERSION;?>"></script>
    </head>

    <body data-spy="scroll" data-target=".bs-docs-sidebar">
        <!-- Navbar
        ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" target="_blank" href="http://www.onethink.cn">OneThink</a>
                    <div class="nav-collapse collapse">
                    	<ul id="step" class="nav">
                    		
    <li class="active"><a href="javascript:;">安装协议</a></li>
    <li class="active"><a href="javascript:;">环境检测</a></li>
    <li class="active"><a href="javascript:;">创建数据库</a></li>
    <li class="active"><a href="javascript:;">安装</a></li>
    <li><a href="javascript:;">完成</a></li>

                    	</ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron masthead">
            <div class="container">
                
    <h1>安装</h1>
    <div id="show-list" class="install-database">
    </div>
    <script type="text/javascript">
        var list   = document.getElementById('show-list');
        function showmsg(msg, classname){
            var li = document.createElement('p'); 
            li.innerHTML = msg;
            classname && li.setAttribute('class', classname);
            list.appendChild(li);
            document.scrollTop += 30;
        }
    </script>

            </div>
        </div>


        <!-- Footer
        ================================================== -->
        <footer class="footer navbar-fixed-bottom">
            <div class="container">
                <div>
                	
    <button class="btn btn-warning btn-large disabled">正在安装，请稍后...</button>

                </div>
            </div>
        </footer>
    </body>
</html>