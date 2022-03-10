<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Telegram\TelegramDriver;
use BotMan\BotMan\Messages\Attachments\File;
use BotMan\BotMan\Messages\Attachments\Audio;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Attachments\Location;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;


class BotController extends Controller
{
public function botEnMarcha()
{
$config = [
// Your driver-specific configuration
"telegram" => [
"token" =>  env('TELEGRAM_TOKEN'),
]
];

// DriverManager::loadDriver(TelegramDriver::class);
DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);
$botman = BotManFactory::create($config);

$botman->hears('/start', function ($bot) {
$bot->reply('Parece que funciona');

});


$botman->listen();
}
}