<!DOCTYPE html>
<html lang="pt-br" ng-app>
<head>
    <meta charset="UTF-8">
    <title>Variety - Caio Alexandre</title>
    <script src="lib/angular/angular.js"></script>
    <link rel="stylesheet" type="text/css" href="css/load.css">
    <link rel="stylesheet" type="text/css" href="css/style_purple.css">
    <link rel="stylesheet" type="text/css" href="css/style_red.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="se-pre-con"></div>

<div class="div_version">
    <div class="div_version_center">
        <a href="#" class="seleciona-turquoise turquoise">Turquoise</a>
        <a href="#" class="seleciona-red red">Red</a>
        <a href="#" class="seleciona-purple purple">Purple</a>
    </div>
</div>

<header class="bgParallax" data-speed="10">
    <nav>
        <div class="bt-logo">
            <a href="#" title="START" >LOGO</a>
        </div>
        <div class="menu">
            <li>
                <ul><a href="#" title="START" class="active" >START</a></ul>
                <ul><a href="#" title="ABOUT ME" >ABOUT ME</a></ul>
                <ul><a href="#" title="WORK" >WORK</a></ul>
                <ul><a href="#" title="CONTACT" >CONTACT</a></ul>
            </li>
        </div>
    </nav>
    <div class="header-int">
        <h1>May I introduce myself?</h1>
        <div class="div"></div>
        <h2>Frontend Design | UI/UX Design</h2>
        
        <div id="header-bt">
            <a href="#" title="GO AHEAD" >GO AHEAD</a>
        </div>
    </div>
</header>

<div class="conteudo">

    <div class="div_introduction">
        <aside>
            <div class="div_introduction_autor">
                <h1>CAIO ALEXANDRE.</h1>
                <h2>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</h2>
            </div>
        </aside>
    </div>

    <div class="div_work">
        <aside>
            <div class="div_work_box">
                <div class="div_work_box_ico sketching"></div>
                <h1>Sketching is fun</h1>
                <h2>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</h2>
            </div>

            <div class="div_work_box" style="margin-left: 100px;">
                <div class="div_work_box_ico design"></div>
                <h1>Design afterwards</h1>
                <h2>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</h2>
            </div>

            <div class="div_work_box" style="float: right;">
                <div class="div_work_box_ico finalize"></div>
                <h1>Finalize</h1>
                <h2>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</h2>
            </div>
        </aside>
    </div>

    <div class="div_article">
        <div class="div_article_left">
            <article>
                <a href="#" title="Lorem ipsum dolor sit" class="article-search"></a>
                <div class="article-ft">
                    <a href="#" title="Lorem ipsum dolor sit" >Lorem ipsum dolor sit</a>
                    <h2>amet consetetur sadipscing elitr</h2>
                </div>
                <div class="article-img first-ficure"></div>
            <!-- <div class="article-img"><img src="/figure.jpg"></div> -->
            </article>
            <article>
                <a href="#" title="Lorem ipsum dolor sit" class="article-search"></a>
                <div class="article-ft">
                    <a href="#" title="Lorem ipsum dolor sit" >Lorem ipsum dolor sit</a>
                    <h2>amet consetetur sadipscing elitr</h2>
                </div>
                <div class="article-img second-ficure"></div>
            <!-- <div class="article-img"><img src="/figure.jpg"></div> -->
            </article>
        </div>
        <div class="div_article_right">
            <article>
                <a href="#" title="Lorem ipsum dolor sit" class="article-search"></a>
                <div class="article-ft">
                    <a href="#" title="Lorem ipsum dolor sit" >Lorem ipsum dolor sit</a>
                    <h2>amet consetetur sadipscing elitr</h2>
                </div>
                <div class="article-img third-ficure"></div>
            <!-- <div class="article-img"><img src="/figure.jpg"></div> -->
            </article>
            <article>
                <a href="#" title="Lorem ipsum dolor sit" class="article-search"></a>
                <div class="article-ft">
                    <a href="#" title="Lorem ipsum dolor sit" >Lorem ipsum dolor sit</a>
                    <h2>amet consetetur sadipscing elitr</h2>
                </div>
                <div class="article-img fourth-ficure"></div>
            <!-- <div class="article-img"><img src="/figure.jpg"></div> -->
            </article>
        </div>
    </div>

    <div class="div_article_viewmore"><a href="#">View More</a></div>

    <div class="div_form">
        <h1>Get in touch!</h1>
        <form name="form" method="post" action="sentsuccessfully.html" onSubmit="return validacao();">
            <input type="text" name="name" placeholder="Nome*" autocomplete="off" required x-moz-errormessage="Preencha o seu nome.">
            <input type="email" name="email" placeholder="E-mail*" autocomplete="off" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" required>
            <input type="text" name="mens" placeholder="Mensagem" maxlength="500" autocomplete="off" required x-moz-errormessage="Preencha sua mensagem.">
            <input name="submit" type="submit" value="Enviar" class="bt">
        </form>
    </div>
</div>

<div ng-include="'footer.php'"></div>

<script src="./bower_components/jquery/dist/jquery.js"></script>
<script src="./js/changeColors.js"></script>
<script>
    $('div.bgParallax').each(function(){
        var $obj = $(this);
        $(window).scroll(function() {
            var yPos = -($(window).scrollTop() / $obj.data('speed')); 
            var bgpos = '50% '+ yPos + 'px';
            $obj.css('background-position', bgpos );
        }); 
    });
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
    $(window).load(function() {
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
</body>
</html>