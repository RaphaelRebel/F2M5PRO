<?php
// Kopieer dit bestand naar config.php met je eigen gegevens
// config.php wordt niet naar Github gestuurd, wel zo veilig.
// Zet dus NOOIT in dit bestand je geheime gegevens, deze dient alleen als voorbeeld

$config = [
	'DB'       => [
<<<<<<< HEAD
=======
<<<<<<< HEAD
		'HOSTNAME' => 'localhost',
		'DATABASE' => 'comics',
		'USER'     => 'root',
		'PASSWORD' => 'root'
=======
>>>>>>> 271b8b5cd99ab141e2d6e0bbc54776816f56ccec
		'HOSTNAME' => '127.0.0.1',
		'DATABASE' => '',
		'USER'     => 'root',
		'PASSWORD' => ''
<<<<<<< HEAD
=======
>>>>>>> 08c63f215238d2015945efc7275f0cc3b961d665
>>>>>>> 271b8b5cd99ab141e2d6e0bbc54776816f56ccec
	],
	'BASE_URL' => '',  // Zet hier het pad naar de public map in, vanaf http://localhost, anders werken je routes niet!
	'PUBLIC'     => dirname( __DIR__, 2 ),  // Vanaf dit bestand 2 mappen omhoog
	'PRIVATE'  => dirname( __DIR__ )
];

return $config;
