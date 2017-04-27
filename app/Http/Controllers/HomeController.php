<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Mockery\CountValidator\Exception;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form_create');
    }

    /**
     * Success the created form of people.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        try {
            $user = User::create($request->all());
            return view('form_create_success', compact('user'));
        } catch (Exception $e){
            return redirect('/')->withInputs($request->all())->withErrors(["Falha ao Cadastrar"]);
        }
    }
}
