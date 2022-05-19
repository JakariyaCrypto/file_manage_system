<?php

namespace App\Http\Controllers\backend\file;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\file\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::orderBy('id','DESC')->get();
        return view('backend/file/all-file',compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/file/create-file');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('file');
        $request->validate([
            'title' => 'required|string',
            'file' => 'required'
        ]);

        $model = new File();

        // generate file name
        $file = $request->file('file');
        $fileExt = $file->getClientOriginalExtension();
        $rand = rand(111111111,999999999);
        $fileName = 'file'.time().$rand.'.'.$fileExt;

        // print_r($fileName);exit;
        // generate file name
        $file->move('upload/file',$fileName);
        $storeFile = '/upload/file'.$fileName;


        $model->title = $request->post('title');
        $model->file = $storeFile;
        $model->save();

        if ($model->save()) {
            return redirect()->route('file.index')->with('success','File Created Successfully !');
        }else{
            return redirect()->route('file.index')->with('danger','File Created Successfully !');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
