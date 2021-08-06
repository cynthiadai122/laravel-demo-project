<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Account;

class Accounts extends Controller
{
    public function list($id){
        return Account::find($id);
    }
}