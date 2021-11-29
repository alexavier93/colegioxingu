<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Midia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class MidiaController extends Controller
{
    private $midia;

    public function __construct(Midia $midia)
    {
        $this->midia = $midia;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $midias = $this->midia->paginate(10);

        return view('admin.midias.index', compact('midias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.midias.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * validação do midia 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     * 
     */
    public function store(Request $request)
    {

        if(!empty($request->intro)){

            $data = $request->all();

            $data['link'] = get_link($request->link);

            $image = $request->file('image')->store('uploads', 'public');
            $data['image'] = $image;

            // Redimensionando a imagem
            $image = Image::make(public_path("storage/{$image}"))->fit(350, 300);
            $image->save();
    
            $this->midia->create($data);
    
            flash('Registro criado com sucesso!')->success();
            return redirect()->route('admin.midias.index');

        }else{
            flash('Texto é obrigatório')->error();
            return redirect()->route('admin.midias.create');
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($midia)
    {
        $midia = $this->midia->findOrFail($midia);
        return view('admin.midias.edit', compact('midia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $midia)
    {
        $data = $request->all();

        $midia = $this->midia->find($midia);

        $data['link'] = get_link($request->link);

        if ($request->hasFile('image')) {

            if (Storage::exists($midia->image)) {
                Storage::delete($midia->image);
            }

            $image = $request->file('image')->store('uploads', 'public');
            $data['image'] = $image;

            // Redimensionando a imagem
            $image = Image::make(public_path("storage/{$image}"))->fit(350, 300);
            $image->save();
        }

        $midia->update($data);

        flash('Registro atualizado com sucesso!')->success();
        return redirect()->route('admin.midias.index');
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

        $midia = $this->midia->find($id);

        if ($midia->delete() == TRUE) {

            if (Storage::disk('public')->exists($midia->image)) {
                Storage::disk('public')->delete($midia->image);
            }

            flash('Registro removido com sucesso!')->success();
            return redirect()->route('admin.midias.index');
        }
    }
}
