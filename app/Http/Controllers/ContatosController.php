<?php

namespace App\Http\Controllers;

use App\Models\Contatos;
use Illuminate\Http\Request;

class ContatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Contatos::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Contatos::create([
            'nome' => $request->Nome,
            'E-mail' => $request->E_mail,
            'telefone' => $request->Telefone,
            'messagem' => $request->Messagem
            
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,Contatos $contatos)
    {
        return $contatos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contatos  $contatos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contatos $contatos)
    {
        $contatos->delete();

    }
}
