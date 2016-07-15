<?php

set_time_limit(0);

require_once 'PollBot.php';

define('BOT_TOKEN', '171312785:AAHIw-JMEkIPZwiJmbry5RNeg_au2zSH_Qw');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
