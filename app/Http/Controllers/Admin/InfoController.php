<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{

    private $info;

    public function __construct(Info $info)
    {
        $this->info = $info;
    }

    public function index()
    {
        $info = $this->info->findOrFail(1);

        return view('admin.infos.index', compact('info'));
    }

    public function update(Request $request, $info)
    {

        $data = $request->all();


	    $info = $this->info->find($info);
	    $info->update($data);

	    flash('Registro atualizado com sucesso!')->success();
	    return redirect()->route('admin.infos.index');
    }

}
