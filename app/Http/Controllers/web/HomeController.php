<?php

namespace App\Http\Controllers\web;

use App\Mail\ContatoMailable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        return view('web.home');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'telefone' => 'required',
        //     'email' => 'required|email',
        //     'mensagem' => 'required'
        // ]);
        
        // dd($request->all());
        Mail::to('gabriel.costa@teste.com.br')
            ->send(new ContatoMailable($request->all()));
        
        session()->flash('info', 'Mensagem enviada!');
        
        return redirect()->route('contato.home');
        
    }
}
