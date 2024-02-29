<?php

namespace App\Http\Controllers;

use App\Models\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authentifier(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
        $user = utilisateur::where('login', '=', $request->login)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('login', $user->login);

                return redirect('/home')->with('status', 'Connexion avec succès');
            } else {
                return back()->with('status', 'Mot de passe invalide');
            }
        } else {
            return back()->with('status', 'Login introuvable');
        }
    }

    public function logout()
    {
        session()->flush();

        return redirect('/login');
    }
}
