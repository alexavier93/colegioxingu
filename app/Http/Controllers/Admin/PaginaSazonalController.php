<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaginaSazonal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PaginaSazonalController extends Controller
{

    public function __construct(PaginaSazonal $pagina)
    {
        $this->pagina = $pagina;
    }

    public function index()
    {
        $paginas = $this->pagina->all();

        return view('admin.sazonais.index', compact('paginas'));
    }


    public function create()
    {
        return view('admin.sazonais.create');
    }

    public function store(Request $request)
    {

        if (!empty($request->texto)) {

            $data = $request->all();

            $slug = Str::slug($request->titulo, '-');
            $data['slug'] = $slug;

            $banner = $request->file('banner')->store('uploads/banners', 'public');
            $data['banner'] = $banner;

            // Redimensionando a imagem
            $banner = Image::make(public_path("storage/{$banner}"))->fit(1920, 500);
            $banner->save();

            $this->pagina->create($data);

            flash('Registro criado com sucesso!')->success();
            return redirect()->route('admin.sazonais.index');
        } else {
            flash('Texto é obrigatório')->error();
            return redirect()->route('admin.sazonais.create');
        }
    }

    public function edit($pagina)
    {
        $pagina = $this->pagina->findOrFail($pagina);
        return view('admin.sazonais.edit', compact('pagina'));
    }


    public function update(Request $request, $pagina)
    {

        $data = $request->all();

        $pagina = $this->pagina->find($pagina);

        $slug = Str::slug($request->titulo, '-');
        $data['slug'] = $slug;

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
        return redirect()->route('admin.sazonais.edit', ['pagina' => $pagina]);
    }

    public function delete(Request $request)
    {
        $id = $request->id;

        $pagina = $this->pagina->find($id);

        if ($pagina->delete() == TRUE) {

            if (Storage::disk('public')->exists($pagina->banner)) {
                Storage::disk('public')->delete($pagina->banner);
            }

            flash('Registro removido com sucesso!')->success();
            return redirect()->route('admin.sazonais.index');
        }
    }
}
