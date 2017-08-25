<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Variety</title>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
    <!-- Javascript validacao formulário -->
    <script type="text/javascript" src="/variety/js/javascript.js"></script>
</head>
<body>

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
            <div class="autor">
                <h1>CAIO ALEXANDRE.</h1>
                <h2>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</h2>
            </div>
        </aside>
    </div>

    <div class="div_work">
        <aside>
            <div class="work-box">
                <div class="work-ico">
                    <img src="/variety/img/work-ico1.jpg" height="68" width="68">
                </div>
                <h1>Sketching is fun</h1>
                <h2>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</h2>
            </div>

            <div class="work-box" style="margin-left: 100px;">
                <div class="work-ico">
                    <img src="/variety/img/work-ico2.jpg" height="68" width="68">
                </div>
                <h1>Design afterwards</h1>
                <h2>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</h2>
            </div>

            <div class="work-box" style="float: right;">
                <div class="work-ico">
                    <img src="/variety/img/work-ico3.jpg" height="68" width="68">
                </div>
                <h1>Finalize</h1>
                <h2>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</h2>
            </div>
        </aside>
    </div>

    <div class="div_article">
        <div class="div_article_left">
            <div class="article">
                <a href="#" title="Lorem ipsum dolor sit" class="article-search"></a>
                <div class="article-ft">
                    <a href="#" title="Lorem ipsum dolor sit" >Lorem ipsum dolor sit</a>
                    <h2>amet consetetur sadipscing elitr</h2>
                </div>
                <div class="article-img"></div>
            </div>
            <div class="article">
                <a href="#" title="Lorem ipsum dolor sit" class="article-search"></a>
                <div class="article-ft">
                    <a href="#" title="Lorem ipsum dolor sit" >Lorem ipsum dolor sit</a>
                    <h2>amet consetetur sadipscing elitr</h2>
                </div>
                <div class="article-img"></div>
            </div>
        </div>
        <div class="div_article_right">
            <div class="article">
                <a href="#" title="Lorem ipsum dolor sit" class="article-search"></a>
                <div class="article-ft">
                    <a href="#" title="Lorem ipsum dolor sit" >Lorem ipsum dolor sit</a>
                    <h2>amet consetetur sadipscing elitr</h2>
                </div>
                <div class="article-img"></div>
            </div>
            <div class="article">
                <a href="#" title="Lorem ipsum dolor sit" class="article-search"></a>
                <div class="article-ft">
                    <a href="#" title="Lorem ipsum dolor sit" >Lorem ipsum dolor sit</a>
                    <h2>amet consetetur sadipscing elitr</h2>
                </div>
                <div class="article-img"></div>
            </div>
        </div>
    </div>

    <div class="div_article_viewmore"><a href="#">View More</a></div>

    <div class="div_form">
        <form name="form" method="post" action="sentsuccessfully.html" onSubmit="return validacao();">
            <input type="text" name="name" placeholder="Nome*" autocomplete="off" required x-moz-errormessage="Preencha o seu nome.">
            <input type="email" name="email" placeholder="E-mail*" autocomplete="off" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" required>
            <input type="text" name="mens" placeholder="Mensagem" maxlength="500" autocomplete="off" required x-moz-errormessage="Preencha sua mensagem.">
            <input name="submit" type="submit" value="Enviar" class="bt">
        </form>
    </div>
</div>



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
</body>
</html>