<?php

namespace App\Http\Controllers;

use App\Models\Pagina;

class PedagogiaController extends Controller
{

    private $pagina;

    public function __construct(Pagina $pagina)
    {
        $this->pagina = $pagina;
    }

    public function index()
    {
        $pagina = $this->pagina->find(2);

        return view('pedagogia.index', compact('pagina'));
    }

    public function etapas()
    {

        $pagina = $this->pagina->find(3);

        return view('pedagogia.etapas', compact('pagina'));
    }
}
