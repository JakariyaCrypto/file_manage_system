<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RahulHaque\Filepond\Facades\Filepond;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend/folder/create-folder');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $input = $request->all();
        // $files=array();
        // if($filesUp=$request->file('files')){
        //     foreach($filesUp as $file){
        //         $name = $file->getClientOriginalName();
        //         $folder = uniqid() . '-' . now()->timestamp;
        //         $file->storeAs('/files/tmp/' . $folder, $name);
        //         $files[]=$name;

        //         TemporaryFile::create([
        //             'folder' => $folder,
        //             'filename' => $name
        //         ]);

        //     }

        //     return $folder;
        // }

        // return '';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
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
    public function update(Request $request)
    {

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


    public function upload(Request $request){
        // $file = $request->file('files');
        if ($ruquest->hasFile('files')) {
            $file = $request->file('files');
            $fileName = $file->getClientOriginalName();
            dd($fileName);
        }
        // dd($file);

    }



}
