<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Account;

class Accounts extends Controller
{
    public function list(){
        return var_dump(Account::all());
    }
}