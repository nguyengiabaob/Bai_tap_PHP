<?php
    $tenchuho = '';
    $chisocu = '';
    $chisomoi = '';
    $dongia = '';
    $thanhtoan = '';
    $err= '';
    if(isset($_POST['submit']))
    {
        if($_POST['tenchuho'] == '')
        {
            $tenchuho = 'trống';
        }
        else
        {
            $tenchuho = $_POST['tenchuho'];
        }
        if($_POST['chisocu'] =='' && $_POST['chisomoi'] =='' && $_POST['dongia'])
        {
            $chisocu = 0;
            $chisomoi = 0;
            $dongia = 0;
            $thanhtoan = 0;
        }
        else
        {
            if($_POST['chisocu'] == '')
            {
                $chisocu = 0;
                $chisomoi = $_POST['chisomoi'];
                $dongia = $_POST['dongia'];
                $thanhtoan = 0;
            }
            elseif ($_POST['chisomoi'] == '')
            {
                $chisocu = $_POST['chisomoi'];
                $chisomoi = 0;
                $dongia = $_POST['dongia'];
                $thanhtoan = 0;
            }
            elseif($_POST['dongia'] == '')
            {
                $chisocu = $_POST['chisocu'];
                $chisomoi = $_POST['chisomoi'];
                $dongia = 0;
                $thanhtoan = 0;
            }
            else
            {
                $chisocu = $_POST['chisocu'];
                $chisomoi = $_POST['chisomoi'];
                $dongia = $_POST['dongia'];
                if($chisocu > $chisomoi)
                {
                    $err = 'Chỉ số mới phải lớn hơn chỉ số cũ';
                }
                else
                {
                    $thanhtoan = ($chisomoi - $chisocu)*$dongia;
                }
                
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
                        <H3>THANH TOÁN TIỀN ĐIỆN</H3>
                    </td>
                </tr>
                <tr>
                    <td style="background-color:lightsalmon">
                        <p>Tên chủ hộ : </p>
                        <p>Chỉ số cũ :</p>
                        <p>Chỉ số mới : </p>
                        <p>Đơn giá : </p>
                        <p>Số tiền thanh toán : </p>
                    </td>
                    <td style="background-color:lightsalmon">
                        <p><input type="text" name="tenchuho" value="<?php echo $tenchuho; ?>"></p>
                        <p><input type="text" name="chisocu" value=<?php echo $chisocu ?>></p>
                        <p><input type="text" name="chisomoi" value=<?php echo $chisomoi ?>></p>
                        <p><input type="text" name="dongia" value=<?php echo $dongia ?>></p>
                        <p><input type="text" style="background-color:lightcoral" name="thanhtoan" value=<?php echo $thanhtoan ?>></p>
                        <p><?php echo $err ?></p>
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