<?php if(!isset($_SESSION)){session_start();} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dev House Family</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/icomoon/icomoon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Shield
    Template URL: https://templatemag.com/shield-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="58" data-target="#navbar-main">

<?php require_once ('config.php'); ?>

  <div id="navbar-main">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span><img class="img" src="img/logo-yellow.png" height="22px" width="25px" alt=""></span>
          </button>
          <span class="hidden-xs hidden-sm"  href="#home">
			<img class="img" src="img/logo-yellow.png" style="margin-top: 13px;" height="22px" width="25px" alt="">
		  </span>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
			<?php 
				if ($logado) {
					echo'<li> <a href="./opportunities"> Oportunidades</a></li>';
				}else{
					echo'<li><a href="#home" class="smoothscroll">Início</a></li>';
				} 
			?>
			<li> <a href="#about" class="smoothscroll"> Faça parte</a></li>
            <li> <a href="#services" class="smoothscroll"> DevHouses</a></li>
            <li> <a href="#team" class="smoothscroll"> Objetivo</a></li>
            <li> <a href="#blog" class="smoothscroll"> Mindfullness Yoga</a></li>
            <li> <a href="#contact" class="smoothscroll"> Canais</a></li>
			<?php 
				if ($logado) {
					echo'<li> <a href="./logout" style="color: red;"> Sair</a></li>';
				}else{
					echo'<li> <a href="./login" style="color: green;"> Logar</a></li>';
				} 
			
			?>
        </div>
        <!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <!-- ==== HEADERWRAP ==== color: black-->
  <div id="home"></div>
  <div id="headerwrap" name="home">
    <header class="clearfix" >
      <h1><img class="img" src="img/logo-white.png" height="120px" width="130px" alt=""></h1>
	  <p style="">Dev House Family</p>
      <p style="">Faça parte dessa família da tecnologia</p>
      <p style=";">Viva em ambientes focados e de harmonia</p>
    </header>
  </div>
  <!-- /headerwrap -->

  <!-- ==== GREYWRAP ==== -->
  <div id="greywrap">
    <div class="row">
      <div class="col-lg-4 callout">
        <span class="icon icon-accessibility"></span>
        <h2>Cresça como profissional</h2>
        <p>
			Ao conviver com pessoas que buscam a mesma evolução profissional, as mudanças começam a acontecer. Já dizia a frase:
			<b>Diga-me com quem tu andas que te direi quem tu és</b>.
		</p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-4 callout">
        <span class="icon icon-earth"></span>
        <h2>Evolua em idiomas</h2>
        <p>
			Foco em estratégias práticas na abordágem da comunicação em outros idiomas, a princípio será focado no Inglês e Francês. 
			Depois utilizaremos o formato de sucesso para aprender outros idiomas.
		</p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-4 callout">
        <span class="icon icon-heart"></span>
        <h2>Equilibre corpo & mente</h2>
        <p>
			É necessário manter a harmonia, e para isso iremos manter a prática diária utilzando técnicas de Mindfullness e Yoga. 
			Além de boa alimentação e boas práticas de convivência.
		</p>
      </div>
      <!-- col-lg-4 -->
    </div>
    <!-- row -->
  </div>
  <!-- greywrap -->

  <!-- ==== ABOUT ==== -->
  <div class="container" id="about" name="about">
    <div class="row white">
      <br>
      <h1 class="centered">Como funciona a Dev House Family</h1>
      <hr>

      <div class="col-lg-6">
        <p>
			Há quem diga que a família em que nascemos nos ajuda e há quem diga que a família que nascemos nos atrapalha, mas o 
			fato é que não se escolhe a família que irá nascer. A Dev House Family é uma família diferente, pois normalmente 
			os parentes serão emprestados e terão o mesmo objetivo, então não se surpreenda se este ente entender com mais 
			clareza suas necessidades. Sem sombra de dúvida os objetivos seriam alcançados de forma mais facilitadas. Na Austrália 
			existe a cultura de que quando os adolescentes fazem 14 anos eles vão morar com outras pessoas, longe de suas famílias de 
			origem, resultado? Temos cidadãos muito mais responsáveis e adaptáveis, sem falar de ter um emocional muito mais 
			resistente!
		</p>
      </div>
      <!-- col-lg-6 -->

      <div class="col-lg-6">
        <p>
			Imagina viver em um ambiente onde a harmonia é cultivada diariamente, e isso é uma regra, sim, é obrigatório buscar 
			qualidade de vida em primeiro lugar, afinal de contas o objetivo é vivermos melhor cada vez mais, certo? Claro. 
			Vamos dizer que neste momento você precise alugar alguma moradia, seja um studio, quarto, casa, etc. Ou que ainda 
			esteja morando em um local conturbado, seja com a família de origem ou não e você tem conhecimentos tecnológicos ou 
			tem a intenção de se inserir nesse mercado. Temos que concordar que se existe um ambiente com pessoas com o mesmo objetivo tudo 
			fica mais fácil, harmonioso e interessante, concorda? Então isso é a Dev House Family. Ao fazer parte, irá ter acesso a 
			essas oportunidades.
		</p>
      </div>
      <!-- col-lg-6 -->
	  
    </div>
    <!-- row -->
	
	<br>
	<div>
		<center><a href="./register" class="btn btn-success btn-lg">Fazer parte!</a></center>
	</div>
	  
  </div>
  <!-- container -->

  <!-- ==== SECTION DIVIDER1 -->
  <section class="section-divider textdivider divider1" id="services" name="services">
    <div class="container">
      <h1>Juntos ficamos muito mais fortes!</h1>
      <hr>
      <p>
		A nossa união além de proporcionar o alcance dos objetivos, torna a caminhar mais agradável.
	  </p>
    </div>
    <!-- container -->
  </section>
  <!-- section -->


  <!-- ==== SERVICES ==== -->
  <div class="container">
    <br>
    <br>
    <div class="row">
      <h2 class="centered">Compartilhamos nosso ambiente com pessoas que buscam o mesmo objetivo.</h2>
      <hr>
      <br>
      <div class="col-lg-offset-2 col-lg-8">
        <p>
			É essencial que esteja ativo, buscando sempre encontrar soluções para os objetivos de interesse, isso quer 
			dizer que, não espere por outros fazerem por você, aja, movimente-se, mude a realidade!
        </p>
        
		<p>
			Use seu cérebro para encontrar a solução, pois a estratégia já está aqui, você precisa investir um pouco de 
			energia e ativar o modo coragem.
		</p>
        
		<p>
			Não esqueça de ser grato a tudo, os canais de comunicação desenvolvidos aqui são verdadeiros presentes de 
			oportunidades. Tendo essa consciência de atitude podemos elevar nosso nível ao de primeiro mundo, isso mesmo, 
			um país dentro de outro país, sem esperar por mudanças de sistemas arcáicos, <b>CAPTOU? Ao trabalho!<b/>
		</p>
		
      </div>
      <!-- col-lg -->
    </div>
    <!-- row -->


    <div class="row">
      <h2 class="centered">Uma casa, um laboratório, isso é evoluir.</h2>
      <hr>
      <!--
	  <br>
      <div class="col-lg-offset-2 col-lg-8">
        <img class="img-responsive" src="img/iphone.png" alt="">
      </div>
	  -->
      <!-- col -->
	  
	  
    </div>
    <!-- row -->
  </div>
  <!-- container -->



<!-- ==== GREYWRAP ==== -->
  <div id="greywrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 centered">
          <img class="img-responsive" src="img/macbook.png" align="">
        </div>
        <div class="col-lg-4">
          <h2>Está pronto para trilhar novos caminhos?</h2>
          <p>
				Se você conseguiu visualizar, então percebeu que é mais fácil do que se imagina mudar a própria realidade.
		  </p>
          <p><a href="./register" class="btn btn-success">Fazer parte</a></p>
        </div>
      </div>
      <!-- row -->
    </div>
    <br>
    <br>
  </div>
  <!-- greywrap -->

  <!-- ==== SECTION DIVIDER2 -->
  <section class="section-divider textdivider divider2" id="team" name="team">
    <div class="container">
      <h1>Crescimento profissional</h1>
      <hr>
      <p>
		Um time entra em concentração em um espaço propício para expandir suas habilidades.
	  </p>
    </div>
    <!-- container -->
  </section>
  <!-- section -->

  <div class="container">
    <br>
    <div class="row white centered">
      <h1 class="centered" style="color: #007bff;" >Áreas da tecnologia</h1>
        <hr><br><br>
		<div class="row">
		
			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Developer</a></b></h4>
			</div>
			<!-- col-lg-3 -->


			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Data</a></b></h4>
			</div>
			<!-- col-lg-3 -->


			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Interface</a></b></h4>
			</div>
			<!-- col-lg-3 -->


			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Marketing</a></b></h4>
			</div>
			<!-- col-lg-3 -->

		</div>
		
		<br><br>
		
		<div class="row">
		
			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Cloud</a></b></h4>
			</div>
			<!-- col-lg-3 -->

			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Redes</a></b></h4>
			</div>
			<!-- col-lg-3 -->

			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Testes</a></b></h4>
			</div>
			<!-- col-lg-3 -->

			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Security</a></b></h4>
			</div>
			<!-- col-lg-3 -->

		</div>
		
		<br><br>
		
		<div class="row">
		
			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">CMS</a></b></h4>
			</div>
			<!-- col-lg-3 -->

			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Requisitos</a></b></h4>
			</div>
			<!-- col-lg-3 -->

			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Graphics</a></b></h4>
			</div>
			<!-- col-lg-3 -->

			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Infra</a></b></h4>
			</div>
			<!-- col-lg-3 -->

		</div>
		
		<br><br>
		
		<div class="row">
		
			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Gestão</a></b></h4>
			</div>
			<!-- col-lg-3 -->

			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Negócios</a></b></h4>
			</div>
			<!-- col-lg-3 -->

			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Suporte</a></b></h4>
			</div>
			<!-- col-lg-3 -->

			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Metodologias</a></b></h4>
			</div>
			<!-- col-lg-3 -->

		</div>
		
		<br><br>
		
		<div class="row">
		
			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">CMS</a></b></h4>
			</div>
			<!-- col-lg-3 -->

			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">ERP</a></b></h4>
			</div>
			<!-- col-lg-3 -->

			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">CRM</a></b></h4>
			</div>
			<!-- col-lg-3 -->

			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">RH</a></b></h4>
			</div>
			<!-- col-lg-3 -->

		</div>
		
		<br><br>
		<hr>
		<h3 style="color: #F57F17;">
			Você tem duas opções: esperar acontecer ou fazer acontecer, qual é o seu caminho?		
		</h3>
		
		<br><br><hr>
		
		<h1 class="centered" style="color: #007bff;" >Idiomas</h1>
		<hr>
		<div class="col-lg-6 centered">
			<a href="#collapseExample">
				<h3>English</h3>
				<img class="img" src="img/flag-ireland.png" height="60px" width="120px" alt="" title="Em homenágem a grande parceria entre Irlandeses e Brasileiros!">
			</a>
		</div>
		
		<div class="col-lg-6 centered">
			
			<a href="#collapseExample">
				<h3>Français</h3>
				<img class="img" src="img/flag-france.png" height="60px" width="120px" alt="">
			</a>
		</div>
		
		<br><br>
		<hr>
		<p>
		
		</p>
		<br><br>
		<hr>
		<h3 style="color: #F57F17;">
			A estratégia é o objetivo na comunicação, não adianta saber muita gramática se não consegue se comunicar. 
			Tudo se resume a entender a mensagem e interagir! Respondendo, perguntando. 
			<br>Enfim, ter a habilidade de se comunicar!		
		</h3>
		
		
	</div>
  </div>
  
  <!-- ==== SECTION DIVIDER4 ==== -->
  <section class="section-divider textdivider divider4" id="blog" name="blog">
    <div class="container">
      <h1>Mindfullness & Yoga</h1>
      <hr>
      <p>
		Mantenha sua energia física, mental e emocional em dia para evoluir cada vez mais.
	  </p>
	</div>
    <!-- container -->
  </section>
  <!-- section -->

  <!-- ==== BLOG ==== -->
  <div class="container">
    <br>
    <div class="row">
      <br>
      <h1 class="centered">A prática expande sua capacidade.</h1>
      <hr>
      <br>
      <br>
    </div>
    <!-- /row -->

    <div class="row">
      <div class="col-lg-6 blog-bg">
        <div class="col-lg-4 centered">
          <br>
          <!--<p><img class="img img-circle" src="img/team/team03.jpg" width="60px" height="60px"></p>-->
          <h4>Mindfullness</h4>
          <h5>Pratique a atenção plena.</h5>
        </div>
        <div class="col-lg-8 blog-content">
          <h2>Mindfullness</h2>
          <p>
			   A ideia é ensinar a ter foco no presente – e não nas expectativas para o futuro ou nos traumas do passado. 
			   Tudo através da respiração. 
		  </p>
          <p>
			   Com fé ou sem, a técnica é capaz de diminuir dores crônicas e pressão arterial, manter o cérebro jovem (a ponto de a 
			   ciência estar pesquisando sua eficácia na prevenção do Alzheimer), evitar crises ... 
		  </p>
          <!--<p><a href="#" class="icon icon-link"> Read More</a></p>-->
          <br>
        </div>
      </div>
      <!-- /col -->

      <div class="col-lg-6 blog-bg">
        <div class="col-lg-4 centered">
          <br>
          <!--<p><img class="img img-circle" src="img/team/team03.jpg" width="60px" height="60px"></p>-->
          <h4>Yoga</h4>
          <h5>Potencialize sua energia.</h5>
        </div>
        <div class="col-lg-8 blog-content">
          <h2>Yoga</h2>
          <p>
				Por meio de exercícios físicos como alongamentos e torções e técnicas de respiração chamadas Pranayamas, além 
				de técnicas de meditação, concentração e relaxamento, 
		  </p>
		  <p>
		        A pessoa aprende a se movimentar de forma mais consciente e também a respirar de modo mais tranquilo e profundo.
				<!--
				O Yoga é uma prática que tem como objetivo trabalhar o corpo e a mente de forma conjunta, com exercícios que 
				auxiliam para o controle do estresse, ansiedade, dores no corpo e na coluna, além de melhorar o equilíbrio e 
				promover a sensação de bem estar e a disposição.
				-->
		  </p>
          <!--<p><a href="#" class="icon icon-link"> Read More</a></p>-->
          <br>
        </div>
      </div>
      <!-- /col -->
    </div>
    <!-- /row -->
    <br>
    <br>
  </div>
  <!-- /container -->


  <!-- ==== SECTION DIVIDER6 ==== -->
  <section class="section-divider textdivider divider6" id="contact" name="contact">
    <div class="container">
      <h1>Nossos Canais</h1>
      <hr>
      <p>Faça parte, para ter acesso ao movimento!</p>
      <p>As oportunidades estarão lá, quando surgirem.</p>
      <p><a href="#"><i class="fab fa-linkedin"></i></a> | 
		 <a  href="#"><i class="fab fa-instagram"></i></a> | 
		 <a href="#"><i class="fab fa-youtube"></i></a>
	  </p>
    </div>
    <!-- container -->
  </section>
  <!-- section -->

  <div class="container">
    <div class="row">
      <br>
      <h1 class="centered">Conecte-se ao foco no desenvolvimento</h1>
      <hr>
      <br>
      <br>

      <div class="col-lg-4">
        <h3>Dev House Family</h3>
        <p>Nosso lar é o nosso templo, nosso laboratório, nosso refúgio, o nosso Castelo.</p>
        
		<!--
		<h3>Newsletter</h3>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail1" class="col-lg-4 control-label"></label>
            <div class="col-lg-10">
              <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="text1" class="col-lg-4 control-label"></label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="text1" placeholder="Your Name">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10">
              <button type="submit" class="btn btn-success">Sign in</button>
            </div>
          </div>
        </form>
		-->
      </div>
      <!-- col -->

      <div class="col-lg-3" id="make" name="make">
        <h3>Nossos canais de comunicação</h3>
        <p>
		<!--
		  <span class="icon icon-home"></span> Some Address 987, NY<br/>
          <span class="icon icon-phone"></span> +34 9884 4893 <br/>
          <span class="icon icon-mobile"></span> +34 59855 9853 <br/>
          <span class="icon icon-envelop"></span> <a href="#"> conta@example.com</a> <br/>
		-->
          <span class="icon icon-youtube"></span> <a href="#"> DevHouseFamily </a> <br/>
          <span class="icon icon-instagram"></span> <a href="#"> @DevHouseFamily </a> <br/>
		  
        </p>
      </div>
      <!-- col -->

      <div class="col-lg-5">
        <h3>Faça parte!</h3>
        <p>Cadastre-se para fazer parte dessa energia, ter acesso ao grupo e a oportunidades!</p>
        <!--
		<p>O acesso será enviado para seu email.</p>
		
		<form class="contact-form php-mail-form" role="form" action="index.php" method="POST">

            <div class="form-group">
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Seu nome" data-rule="text" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            
			<div class="form-group">
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            
			<div class="form-group">
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Senha" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

			<div class="form-group">
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Repita a senha" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

			
            <div class="form-group">
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>
			
			
            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Fazer parte!</button>
            </div>

          </form>
		  -->
		  <p>
			<center><a href="./register" class="btn btn-success">Fazer parte!</a></center>
		  </p>
		  
      </div>
      <!-- col -->


    </div>
    <!-- row -->

  </div>
  <!-- container -->

<br><br>

<div id="copyrights">
  <div class="container">
    <p>

		<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">
			<img alt="Licença Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" />
		</a>
		
		<br />
		
		<span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">
			Criar grupos que se dedicam ao aprendizado de Tecnologias, Idiomas, mindfullness e Yoga.</span> 
			
			<br />
			
			A  
			<a xmlns:cc="http://creativecommons.org/ns#" href="http://devhosefamily.com" property="cc:attributionName" rel="cc:attributionURL">
				Dev House Family
			</a> 
			
			está licenciado com uma Licença 
			
			<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">
				Creative Commons - Atribuição-NãoComercial-SemDerivações 4.0 Internacional
			</a>.
			
			<br />
			
			Baseado no trabalho disponível em 
			
			<a xmlns:dct="http://purl.org/dc/terms/" href="http://devhosefamily.com" rel="dct:source">
				http://devhosefamily.com
			</a>.
			
			<br />
			
			Podem estar disponíveis autorizações adicionais às concedidas no âmbito desta licença em 
			
			<a xmlns:cc="http://creativecommons.org/ns#" href="http://devhosefamily.com" rel="cc:morePermissions">
				http://devhosefamily.com
			</a>.
		
		<br />

		<strong>Dev House Family</strong>
    </p>
    <div class="credits">
      
    
    </div>
  </div>
</div>
<!-- / copyrights -->


<!-- / copyrights -->

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/php-mail-form/validate2.js"></script>
<script src="lib/easing/easing.min.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

</body>
</html>
