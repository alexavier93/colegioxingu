<?php

namespace App\Http\Controllers;

use App\Models\EspacoCarrossel;
use App\Models\Pagina;

class QuemSomosController extends Controller
{

    private $pagina;

    public function __construct(Pagina $pagina)
    {
        $this->pagina = $pagina;
    }

    public function index()
    {

        $pagina = $this->pagina->find(1);

        $espacos = EspacoCarrossel::all();

        return view('quemsomos.index', compact('pagina', 'espacos'));
    }
}
