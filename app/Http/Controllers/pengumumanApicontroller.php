<?php

namespace App\Http\Controllers;
use App\models\pengumuman;
use Illuminate\Http\Request;

class pengumumanApicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pengumuman=pengumuman::all();

        return $pengumuman;
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

        $pengumuman=pengumuman::create($input);
         return $pengumuman;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengumuman=pengumuman::find($id);
       
        return $pengumuman;
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
        $input=$request->all();

        
        $pengumuman=pengumuman::find($id);

        if(empty($pengumuman)){
            return response()->json(['message' => 'data tidak ditemukan . '], 404);

        }
        $pengumuman->update($input);

        return response()->json($pengumuman);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengumuman=pengumuman::find($id);

        if(empty($pengumuman)){
            return response()->json(['message' => 'data tidak ditemukan . '], 404);


        }
        $pengumuman->delete();

        return response()->json(['message' => 'data telah  dihapus   . ']);
    }
}
