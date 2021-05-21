<?php
    $dientich = '';
    $chuvi = '';
    $bankinh = '';
    if(isset($_POST['submit']))
    {
        if($_POST['bankinh'] =='')
        {
            $bankinh = 0;
            $chuvi = 0;
            $dientich = 0;
        }
        else
        {
                $bankinh = $_POST['bankinh'];
                $chuvi = 2*$bankinh*pi();
                $dientich = $bankinh*$bankinh*pi(); 
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
                        <H3>DIỆN TÍCH VÀ CHU VI<br>HÌNH TRÒN</H3>
                    </td>
                </tr>
                <tr>
                    <td style="background-color:lightsalmon">
                        <p>Bán kính : </p>
                        <p>Chu vi :</p>
                        <p>Diện tích : </p>
                        
                    </td>
                    <td style="background-color:lightsalmon">
                        <p><input type="text" name="bankinh" value=<?php echo $bankinh ?>></p>
                        <p><input type="text" style="background-color:lightcoral" name="chuvi" value=<?php echo $chuvi ?>></p>
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