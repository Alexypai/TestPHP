<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use Tests\TestCase;

final class TestAction
{

    public static function getTest($nombre){
        $result = $nombre * 5;
        return $result;
    }

}