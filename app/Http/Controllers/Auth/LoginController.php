<?php

namespace App\Http\Controllers\Auth;

use App\Constants\Messages;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Providers\RouteServiceProvider;
use App\Providers\UtilServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;


// RouteServiceProvider

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        return view("security/signin");
    }

    public function signin(Request $request){
        // On définit nos règles de validation des champs du formulaire
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if(Auth::attempt($validated)){
            $request->session()->regenerate();;
            session()->flash('notification', [
                'type' => Messages::TYPE_SUCCES,
                'title' => 'Succès',
                'message' => Messages::SUCCES_LOGIN,
            ]);
            return redirect()->intended(route("dashboard"));
        }else{
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'title' => 'Érreur',
                'message' => Messages::DATA_ERROR,
            ]);
            return back()->onlyInput('email');
        }
    }


}
