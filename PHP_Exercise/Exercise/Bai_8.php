<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../MyStyle/styleExercise.css" rel="stylesheet" type="text/css">
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <?php
            $mark1=$mark2=$dtb=$kq=$hocluc=$alert='';
            if(isset($_POST['submit']))
            {
                $mark1 = $_POST["mark1"];
                $mark2 = $_POST["mark2"];
                if(($mark1>=0 and $mark1<=10) and ($mark2>=0 and $mark2<=10))
                {
                    $dtb = ($mark1+$mark2*2)/3;
                if($dtb>=5)
                {   
                    
                    $kq = 'Được lên lớp';
                    if($dtb>=8)
                    {
                        $hocluc = 'Giỏi';
                    }
                    elseif($hocluc>=6.5 and $hocluc<8)
                    {
                        $hocluc = 'Khá';
                    }
                    else
                    {
                        $hocluc="Trung bình";
                    }

                }
                elseif($dtb<5)
                {
                    $kq = 'Ở lại lớp';
                    $hocluc = 'Yếu';
                }   
                }
                else
                {
                    $alert = "Điểm chỉ được phép trong khoảng 0->10";
                }
            }
        ?>
    </head>
    <body>
        <div id="HeaderPage">
            <h1>8.Kết quả học tập</h1>
        </div>
        <div class="globalbox">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" validate>
            <div class="container fixcontainer"> 
                <div class="row">
                    <label for="mark1" class="col-md-2 col-form-label">Điểm HK1 :</label>
                    <div class="col-md-4">
                        <input type="text" id="mark1" class="form-control" placeholder="Điểm HK1" name="mark1" value="<?=$mark1?>" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <label for="mark1" class="col-md-2 col-form-label">Điểm HK2  :</label>
                    <div class="col-md-4">
                        <input type="text" id="mark2" class="form-control" placeholder="Điểm HK2" name="mark2" value="<?=$mark2?>" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label for="mark1" class="col-md-3 col-form-label">Điểm trung bình :</label>
                    <div class="col-md-9">
                        <input type="text" id="mark1" class="form-control" value="<?=$dtb?>" readonly>
                        <div class="valid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label for="mark1" class="col-md-3 col-form-label">Kết quả :</label>
                    <div class="col-md-9">
                        <input type="text" id="mark1" class="form-control"  value="<?=$kq?>" readonly>
                        <div class="valid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label for="mark1" class="col-md-3 col-form-label">Học lực :</label>
                    <div class="col-md-9">
                        <input type="text" id="mark1" class="form-control" value='<?=$hocluc?>' readonly>
                        <div class="valid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row" style="text-align:center;">
                    <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-success">Xem kết quả</button>
                    </div>
                </div>
                <div class="row" style="text-align:center;">
                    <label for="alert" class="col-12"><?php echo $alert ?></label>
                </div>
            </div>
            </form>
        </div>
        <script type="text/javascript" src="Jquery/jquery-3.6.0.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
    </body>
</html>