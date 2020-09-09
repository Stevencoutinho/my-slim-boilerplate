<?php

use Slim\App;
use Classes\Controllers\SampleController;

return function (App $app) {
  $app->get('/', SampleController::class . ':sample');
};
