<?php

use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\AtividadeCarrossel;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\DepoimentoCarrosselController;
use App\Http\Controllers\Admin\EnsinoCarrosselController;
use App\Http\Controllers\Admin\EspacoCarrosselController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\MidiaController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\PaginaController;
use App\Http\Controllers\Admin\PaginaSazonalController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VisitaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteImovelProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/admin', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin');
Route::post('/admin/do_login', [App\Http\Controllers\Admin\AuthController::class, 'do_login'])->name('admin.do_login');
Route::get('/admin/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin/password', [App\Http\Controllers\Admin\AuthController::class, 'password'])->name('admin.password');

Route::group(['middleware' => 'auth'], function () {

    Route::prefix('admin')->name('admin.')->group(function () {

        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            Route::get('', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');
        });

        Route::resources([
            'users' => UserController::class,
            'banners' => BannerController::class,
            'posts' => PostController::class,
            'midias' => MidiaController::class,
            'agenda' => AgendaController::class,
            'files' => FileController::class,
        ]);

        // INFOS
        Route::prefix('infos')->name('infos.')->group(function () {
            Route::get('/', [InfoController::class, 'index'])->name('index');
            Route::put('/update/{info}', [InfoController::class, 'update'])->name('update');
        });

        // POSTS
        Route::prefix('files')->name('files.')->group(function () {
            Route::post('/delete', [FileController::class, 'delete'])->name('delete');
        });

        // POSTS
        Route::prefix('posts')->name('posts.')->group(function () {
            Route::post('/delete', [PostController::class, 'delete'])->name('delete');
        });

        // MIDIAS
        Route::prefix('midias')->name('midias.')->group(function () {
            Route::post('/delete', [MidiaController::class, 'delete'])->name('delete');
        });

        // AGENDA
        Route::prefix('agenda')->name('agenda.')->group(function () {
            Route::post('/delete', [AgendaController::class, 'delete'])->name('delete');
        });

        // BANNERS
        Route::prefix('banners')->name('banners.')->group(function () {
            Route::post('/delete', [BannerController::class, 'delete'])->name('delete');
        });

        // USUÁRIOS
        Route::prefix('users')->name('users.')->group(function () {
            Route::post('/delete', [UserController::class, 'delete'])->name('delete');
        });

        // PAGINAS
        Route::prefix('paginas')->name('paginas.')->group(function () {
            Route::get('/', [PaginaController::class, 'index'])->name('index');
            Route::get('/edit/{pagina}', [PaginaController::class, 'edit'])->name('edit');
            Route::put('/update/{pagina}', [PaginaController::class, 'update'])->name('update');
        });

        // CARROSSEL SAZONAL
        Route::prefix('sazonais')->name('sazonais.')->group(function () {
            Route::get('/', [PaginaSazonalController::class, 'index'])->name('index');
            Route::get('/create', [PaginaSazonalController::class, 'create'])->name('create');
            Route::post('/store', [PaginaSazonalController::class, 'store'])->name('store');
            Route::get('/edit/{pagina}', [PaginaSazonalController::class, 'edit'])->name('edit');
            Route::put('/update/{pagina}', [PaginaSazonalController::class, 'update'])->name('update');
            Route::post('/delete', [PaginaSazonalController::class, 'delete'])->name('delete');
        });

        // CARROSSEL DEPOIMENTOS
        Route::prefix('depoimentos')->name('depoimentos.')->group(function () {
            Route::get('/', [DepoimentoCarrosselController::class, 'index'])->name('index');
            Route::get('/create', [DepoimentoCarrosselController::class, 'create'])->name('create');
            Route::post('/store', [DepoimentoCarrosselController::class, 'store'])->name('store');
            Route::get('/edit/{depoimento}', [DepoimentoCarrosselController::class, 'edit'])->name('edit');
            Route::put('/update/{depoimento}', [DepoimentoCarrosselController::class, 'update'])->name('update');
            Route::post('/delete', [DepoimentoCarrosselController::class, 'delete'])->name('delete');
        });

        // CARROSSEL ENSINOS
        Route::prefix('ensinos')->name('ensinos.')->group(function () {
            Route::get('/', [EnsinoCarrosselController::class, 'index'])->name('index');
            Route::get('/create', [EnsinoCarrosselController::class, 'create'])->name('create');
            Route::post('/store', [EnsinoCarrosselController::class, 'store'])->name('store');
            Route::get('/edit/{ensino}', [EnsinoCarrosselController::class, 'edit'])->name('edit');
            Route::put('/update/{ensino}', [EnsinoCarrosselController::class, 'update'])->name('update');
            Route::post('/delete', [EnsinoCarrosselController::class, 'delete'])->name('delete');
        });

        // CARROSSEL ESPAÇOS
        Route::prefix('espacos')->name('espacos.')->group(function () {
            Route::get('/', [EspacoCarrosselController::class, 'index'])->name('index');
            Route::get('/create', [EspacoCarrosselController::class, 'create'])->name('create');
            Route::post('/store', [EspacoCarrosselController::class, 'store'])->name('store');
            Route::get('/edit/{espaco}', [EspacoCarrosselController::class, 'edit'])->name('edit');
            Route::put('/update/{espaco}', [EspacoCarrosselController::class, 'update'])->name('update');
            Route::post('/delete', [EspacoCarrosselController::class, 'delete'])->name('delete');
        });

        // CARROSSEL ATIVIDADE
        Route::prefix('atividades')->name('atividades.')->group(function () {
            Route::get('/', [AtividadeCarrossel::class, 'index'])->name('index');
            Route::get('/create', [AtividadeCarrossel::class, 'create'])->name('create');
            Route::post('/store', [AtividadeCarrossel::class, 'store'])->name('store');
            Route::get('/edit/{atividade}', [AtividadeCarrossel::class, 'edit'])->name('edit');
            Route::put('/update/{atividade}', [AtividadeCarrossel::class, 'update'])->name('update');
            Route::post('/delete', [AtividadeCarrossel::class, 'delete'])->name('delete');
        });


        // VISITAS
        Route::prefix('visitas')->name('visitas.')->group(function () {
            Route::get('', [VisitaController::class, 'index'])->name('index');
            Route::get('/{visita}', [VisitaController::class, 'show'])->name('show');
            Route::post('/delete', [VisitaController::class, 'delete'])->name('delete');
        });

        // MESSAGES
        Route::prefix('messages')->name('messages.')->group(function () {
            Route::get('', [MessageController::class, 'index'])->name('index');
            Route::get('/{message}', [MessageController::class, 'show'])->name('show');
            Route::post('/delete', [MessageController::class, 'delete'])->name('delete');
        });

        // NEWSLETTER
            Route::prefix('newsletters')->name('newsletters.')->group(function () {
            Route::get('', [NewsletterController::class, 'index'])->name('index');
            Route::post('/delete', [NewsletterController::class, 'delete'])->name('delete');
        });

        Route::prefix('upload')->name('upload.')->group(function () {
            Route::post('/imageUpload', [UploadController::class, 'imageUpload'])->name('imageUpload');
            Route::post('/deleteImage', [UploadController::class, 'deleteImage'])->name('deleteImage');
        });
    });
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/insertNews', [App\Http\Controllers\HomeController::class, 'insertNews'])->name('home.insertNews');
Route::post('/sendMail', [App\Http\Controllers\HomeController::class, 'sendMail'])->name('home.sendMail');

// QUEM SOMOS
Route::prefix('sobre-nos')->name('quemsomos.')->group(function () {
    Route::get('/', [App\Http\Controllers\QuemSomosController::class, 'index'])->name('index');
});

// PROPOSTA PEDAGOGICA
Route::prefix('proposta-pedagogica')->name('pedagogia.')->group(function () {
    Route::get('/', [App\Http\Controllers\PedagogiaController::class, 'index'])->name('index');
    Route::get('/etapas-de-aprendizagem', [App\Http\Controllers\PedagogiaController::class, 'etapas'])->name('etapas');
});

// INSTITUCIONAL
Route::prefix('institucional')->name('institucional.')->group(function () {
    Route::get('/', [App\Http\Controllers\InstitucionalController::class, 'index'])->name('index');
});

// EXTRACURRICULARES
Route::prefix('extracurriculares')->name('extracurricular.')->group(function () {
    Route::get('/', [App\Http\Controllers\ExtracurricularController::class, 'index'])->name('index');
});

// MATRICULAS
Route::prefix('matriculas')->name('matricula.')->group(function () {
    Route::get('/', [App\Http\Controllers\MatriculaController::class, 'index'])->name('index');
    Route::post('/sendMail', [App\Http\Controllers\MatriculaController::class, 'sendMail'])->name('sendMail');
});

// MIDIA
Route::prefix('midia')->name('midia.')->group(function () {
    Route::get('/', [App\Http\Controllers\MidiaController::class, 'index'])->name('index');
});

// CANTINA
Route::prefix('cantina-nutri')->name('cantina.')->group(function () {
    Route::get('/', [App\Http\Controllers\CantinaController::class, 'index'])->name('index');
});

// BLOG
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('index');
    Route::get('/post/{post}', [App\Http\Controllers\BlogController::class, 'post'])->name('post');
});

// MIDIA
Route::prefix('agenda')->name('agenda.')->group(function () {
    Route::get('/', [App\Http\Controllers\AgendaController::class, 'index'])->name('index');
});

// INFORMAÇÕES
Route::prefix('info')->name('sazonais.')->group(function () {
    Route::get('/{pagina}', [App\Http\Controllers\PaginaSazolnalController::class, 'pagina'])->name('pagina');
});

// CONTATO
Route::prefix('fale-conosco')->name('contato.')->group(function () {
    Route::get('/', [App\Http\Controllers\ContatoController::class, 'index'])->name('index');
    Route::post('/sendMail', [App\Http\Controllers\ContatoController::class, 'sendMail'])->name('sendMail');
    Route::post('/enviaEmail', [App\Http\Controllers\ContatoController::class, 'enviaEmail'])->name('enviaEmail');
});

// POLITICA DE PRIVACIDADE
Route::prefix('politica-de-privacidade-protecao-de-dados-pessoais')->name('politicadeprivacidade.')->group(function () {
    Route::get('/', [App\Http\Controllers\PoliticaDePrivacidadeController::class, 'index'])->name('index');
});
