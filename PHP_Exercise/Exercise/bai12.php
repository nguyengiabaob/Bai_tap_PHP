<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	$txtnam="";
	$txtkq="";
	if(isset($_POST["submit1"]))
	{
		if($_POST["txtnam"]!=""&&is_numeric($_POST["txtnam"]))
		{
			$txtnam=$_POST["txtnam"];
			
		function namnhuan($nam)
		{
			if($nam%400==0||($nam%4==0&&$nam%100!=0))
			{
				return 1;
			}
			return 0;
		}
		foreach(range(2000,$txtnam)as $year)
		{
			if(namnhuan($year))
			{
				$txtkq.=$year." ";
			}
		}
		if($txtkq!="")
		{
			$txtkq.="là năm nhuận";
		}
		else
		{
			$txtkq.="Không có năm nhuận";
		}
		}
	}
	?>
<body>
	<form id="form1" name="chao2" method="post" action="bai12.php" >
	<table width="302" height="75">
  <tbody>
    <tr>
      <td style="background-color: #0a628c ; color: white; text-align: center" colspan="2">TÌM NĂM NHUẬN</td>
      </tr>
   
    <tr  style="background-color: #99d1ec">
      <td width="294"><label style="margin-left: 35px" for="textfield">Năm:</label>
        <input style="margin-left: 20px" type="text" name="txtnam" id="textfield" value="<?=$txtnam?>">
        <div align="center" style="margin-top: 15px;">
          <label style="background-color: antiquewhite"  name="lbxuat"><?=$txtkq?></label><br>
		</div>	
		
		<center><input style="margin-top: 25px;" type="submit" name="submit1" value="Tìm năm nhuận"/></center></td>
		
    </tr>
	
	  
  </tbody>
</table>

</form>
</body>
</html>
