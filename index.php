
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>我的作品集</title>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
    <link href="css/my.css" rel="stylesheet" type="text/css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<?php
header("Content-Type: text/html; charset=utf-8");
include('../Connections/localhost.php');
	$sel_db=@mysql_select_db("test");
	if(!$sel_db){echo "no";}else{echo "Yes";}
	$result=mysql_query("SELECT cID,cPic FROM collection");
	if(!$result){echo "yes";}
	$myResult=mysql_query("SELECT * FROM `collection` ORDER BY rand() LIMIT 0,1");
	
	
	
	
?>

<body>
<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">Alex Lin</a>

        <ul>
            <li class="pure-menu-selected"><a href="#">Home</a></li>
            <li><a href="#">說明 Documents</a></li>
            <li><a href="#">登入</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
<?php while($row=mysql_fetch_assoc($myResult)){?>
<img src="images/myColl/<?php echo $row["cPic"]?>" alt="image" name="myCollection" width="400" height="300">

<?php }?>
    <div class="splash">
      <h1 class="splash-head">演示作品</h1>
        <p class="splash-subhead">
           大家好，我來自台中，我的名字是林梅芳，歡迎觀賞作品
        </p>
        <p>
            <a href="http://purecss.io" class="pure-button pure-button-primary">知道更多AlexLin</a>
        </p>
  </div>
</div>
<!---------------------------------------->
<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">首先呢，我們會教導你第一步</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    如何知道今天如何
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    規劃自己
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
                   欣賞模式
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                   確定清單
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
        </div>
    </div>
<!----------------------------------------------------------------->
    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img src="" alt="File Icons" width="300" height="300" class="pure-img-responsive">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">一天的過去</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor.
            </p>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">2014年個人追蹤器</h2>

        <div class="pure-g">
            

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>追蹤個人</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>

                <h4>更多行蹤</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

    </div>

    <div class="footer l-box is-center">
       2014&copy;AlexLinn
    </div>

</div>
<!---->
</body>
</html>