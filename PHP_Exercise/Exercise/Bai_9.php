<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../MyStyle/styleExercise.css" type="text/css" rel="stylesheet">
        <link href="../bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
        <?php
            $diemToan=$diemLy=$diemHoa=$diemChuan=$tongDiem=$ketQUa=$canhBao="";
            if(isset($_POST['submit']))
            {
                $diemToan = $_POST['markOfMath'];
                $diemLy = $_POST['markOfPhysical'];
                $diemHoa = $_POST['markOfChemistry'];
                $diemChuan = $_POST['markOfUni'];
                if($diemToan>10 and $diemToan<0 or $diemLy>10 and $diemly<0 or $diemHoa>10 and $diemHoa<0)
                {
                    $canhBao = 'Điểm chỉ được phép trong khoảng 0->10';
                }
                else
                {
                    $tongDiem = $diemToan+$diemLy+$diemHoa;
                    if($diemToan==0 or $diemLy == 0 or $diemHoa == 0)
                    {
                        $ketQUa = 'Rớt';
                    }
                    else
                    {
                        
                        if($tongDiem >= $diemChuan)
                        {
                            $ketQUa = 'Đậu';
                        }
                        else
                        {
                            $ketQUa = 'Rớt';
                        }
                    }

                }
            } 
        ?>
    </head>
    <body>
        <div id="HeaderPage">
            <h1>9.Kết quả thi đại học</h1>
        </div>
        <div class="globalbox">
            <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" validate>
                <div class="container-xs fixcontainer">
                    <div class="row">
                        <label class="col-4 col-form-control" for="markOfMath">Điểm toán :</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="markOfMath" placeholder="Điểm Toán" value="<?=$diemToan?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-4 col-form-control" for="markOfPhysical">Điểm lý :</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="markOfPhysical" placeholder="Điểm Lý" value="<?=$diemLy?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-4 text-form-control" for="markOfChemistry">Điểm Hóa :</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="markOfChemistry" placeholder="Điểm Hóa" value="<?=$diemHoa?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-4 text-form-control" for="markOfUni">Điểm Chuẩn :</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="markOfUni" placeholder="Điểm Chuẩn" value="<?=$diemChuan?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-4 col-form-control">Tổng điểm :</label>
                        <div class="col-8">
                            <input type="text" class="form-control" value="<?=$tongDiem?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-4 text-form-control">kết quả :</label>
                        <div class="col-8">
                            <input type="text" class="form-control" value="<?=$ketQUa?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-4 text-form-control"></label>
                        <div class="col-8">
                            <button type="submit" name="submit" class="btn btn-success">Xem kết quả</button>
                        </div>
                    </div>
                    <div class="row" style="text-align:center;">
                        <label class="col-12 text-form-control"><?php echo $canhBao?></label>
                    </div>
                </div>
            </form>
        </div>
        <script type="text/javascript" src="../Jquery/jquery-3.6.0.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
    </body>
</html>