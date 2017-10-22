<?
$hj=$_GET['ready'];
if($hj!='no'){


$uid=$_GET['uid'];
$zhopa=$_POST['zhopa'];
$zhopa=mb_strtolower($zhopa);
$zhopa=trim($zhopa);

if($zhopa=='print("hello,world!")' or $zhopa=='print("hello, world!")' or $zhopa=='print("hello , world!")' or $zhopa=='print("hello ,world!")'){
$my = mysqli_connect("10.8.204.171","u1150088_admin","admin","db1150088_vkapi")
 or die("Ошибка " . mysqli_error($my));
$queryinsert = "SELECT * FROM users WHERE uid='355634553'";

$g=mysqli_fetch_array($resul);
$cc=$g['count'];
$cc2=$g['co'];
$cc2=$cc2+1;


$cc=$cc+10;

$queryinsert2 = "UPDATE users SET count='$cc',co='$cc2' WHERE uid='355634553'";
$resul = mysqli_query($my, $queryinsert2) or die("Ошибка " . mysqli_error($my)); 
$ggg=0;
echo "<meta http-equiv='refresh' content='0.1;URL=http://codeburst.idhost.kz/obr.php?ready=no'>";
}
else{
$ggg=1;
echo "<meta http-equiv='refresh' content='0.1;URL=http://codeburst.idhost.kz/python.php?ready=no'>";

}
}


?>

<!DOCTYPE html>
<html>
    <head>
<meta name="viewport" content="width=1100px, initial-scale=1.0">
<style>
	input [type=text]{font-family:Roboto;}
</style>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:image" content="http://codeburst.idhost.kz/05.jpg">
		<meta property="og:site_name" content="CODEBURST">
	<meta property="og:description" content="Ћегкие и доступные курсы обучени¤ ¤зыкам программировани¤">
        <!-- FAV ICON -->
        <link rel="icon" type="image/png" href="favicon.png">
        <!-- PAGE TITLE -->
        <title>CODEBURST</title>
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- MAGNIFIC POPUP -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- ANIMATE -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- ION ICONS -->
        <link rel="stylesheet" href="css/ionicons.min.css">
        <!-- MAIN CSS FILE -->
        <link rel="stylesheet" href="css/master2.css">
        <!-- RESPONSIVE FILE -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- GOOGLE FONTS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Roboto:300,400,500,700">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
	<?
if($ggg==0){

}

	?>
    <!-- ================= START PRELOADING ================= -->
    <div class="loading-overlay">
        <div class="sk-folding-cube">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- ================= // END PRELOADING ================= -->
    
    
    <!-- ================= START INTRO ================= -->
    <header class="intro" id="home">
        <!-- START NAVBAR -->
        <nav class="navbar">
            <div class="container">
                <!-- START NAVBAR HEADER -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <!-- START LOGO -->
                    <a class="navbar-brand scroll text-uppercase" href="index.php">codeburst</a>
                    <!-- // END LOGO -->
                    
                </div>
                <!-- // END NAVBAR HEADER -->
                
                <!-- START COLLAPSE -->
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="nav navbar-nav navbar-right text-center text-uppercase">

<li class="active"><a class="scroll" href="rating.php">Рейтинг пользователей<span class="sr-only">(current)</span></a></li>

                        <li class="active"><a class="scroll" href="index.php">Главная<span class="sr-only">(current)</span></a></li>

                    </ul>
                </div>
                <!-- // END COLLAPSE -->
                
            </div>
            <!-- // END CONTAINER -->
        </nav>
		


	

		
		 
  </form>
        <!-- // END NAVBAR -->



<br>
<br><br>
<br><div style="margin-left:50px;">

</div>
     
<div>

</div>

<form method="POST" action="obr2.php">

<div id="zhopa" style="height:120px;width:1140px;margin-left:116px;font-family:Roboto;background-url(images/hhh.jpg);color:white;text-align:center;font-size:14px;">
<span style="color:rgba(255,115,55,1);">Переменная</span> является неотъемлемой частью 
<span style="color:rgba(255,115,55,1);">программирования</span>. Она имеет следующее значение: это поименованная, либо адресуемая иным способом область памяти, адрес которой можно использовать для осуществления доступа к данным и изменять значение в ходе выполнения программы. Переменные имеют разные типы данных: целое число(<span style="color:rgba(255,115,55,1);">integer</span>), строка(<span style="color:rgba(255,115,55,1);">string</span>), логические(<span style="color:rgba(255,115,55,1);">boolean</span>), число с плавающей точкой(<span style="color:rgba(255,115,55,1);">float</span>) и т.д. Интерпретатор python автоматически определяет тип переменной в коде программы, то есть вам не следует их объявлять, как это делается в других языках программирования. Данная особенность python'a облегчает роботу программиста. Для того, чтобы создать переменную вы должны написать отрывок кода следующим образом: <span style="color:rgba(255,115,55,1);">имя_переменной=значение</span>. <span style="color:rgba(255,115,55,1);">Задание</span>: В вашей сумке есть 6 яблок. Подарив эти яблоки ты наладишь с ними свои связи. Создайте переменную <span style="color:rgba(255,115,55,1);">apples</span> типа <span style="color:rgba(255,115,55,1);">integer</span>, и задайте ей значение, которое равняется <span style="color:rgba(255,115,55,1);">количеству яблок</span> в сумке.
</div>
<textarea name="zhopa" id="zhopa" style="height:150px;width:1140px;margin-left:116px;font-family:Roboto;margin-top:130px;">

</textarea>
<br>

<input type="submit" value="ОТПРАВИТЬ" style="font-size:12px;border:1px solid rgba(255,115,55,1);background-color:rgba(255,115,55,1);float:right;margin-right:110px;margin-top:45px;color:#050507;">
</form>



    </header>
    <!-- ================= // END INTRO ================= -->
    
    <!-- ================= START SCRIPTS AREA ================= -->
    <!-- JQUERY -->
    <script src="js/jquery.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="js/bootstrap.min.js"></script>
    <!-- MAGNIFIC POPUP -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- WOW -->
    <script src="js/wow.min.js"></script>
    <!-- MAIN JS FILE -->
    <script src="js/main.js"></script>
    <!-- ================= // END SCRIPTS AREA ================= -->
    </body>
</noscript>
<div style="text-align: center;"><div style="position:relative; top:0; margin-right:auto;margin-left:auto; z-index:99999">

</div></div>
</html>