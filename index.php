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
					echo'<li><a href="#home" class="smoothscroll">In??cio</a></li>';
				} 
			?>
			<li> <a href="#about" class="smoothscroll"> Fa??a parte</a></li>
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
      <p style="">Fa??a parte dessa fam??lia da tecnologia</p>
      <p style=";">Viva em ambientes focados e de harmonia</p>
    </header>
  </div>
  <!-- /headerwrap -->

  <!-- ==== GREYWRAP ==== -->
  <div id="greywrap">
    <div class="row">
      <div class="col-lg-4 callout">
        <span class="icon icon-accessibility"></span>
        <h2>Cres??a como profissional</h2>
        <p>
			Ao conviver com pessoas que buscam a mesma evolu????o profissional, as mudan??as come??am a acontecer. J?? dizia a frase:
			<b>Diga-me com quem tu andas que te direi quem tu ??s</b>.
		</p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-4 callout">
        <span class="icon icon-earth"></span>
        <h2>Evolua em idiomas</h2>
        <p>
			Foco em estrat??gias pr??ticas na abord??gem da comunica????o em outros idiomas, a princ??pio ser?? focado no Ingl??s e Franc??s. 
			Depois utilizaremos o formato de sucesso para aprender outros idiomas.
		</p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-4 callout">
        <span class="icon icon-heart"></span>
        <h2>Equilibre corpo & mente</h2>
        <p>
			?? necess??rio manter a harmonia, e para isso iremos manter a pr??tica di??ria utilzando t??cnicas de Mindfullness e Yoga. 
			Al??m de boa alimenta????o e boas pr??ticas de conviv??ncia.
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
			H?? quem diga que a fam??lia em que nascemos nos ajuda e h?? quem diga que a fam??lia que nascemos nos atrapalha, mas o 
			fato ?? que n??o se escolhe a fam??lia que ir?? nascer. A Dev House Family ?? uma fam??lia diferente, pois normalmente 
			os parentes ser??o emprestados e ter??o o mesmo objetivo, ent??o n??o se surpreenda se este ente entender com mais 
			clareza suas necessidades. Sem sombra de d??vida os objetivos seriam alcan??ados de forma mais facilitadas. Na Austr??lia 
			existe a cultura de que quando os adolescentes fazem 14 anos eles v??o morar com outras pessoas, longe de suas fam??lias de 
			origem, resultado? Temos cidad??os muito mais respons??veis e adapt??veis, sem falar de ter um emocional muito mais 
			resistente!
		</p>
      </div>
      <!-- col-lg-6 -->

      <div class="col-lg-6">
        <p>
			Imagina viver em um ambiente onde a harmonia ?? cultivada diariamente, e isso ?? uma regra, sim, ?? obrigat??rio buscar 
			qualidade de vida em primeiro lugar, afinal de contas o objetivo ?? vivermos melhor cada vez mais, certo? Claro. 
			Vamos dizer que neste momento voc?? precise alugar alguma moradia, seja um studio, quarto, casa, etc. Ou que ainda 
			esteja morando em um local conturbado, seja com a fam??lia de origem ou n??o e voc?? tem conhecimentos tecnol??gicos ou 
			tem a inten????o de se inserir nesse mercado. Temos que concordar que se existe um ambiente com pessoas com o mesmo objetivo tudo 
			fica mais f??cil, harmonioso e interessante, concorda? Ent??o isso ?? a Dev House Family. Ao fazer parte, ir?? ter acesso a 
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
		A nossa uni??o al??m de proporcionar o alcance dos objetivos, torna a caminhar mais agrad??vel.
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
			?? essencial que esteja ativo, buscando sempre encontrar solu????es para os objetivos de interesse, isso quer 
			dizer que, n??o espere por outros fazerem por voc??, aja, movimente-se, mude a realidade!
        </p>
        
		<p>
			Use seu c??rebro para encontrar a solu????o, pois a estrat??gia j?? est?? aqui, voc?? precisa investir um pouco de 
			energia e ativar o modo coragem.
		</p>
        
		<p>
			N??o esque??a de ser grato a tudo, os canais de comunica????o desenvolvidos aqui s??o verdadeiros presentes de 
			oportunidades. Tendo essa consci??ncia de atitude podemos elevar nosso n??vel ao de primeiro mundo, isso mesmo, 
			um pa??s dentro de outro pa??s, sem esperar por mudan??as de sistemas arc??icos, <b>CAPTOU? Ao trabalho!<b/>
		</p>
		
      </div>
      <!-- col-lg -->
    </div>
    <!-- row -->


    <div class="row">
      <h2 class="centered">Uma casa, um laborat??rio, isso ?? evoluir.</h2>
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
          <h2>Est?? pronto para trilhar novos caminhos?</h2>
          <p>
				Se voc?? conseguiu visualizar, ent??o percebeu que ?? mais f??cil do que se imagina mudar a pr??pria realidade.
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
		Um time entra em concentra????o em um espa??o prop??cio para expandir suas habilidades.
	  </p>
    </div>
    <!-- container -->
  </section>
  <!-- section -->

  <div class="container">
    <br>
    <div class="row white centered">
      <h1 class="centered" style="color: #007bff;" >??reas da tecnologia</h1>
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
				<h4><b><a href="" class="btn btn-primary btn-lg">Gest??o</a></b></h4>
			</div>
			<!-- col-lg-3 -->

			<div class="col-lg-3 centered">
				<h4><b><a href="" class="btn btn-primary btn-lg">Neg??cios</a></b></h4>
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
			Voc?? tem duas op????es: esperar acontecer ou fazer acontecer, qual ?? o seu caminho?		
		</h3>
		
		<br><br><hr>
		
		<h1 class="centered" style="color: #007bff;" >Idiomas</h1>
		<hr>
		<div class="col-lg-6 centered">
			<a href="#collapseExample">
				<h3>English</h3>
				<img class="img" src="img/flag-ireland.png" height="60px" width="120px" alt="" title="Em homen??gem a grande parceria entre Irlandeses e Brasileiros!">
			</a>
		</div>
		
		<div class="col-lg-6 centered">
			
			<a href="#collapseExample">
				<h3>Fran??ais</h3>
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
			A estrat??gia ?? o objetivo na comunica????o, n??o adianta saber muita gram??tica se n??o consegue se comunicar. 
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
		Mantenha sua energia f??sica, mental e emocional em dia para evoluir cada vez mais.
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
      <h1 class="centered">A pr??tica expande sua capacidade.</h1>
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
          <h5>Pratique a aten????o plena.</h5>
        </div>
        <div class="col-lg-8 blog-content">
          <h2>Mindfullness</h2>
          <p>
			   A ideia ?? ensinar a ter foco no presente ??? e n??o nas expectativas para o futuro ou nos traumas do passado. 
			   Tudo atrav??s da respira????o. 
		  </p>
          <p>
			   Com f?? ou sem, a t??cnica ?? capaz de diminuir dores cr??nicas e press??o arterial, manter o c??rebro jovem (a ponto de a 
			   ci??ncia estar pesquisando sua efic??cia na preven????o do Alzheimer), evitar crises ... 
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
				Por meio de exerc??cios f??sicos como alongamentos e tor????es e t??cnicas de respira????o chamadas Pranayamas, al??m 
				de t??cnicas de medita????o, concentra????o e relaxamento, 
		  </p>
		  <p>
		        A pessoa aprende a se movimentar de forma mais consciente e tamb??m a respirar de modo mais tranquilo e profundo.
				<!--
				O Yoga ?? uma pr??tica que tem como objetivo trabalhar o corpo e a mente de forma conjunta, com exerc??cios que 
				auxiliam para o controle do estresse, ansiedade, dores no corpo e na coluna, al??m de melhorar o equil??brio e 
				promover a sensa????o de bem estar e a disposi????o.
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
      <p>Fa??a parte, para ter acesso ao movimento!</p>
      <p>As oportunidades estar??o l??, quando surgirem.</p>
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
        <p>Nosso lar ?? o nosso templo, nosso laborat??rio, nosso ref??gio, o nosso Castelo.</p>
        
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
        <h3>Nossos canais de comunica????o</h3>
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
        <h3>Fa??a parte!</h3>
        <p>Cadastre-se para fazer parte dessa energia, ter acesso ao grupo e a oportunidades!</p>
        <!--
		<p>O acesso ser?? enviado para seu email.</p>
		
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
			<img alt="Licen??a Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" />
		</a>
		
		<br />
		
		<span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">
			Criar grupos que se dedicam ao aprendizado de Tecnologias, Idiomas, mindfullness e Yoga.</span> 
			
			<br />
			
			A  
			<a xmlns:cc="http://creativecommons.org/ns#" href="http://devhosefamily.com" property="cc:attributionName" rel="cc:attributionURL">
				Dev House Family
			</a> 
			
			est?? licenciado com uma Licen??a 
			
			<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">
				Creative Commons - Atribui????o-N??oComercial-SemDeriva????es 4.0 Internacional
			</a>.
			
			<br />
			
			Baseado no trabalho dispon??vel em 
			
			<a xmlns:dct="http://purl.org/dc/terms/" href="http://devhosefamily.com" rel="dct:source">
				http://devhosefamily.com
			</a>.
			
			<br />
			
			Podem estar dispon??veis autoriza????es adicionais ??s concedidas no ??mbito desta licen??a em 
			
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
