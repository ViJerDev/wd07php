<?php

    include_once __DIR__."/../vendor/autoload.php";
    include_once __DIR__."/../src/web_routes.php";
    use \App\Core\Debugger;
    echo "<br>";

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
    $dotenv->safeLoad();

    Debugger::pre(\App\Models\User::findById(1));
Debugger::pre(\App\Models\User::findById(1));
Debugger::pre(\App\Models\User::findById(1));