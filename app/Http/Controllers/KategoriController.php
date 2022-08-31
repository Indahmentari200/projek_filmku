<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.index');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
    }
       /**
       * Update the specified resource in storage.
       *
       * @param \Illuminate\Http\Request $request
       * @param int $id
       * @return \Illuminate\Http\Response
       */
       public function showMovie($id, $page)
       {
       $kategori = Kategori::where('kategori_id', $id)->first();
        // dd($kategori);
       $json =
       file_get_contents("https://api.themoviedb.org/3/movie/".$kategori->kategori_id."?api_key=c11cf80267a45f0a11dedf96bee9eb1f&language=en-US&page=".$page);
       $data = json_decode($json, TRUE);
       $all = $data['results'];
       $pages = $data['page'];
       $limit = $page + 10;
       $first = 1;
       $last = $data['total_pages'];
       $datas = array(
       'page' => $page,
       'limit' => $limit,
       'first' => $first,
       'last' => $last,
       'url' => $kategori->url
       );

       return view('layouts.view', compact('all','datas'));
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
