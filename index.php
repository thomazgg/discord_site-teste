<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="sortcut icon" href="assets/discordlogo.png" />

		<title>Discord</title>
		
		<!-- Styles -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
		integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" 
		crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body class="">

	<section>

	<div id="progressbar"></div>
	<div id="scrollPath"></div>
	<div class="wrapper">
			<img src="assets/cookie.png" alt="">
			<div class="cookies">
			<h2>Cookies Consent</h2>
			<p>This website use cookies to ensure you get the best experience on our website.</p>
			<div class="buttons">
				<button class="item">I understand</button>
				<a href="#" class="item">Learn more</a>
			</div>
			</div>
	</div>	

		<header>
			<a href="index.php"><img src="assets/discordlogo.png" class="logo"></a>
			<div class="toggle"></div>
			<ul class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="login/login.php">Login</a></li>
				<li><a href="errorpage/error404.php">Cadastro</a></li>
				<li><a href="errorpage/error404.php">Contato</a></li>
				<li><span class="themeSwitch"></span></li>
			</ul>
		</header>
		
		<div class="content">
			<div class="textBox">
				<h2><span>Discord</span><br>Seu lugar para conversar e passar tempo junto<br></h2>
				<p>Discord é um aplicativo de voz sobre IP proprietário e gratuito, projetado inicialmente para comunidades de jogos. O aplicativo Discord está disponível para os sistemas operacionais Microsoft Windows, MacOS, Android, iOS, Linux e em navegadores da Web.</p>
					<a href="#content-area">Saber mais</a>
			</div>
			<div class="imgBox">
				<img src="assets/discord1.png">
			</div>
		</div>
		
		<ul class="sci">
			<li><a href="https://discord.gg/DJuK4KGa94" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></li>
			<li><a href="https://twitter.com/thomazvfx" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a href="https://www.youtube.com/c/uthomaz/videos" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
			<li><a href="https://www.instagram.com/uthomaz/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		</ul>

	</section>
	
	<section id="content-area">

		<div class="content-area">
		
		<img src="assets/img1.svg">

		<h3><br>Discord: como criar uma conta no computador</h3> 
		
		<p><strong><br>Passo 1: </strong>Acesse o Discord através do site oficial ou baixando a versão para desktop. </p> 

		<p><strong>Passo 2: </strong>Faça o registro na plataforma.</p> 

		<p><strong>Passo 3: </strong>Com a conta criada, o Discord oferece a opção de criar um servidor próprio. 
		É possível criar desde o início em "Create My Own" ou seguir alguns modelos preparados pela plataforma.</p>

		<img src="assets/img3.svg">

		<h3><br>Discord: como criar uma conta pelo celular</h3> 

		<p><strong><br>Passo 1: </strong>Baixe o app do Discord na Play Store ou App Store. </p>

		<p><strong>Passo 2: </strong>Abra o aplicativo e clique em "Registre-se". </p>

		<p><strong>Passo 3: </strong>Insira um nome, e-mail e senha. Em seguida, clique em "Criar uma conta". </p>

		<p><strong>Passo 4: </strong>Assim como nos computadores, o Discord irá oferecer a possibilidade de criar um servidor. Escolha entre ter o próprio ou usar os templates disponibilizados. </p>

		<img src="assets/img2.svg">

	</section>

    <!-- JavaScript Files -->

	<script>
		let themeSwitch = document.querySelector('.themeSwitch');
		let body = document.querySelector('body');
		themeSwitch.onclick = function(){
			themeSwitch.classList.toggle('active');
			body.classList.toggle('dark');
		}
		let menutoggle = document.querySelector('.toggle');
		let menu = document.querySelector('.menu');
		menutoggle.onclick = function(){
			menutoggle.classList.toggle('active');
			menu.classList.toggle('menu');
		}
	</script>

	<script type="text/javascript">
		let progress = document.getElementById('progressbar');
		let totalHeight = document.body.scrollHeight - window.innerHeight;
		window.onscroll = function(){
			let progressHeight = (window.pageYOffset / totalHeight) * 100;
			progress.style.height = progressHeight + "%";
		}
	</script>

	<script>
			let more = document.querySelectorAll('.more');
			for (let i = 0; i<more.length; i++){
				more[i].addEventListener('click', function(){
					more[i].parentNode.classList.toggle('active');          
				})
			}
	</script>

	<script>
		const cookieBox = document.querySelector(".wrapper"),
		acceptBtn = cookieBox.querySelector("button");
		acceptBtn.onclick = ()=>{
		//setting cookie for 1 month, after one month it'll be expired automatically
		document.cookie = "CookieBy=CodingNepal; max-age="+60*60*24*30;
		if(document.cookie){ //if cookie is set
			cookieBox.classList.add("hide"); //hide cookie box
		}else{ //if cookie not set then alert an error
			alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
		}
		}
		let checkCookie = document.cookie.indexOf("CookieBy=CodingNepal"); //checking our cookie
		//if cookie is set then hide the cookie box else show it
		checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
	</script>

</body>
</html>
