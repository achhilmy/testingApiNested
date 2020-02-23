<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getDataByUser()
    {
        $users = User::with(['product'])->orderBy('created_at', 'DESC')->get();
    return response()->json(['data' => $users]);
    }

    public function index(){
        $users = User::with(['product', 'product.comments'])->orderBy('created_at', 'DESC')->get();
        return response()->json(['data' => $users]);

    }

}
