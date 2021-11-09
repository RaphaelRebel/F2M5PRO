<?php
// Kopieer dit bestand naar config.php met je eigen gegevens
// config.php wordt niet naar Github gestuurd, wel zo veilig.
// Zet dus NOOIT in dit bestand je geheime gegevens, deze dient alleen als voorbeeld

$config = [
	'DB'       => [
		'HOSTNAME' => 'localhost',
		'DATABASE' => 'transformers',
		'USER'     => 'root',
		'PASSWORD' => 'root'
	],
	'MAIL' => [
		'SMTP_HOST' => 'smtp.mailtrap.io',
		'SMTP_USER' => 'ff2a6ef4f52a5b',
		'SMTP_PASSWORD' => '91472056627af4',
		'SMTP_PORT' => '2525',
	],
	'BASE_URL' => '',  // Zet hier het pad naar de public map in, vanaf http://localhost, anders werken je routes niet!
	'BASE_HOST' => 'http://localhost:8888', // https://22503.hosts1.ma-cloud.nl
	'PUBLIC'     => dirname( __DIR__, 2 ),  // Vanaf dit bestand 2 mappen omhoog
	'PRIVATE'  => dirname( __DIR__ )
];

return $config;