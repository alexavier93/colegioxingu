<?php

namespace App\Http\Controllers;

use App\Models\Pagina;

class InstitucionalController extends Controller
{

    private $pagina;

    public function __construct(Pagina $pagina)
    {
        $this->pagina = $pagina;
    }

    public function index()
    {

        $pagina = $this->pagina->find(4);

        return view('institucional.index', compact('pagina'));
    }
    
}
