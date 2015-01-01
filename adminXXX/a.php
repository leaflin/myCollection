<?php 
header("Content-Type: text/html; charset=utf-8");
include("../../Connections/localhost.php");
if (!@mysql_select_db("test")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="update")){	
	$sql_query = "UPDATE `students` SET ";
	$sql_query .= "`cName`='".$_POST["cName"]."',";
	$sql_query .= "WHERE `cID`=".$_POST["cID"];	
	mysql_query($sql_query);
	//重新導向回到主畫面
	header("Location: ../index.php");
}
$sql_db = "SELECT * FROM `students` WHERE `cID`=".$_GET["id"];
$result = mysql_query($sql_db);
$row_result=mysql_fetch_assoc($result);

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<form action="" method="post" name="formFix" id="formFix">
     <input type="text" name="cName"  class="form-control" value="<?php echo $row_result["cName"];?>">
      
      <input name="cID" type="hidden" value="<?php echo $row_result["cID"];?>">
     <input name="action" type="hidden" value="update">
      <input type="submit" name="action"  class="btn btn-default" id="button" value="update">
</form>

</body>
</html>