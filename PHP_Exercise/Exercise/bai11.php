<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	$txtdayso="";
	$txttong="";
	if (isset($_POST["submit1"]))
	{
		if($_POST["txtdayso"]!="")
		{
			function kiemtra($so)
			{
				foreach($so as $value)
				{
					if(is_numeric($value)==false)
					{
						return false;
					}
				}
				return true;
			}
			$tong=0;
			$txtdayso=$_POST["txtdayso"];
			$dayso=explode(",",$txtdayso);
			
			if(kiemtra($dayso))
			{
				foreach($dayso as $value)
				{
					$tong+=$value;
				}
			}
			$txttong=$tong;
		}
	}
	?>
<body>
	<form id="form1" name="chao2" method="post" action="bai11.php" >
	<table width="302" height="75">
  <tbody>
    <tr>
      <td style="background-color: #0a628c ; color: white; text-align: center" colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</td>
      </tr>
    <tr  style="background-color: #99d1ec">
      <td width="294">
		  <label for="textfield">Nhập dãy số:</label>
        <input type="text" name="txtdayso" id="textfield" value="<?=$txtdayso?>"><label style="color: red">(*)</label>
		 
		
		<center>
		  <input style="margin-top:10px; margin-bottom: 10px; margin-left: -30px"type="submit" name="submit1" value="Tổng dãy số"/>
		</center>
		
		  <label for="textfield">Tổng dãy số:</label>
		 <input style="width: 85px" type="text" name="txttong" id="textfield" value="<?=$txttong?>">
		  <p><label style="color: red">(*)</label>Các số được nhập cách nhau bằng dấu ","</p>
		</td>
		
		
    </tr>
	
	  
  </tbody>
</table>

</form>
</body>
</html>
