<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AtividadeCarrossel as ModelsAtividadeCarrossel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AtividadeCarrossel extends Controller
{

    private $atividade;

    public function __construct(ModelsAtividadeCarrossel $atividade)
    {
        $this->atividade = $atividade;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atividades = $this->atividade->paginate(10);

        return view('admin.atividade_carrossel.index', compact('atividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.atividade_carrossel.create');
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

        /** UPLOAD DA IMAGEM **/
        $dir = 'uploads/';
        $img_width = '1000';
        $img_height = '500';
    
        if (!Storage::disk('public')->exists($dir)) {
            Storage::disk('public')->makeDirectory($dir, 0755, true, true);
        }

        $image = $request->file('imagem');

        $upload = uploadImageThumbnail($image, $dir, $img_width, $img_height);

        $data['imagem'] = $upload['image'];
        $data['thumbnail'] = $upload['thumbnail'];
        /** FIM **/

        $this->atividade->create($data);

        flash('Registro criado com sucesso!')->success();
        return redirect()->route('admin.atividades.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($atividade)
    {
        $atividade = $this->atividade->findOrFail($atividade);
        return view('admin.atividade_carrossel.edit', compact('atividade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $atividade)
    {
        $data = $request->all();
        
        $atividade = $this->atividade->find($atividade);


        /** UPLOAD DA IMAGEM **/
        $dir = 'uploads/';
        $img_width = '1000';
        $img_height = '500';

        if ($request->hasFile('imagem')) {

            if (Storage::disk('public')->exists($atividade->imagem)) {
                Storage::disk('public')->delete($atividade->imagem);
                Storage::disk('public')->delete($atividade->thumbnail);
            }

            $image = $request->file('imagem');

            $upload = uploadImageThumbnail($image, $dir, $img_width, $img_height);

            $data['imagem'] = $upload['image'];
            $data['thumbnail'] = $upload['thumbnail'];
        }
         /** FIM **/

        $atividade->update($data);

        flash('Registro atualizado com sucesso!')->success();
        return redirect()->route('admin.atividades.index');
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

        $atividade = $this->atividade->find($id);

        if ($atividade->delete() == TRUE) {

            if (Storage::disk('public')->exists($atividade->imagem)) {
                Storage::disk('public')->delete($atividade->imagem);
            }

            flash('Registro removido com sucesso!')->success();
            return redirect()->route('admin.atividades.index');
        }
    }

}
