<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{

    private $file;

    public function __construct(File $file)
    {
        $this->file = $file;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $files = $this->file->paginate(10);

        return view('admin.files.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.files.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * validação do file 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     * 
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $validatedData = $request->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,doc,docx,pdf,image|max:10240',
        ]);


        $title = $request->file('file')->getClientOriginalName();

        $file = $request->file('file');
        $file->storeAs('uploads/files', $title, 'public');

        $data['title'] = $title;
        $data['file'] = 'uploads/files/'.$title;

        $this->file->create($data);

        flash('Upload realizado com sucesso!')->success();
        return redirect()->route('admin.files.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($file)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $file)
    {
  
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

        $file = $this->file->find($id);

        if ($file->delete() == TRUE) {

            if (Storage::disk('public')->exists($file->file)) {
                Storage::disk('public')->delete($file->file);
            }

            flash('Arquivo removido com sucesso!')->success();
            return redirect()->route('admin.files.index');
        }
    }
}
