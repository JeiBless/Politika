<?php

namespace App\Http\Controllers;

use App\Crime;
use Illuminate\Http\Request;

class CrimesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $crimes = Crime::all();

        $args = [
            'pagetitle' => 'Delitos',
            'pagedescription' => 'Listado de delitos',
            'crimes' => $crimes
        ];
        return view('admin.crimes.index', $args);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $args = [
            'pagetitle' => 'Añadir delito',
            'pagedescription' => 'Crea un delito'
        ];
        return view('admin.crimes.create', $args);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $crime = new Crime();
        $crime->name = $request->name;
        $crime->description = $request->description;
        $crime->save();

        return redirect('admin/crimes')->with('flash_message', 'datos actualizados.');
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
        $crime = Crime::find($id);
        $args = [
            'pagetitle' => 'Añadir delito',
            'pagedescription' => 'Actualizar delito',
            'crime' => $crime
        ];
        return view('admin.crimes.edit', $args);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $crime = Crime::find($id);
        $crime->name = $request->name;
        $crime->description = $request->description;
        $crime->save();

        return redirect('admin/crimes')->with('flash_message', 'datos actualizados.');
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
