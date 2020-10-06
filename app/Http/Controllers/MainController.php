<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Http::get('https://api.redtube.com/?data=redtube.Videos.searchVideos&output=json&search=hard&category=Lesbian &thumbsize=medium')->json()['videos'];

        $categories = Http::get('https://api.redtube.com/?data=redtube.Categories.getCategoriesList&output=json')->json()['categories'];

        // $tags = Http::get('https://api.redtube.com/?data=redtube.Categories.getCategoriesList&output=json')->json()['categories'];

        // dd($categories);

        foreach($videos as $video_items){
            // dump($video_items['video']);
            foreach($video_items as $video){
                // dump($video['url']);
                $video_url = $video['url'];
            }
        }

        return view('videos', [
            'videos' => $videos,
            'video_url' => $video_url,
            'categories' => $categories,
            // 'cat_id' => $cat_id
        ]);
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
        if(!empty($_GET['cat_id'])){
            $cat_id = $_GET['cat_id'];
        }

        if(!empty($_GET['cat_name'])){
            $cat_name = $_GET['cat_name'];
        }

        $videos = Http::get('https://api.redtube.com/?data=redtube.Videos.searchVideos&output=json&category='.$cat_name.'&thumbsize=medium')->json()['videos'];

        dump($videos);
        

        return view('show', [
            'cat_id' => $cat_id,
            'cat_name' => $cat_name,
            'videos' => $videos
        ]);
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
