<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function ask() 
    {
        $question = __('How many users do we have with email ending .org?');
        echo '問題：' . $question . PHP_EOL;
        $answer = DB::ask($question);
        echo '回覆：' . $answer . ' (';
        $query = DB::askForQuery($question);
        echo $query . ')' . PHP_EOL;
    }
}
