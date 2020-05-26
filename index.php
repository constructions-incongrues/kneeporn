<?php
$lines = file(__DIR__.'/citations.txt');
$text = $lines[array_rand($lines)];
?>
<html>
	<!-- C'est sans conteste le plus beau site que j'ai jamais programmé -->
	<head>
		<title>Knee Porn</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.0/howler.core.min.js"></script>
		<style>
			@font-face {
				font-family: "Trickster";
 				src: url("/Trickster-master/fonts/Trickster-Reg.ttf");
			}
			html {
 				background: url(kneeporn.png) no-repeat center center fixed; 
 				-webkit-background-size: cover;
 				-moz-background-size: cover;
 				-o-background-size: cover;
  				background-size: cover;
			}
			body {
				text-align: center;
				font-size: 3em;
				cursor: url(unmessagesimple.cur), pointer;
			}
			h1 {
				color: pink;
				font-family: Trickster;
				margin: 0;
			}
			p {
				font-size: 0.3em;
			}
			h3 {
				color: lime;
			}
			cursor: url(hand.cur), pointer;
		</style>
		<script>
			var answer = window.prompt('Tapez "GENOU" pour continuer');
			if (answer.toLowerCase() == 'prout') {
				alert('VOUS ÊTES INTOLÉRANT⋅E AU LACTOSE, MISTER BOND 🍸');
			}
		</script>
		<meta property="og:description" content="Pour une vengeance rétroactive de 4000 ans" />
	</head>

	<body>
		<a href="https://www.youtube.com/channel/UCpXb2DVqdX5MzF9On5Gx8yQ/videos">
			<h1>Welcome to my page</h1>
		</a>


		<h3><?php echo $text ?></h3>
		
		<a href="manifesto.png">
			<img src="gloireaugenou.gif" />
		</a>

		<p>
			SEND <strong>KNUDES</strong> AND I SEND YOU <strong>KMINES<strong> :-*
		</p>
		<p>
			<a href="mailto:kneeporn@partouze-cagoule.fr">kneeporn@partouze-cagoule.fr</a>
		</p>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				var sound = new Howl({
      				src: ['sound.webm', 'sound.mp3']
    			});
			});
		</script>
	</body>
</html>
