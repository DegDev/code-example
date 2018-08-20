<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request, App};

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
