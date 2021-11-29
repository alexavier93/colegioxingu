<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visita;
use Illuminate\Http\Request;

class VisitaController extends Controller
{
    private $visita;

    public function __construct(Visita $visita)
    {
        $this->visita = $visita;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitas = $this->visita->simplePaginate(10);

        return view('admin.visitas.index', compact('visitas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($visita)
    {
        $visita = $this->visita->findOrFail($visita);
        return view('admin.visitas.show', compact('visita'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {

        $id = $request->id;

        $visita = $this->visita->findOrFail($id);
	    $visita->delete();

	    flash('Mensagem excluída com sucesso!')->success();
	    return redirect()->route('admin.visitas.index');
    }
}
