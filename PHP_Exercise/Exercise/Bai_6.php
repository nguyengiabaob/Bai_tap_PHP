<?php
    $soa = '';
    $sob = '';
    $solonhon = '';
    if(isset($_POST['submit']))
    {
        $soa = $_POST['soa'];
        $sob = $_POST['sob'];
        if( $soa=='' && $sob =='')
        {
            echo '<Script type="text/javascript">',
                'alert("Các giá trị không được để trống");',
            '</Script>';
        }
        else
        {
            if($soa == '')
            {
                $soa = 0;
                $solonhon = $sob;
            }
            elseif ($sob == '')
            {
                $sob = 0;
                $solonhon = $soa;
            }
            else
            {
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
        <link href="../MyStyle/styleExercise.css" rel="stylesheet" type="text/css">
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="HeaderPage">
            <h1>6.Tìm số lớn hơn</h1>
        </div>  
        <div class="globalbox">
            <form method="post" action="<?php $_SERVER["PHP_SELF"];?>" validate>
                <div class="container fixcontainer">
                    <div class="row">
                        <div class="col-sm">
                            Nhập số a :
                        </div>
                        <div class="col-">
                            <input type="text" class="form-control" name="soa" value="<?=$soa;?>" placeholder="Number a" style="width:100%" required>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm">
                            Nhập số b :
                        </div>
                        <div class="col-">
                            <input type="text" class="form-control" name="sob" value="<?=$sob;?>" placeholder="Number b" style="width:100%" required>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-">
                            Số lớn hơn :
                        </div>
                        <div class="col-sm">
                            <input type="text" class="form-control" name="solonhon" value="<?=$solonhon;?>" placeholder="Số lớn hơn" style="width:100%">
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-12" style="text-align:center;">
                            <input class="btn btn-primary" type="submit" name="submit" value="Tìm số lớn hơn">
                        </div>
                    </div> 
                </div>     
            </form>
        </div>
    </body>
</html>
