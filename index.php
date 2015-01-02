<!doctype html>
<html lang="zh-tw">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="AlexLinn collections" content="AlexLinn,+AlexLinn">
<title>我的作品網站</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
<!--<![endif]-->
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
<link rel="stylesheet" href="css/marketing.css">
    <!--<![endif]-->

</head>
<?php
header("Content-Type: text/html; charset=utf-8");
include('../Connections/localhost.php');
	$sel_db=@mysql_select_db("test");
	if(!$sel_db){echo "no";}else{echo "Yes";}
	$result=mysql_query("SELECT cID,cPic,cHead FROM collection");
	if(!$result){echo "yes";}
	$myResult=mysql_query("SELECT * FROM `collection` ORDER BY rand() LIMIT 0,1");
?>

<body>
<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">AlexLin</a>

        <ul>
            <li class="pure-menu-selected"><a href="#">Home</a></li>
            <li><a href="#">說明</a></li>
            <li><a href="#">登入</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
<?php while($row=mysql_fetch_assoc($myResult)){?>
<img src="images/myColl/<?php echo $row["cPic"]?>" alt="image" name="myCollection" width="400" height="300">


    <div class="splash">
      <h1 class="splash-head"><?php echo $row["cHead"]?></h1>
        <p class="splash-subhead">
           大家好，我來自台中，我的名字是林梅芳，歡迎觀賞作品
        </p>
        <p>
            <a href="http://purecss.io" class="pure-button pure-button-primary">知道更多AlexLin</a>
        </p>
  </div>
<?php }?>
</div>
<div class="content-wrapper">
    <div class="content">
        <h1 class="content-head is-center"><i class="fa fa-mobile">作品介紹</i></h1>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    電子書
                </h3>
                <img class="pure-img" src="images/common/file-icons.png" width="484" height="282">
<p>
            Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
        </p>
         <a href="collections.php" target="_blank"><button class="button-small pure-button button-success">觀看</button></a>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                   網站
                </h3>
                <img class="pure-img" src="images/common/file-icons.png" width="484" height="282">
                
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
        <a href="collections.php" target="_blank"><button class="button-small pure-button button-success">觀看</button></a>

            </div>
            
            
      </div>
    </div>
<!--自我介紹----------------------------------------------->
<?php
	$sel_db=@mysql_select_db("test");
	if(!$sel_db){echo "no";}else{echo "Yes";}
	$result=mysql_query("SELECT iID,iPic,iHead,iScr FROM intro");
	if(!$result){echo "yes";}
	$myResult=mysql_query("SELECT * FROM `intro` WHERE 1");
	while($row=mysql_fetch_assoc($myResult)){ ?>
<?php /*?><?php
$sel_db=@mysql_select_db("test");
	if(!$sel_db){echo "no";}else{echo "Yes";}
	$result=mysql_query("SELECT iID,iPic,iHead,iScr FROM intro");
	if(!$result){echo "yes";}
	$myResult=mysql_query("SELECT * FROM `intro`");
	mysql_data_seek($myResult,0);
	$row_result=mysql_fetch_assoc($myResult);
foreach($row_result as $item=>$value){ 
 echo $item."=".$value."<br/>";
}
<?php */?>

    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img class="pure-img-responsive" alt="File Icons" width="300" src="images/common/<?php echo $row["iPic"]?>">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

          <h2 class="content-head content-head-ribbon"><?php echo $row["iHead"];?>
</h2>

            <p>
                <?php echo $row["iScr"];?>
            </p>
          <a href="tel:09630000">
          <button class="button-success pure-button">電話</button>
          </a>
          <a href="https://github.com/leaflin" target="_blank">
          <button class="button-success pure-button">git</button>
          </a>
             <a href="mailto:kabul757@gmail.com">
             <button class="button-success pure-button">Email</button>
          </a>
              
             <a href="https://plus.google.com/+AlexLinnAlex/posts" target="_blank">
             <button class="button-success pure-button">G+</button>
             </a>
             <a href="如何寫履歷自傳.pdf" target="_blank">
             <button class="pure-button pure-button-primary">我的履歷</button>
             </a></div>
    </div>
<?php }?>         

<!--自我介紹----------------------------------------------->

    <div class="content">
        <h1 class="content-head is-center"><i class="fa fa-mobile">學習計畫</i></h1>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
<!--menu------------------------------------->         
<h3>計畫清單</h3>
<div class="pure-menu pure-menu-open">
    <a class="pure-menu-heading">Yahoo! Sites</a>

    <ul>
        <li><a href="#">Flickr</a></li>
        <li><a href="#">Messenger</a></li>
        <li><a href="#">Sports</a></li>
        <li><a href="#">Finance</a></li>
        <li class="pure-menu-heading">More Sites!</li>
        <li><a href="#">Games</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">OMG!</a></li>
    </ul>
</div>                
            
            
<!--menu------------------------------------->
</div>

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>Contact Us</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>

                <h4>More Information</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

    </div>

    <div class="footer l-box is-center">
      <h2><i class="fa fa-mobile">關於我們&nbsp;</i><i class="fa fa-mobile">作品介紹&nbsp;</i><i class="fa fa-mobile">學習計畫</i>
      </h2>
      <p>AlexLinn&copy;2014/12/30
      </p>
    </div>

</div>
</body>
</html>
