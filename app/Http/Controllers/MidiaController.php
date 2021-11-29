<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Midia;

class MidiaController extends Controller
{

    private $midia;

    public function __construct(Midia $midia)
    {
        $this->midia = $midia;
    }

    public function index()
    {

        $midias = $this->midia->paginate(3);
        
        return view('midia.index', compact('midias'));
    }
}
