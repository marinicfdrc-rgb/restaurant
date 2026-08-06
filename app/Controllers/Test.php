<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {
        echo "getenv: ";
        var_dump(getenv('DB_HOST'));

        echo "<br>_ENV: ";
        var_dump($_ENV['DB_HOST'] ?? null);

        echo "<br>CI env(): ";
        var_dump(env('DB_HOST'));
    }
}
