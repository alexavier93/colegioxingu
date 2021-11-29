<?php

namespace App\Http\Controllers;

use App\Models\Pagina;

class CantinaController extends Controller
{

    private $pagina;

    public function __construct(Pagina $pagina)
    {
        $this->pagina = $pagina;
    }

    public function index()
    {
        $pagina = $this->pagina->find(7);

        return view('cantina.index', compact('pagina'));
    }

}
