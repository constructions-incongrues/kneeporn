document.addEventListener("DOMContentLoaded", async function() {
	// Charger les headlines
	const headlines = [
		"1 GENOU = 40 RSA",
		"Genoux 100 frontières",
		"my knee my choice",
		"save the porn do knee-porn !",
		"knees do it better",
		"Il sait se plier à toustes tes besoins",
		"Le genou c'est la cheville de la jambe",
		"Le genou est humble",
		"Le genou est le chef de la jambe",
		"Le genou est le propre de tous",
		"for a clean revenge",
		"Le genou sait se rendre humide",
		"For a lasting revenge",
		"Pour une vengeance propre",
		"VOTEZ GENOU",
		"MES GENOUX MES CHOIX",
		"tout vient à genou à qui sait s'étendre",
		"knee is the boss of the leg"
	];

	// Afficher un headline aléatoire
	const randomHeadline = headlines[Math.floor(Math.random() * headlines.length)];
	document.getElementById('headline').textContent = `"${randomHeadline}"`;

	// Initialiser les sons
	const sounds = [
		new Howl({src: ['sound/1.mp3']}),
		new Howl({src: ['sound/2.mp3']}),
		new Howl({src: ['sound/3.mp3']}),
		new Howl({src: ['sound/4.mp3']}),
		new Howl({src: ['sound/5.mp3']})
	];

	// Ajouter les événements sur les liens
	const klinks = document.getElementsByClassName('klinks');
	for (let i = 0; i < klinks.length; i++) {
		klinks[i].addEventListener('mouseover', function(event) {
			const index = Math.floor(Math.random() * sounds.length);
			const sound = sounds[index];
			sound.play();
		});
	}
});
