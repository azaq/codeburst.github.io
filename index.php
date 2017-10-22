<?



$my = mysqli_connect("10.8.204.171","u1150088_admin","admin","db1150088_vkapi")
 or die("Ошибка " . mysqli_error($my));


if(isset($_POST['name'])){$name = $_POST['name']; if($name==''){unset($name);}}

if(isset($_POST['email'])){$email = $_POST['email']; if($email==''){unset($email);}}

if(isset($_POST['text'])){$text = $_POST['text']; if($text==''){unset($text);}}


if (isset($name) && isset($text) && isset($email))
{
$queryinsert = "INSERT INTO messages (name,email,text) VALUES ('$name','$email','$text')";

$resul = mysqli_query($my, $queryinsert) or die("Ошибка " . mysqli_error($my)); 
}

?>

<!DOCTYPE html>
<html>
    <head>
<meta name="viewport" content="width=1100px, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html;  charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:image" content="http://codeburst.idhost.kz/2.jpg">
		<meta property="og:site_name" content="CODEBURST">
		
        <meta property="og:description" content="Легкие и доступные курсы обучения языкам программирования">
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
        <link rel="stylesheet" href="css/master.css">
        <!-- RESPONSIVE FILE -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- GOOGLE FONTS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Roboto:300,400,500,700">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<style>

$red{color:rgba(255,115,55,1);}

</style>
    </head>

    <body>
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
                        <span class="sr-only">Toggle navigation</span>
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </button>
                    
                    <!-- START LOGO -->
                    <a class="navbar-brand scroll text-uppercase" href="#home">codeburst</a>
                    <!-- // END LOGO -->
                    
                </div>
                <!-- // END NAVBAR HEADER -->
                
                <!-- START COLLAPSE -->
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="nav navbar-nav navbar-right text-center text-uppercase">

<li class="active"><a class="scroll" href="rating.php">Рейтинг пользователей<span class="sr-only">(current)</span></a></li>

                        <li class="active"><a class="scroll" href="#home">Главная<span class="sr-only">(current)</span></a></li>



                        <li><a class="scroll" href="#services">О курсе</a></li>
                      <!--  <li><a class="scroll" href="#resume">Resume</a></li>-->
                        <li><a class="scroll" href="#testimonials">Отзывы</a></li>
                        <li><a class="scroll" href="#contact">Контакты</a></li>
                    </ul>
                </div>
                <!-- // END COLLAPSE -->
                
            </div>
            <!-- // END CONTAINER -->
        </nav>
        <!-- // END NAVBAR -->
        
        <!-- START INTRO CONTENT -->
        <div class="intro-content text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                       
                        <h1 class="text-uppercase"><strong>ЧТОБЫ СТАТЬ ПРОГРАММИСТОМ, НУЖНО ПРОГРАММИРОВАТЬ</strong></h1>
 <p class="text-uppercase">Codeburst — это онлайн-курс обучения <span id="red" style="color:rgba(255,115,55,1);">программированию на Python</span>,
который на 80% состоит из практики</p>
                        <a href="start.php" class="btn scroll btn-border text-uppercase">Начать обучение</a>
                    </div>
                </div>
            </div>
            <!-- // END CONTAINER -->
        </div>
        <!-- // END INTRO CONTENT -->
    </header>
    <!-- ================= // END INTRO ================= -->
    
    
 
    <!-- ================= START SERVICES ================= -->
    <section class="services section-title text-center" id="services">
        <div class="container">
            
            <!-- START SERVICES SECTION HEADING -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="text-center text-uppercase">О курсе</h2>	
                </div>
            </div>
            <!-- // END SERVICES SECTION HEADING -->
            <div class="row">
                
                <!-- START UX/UI DESIGN SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="service wow fadeInUp" data-wow-delay="0.2s">
                        <i class="ion-android-bulb"></i>
                        <h4 class="text-uppercase">80% практики</h4>
                        <p>В Интернете много хороших книг, но читая книги программистом не станешь. Чтобы стать программистом, нужно много программировать. CODEBURST — это онлайн-курс обучения программированию, на 80% состоящий из практики. Именно то, что нужно чтобы стать программистом.</p>
                    </div>
                </div>
                <!-- // END UX/UI DESIGN SERVICE -->
                
                <!-- START WEB DESIGN DESIGN SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="service wow fadeInUp" data-wow-delay="0.4s">
                        <i class="ion-android-laptop"></i>
                        <h4 class="text-uppercase">1000+ практических заданий</h4>
                        <p>Сколько практических заданий должен содержать идеальный курс? 10, 20, 100? Курс содержит 1000+ практических задач возрастающей сложности. Задачи небольшие, но их много, очень много. Как раз тот минимум, выполнив который, вы получите опыт необходимый для трудоустройства.</p>
                    </div>
                </div>
                <!-- // END WEB DESIGN SERVICE -->
                
                <!-- START WEB DEVELOPMENT SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="service wow fadeInUp" data-wow-delay="0.6s">
                        <i class="ion-code-working"></i>
                        <h4 class="text-uppercase">500+ часов опыта</h4>
                        <p>Курс разбит на 40 уровней. Вы можете перейти на следующий уровень, только если решили большую часть задач текущего уровня. Начиная с маленьких и легких и заканчивая большими и очень полезными. Каждый, дошедший до конца, получит 500+ часов практического опыта. Серьезная заявка на победу. И на работу.</p>
                    </div>
                </div>
                <!-- // END WEB DEVELOPMENT SERVICE -->
                
                <!-- START MARKETING SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="service wow fadeInUp" data-wow-delay="0.8s">
                        <i class="ion-arrow-graph-up-right"></i>
                        <h4 class="text-uppercase">Быстрая проверка</h4>
                        <p>Знакома ли вам ситуация, когда вы сдали задачу/работу на проверку, а результатов пришлось ждать неделю, т.к. проверяющий занят? Именно так обстоят дела в большинстве очных курсов. В JavaRush вы узнаёте результаты проверки задачи меньше чем через секунду, после нажатия кнопки «Проверить».</p>
                    </div>
                </div>
                <!-- // END MARKETING SERVICE -->
                
                <!-- START SEO SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="service wow fadeInUp" data-wow-delay="1s">
                        <i class="ion-android-checkmark-circle"></i>
                        <h4 class="text-uppercase">Новейшие обучающие методики</h4>
                        <p>Как в нашем веке вообще можно учиться только по книгам? Такой подход был инновационным в 17 веке, но не в 21. В JavaRush используются новейшие методики, которые делают ваше обучение легче, интересней и продуктивнее: визуализация, сторитейлинг, мотивация, геймификация и еще два десятка технологий, о которых вы даже не слышали.</p>
                    </div>
                </div>
                <!-- // END SEO SERVICE -->
                
                <!-- START BRANDING SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="service wow fadeInUp" data-wow-delay="1.2s">
                        <i class="ion-flash"></i>
                        <h4 class="text-uppercase">Online-стажировка</h4>
                        <p>Если в вашем городе мало крупных компаний, у них высокие требования, или вы хотите выделиться на фоне других искателей работы и попасть не абы-куда, а сразу в правильное место, то вам стоит получить практический опыт на стажировке. Онлайн стажировка — это отличный способ получить опыт работы не выходя из дома.</p>
                    </div>
                </div>
                <!-- // END BRANDING SERVICE -->
                
            </div>
            <!-- // END ROW -->
        </div>
        <!-- // END CONTAINER -->
    </section>
    <!-- ================= // END SERVICES ================= -->
    
    
    
    
    
  
    
    
    <!-- ================= START TESTIMONIALS ================= -->
    <section class="testimonials section-title text-center" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="testimonial" class="carousel slide" data-ride="carousel">
                        <!-- START SLIDES WRAPPER -->
                        <div class="carousel-inner" role="listbox">
                            
                            <!-- START QUOTE 01 -->
                            <div class="item active">
                                <img src="images/testimonials/01.jpg" alt="Mo Dauod">
                                <h4 class="text-uppercase">Айбек Колушбаев</h4>
                                <p class="text-uppercase">Ученик НИШ ХБН</p>
                                <blockquote>Благодаря этому курсу я овладел языком Python, с помощью которого я могу писать приложения, веб-сайты и вообще что хочу, т.к. PYTHON вещь богов. Я написал приложение Nano-Aibek на питоне, которое помогает мне по сей день заниматься нанотехнологиями, это приложение облегчает мне жизнь в поиске информации на просторах интернета. </blockquote>
                            </div>
                            <!-- // END QUOTE 01 -->
                            
                            <!-- START QUOTE 02 -->
                            <div class="item">
                                <img src="images/testimonials/02.jpg" alt="Sam Franco">
                                <h4 class="text-uppercase">Темирхан Хакимов</h4>
                                <p class="text-uppercase">PHP-шник</p>
                                <blockquote>Раньше я считал себя боженькой когда писал код на ПХП. О эти не забываемые задачки на 2к+ строк. Спасибо этому курсу за С++ теперь я понял, что означает "Краткость - сестра таланта". Сейчас я в неком смысле оборотень, днем я обычный пхпшник, а ночью, смотря на луну, во мне возраждается опасный хакер. Ыыы</blockquote>
                            </div>
                            <!-- // END QUOTE 02 -->
                            
                            <!-- START QUOTE 03 -->
                            <div class="item">
                                <img src="images/testimonials/03.jpg" alt="David Jack">
                                <h4 class="text-uppercase">Сергазы Тайтуев</h4>
                                <p class="text-uppercase">JS кодер</p>
                                <blockquote>Моим первым языком программирования был JS. Увлекшись не на долго, в голову стрельнул успех и я с чего-то вдруг решил, что JS+jQuery - язык богов для нас всех. Простите, я думал просто JS тащит везде. Никогда не был в таком глубоком заблуждении. Гвидо ван Россум меня не предупредил. Что существует ПИТОН на этом свете. Спасибо!  </blockquote>
                            </div>
                           <!-- // END QUOTE 03 -->
                            
                            <!-- START QUOTE 04 -->
                            <div class="item">
                                <img src="images/testimonials/04.jpg" alt="Joney Deve">
                                <h4 class="text-uppercase">Фарит Муратов</h4>
                                <p class="text-uppercase">Задрот</p>
                                <blockquote>Вхожу в игру аккуратно, она еще не готова, в голову приходит идея, но она знает кто я. После рамса со мною, эта идея на страшном суде. И я уже с питоном в руке. Все прячутся за C++, увидев мой язык. Все кодеры орут alert. Они фристайлеры, но станут недокодерами, ведь на каждого фристайлера, найдется ракомакафо. </blockquote>
                            </div>
                            <!-- // END QUOTE 04 -->
                            
                        </div>
                        <!-- // END SLIDES WRAPPER -->
                        <!-- START TESTIMONIALS INDICATORS -->
                        <ol class="carousel-indicators">
                            <li data-target="#testimonial" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonial" data-slide-to="1"></li>
                            <li data-target="#testimonial" data-slide-to="2"></li>
                            <li data-target="#testimonial" data-slide-to="3"></li>
                        </ol>
                        <!-- // END TESTIMONIALS INDICATORS -->
                    </div>
                </div>
            </div>
            <!-- // END ROW -->
        </div>
        <!-- // END CONTAINER -->
    </section>
    <!-- ================= // END TESTIMONIALS ================= -->
    
    
    <!-- ================= START CONTACT ================= -->
    <section class="section-title contact" id="contact">
        <div class="container">
            <!-- START CONTACT SECTION HEADING -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="text-center text-uppercase">НАПИШИТЕ НАМ.</h2>	
                </div>
            </div>
            <!-- // END CONTACT SECTION HEADING -->
            <div class="row">
                <!-- START INFORMATION AREA -->
                <div class="col-md-4 col-sm-6">
                    <div class="info">
                        
                        <!-- START ADDRESS INFO -->
                        <div class="contact-info wow fadeInLeft" data-wow-delay="0.2s">
                            <i></i>
                            <h4 class="text-uppercase">Адрес</h4>
                            <p>г. Петропавловск, Казахстан</p>
                        </div>
                        <!-- // END ADDRESS INFO -->
                        
                        <!-- START PHONE INFO -->
                        <div class="contact-info wow fadeInLeft" data-wow-delay="0.4s">
                            <i></i>
                            <h4 class="text-uppercase">Телефон</h4>
                            <p>+77777777777</p>
                        </div>
                        <!-- // END PHONE INFO -->
                        
                        <!-- START EMAIL INFO -->
                        <div class="contact-info wow fadeInLeft" data-wow-delay="0.6s">
                            <i></i>
                            <h4 class="text-uppercase">Email</h4>
                            <p>codeburst@gmail.com</p>
                        </div>
                        <!-- // END EMAIL INFO -->
                    </div>
                </div>
                <!-- // END INFORMATION AREA -->
                
                <!-- START FORM AREA -->
                <div class="col-md-8 col-sm-6">
                    <div class="contact-form">
                        <form id="form" method="POST" action="index.php" class="contact-form">
                            <!-- START NAME LABEL -->
                            <label>
                                <input required type="text" placeholder="ВАШЕ ИМЯ" name="name" class="form-control">
                            </label>
                            <!-- // END NAME LABEL -->
                            <!-- START EMAIL LABEL -->
                            <label>
                                <input required type="email" placeholder="ВАШ EMAIL АДРЕС" name="email" class="form-control">
                            </label>
                            <!-- // END EMAIL LABEL -->
                            <!-- START MESSAGE LABEL -->
                            <label>
                                <textarea required placeholder="ВАШЕ ПИСЬМО.." name="text" class="form-control"></textarea>
                            </label>
                            <!-- // END MESSAGE LABEL -->
                            <!-- START SEND BUTTON -->
                            <div class="wow fadeInUp" data-wow-delay="0.8s">
                                <input id="send" type="submit" value="Отправить" class="btn btn-border text-uppercase">
                            </div>
                            <!-- // END SEND BUTTON -->
                        </form>
                    </div>
                </div>
                <!-- // END FORM AREA -->
            </div>
            <!-- // END ROW -->
        </div>
        <!-- // END CONTAINER -->
    </section>
    <!-- ================= // END CONTACT ================= -->
    
    
    <!-- ================= START FOOTER ================= -->
    <footer class="text-center">
        <div class="container">
            <div class="row">
                
                <!-- START SOCIAL ICONS -->
                <div class="col-xs-12">
                    <ul class="social-icons list-inline">
                        <li><a href="#"><i><img src="images/si/01.png"></i></a></li>
                        <li><a href="#"><i><img src="images/si/02.png"></i></a></li>
                        <li><a href="#"><i><img src="images/si/03.png"></i></a></li>
                        <li><a href="#"><i><img src="images/si/04.png"></i></a></li>						
                    </ul>
                </div>
                <!-- // END SOCIAL ICONS -->
                
                <!-- START COPYRIGHTS INFO -->
                <div class="col-xs-12">
                    <div class="copyrights">
                        <p>&copy; 2017 CODEBURST. Все права защищены.</p>
                    </div>
                </div>
                <!-- // END COPYRIGHTS INFO -->
            </div>
            <!-- // END ROW -->
        </div>
        <!-- // END CONTAINER -->
    </footer>
    <!-- ================= END FOOTER ================= -->
    
    
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