<?php

namespace App\Http\Controllers;

use App\Models\AtividadeCarrossel;
use App\Models\Pagina;

class ExtracurricularController extends Controller
{

    private $pagina;

    public function __construct(Pagina $pagina)
    {
        $this->pagina = $pagina;
    }

    public function index()
    {

        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;

        // $pagina = $this->pagina->find(5);

        // $atividades = AtividadeCarrossel::all();

        // return view('extracurricular.index', compact('pagina', 'atividades'));
    }
}
