<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EnsinoCarrossel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class EnsinoCarrosselController extends Controller
{
    
    private $ensino;

    public function __construct(EnsinoCarrossel $ensino)
    {
        $this->ensino = $ensino;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ensinos = $this->ensino->paginate(10);

        return view('admin.ensino_carrossel.index', compact('ensinos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ensino_carrossel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $imagem = $request->file('imagem')->store('uploads', 'public');
        $data['imagem'] = $imagem;

        // Redimensionando a imagem
        $imagem = Image::make(public_path("storage/{$imagem}"))->fit(325, 325);
        $imagem->save();

        $this->ensino->create($data);

        flash('Registro criado com sucesso!')->success();
        return redirect()->route('admin.ensinos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ensino)
    {
        $ensino = $this->ensino->findOrFail($ensino);
        return view('admin.ensino_carrossel.edit', compact('ensino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ensino)
    {
        $data = $request->all();
        
        $ensino = $this->ensino->find($ensino);

        if ($request->hasFile('imagem')) {

            if (Storage::exists($ensino->imagem)) {
                Storage::delete($ensino->imagem);
            }

            $imagem = $request->file('imagem')->store('uploads', 'public');
            $data['imagem'] = $imagem;

            // Redimensionando a imagem
            $imagem = Image::make(public_path("storage/{$imagem}"))->fit(325, 325);
            $imagem->save();
        }

        $ensino->update($data);

        flash('Registro atualizado com sucesso!')->success();
        return redirect()->route('admin.ensinos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;

        $ensino = $this->ensino->find($id);

        if ($ensino->delete() == TRUE) {

            if (Storage::disk('public')->exists($ensino->imagem)) {
                Storage::disk('public')->delete($ensino->imagem);
            }

            flash('Registro removido com sucesso!')->success();
            return redirect()->route('admin.ensinos.index');
        }
    }
}
