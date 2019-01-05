<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    private $model;

    public function __construct(Client $model)
    {
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->model->get();

        return view('site/home', [
            'data' => $response
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = $this->model->create([
            'name' => $request->name,
            'name_animal' => $request->name_animal,
            'phone' => $request->phone,
            'obs' => $request->obs,
        ]);
        if ($client) {
            return redirect()->route('create')->with('sucesso', $client->name . ' salvo com sucesso!');
        }

        return redirect()->route('create')->with('erro', 'Erro ao salvar !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = $this->model->find($id);

        return view('site/show', [
            'data' => $response
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response = $this->model->find($id);

        return view('site/create', [
            'data' => $response
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $response = $this->model->find($id)->update([
            'name' => $request->name,
            'name_animal' => $request->name_animal,
            'phone' => $request->phone,
            'obs' => $request->obs,
        ]);

        if ($response) {
            return redirect()->route('edit',$id)->with('sucesso', $request->name . ' alterado com sucesso!');
        }

        return redirect()->route('edit', $id)->with('erro', 'Erro ao alterar !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = $this->model->find($id)->delete();

        if ($response) {
            return redirect()->route('home')->with('sucesso', 'Excluido com sucesso!');
        }

        return redirect()->route('home')->with('erro', 'Erro ao excluir !!!');
    }
}
