<?php
require "vendor/autoload.php";
$bugsnag = Bugsnag\Client::make('cba0ae264b9e7f41c222f6b46ac2bd0c');
Bugsnag\Handler::register($bugsnag);?>