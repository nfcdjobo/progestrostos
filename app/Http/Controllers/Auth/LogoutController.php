<?php

namespace App\Http\Controllers\Auth;

use App\Constants\Messages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LogoutController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function logout(){
        Auth::logout();
        session()->flash('notification', [
            'type' => Messages::TYPE_SUCCES,
            'title' => 'Succès',
            'message' => Messages::SUCCES_LOGOUT,
        ]);
        return to_route("index");
    }
}
