<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Http\Request;

class PoliticaDePrivacidadeController extends Controller
{
    private $pagina;

    public function __construct(Pagina $pagina)
    {
        $this->pagina = $pagina;
    }

    public function index()
    {
        $pagina = $this->pagina->find(8);

        return view('politicadeprivacidade.index', compact('pagina'));
    }
}
