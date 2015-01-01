<!doctype html>
<html lang="zh-tw">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
<title>編輯頁面</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
<link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
</head>
<?php
	header("Content-Type: text/html; charset=utf-8");
	include('../../Connections/localhost.php');

if (!@mysql_select_db("test")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="update")){
	mysql_query("UPDATE intro SET iHead='".$_POST["iHead"]."',iScr='".$_POST["iScr"]."'  WHERE iID=1");
	header("Location: ../index.php");
}
$sql_db =mysql_query("SELECT * FROM `intro` WHERE iID=1");
$row_result=mysql_fetch_assoc($sql_db);

?>
<body>
<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>
    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" href="admin.php">管理台</a>

            <ul>
              <li><a href="#">自我介紹</a></li>
                <li><a href="#">我的作品</a></li>

                <li class="menu-item-divided pure-menu-selected">
                    <a href="#">最新作品動態</a>
                </li>

                <li><a href="#">學習計畫</a></li>
                <li><a href="#">筆記心得</a></li>
            </ul>
        </div>
    </div>
</div>
    <div id="main">
        <div class="header">
            <h1>歡迎Alex Linn</h1>
            <h2>快速管理你的網站</h2>
        </div>

        <div class="content">
<!--表單---------------------------------------------->
<form method="post" class="pure-form">
    <fieldset class="pure-group">
    <input name="iID" type="hidden" value="<?php echo $row_result["iID"];?>">

        <input type="text" name="iHead" class="pure-input-1-2" placeholder="標題" value="<?php echo $row_result["iHead"];?>">
        <input type="text" name="iScr" class="pure-input-1-2" placeholder="介紹內容" value="<?php echo $row_result["iScr"];?>">
    </fieldset>

    <input type="hidden" name="action" value="update">
    <button type="submit" class="pure-button pure-input-1-2 pure-button-primary">更改</button>
</form>
<!--表單---------------------------------------------->
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
