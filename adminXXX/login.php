
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
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
<link href="css/login.css" rel="stylesheet" type="text/css">
    <!--<![endif]-->
</head>
<?php 
session_start();
	header("Content-Type: text/html; charset=utf-8");
	include('../../Connections/localhost.php');
	$sel_db=@mysql_select_db("test");
	if(!$sel_db){echo "no";}else{echo "Yes";}
	$result=mysql_query("SELECT cID,cUser,cPass FROM login");
	if(!$result){echo "yes";}
	mysql_data_seek($result,0);
	$row_result=mysql_fetch_assoc($result);
	

	//執行登入動作
	if(!isset($_SESSION["membername"]) || ($_SESSION["membername"]=="")){
		if(isset($_POST["cUser"]) && isset($_POST["cPass"])){
			//預設帳號密碼
			$username =$row_result["cUser"];
			$passwd = $row_result["cPass"];
			
			
			
			//比對帳號密碼，若登入成功則呈現登入狀態
			if(($_POST["cUser"]==$username) && ($_POST["cPass"]==$passwd)){
				$_SESSION["membername"]=$username;
				header("Location: admin.php");
			}else{
			//header("Location: login.php");
			}
		}
	}


?>


<body>
<div id="header">
        
            <h1>歡迎Alex Linn</h1>
            <h2>快速管理你的網站</h2>
            
</div>
<div id="content">
<!---->
<?php 
//檢查是否為登入狀態，若未登入則顯示登入表單
if(!isset($_SESSION["membername"]) || ($_SESSION["membername"]=="")){
?>		

<form method="post" class="pure-form pure-form-aligned">
    <fieldset>
        <div class="pure-control-group">
            <label for="name">Username</label>
            <input name="cUser" id="name" type="text" placeholder="Username">
        </div>

        <div class="pure-control-group">
            <label for="password">Password</label>
            <input  name="cPass" id="password" type="password" placeholder="Password">
        </div>


        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>
<!---->
<?php 
//若登入即顯示登入成功訊息
}else{
	echo $_SESSION["membername"]."您好已經登入成功!";
?>
<?php }?>

</div>


</body>
</html>