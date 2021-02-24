<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class TutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the sharks
        $tutores = Tutor::all();

        // load the view and pass the sharks
        return View::make('tutores.index')
            ->with('tutores', $tutores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('tutores.create');

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
                'tipoDocumento' => "required",
                'documentoIdentidad' => "required|min:3|max:10",
                'nombre' => "required|min:3|max:100",
                'primerApellido' => "required|min:3|max:100",
                'pais' => "min:3|max:100",
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
        return Redirect::to('tutores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutor = Tutor::find($id);

        return View::make('tutores.show')
            ->with('tutor', $tutor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutor = Tutor::find($id);

        return View::make('tutores.edit')
            ->with('tutor', $tutor);
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
        //NO IMPLEMENTADO
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $tutor = Tutor::find($id);
        $tutor->delete();

        return Redirect::to('tutores');
    }
}
