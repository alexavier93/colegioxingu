<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pagina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PaginaController extends Controller
{
    public function __construct(Pagina $pagina)
    {
        $this->pagina = $pagina;
    }
    
    public function index()
    {

        $paginas = $this->pagina->paginate(10);


        return view('admin.paginas.index', compact('paginas'));

    }


    public function edit($pagina)
    {
        $pagina = $this->pagina->findOrFail($pagina);
        return view('admin.paginas.edit', compact('pagina'));
    }


    public function update(Request $request, $pagina)
    {

        $data = $request->all();

        $pagina = $this->pagina->find($pagina);

        if ($request->hasFile('banner')) {

            if (Storage::disk('public')->exists($pagina->banner)) {
                Storage::disk('public')->delete($pagina->banner);
            }

            $banner = $request->file('banner')->store('uploads/banners', 'public');
            $data['banner'] = $banner;

            // Redimensionando a imagem
            $banner = Image::make(public_path("storage/{$banner}"))->fit(1920, 500);
            $banner->save();
        }

        $pagina->update($data);

        flash('Registro atualizado com sucesso!')->success();
        return redirect()->route('admin.paginas.edit', ['pagina' => $pagina]);
    }

}
