<?php

    include "bot.php";
    $bot = new bot;
    $questions = {
        "What is your name?" => "My name is " . $bot -> getName();
        "What is your gender?" => "I am a " . $bot -> getGender();
        "What is your name?" => "My name is " . $bot -> getName();
        "What" is the price of land per area metre in Ajah" => " The average price of land at Ajah, Lagos is estimated at" . $bot -> getPrice() . "per square metre";
        "" => "Hope you fine it helpful?;
        "Yes" => "Kkndly visit our website " . $bot -> getWebsite() . "for all your property needs";
    };

    if(isset($_GET['msg'])){
        $msg = strtolower($_GET['msg']);
        $bot->hears($msg, function (bot $botty){
            global $msg;
            global $questions;
            if ($msg == 'hi' || $msg == 'hello'){
                $botty->reply("Hello there!");
            }elseif($botty->ask($msg, $questions) == ""){
                $botty->reply("Can't respond to that");
            }else{
                $botty->reply($botty->ask($msg, $questions));
            }
        }) 
    }