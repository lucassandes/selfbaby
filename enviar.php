<?php
if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
else $quebra_linha = "\n";


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $from = 'lucassandes92@gmail.com'; //autosender
    $to = 'lucassandes92@gmail.com';
    $subject = 'Mensagem enviada do site Selfbaby';


    $headers = "MIME-Version: 1.1" .$quebra_linha;
    $headers .= "Content-type: text/html; charset=iso-8859-1" .$quebra_linha;
    $headers .= "From: " . $from.$quebra_linha;
    $headers .= "Reply-To: " . $email . $quebra_linha;

    $body = "
        <style> body { font-family: Helvetica, Arial, sans-serif; } </style>
        <h4><strong>Mensagem enviada do site SelfBaby</strong></h4>
        <p>
            <strong>Nome: </strong> $name <br/>
            <strong>Email: </strong> $email <br/><br/>
            <strong>Mensagem: </strong><br/>$message <br/>
         </p>
"


?>


<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Enviando mensagem de contato</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="assets/css/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="assets/css/theme.css"/>
    <!--<link rel="stylesheet" href="assets/css/bootstrap.css"/> -->

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ie/v9.css"/><![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ie/v8.css"/><![endif]-->
    <!--[if lte IE 8]>
    <script src="assets/css/ie/respond.min.js"></script><![endif]-->
</head>
<body>

<!-- Header -->

<section id="marcas" class="main style1 dark fullscreen" style="margin-top: -3em;">
    <div class="content container 75%">
        <?php


        if (mail ($to, $subject, $body, $headers)):?>
            <header>
                <h2>Mensagem enviada :)</h2>
            </header>
            <p>Mensagem enviada com sucesso! Responderemos o mais breve possível.</p>
        <?php else: ?>
            <header>
                <h2>Ocorreu um erro :(</h2>
            </header>
            <p>Ocorreu algum erro na hora de enviar sua mensagem. Por favor, tente mais uma vez mais tarde.</p>
        <?php endif; ?>


        <h3><a href="index.php" >Voltar ao site</a></h3>
        <footer>
            <a href="index.php" class="button style2 down">Voltar</a>
        </footer>
    </div>
</section>



<!-- Footer -->
<footer id="footer">
    <p>Self Baby @ 2011 - Todos os direitos reservados.</p>
    <!-- Icons
    <ul class="actions">
        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
        <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
        <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
    </ul>-->

    <!-- Menu
    <ul class="menu">
        <li>&copy; Untitled</li>
        <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>-->

</footer>



<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.poptrox.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<script>
    var img = document.getElementById('imgContato');
    //or however you get a handle to the IMG

    var imgHeight = img.clientHeight;

    $("#formulario").css("min-height",imgHeight);
</script>
</body>
</html>