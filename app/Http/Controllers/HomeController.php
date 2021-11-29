<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\DepoimentoCarrossel;
use App\Models\EnsinoCarrossel;
use App\Models\Post;
use App\Models\Message;
use App\Mail\ContatoMail;
use App\Models\Agenda;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{

    public function index()
    {

        $banners = Banner::where('status', 1)->get();

        // ENSINOS
        $ensinos = EnsinoCarrossel::all();

        // BLOG
        $latest_posts = Post::orderBy('id', 'desc')->limit(3)->get();
        $random_posts = Post::orderBy('id', 'desc')->inRandomOrder()->limit(3)->get();
        $last_post = Post::orderBy('id', 'desc')->limit(1)->get();

        // DEPOIMENTOS
        $depoimentos = DepoimentoCarrossel::all();


        // AGENDA
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

        $agenda =  Agenda::orderBy('data', 'ASC')->where('data', '>=', date('Y-m-d'))->limit(3)->get();

        return view('home.index', compact('banners', 'ensinos', 'last_post', 'latest_posts', 'random_posts', 'depoimentos', 'agenda', 'dias', 'mes'));
    }

    public function sendMail(Request $request)
    {
        $data = $request->all();

        Mail::to('alexandre.xavier@outlook.com')->send(new ContatoMail($data));

        if(Message::create($data)){
            $response = array('success' => 'Contato enviado com sucesso!');
        }else{
            $response = array('erro' => 'Ocorreu um erro, tente novamente.');
        }

        echo json_encode($response);
    }


    public function insertNews(Request $request)
    {
        $data = $request->all();

        if(Newsletter::create($data)){
            $response = array('success' => 'Newsletter cadastrada com sucesso!');
        }else{
            $response = array('erro' => 'Ocorreu um erro, tente novamente.');
        }

        echo json_encode($response);
  
    }
}
