<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use App\Models\Visita;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{

    private $pagina;

    public function __construct(Pagina $pagina)
    {
        $this->pagina = $pagina;
    }

    public function index()
    {

        $pagina = $this->pagina->find(6);

        return view('matricula.index', compact('pagina'));
    }

    public function sendMail(Request $request) 
    {
        $data = $request->all();

        //Mail::to('contato@site.com.br')->send(new VisitaMail($data));

        if(Visita::create($data)){
            flash('Contato enviado com sucesso!')->success();
        }else{
            flash('Ocorreu um erro, tente novamente.')->error();
        }
		
        return redirect()->route('matricula.index');
    }

}
