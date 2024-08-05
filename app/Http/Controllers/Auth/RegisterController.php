<?php

namespace App\Http\Controllers\Auth;

use App\Constants\Messages;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Providers\UtilServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function signup(){
        //if(!User::get()->count()){
            return view("security/signup");
        //}else{
         //   return view("security.signin");
        //}
    }

    public function register(Request $request)
    {
        $redirectPath = route("index"); // Default redirect path

        try {
            $validatedData = $request->validate([
                "fullname" => ["required", "between:3,100"],
                "email" => ["required", "email", "unique:users"],
                "password" => ["required", "string", "min:4", "confirmed"]
            ]);

            if ($validatedData) {
                if (User::count() == 0) {
                    $fetchRole = DB::table("roles")->where("name", "=", "GESTIONNAIRE")->first()->id;
                    $newUser = new User();
                    $newUser->fullname = $validatedData["fullname"];
                    $newUser->password = Hash::make($validatedData["password"]);
                    $newUser->email = $validatedData["email"];
                    $newUser->role_id = $fetchRole;
                    $newUser->save();

                    session()->flash('notification', [
                        'type' => Messages::TYPE_SUCCES,
                        'title' => 'Succès',
                        'message' => Messages::SUCCES_ACCOUNT,
                    ]);
                } else {
                    session()->flash('notification', [
                        'type' => Messages::TYPE_ERROR,
                        'title' => 'Erreur',
                        'message' => Messages::ERROR_ACCOUNT,
                    ]);
                    $redirectPath = redirect()->back()->getTargetUrl();
                }
            }
        } catch (\Exception $e) {
            if ($e instanceof \Illuminate\Validation\ValidationException) {
                $validationErrors = implode('<br><br>', $e->validator->errors()->all());
                session()->flash('notification', [
                    'type' => Messages::TYPE_ERROR,
                    'title' => 'Échec de la validation',
                    'message' => Messages::ERROR_INPUT . $validationErrors,
                ]);
                $redirectPath = redirect()->back()->withInput()->withErrors($e->validator)->getTargetUrl();
            } else {
                session()->flash('notification', [
                    'type' => Messages::TYPE_ERROR,
                    'title' => 'Érreur',
                    'message' => Messages::ERROR_ACCOUNT_TRY,
                ]);
                $redirectPath = redirect()->back()->withInput()->getTargetUrl();
            }
        }

        return redirect($redirectPath);
    }

}

