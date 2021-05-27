<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../MyStyle/styleExercise.css" rel="stylesheet" type="text/css">
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <?php
            $tinput = '';
            $thongbao = '';
            if(isset($_POST['submit']))
            {
                echo
                '
                <script>
                document.getElementById("sayhello").style.display = "block";
                </script>
                ';
                $tinput=$_POST['tinput'];
                if($tinput != '')
                {
                    if($tinput>0 and $tinput<13)
                        $thongbao = 'Chào buổi sáng !';
                    else if($tinput>=13 and $tinput<19)
                        $thongbao = 'Chào buổi chiều !';
                    else if($tinput>=19 and $tinput<24)
                        $thongbao = 'Chào buổi tối !';
                }
            }
        ?>
    </head>
    <body>
        <div id="HeaderPage">
            <h1>7.Chào theo giờ</h1>
        </div>
        <div class="globalbox">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" validate>
            <div class="container fixcontainer">    
                <div class="row">
                    <label class="col-sm-4 col-form-control" for="validate1"> Nhập giờ :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="validate1" placeholder="Press time" name="tinput" value="<?=$tinput?>" required>
                        <div class="valid-feedback">
                            Please enter time
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" style="text-align: center;">
                        <button id="submit" type="submit" class="btn btn-primary" name="submit">Lời chào !</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" style="text-align: center;">
                        <div id="sayhello" class="alert alert-success" style="display:none">
                            <label for="alert"><?=$thongbao?> </label>
                        </div>
                    </div>
                </div>
            </div>
            </form> 
        </div>
        <script type="text/javascript" src="Jquery/jquery-3.6.0.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
    </body>
</html>