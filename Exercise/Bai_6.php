<?php
    $soa = '';
    $sob = '';
    $solonhon = '';
    if(isset($_POST['submit']))
    {
        if($_POST['soa'] =='' && $_POST['sob'] =='')
        {
            echo '<Script type="text/javascript">',
                'alert("Các giá trị không được để trống");',
            '</Script>';
        }
        else
        {
            if($_POST['soa'] == '')
            {
                $soa = 0;
                $sob = $_POST['sob'];
                $solonhon = $_POST['sob'];
            }
            elseif ($_POST['sob'] == '')
            {
                $soa = $_POST['soa'];
                $sob = 0;
                $solonhon = $_POST['soa'];
            }
            else
            {
                $soa = $_POST['soa'];
                $sob = $_POST['sob'];
                $solonhon = $soa>$sob?$soa:$sob; 
            }    
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bài 6 Thực hành PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    </head>
    <body style="width:500px;margin:auto;padding:50px;"> 
        <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
            <table style="text-align: center;background-color:lightsalmon;" class="bangthongtin">
                <tr>
                    <td style="background-color: Coral" colspan="2">
                        <H3>TÌM SỐ LỚN HƠN</H3>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <p>Số A : </p>
                    </td>
                    <td style="background-color:lightsalmon">
                        <p><input class="form-control" type="text" name="soa" value=<?php echo $soa ?>></p>
                    </td>
                <tr>
                    <td>
                        <p>Số B :</p>
                    </td>
                    <td>
                         <p><input class="form-control" type="text" name="sob" value=<?php echo $sob ?>></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Số lớn hơn : </p>
                    </td>
                    <td>
                        <p><input class="form-control" type="text" style="background-color:lightcoral" name="solonhon" value="<?php echo $solonhon ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="background-color:lightsalmon;">
                        <input class="btn btn-danger" type="submit" value="Tìm số lớn hơn" name="submit">
                    </td>
                </tr>
            </table>
        </form>
        
    </body>
</html>
