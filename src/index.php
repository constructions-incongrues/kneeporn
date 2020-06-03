<?php
$lines = file(__DIR__.'/data/headlines.txt');
$text = $lines[array_rand($lines)];
$sounds = glob(__DIR__.'/sound/*.mp3');
$i = 0;
?>
<html>
	<!-- C'est sans conteste le plus beau site que j'ai jamais programmé -->
	<head>
		<title>Knee Porn</title>
		<meta property="og:description" content="Pour une vengeance rétroactive de 4000 ans" />
		<style>
			@import 'fonts/font.css';
			@import 'css/default.css';
		</style>
		<script>
			var answer = window.prompt('Tapez "GENOU" pour continuer');
			if (answer.toLowerCase() == 'prout') {
				alert('VOUS ÊTES INTOLÉRANT⋅E AU LACTOSE, MISTER BOND 🍸');
			}
		</script>
	</head>

	<body>
		<h1>Welcome to my papage</h1>
		<h2>“<?php echo trim($text) ?>”</h2>

		<h4>
			<a href="images/manifesto.png">	
				<img src="images/gloireaugenou.gif" />
			</a>
		</h4>

		<h1>
			Send <a href="mailto:kneeporn@partouze-cagoule.fr" class="klinks">KNUDES</a><br>
			And I send you <a target="_blank" href="https://www.youtube.com/channel/UCpXb2DVqdX5MzF9On5Gx8yQ/videos" class="klinks">KMINES</a>
		</h1>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.0/howler.core.min.js"></script>
		<script>
		document.addEventListener("DOMContentLoaded", function() {
			var sounds = [
<?php for ($i = 1; $i <= count($sounds); $i++): ?>
				new Howl({src: [<?php echo sprintf('"sound/%d.mp3"', $i) ?>]}),
<?php endfor ?>
			];
			var klinks = document.getElementsByClassName('klinks');
			for (i in klinks.items) {
				klinks[i].addEventListener('mouseover', function(event) {
					var index = Math.floor(Math.random() * Math.floor(<?php echo count($sounds) ?>));
					var sound = sounds[index];
					sound.play();
				});
			}
		});
		</script>
	</body>
</html>

