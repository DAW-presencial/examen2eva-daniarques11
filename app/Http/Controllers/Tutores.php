<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agreement;
use App\Models\Company;
use App\Models\Person;
use App\Models\Tutor;
use App\Models\WorkingCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tutores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate(
            [
                'nombreEmpresa' => "required|min:3|max:100",
                'tipoDocumento' => "required|in:DNI,NIF",
                'documentoIdentidad' => "required|min:3|max:10",
                'nombre' => "required|min:3|max:100",
                'primerApellido' => "required|min:3|max:100",
                'segundoApellido' => "min:3|max:100",
                'pais' => "min:3|max:100",
                'provincia' => "min:3|max:100",
                'municipio' => "min:3|max:100",
                'estado' => "in:activo,inactivo",
                'telefono' => "required|min:3|max:15",
                'email' => "required|email",
            ]
        );
        
        DB::beginTransaction();
        try {
            $parameters = $request->all();
            Tutor::create($parameters);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
