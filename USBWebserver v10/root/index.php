<?php
	session_start();
	if(empty($_SESSION['user']))
	{
		header('Location:page/login.html');
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>layuimini-iframe版 v2 - 基於Layui的後臺管理系統前端範本</title>
    <meta name="keywords" content="layuimini,layui,layui範本,layui後臺,後臺範本,admin,admin範本,layui mini">
    <meta name="description" content="layuimini基於layui的羽量級前端後臺管理框架，最簡潔、易用的後臺框架範本，面向所有層次的前後端程式,只需提供一個介面就直接初始化整個框架，無需複雜操作。">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="lib/layui-v2.6.3/css/layui.css" media="all">
    <link rel="stylesheet" href="css/layuimini.css?v=2.0.4.2" media="all">
    <link rel="stylesheet" href="css/themes/default.css" media="all">
    <link rel="stylesheet" href="lib/font-awesome-4.7.0/css/font-awesome.min.css" media="all">
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style id="layuimini-bg-color">
    </style>
</head>
<body class="layui-layout-body layuimini-all">
<div class="layui-layout layui-layout-admin">

    <div class="layui-header header">
        <div class="layui-logo layuimini-logo"></div>

        <div class="layuimini-header-content">
            <a>
                <div class="layuimini-tool"><i title="展開" class="fa fa-outdent" data-side-fold="1"></i></div>
            </a>

            <!--電腦端頭部菜單-->
            <ul class="layui-nav layui-layout-left layuimini-header-menu layuimini-menu-header-pc layuimini-pc-show">
            </ul>

            <!--手機端頭部菜單-->
            <ul class="layui-nav layui-layout-left layuimini-header-menu layuimini-mobile-show">
                <li class="layui-nav-item">
                    <a href="javascript:;"><i class="fa fa-list-ul"></i> 選擇模組</a>
                    <dl class="layui-nav-child layuimini-menu-header-mobile">
                    </dl>
                </li>
            </ul>

            <ul class="layui-nav layui-layout-right">

                <li class="layui-nav-item" lay-unselect>
                    <a href="javascript:;" data-refresh="刷新"><i class="fa fa-refresh"></i></a>
                </li>
                <li class="layui-nav-item" lay-unselect>
                    <a href="javascript:;" data-clear="清理" class="layuimini-clear"><i class="fa fa-trash-o"></i></a>
                </li>
                <li class="layui-nav-item mobile layui-hide-xs" lay-unselect>
                    <a href="javascript:;" data-check-screen="full"><i class="fa fa-arrows-alt"></i></a>
                </li>
                <li class="layui-nav-item layuimini-setting">
                    <a href="javascript:;"><?php $UserName = $_SESSION['user']; echo $UserName; ?></a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" layuimini-content-href="page/user-setting.html" data-title="基本資料" data-icon="fa fa-gears">基本資料<span class="layui-badge-dot"></span></a>
                        </dd>
                        <dd>
                            <a href="javascript:;" layuimini-content-href="page/user-password.html" data-title="修改密碼" data-icon="fa fa-gears">修改密碼</a>
                        </dd>
                        <dd>
                            <hr>
                        </dd>
                        <dd>
                            <a href="javascript:;" class="login-out">退出登錄</a>
                        </dd>
                    </dl>
                </li>
                <li class="layui-nav-item layuimini-select-bgcolor" lay-unselect>
                    <a href="javascript:;" data-bgcolor="配色方案"><i class="fa fa-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
    </div>

    <!--無限極左側菜單-->
    <div class="layui-side layui-bg-black layuimini-menu-left">
    </div>

    <!--初始化載入層-->
    <div class="layuimini-loader">
        <div class="layuimini-loader-inner"></div>
    </div>

    <!--手機端遮罩層-->
    <div class="layuimini-make"></div>

    <!-- 移動導航 -->
    <div class="layuimini-site-mobile"><i class="layui-icon"></i></div>

    <div class="layui-body">

        <div class="layuimini-tab layui-tab-rollTool layui-tab" lay-filter="layuiminiTab" lay-allowclose="true">
            <ul class="layui-tab-title">
                <li class="layui-this" id="layuiminiHomeTabId" lay-id=""></li>
            </ul>
            <div class="layui-tab-control">
                <li class="layuimini-tab-roll-left layui-icon layui-icon-left"></li>
                <li class="layuimini-tab-roll-right layui-icon layui-icon-right"></li>
                <li class="layui-tab-tool layui-icon layui-icon-down">
                    <ul class="layui-nav close-box">
                        <li class="layui-nav-item">
                            <a href="javascript:;"><span class="layui-nav-more"></span></a>
                            <dl class="layui-nav-child">
                                <dd><a href="javascript:;" layuimini-tab-close="current">關 閉 當 前</a></dd>
                                <dd><a href="javascript:;" layuimini-tab-close="other">關 閉 其 他</a></dd>
                                <dd><a href="javascript:;" layuimini-tab-close="all">關 閉 全 部</a></dd>
                            </dl>
                        </li>
                    </ul>
                </li>
            </div>
            <div class="layui-tab-content">
                <div id="layuiminiHomeTabIframe" class="layui-tab-item layui-show"></div>
            </div>
        </div>

    </div>
</div>
<script src="lib/layui-v2.6.3/layui.js" charset="utf-8"></script>
<script src="js/lay-config.js?v=2.0.0" charset="utf-8"></script>
<script>
    layui.use(['jquery', 'layer', 'miniAdmin','miniTongji'], function () {
        var $ = layui.jquery,
            layer = layui.layer,
            miniAdmin = layui.miniAdmin,
            miniTongji = layui.miniTongji;

        var options = {
            iniUrl: "api/init.json",    // 初始化介面
            clearUrl: "api/clear.json", // 緩存清理介面
            urlHashLocation: true,      // 是否打開hash定位
            bgColorDefault: false,      // 主題預設配置
            multiModule: true,          // 是否開啟多模組
            menuChildOpen: false,       // 是否預設展開菜單
            loadingTime: 0,             // 初始化載入時間
            pageAnim: true,             // iframe窗口動畫
            maxTabNum: 20,              // 最大的tab打開數量
        };
        miniAdmin.render(options);

        // 百度統計代碼，只統計指定功能變數名稱
        miniTongji.render({
            specific: true,
            domains: [
                '99php.cn',
                'layuimini.99php.cn',
                'layuimini-onepage.99php.cn',
            ],
        });

        $('.login-out').on("click", function () {
			sessionStorage.clear(); //清除存儲在流覽器中的資料
			layer.msg('登出成功', function () {
			window.location.href = './api/logout.php'; //跳轉登錄頁
 			});		
        });
    });
</script>
</body>
</html>