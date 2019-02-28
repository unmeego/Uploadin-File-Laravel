<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$folder)
    {
        
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $filename = '';
           // $files_id = array();
            //foreach ($files as $file) {
                // Get filename with the extension
                $filenameWithExt = $files-> getClientOriginalName();
                $size = $files -> getClientSize();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $ext = pathinfo($filenameWithExt, PATHINFO_EXTENSION);
                // Get just ext
                $extension = $files -> getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $files -> move($folder, $fileNameToStore);

                
                return  $path;

                // $path = $request->file('image')->storeAs('/public/upload_files', $fileNameToStore);

                //$id_file = DB::table('t_file') -> insertGetId(['t_fileName' => $filenameWithExt, 't_fileUrl' => $path, 't_fileFormat' =>  $ext, 't_fileSize' => $size]);
                
                //$files_id[] = $id_file;
            //}
           // return $files_id;
            
           
        }
       
        return $request;
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
