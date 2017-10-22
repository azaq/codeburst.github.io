<?
$uid=$_GET['uid'];

$my = mysqli_connect("10.8.204.171","u1150088_admin","admin","db1150088_vkapi")
 or die("Ошибка " . mysqli_error($my));
$queryinsert = "SELECT * FROM users WHERE uid='355634553'";

$resul = mysqli_query($my, $queryinsert) or die("Ошибка " . mysqli_error($my)); 
?>

<!DOCTYPE html>
<html>
    <head>
<meta name="viewport" content="width=1100px, initial-scale=1.0">
<style>
	input [type=text]{font-family:Roboto;}
</style>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:image" content="http://codeburst.idhost.kz/05.jpg">
		<meta property="og:site_name" content="CODEBURST">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		
		


		
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
<a href="python.php?ready=no"><img src="images/sad/py.png"></a>
<a href="cpp.php"><img src="images/sad/c++.png"></a>
<a href="#"><img src="images/sad/ruby.png"></a>
<a href="#"><img src="images/sad/php.png"></a>
<a href="#"><img src="images/sad/sql.png"></a>
</div>
     

<!--
<div style=" margin-left:114px;">
<form action="3.php" method="GET">
<input type="Text" name="nickname" placeholder="Enter your nickname" style="font-family:Roboto;border-radius: 2.5pt;">
<input type="hidden" name="uid" value="<?php echo $uid;?>">
</form>
</div>-->


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