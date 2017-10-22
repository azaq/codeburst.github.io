<?php
$my = mysqli_connect("10.8.204.171","u1150088_admin","admin","db1150088_vkapi")
 or die("Ошибка " . mysqli_error($my));
$query ="SELECT * FROM users";
$result = mysqli_query($my, $query) or die("Ошибка " . mysqli_error($my)); 
$myrow=mysqli_query($my,$result);

if(isset($_GET['uid'])){$uid = $_GET['uid']; if($uid==''){unset($uid);}}
if(isset($_GET['first_name'])){$first_name = $_GET['first_name']; if($first_name==''){unset($first_name);}}
if(isset($_GET['last_name'])){$last_name = $_GET['last_name']; if($last_name==''){unset($last_name);}}
if(isset($_GET['photo'])){$photo = $_GET['photo']; if($photo==''){unset($photo);}}
if(isset($_GET['photo_rec'])){$photo_rec = $_GET['photo_rec']; if($photo_rec==''){unset($photo_rec);}}
if(isset($_GET['hash'])){$hash = $_GET['hash']; if($hash==''){unset($hash);}}




if (isset($uid) && isset($hash) && isset($last_name) && isset($first_name) && isset($photo_rec) && isset($photo))
{

$search=$uid;
$ser="SELECT * FROM users WHERE uid LIKE '$search'";
$se=mysqli_query($my,$ser);
$myrow = mysqli_fetch_assoc($se);
echo $myrow['uid'];

if($myrow['uid']==$search){
$bool=True;
}
else{
$bool=False;
}
if($bool==False){




$queryinsert = "INSERT INTO users (uid,hash,last_name,first_name,photo,photo_rec) VALUES ('$uid', '$hash','$last_name','$first_name','$photo','$photo_rec')";

$resul = mysqli_query($my, $queryinsert); 
}
$rar='<meta http-equiv="refresh" content="0.1; URL=http://www.codeburst.idhost.kz/2.php?uid=';
$rar2='>';
echo $rar.$uid;
}
?>
<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:image" content="http://codeburst.idhost.kz/2.jpg">
		<meta property="og:site_name" content="CODEBURST">
		<!--OPENAPI-->
		<script src="https://vk.com/js/api/openapi.js?139" type="text/javascript"></script>
		
		
		<!-- Put this script tag to the <head> of your page -->
  <script type="text/javascript" src="//vk.com/js/api/openapi.js?139"></script>
        <script type="text/javascript">
		VK.init({apiId: 5859003});
		</script>


<meta name="viewport" content="width=1100px, initial-scale=1.0">

		
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
		
	<script type="text/javascript">
			  VK.init({
				apiId: ВАШ_API_ID
			  });
			</script>


	<div id="vk_auth" style="margin-top:90px;margin-left:115px;"></div>
	<script type="text/javascript">
	 VK.Widgets.Auth('vk_auth', {});
	</script> 

		
		 
  </form>
        <!-- // END NAVBAR -->
        
        
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