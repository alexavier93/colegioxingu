<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EspacoCarrossel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class EspacoCarrosselController extends Controller
{
    
    private $espaco;

    public function __construct(EspacoCarrossel $espaco)
    {
        $this->espaco = $espaco;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $espacos = $this->espaco->paginate(10);

        return view('admin.espaco_carrossel.index', compact('espacos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.espaco_carrossel.create');
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

        $dir = 'uploads/';
        $img_width = '750';
        $img_height = '500';
    
        if (!Storage::disk('public')->exists($dir)) {
            Storage::disk('public')->makeDirectory($dir, 0755, true, true);
        }

        $image = $request->file('imagem');

        $upload = uploadImageThumbnail($image, $dir, $img_width, $img_height);

        $data['imagem'] = $upload['image'];
        $data['thumbnail'] = $upload['thumbnail'];

        $this->espaco->create($data);

        flash('Registro criado com sucesso!')->success();
        return redirect()->route('admin.espacos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($espaco)
    {
        $espaco = $this->espaco->findOrFail($espaco);
        return view('admin.espaco_carrossel.edit', compact('espaco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $espaco)
    {
        $data = $request->all();
        
        $espaco = $this->espaco->find($espaco);

        $dir = 'uploads/';
        $img_width = '750';
        $img_height = '500';

        if ($request->hasFile('imagem')) {

            if (Storage::disk('public')->exists($espaco->imagem)) {
                Storage::disk('public')->delete($espaco->imagem);
                Storage::disk('public')->delete($espaco->thumbnail);
            }

            $image = $request->file('imagem');

            $upload = uploadImageThumbnail($image, $dir, $img_width, $img_height);

            $data['imagem'] = $upload['image'];
            $data['thumbnail'] = $upload['thumbnail'];
        }

        $espaco->update($data);

        flash('Registro atualizado com sucesso!')->success();
        return redirect()->route('admin.espacos.index');
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

        $espaco = $this->espaco->find($id);

        if ($espaco->delete() == TRUE) {

            if (Storage::disk('public')->exists($espaco->imagem)) {
                Storage::disk('public')->delete($espaco->imagem);
            }

            flash('Registro removido com sucesso!')->success();
            return redirect()->route('admin.espacos.index');
        }
    }
}
