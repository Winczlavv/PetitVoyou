<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<link rel="shortcut icon" href="src/img/icons.png" type="image/x-icon">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<title>Paul Lurin | Le Plubo</title>
</head>
<body class="body">
<div class="transition" style="position: fixed;left:0;top:0;width: 100%;height: 100%;background: white;z-index: 1;transition: 1s; opacity:80%">
	<img src="src/img/loading.png" style="position: absolute; transform:translate(-50%,-50%);left:50%;top:50%;width:5%;animation: rotate 1.5s infinite linear ">
	<div class="aaa" style ="opacity: 0; transition: 0.5s;top:50%">
		<h2 style="text-align:center"> Compétences </h2>
		<p> HTML </p>
		<progress id="avancement" value="85" max="100"></progress>
		<br/>
		<p> CSS </p>
		<progress id="avancement" value="80" max="100"></progress>
		<br/>
		<p> PhP </p>
		<progress id="avancement" value="15" max="100"></progress>
		<br/>
		<p> JavaScript </p>
		<progress id="avancement" value="25" max="100"></progress>
		<br/>
		<p> Python </p>
		<progress id="avancement" value="25" max="100"></progress>
		<br/>
		<p> Photoshop </p>
		<progress id="avancement" value="40" max="100"></progress>
		<br/>
		<p> Wordpress </p>
		<progress id="avancement" value="60" max="100"></progress>
		<br/>
		<p> PrestaShop </p>
		<progress id="avancement" value="75" max="100"></progress>
		<br/>


	</div>
</div>
<div class="menu" id="menu" style="position: fixed;width: 100%;height: var(--heightmenu);background: transparent;z-index: 99;transition: 0.5s;">
	<ul class="downscroll">
		<li class="not_search"><a href="index.php"><p>Home</p></a></li>
		<li class="not_search"><a href="test.php"><p>Portfolio</p></a></li>
		<li class="not_search"><a href="pannier/"><p>Me contacter</p></a></li>
	</ul>
</div>
<div>
</div>
<div class="cuting top">
	<img class="cute" src="src/img/cute.png">	
</div>
<div class="container">
	<div class="sliders">
		<div id="back"></div>
		<div id="next"></div>
		<div class="slider">
			<ul id="slide">
				<li><img src="src/img/slide1.jpg"></li>
				<li><img src="src/img/slide2.jpg"></li>
			</ul>
			<div id="slide_a"></div>
		</div>
	</div>
</div>
<br/>
<br/>
<br/>
<br/>	
<div class="barrecomp"> 
	<p> CSS </p>
	<div class="progress-bar blue"></div>
</div>
<!--
<div class="cuting">
	<img class="cute" src="src/img/cute.png">	
</div>
<div class="souscontainer">
	<div class="offres">
		<h2>Catégories</h2>
		<div class="cuter minimal">
			<img class="cute" src="src/img/cute.png">	
		</div>
		<div class="contenent_offre">
			<a href="search.php?search=gaming&type=category"><img src="src/img/slide1.jpg"></a>
			<br/>
			<a href="search.php?search=ecouteur&type=category"><img src="src/img/slide2.jpg"></a>

		</div>
		<div class="cuter minimal">
			<img class="cute" src="src/img/cute.png">
		</div>
	</div>
</div>
  ssss
<div class="cuting">
	<img class="cute" src="src/img/cute.png">	
</div>
<meta charset="utf-8">
--> 
<div class="footer">
	<ul>
		<h3>Informations</h3>
		<li><a href="#">Crédits</a></li>
		<li><a href="#">Paiement en ligne</a></li>
		<li><a href="#">Droits du site</a></li>
	</ul>
	<ul class="">
		<h3>Nos réseaux</h3>
		<div class="reseaux" style="display: flex;position: absolute;transform: translate(-50%);left: 50%;">
			<li style="padding: 1vh;"><a href="https://www.facebook.com/joris.leroux.14" onclick="window.open(this.href); return false;"><i class="fab fa-facebook-f fa-2x"></i></a></li>
			<li style="padding: 1vh;"><a href="https://twitter.com/Elbathner" onclick="window.open(this.href); return false;"><i class="fab fa-twitter fa-2x"></i></a></li>
			<li style="padding: 1vh;"><a href="mailto:contact@elbathner.com"><i class="far fa-envelope fa-2x"></i></a></li>
		</div>		
	</ul>
	<ul class="ul_top_plus" style="padding: 0 0 3vh 0">
		<h3>Besoin d'aide</h3>
		<li><a href="#">Nous contacter</a></li>
		<li><a href="#">Problème de connexion</a></li>
	</ul>
	<p class="infodev">FitShirt | developpé par Paul Lurin |</p>
</div>
<div id="cover"></div>
<script type="text/javascript" src="src/js/main.js"></script>
<script type="text/javascript" src="src/js/anim_menu.js"></script>
<script type="text/javascript">
	var trans = document.querySelector('.transition');	
	var trans_img = document.querySelector('.transition img');
	var trans_aaa = document.querySelector('.transition .aaa');
	setTimeout(function(){
		trans.style.width = '25vh';
		trans.style.opacity = '100%';

		setTimeout(function(){
			trans_img.style.display = 'none';
			trans_aaa.style.opacity = '1';

		},800);
	},750);
</script>
</body>
</html>

Voici mon protfolio éoqbn ds^Paul Lurin JKebnsuis sur 



