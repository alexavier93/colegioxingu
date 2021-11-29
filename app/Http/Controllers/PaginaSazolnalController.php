<?php

namespace App\Http\Controllers;

use App\Models\PaginaSazonal;
use Illuminate\Http\Request;

class PaginaSazolnalController extends Controller
{

    private $pagina;

    public function __construct(PaginaSazonal $pagina)
    {
        $this->pagina = $pagina;
    }

    public function pagina($pagina)
    {

        $pagina = $this->pagina->where('slug', $pagina)->firstOrFail();        

        return view('sazonais.page', compact('pagina'));

    }

}
