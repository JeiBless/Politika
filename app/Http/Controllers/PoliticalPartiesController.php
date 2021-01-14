<?php

namespace App\Http\Controllers;

use App\Political_party;
use Illuminate\Http\Request;

class PoliticalPartiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $political_parties = Political_party::all();

        $args = [
            'pagetitle' => 'Entidades públicas',
            'pagedescription' => 'Listado de entidades públicas que tendrán relación con las personas',
            'political_parties' => $political_parties
        ];
        return view('admin.political_parties.index', $args);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $args = [
            'pagetitle' => 'Añadir entidades',
            'pagedescription' => 'Crea una entidad'
        ];
        return view('admin.political_parties.create', $args);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $political_party = new Political_party();
        $political_party->name = $request->name;
        $political_party->initials = $request->initials;
        $political_party->save();

        return redirect('admin/political-parties')->with('flash_message', 'datos actualizados.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $political_party = Political_party::find($id);
        $args = [
            'pagetitle' => 'Añadir entidad',
            'pagedescription' => 'Actualizar una entidad',
            'political_party' => $political_party
        ];
        return view('admin.political_parties.edit', $args);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $political_party = Political_party::find($id);
        $political_party->name = $request->name;
        $political_party->initials = $request->initials;
        $political_party->save();

        return redirect('admin/political-parties')->with('flash_message', 'datos actualizados.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
