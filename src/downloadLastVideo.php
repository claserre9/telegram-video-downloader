<?php

use danog\MadelineProto\API;
use danog\MadelineProto\Settings\AppInfo;

require __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
$dotenv->safeLoad();

try {
	$settings = (new AppInfo)
		->setApiId($_ENV['TELEGRAM_API_ID'])
		->setApiHash($_ENV['TELEGRAM_API_HASH']);

	$MadelineProto = new API('session.madeline', $settings);
	$MadelineProto->start();

	$channelName = 'filmhaitien';

	$messages = $MadelineProto->messages->getHistory(['peer' => $channelName, 'limit' => 100]);

	foreach ($messages['messages'] as $message) {
		if (isset($message['media']) && $message['media']['_'] === 'messageMediaDocument') {
			$file = $MadelineProto->downloadToDir($message['media'], __DIR__."/../");
			break; // Remove this line to download all videos
		}
	}


} catch (\danog\MadelineProto\Exception $e) {
}