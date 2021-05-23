<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../MyStyle/styleExercise.css" rel="stylesheet" type="text/css">
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <?php
            $loiChao = '';
            $ten='';
            if(isset($_POST["submit"]))
            {
                $ten=$_POST['name'];
                if($ten == '')
                {
                    echo '<script>
                    alert("Chưa nhập tên");
                    </script>';
                }
                else
                {
                    $loiChao='Xin chào, '.$ten; 
                }
                
            }
        ?>
    </head>
    <body>
        <div id="HeaderPage">
            <h1>1.In lời chào</h1>
        </div>
        <div class="globalbox">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="container-xs fixcontainer">
                <div class="row">
                    <div class="col-sm">
                        <h3>In lời chào</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <p style="font-size:18px">Nhập tên của bạn</p>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <input type="text" style="width:100%" class="form-control" value="<?=$ten?>" name="name" placeholder="Your Name"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <input type="submit" class="btn btn-primary" name="submit" value="Lời chào">  
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="loiChao"><?php echo $loiChao?></label>  
                    </div>
                </div>
            </div>
        </form>
        </div>
    </body>
</html>