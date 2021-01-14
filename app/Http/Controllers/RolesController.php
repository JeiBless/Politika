<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $roles = Role::all();

        $args = [
            'pagetitle' => 'Roles',
            'pagedescription' => 'Listado de cargos públicos',
            'roles' => $roles
        ];
        return view('admin.roles.index', $args);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $args = [
            'pagetitle' => 'Añadir roles',
            'pagedescription' => 'Crea un cargo público'
        ];
        return view('admin.roles.create', $args);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $role = new Role();
        $role->name = $request->role;
        $role->save();

        return redirect('admin/roles')->with('flash_message', 'datos actualizados.');

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
        $role = Role::find($id);
        $args = [
            'pagetitle' => 'Añadir roles',
            'pagedescription' => 'Actualizar un cargo público',
            'role' => $role
        ];
        return view('admin.roles.edit', $args);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->role;
        $role->save();

        return redirect('admin/roles')->with('flash_message', 'datos actualizados.');
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
