<?php

require_once 'PollBot.php';

define('BOT_TOKEN', '171312785:AAHIw-JMEkIPZwiJmbry5RNeg_au2zSH_Qw');
define('BOT_WEBHOOK', 'https://majholalhovie.herokuapp.com/');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');

if (php_sapi_name() == 'cli') {
  if ($argv[1] == 'set') {
    $bot->setWebhook(BOT_WEBHOOK);
  } else if ($argv[1] == 'remove') {
    $bot->removeWebhook();
  }
  exit;
}

$response = file_get_contents('php://input');
$update = json_decode($response, true);

$bot->init();
$bot->onUpdateReceived($update);
