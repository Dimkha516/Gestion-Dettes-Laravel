<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return response()->json(['message' => 'User Registered successfully', 'user' => $user], 201);
    }
    
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            return response()->json(['message' => 'Login Successfully', 'user' => $user]);
        }

        return response()->json(['message' => 'Login ou mot de passe incorrect !'], 401);
    }

    public function logout(Request $request){
        // SUPPRIMER LA SESSION:
        Auth::logout();

        // SUPPRIMER LA SESSION ACTUELLE:
        $request->session()->invalidate();

        // GÉNÉRER UN NOUVEAU TOKEN CSRF POUR ÉVITER LES ATTAQUES CSRF
        $request->session()->regenerateToken();

        // REDIRIGER L'UTILISATEUR APRES LA DÉCONNEXION VERS UNE AUTRE PAGE:
        // return redirect("/login")->with('status', 'Déconnexion réussie');
        return 'Déconnexion réussie';
    }
}
