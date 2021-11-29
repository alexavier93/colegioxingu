<?php

namespace App\Http\Controllers;

use App\Models\Agenda;

class AgendaController extends Controller
{

    private $agenda;

    public function __construct(Agenda $agenda)
    {
        $this->agenda = $agenda;
    }

    public function index()
    {
        
        $dias = array(
            'Sun' => 'Dom',
            'Mon' => 'Seg',
            'Tue' => 'Ter',
            'Wed' => 'Qua',
            'Thu' => 'Qui',
            'Fri' => 'Sex',
            'Sat' => 'Sáb'
        );
        
        $mes = array(
            'Jan' => 'Jan',
            'Feb' => 'Fev',
            'Mar' => 'Mar',
            'Apr' => 'Abr',
            'May' => 'Mai',
            'Jun' => 'Jun',
            'Jul' => 'Jul',
            'Aug' => 'Ago',
            'Nov' => 'Nov',
            'Sep' => 'Set',
            'Oct' => 'Out',
            'Dec' => 'Dez'
        );

        $agenda = $this->agenda->orderBy('data', 'ASC')->where('data', '>=', date('Y-m-d'))->paginate(10);

        
        return view('agenda.index', compact('agenda', 'dias', 'mes'));
    }



}
