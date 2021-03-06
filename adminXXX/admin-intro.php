<!doctype html>
<html lang="zh-tw">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
<title>自我介紹</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
<link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
</head>
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

    <div id="main">
        <div class="header">
            <h1>歡迎Alex Linn</h1>
            <h2>快速管理你的網站</h2>
        </div>
<!--PHP--------------------------------------------------->

<div class="content">
<?php
	header("Content-Type: text/html; charset=utf-8");
	include('../../Connections/localhost.php');

	$sel_db=@mysql_select_db("test");
	if(!$sel_db){echo "no";}else{echo "Yes";}
	$result=mysql_query("SELECT iID,iPic,iHead,iScr FROM intro");
	if(!$result){echo "yes";}
	$myResult=mysql_query("SELECT * FROM `intro` WHERE 1");
	while($row=mysql_fetch_assoc($myResult)){?>
            <h2 class="content-subhead">標題</h2>
 
            <p>
            <?php echo $row["iHead"];?>
            </p>

            <h2 class="content-subhead">介紹內容</h2>
            <p>
             <?php echo $row["iScr"];?>   
            </p>
            <div class="pure-g">
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="../images/common/<?php echo $row["iPic"] ?>" alt="Mountain">
                </div>
            
    
            </div>
<a class="pure-button" href="admin_update.php?id=<?php echo $row["iID"] ?>">更改</a>

        </div>
<?php }?>
<!--PHP--------------------------------------------------->
    </div>
</div>
<script src="js/ui.js"></script>
</body>
</html>
