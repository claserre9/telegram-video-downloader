<?php

use danog\MadelineProto\API;
use danog\MadelineProto\Settings\AppInfo;

require __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
$dotenv->safeLoad();

try {
	$channelName = $_ENV['TELEGRAM_CHANNEL'];
	$limit = 100;
	$lastMessageId = 0;

	$settings = (new AppInfo)
		->setApiId($_ENV['TELEGRAM_API_ID'])
		->setApiHash($_ENV['TELEGRAM_API_HASH']);

	$MadelineProto = new API('session.madeline', $settings);
	$MadelineProto->start();

	do {
		$messages = $MadelineProto->messages->getHistory(['peer' => $channelName, 'offset_id' => $lastMessageId, 'limit' => $limit]);

		foreach ($messages['messages'] as $message) {
			if (isset($message['media'])) {

				if ($message['media']['_'] === 'messageMediaPhoto' || $message['media']['_'] === 'messageMediaDocument') {
					$file = $MadelineProto->downloadToDir($message['media'], __DIR__."/../");
				}
			}
			$lastMessageId = $message['id'];
		}
	} while (count($messages['messages']) >= $limit);

} catch (\danog\MadelineProto\Exception $e) {
	echo $e->getMessage();
}