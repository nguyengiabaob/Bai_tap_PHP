<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="MyStyle/style.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="HeaderOfPage">
        <H1 style="font-size: 60px">Code Fighter Team</H1>
    </div>
    <div id="NavOfPage">
        <a href="MainScreen.php">Home</a>
        <a href="#news">News</a>    
        <a href="contact.html">Contact</a>
    </div>
    <div class="BodyOfPage">
        <div class="MenuOfExercise">
            <h3 style="background-color:#018150;color: #f5f5f5;padding-top: 10px;padding-bottom:10px;">Danh sách bài tập</h3>
            <a target="detailExercise" href="Exercise/Bai_1.php">Bài 1</a>
            <a target="detailExercise" href="Exercise/Bai_2.php">Bài 2</a>
            <a target="detailExercise" href="Exercise/Bai_3.php">Bài 3</a>
            <a target="detailExercise" href="Exercise/Bai_4.php">Bài 4</a>
            <a target="detailExercise" href="Exercise/Bai_5.php">Bài 5</a>
            <a target="detailExercise" href="Exercise/Bai_6.php">Bài 6</a>
            <a target="detailExercise" href="Exercise/Bai_7.php">Bài 7</a>
            <a target="detailExercise" href="Exercise/Bai_8.php">Bài 8</a>
            <a target="detailExercise" href="Exercise/Bai_9.php">Bài 9</a>
            <a target="detailExercise" href="Exercise/Bai_10.php">Bài 10</a>
            <a target="detailExercise" href="Exercise/Bai_11.php">Bài 11</a>
            <a target="detailExercise" href="Exercise/Bai_12.php">Bài 12</a>
            <a target="detailExercise" href="Exercise/Bai_13.php">Bài 13</a>
            <a target="detailExercise" href="Exercise/Bai_14.php">Bài 14</a>
            <a target="detailExercise" href="Exercise/Bai_15.php">Bài 15</a>
            <a target="detailExercise" href="Exercise/Bai_16.php">Bài 16</a>
            <a target="detailExercise" href="Exercise/Bai_17.php">Bài 17</a>
            <a target="detailExercise" href="Exercise/Bai_18.php">Bài 18</a>
            <a target="detailExercise" href="Exercise/Bai_19.php">Bài 19</a>
        </div>
        <div class="ContainerOfPage">
            <div style="width:100%;height: 100%;">
                <iframe width="100%" height="800px" src="HomeSCreen.html" name="detailExercise">
                </iframe>
            </div>
        </div>  
        <div class="Detail">
            <img src="Image/codefighter.png" style="width:150px;height:150px;">
            <p><h3>Bản quyền thuộc về Code Fighter Team</h3></p>
            <div class="info">
                <h4>Danh sách thành viên</h4>
                <a href="contact.html" >Trần Minh Quân</a>
                <a href="contact.html" >Nguyễn Gia Bảo</a>
                <a href="contact.html" >Lê Minh Hưng</a>
                <a href="contact.html" >Vương Tiến An</a>
            </div>   
        </div>
    </div>
    <script>
        window.onscroll = function() {myFunction()};
        var navbar = document.getElementById("NavOfPage");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
    </body>
</html>