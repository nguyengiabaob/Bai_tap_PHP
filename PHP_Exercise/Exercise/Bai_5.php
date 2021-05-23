<?php
    $canha = '';
    $canhb = '';
    $canhhuyen = '';
    if(isset($_POST['submit']))
    {
        if($_POST['canha'] =='' && $_POST['canhb'] =='')
        {
            $canha = 0;
            $canhb = 0;
            $canhhuyen = 'Không tồn tại';
        }
        else
        {
            if($_POST['canha'] == '')
            {
                $canha = 0;
                $canhb = $_POST['canhb'];
                $canhhuyen = 'Không tồn tại';
            }
            elseif ($_POST['canhb'] == '')
            {
                $canha = $_POST['canha'];
                $canhb = 0;
                $canhhuyen = 'Không tồn tại';
            }
            else
            {
                $canha = $_POST['canha'];
                $canhb = $_POST['canhb'];
                $canhhuyen = sqrt($canhb*$canhb+$canha*$canha); 
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
                        <H3>CẠNH HUYỀN TAM GIÁC VUÔNG</H3>
                    </td>
                </tr>
                <tr>
                    <td style="background-color:lightsalmon">
                        <p>Cạnh A : </p>
                        <p>Cạnh B :</p>
                        <p>Cạnh Huyền : </p>
                    </td>
                    <td style="background-color:lightsalmon">
                        <p><input type="text" name="canha" value=<?php echo $canha ?>></p>
                        <p><input type="text" name="canhb" value=<?php echo $canhb ?>></p>
                        <p><input type="text" style="background-color:lightcoral" name="canhhuyen" value="<?php echo $canhhuyen ?>"></p>
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