<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{

    private $agenda;

    public function __construct(Agenda $agenda)
    {
        $this->agenda = $agenda;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $agenda = $this->agenda->paginate(10);

        return view('admin.agenda.index', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agenda.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * validação do agenda 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     * 
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $date = str_replace('/', '-', $request->data);
        $date = date("Y-m-d", strtotime($date));
        $data['data'] = $date;

        $this->agenda->create($data);

        flash('Registro criado com sucesso!')->success();
        return redirect()->route('admin.agenda.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($agenda)
    {
        $agenda = $this->agenda->findOrFail($agenda);
        return view('admin.agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $agenda)
    {
        $data = $request->all();

        $agenda = $this->agenda->find($agenda);

        $date = str_replace('/', '-', $request->data);
        $date = date("Y-m-d", strtotime($date));
        $data['data'] = $date;

        $agenda->update($data);

        flash('Registro atualizado com sucesso!')->success();
        return redirect()->route('admin.agenda.index');
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

        $agenda = $this->agenda->find($id);

        if ($agenda->delete() == TRUE) {
            flash('Registro removido com sucesso!')->success();
            return redirect()->route('admin.agenda.index');
        }
    }
}
