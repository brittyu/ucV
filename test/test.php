<?php

require_once 'config.php';
require_once __DIR__ . '/../vendor/autoload.php';

use UcV\Client;

$mobile = '13267204263';

$client = new Client();

$ret = $client->ucUserCheckmobile($mobile);

var_dump($ret);