<?php
    $dientich = '';
    $chieudai = '';
    $chieurong = '';
    if(isset($_POST['submit']))
    {
        if($_POST['chieudai'] =='' && $_POST['chieurong'] =='')
        {
            $chieudai = 0;
            $chieurong = 0;
            $dientich = 0;
        }
        else
        {
            if($_POST['chieudai'] == '')
            {
                $chieudai = 0;
                $chieurong = $_POST['chieurong'];
                $dientich = 0;
            }
            elseif ($_POST['chieurong'] == '')
            {
                $chieudai = $_POST['chieudai'];
                $chieurong = 0;
                $dientich = 0;
            }
            else
            {
                $chieudai = $_POST['chieudai'];
                $chieurong = $_POST['chieurong'];
                $dientich = $chieudai*$chieurong; 
            }    
        }
       
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
            <table style="text-align: center">
                <tr>
                    <td style="background-color: Coral" colspan="2">
                        <H3>DIỆN TÍCH HÌNH CHỮ NHẬT</H3>
                    </td>
                </tr>
                <tr>
                    <td style="background-color:lightsalmon">
                        <p>Chiều dài : </p>
                        <p>Chiều rộng :</p>
                        <p>Diện tích : </p>
                        
                    </td>
                    <td style="background-color:lightsalmon">
                        <p><input type="text" name="chieudai" value=<?php echo $chieudai ?>></p>
                        <p><input type="text" name="chieurong" value=<?php echo $chieurong ?>></p>
                        <p><input type="text" style="background-color:lightcoral" name="dientich" value=<?php echo $dientich ?>></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="background-color:lightsalmon">
                        <input type="submit" value="Tính" name="submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>