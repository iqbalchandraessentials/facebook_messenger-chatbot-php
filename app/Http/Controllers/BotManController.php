<?php

namespace App\Http\Controllers;

// include 'vendor/autoload.php';

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\Drivers\Facebook\Extensions\ButtonTemplate;
use BotMan\Drivers\Facebook\Extensions\ElementButton;

class BotManController extends Controller
{
    public function index()
    {
        $config = [
            'facebook' => [
                'token' => 'EAACZCOEgMRGcBAIfHkEvJZCphyedOUmxGQ1ZBIFqoao5NfWmbLDcNuBNv7cegBIyfxR6vpZBgx9AdL0CrO555tAZCkagf6folSA28NuZBOVxAuO1RjTS8HXUg8tcTngPCPkJ88EVHkWR0AAqZCFsJYKAJZC3ebs4HsMTwJCTQUsT3qeXZAPj5deIdVhsG6wHfnRoZD',
                'app_secret' => '7503506b57f7bce03bf35e666f29937c',
                'verification' => 'stsbotmanfascon',
            ]
        ];

        // Load the driver(s) you want to use
        DriverManager::loadDriver(\BotMan\Drivers\Facebook\FacebookDriver::class);

        // Create an instance
        $botman = BotManFactory::create($config);

        // Give the bot something to listen for.
        $botman->hears('hi', function (BotMan $bot) {
            // $bot->reply('Hello yourself.');
            $bot->reply(
                ButtonTemplate::create('Silakan tekan tombol dibawah ini untuk melihat produk')
                    ->addButton(
                        ElementButton::create('mulai')
                            ->url('https://www.youtube.com/watch?v=YXwYJyrKK5A')
                    )
                    ->addButton(
                        ElementButton::create('support')
                            ->type('postback')
                            ->payload('tellmemore')
                    )
                    ->addButton(
                        ElementButton::create('scan QR code')
                            ->type('postback')
                            ->payload('tellmemore')
                    )
            );
        });

        // Start listening
        $botman->listen();

        // return view('welcome');
    }
}
