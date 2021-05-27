<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	$txtduonglich="";
	$txtamlich="";
	$hinhanh="";
	$mang_can= array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
	$mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn","Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
	$mang_hinh = array ("hoi.jpg", "ty.jpg", "suu.jpg", "dan.jpg", "mao.jpg", "thin.gif", "ran.jpg", "ngo.jpg", "mui.jpg", "than.gif", "dau.jpg", "tuat.jpg");

	if(isset($_POST["submit1"]))
	{
		if($_POST["txtduonglich"]!=""&&is_numeric($_POST["txtduonglich"]))
		{
			$txtduonglich=$_POST["txtduonglich"];
			$txtnam=$txtduonglich-3;
			$can=$txtnam%10;
			$chi=$txtnam%12;
			$txtamlich=$mang_can[$can]." ".$mang_chi[$chi];
			$hinhanh=$mang_hinh[$chi];
		}
	}
	?>
<body>
	<form id="form1" name="chao2" method="post" action="bai13.php" >
	<table width="302" height="75">
  <tbody>
    <tr>
      <td style="background-color: #0a628c ; color: white; text-align: center" colspan="2">TÍNH NĂM ÂM LỊCH</td>
      </tr>
   
    <tr  style="background-color: #99d1ec">
      <td width="294">
		  <div style="display: flex;flex-direction: row">
			<div style="display: flex;flex-direction: column;width: 120px;" >  
				 <label for="textfield">Năm Dương lịch:</label>
				<input style="width: 100px;" type="text" name="txtduonglich" id="textfield" value="<?=$txtduonglich?>">
				
			</div>
			  <div style="display: flex;flex-direction: column;margin-left: 40px">
				   <input style="margin-top: 18px; " type="submit" name="submit1" value="=>"/>
			  </div>
			  <div style="display: flex;flex-direction: column; align-items: center;margin-left: 40px;" >
        			 <label style="margin-left: 0px" for="textfield">Năm âm lịch:</label>
				 
				   <input style="width: 100px;" type="text" name="txtamlich" id="textfield" value="<?=$txtamlich?>">
			   </div>
		
		
		</div>	
			<img src="<?="./hinh/".$hinhanh?>"/>
		</td>
		
    </tr>
	
	  
  </tbody>
</table>

</form>
</body>
</html>
