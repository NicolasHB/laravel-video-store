<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::orderBy('updated_at', 'desc')->paginate(10);

        return view('pages.index', compact('videos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|min:5|string|max:180',
            'description' => 'required|min:20|max:1000|string',
            'url_img' => 'required|image|mimes:png,jpg,jpeg|max:2000',
            'nationality' => 'string',
            'year_created' => 'required',
            'actors' => 'required',
            // 'category' => 'required',
        ]);

        $validateImg = $request->file('url_img')->store('videos');

        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'url_img' => $validateImg,
            'nationality' => $request->nationality,
            'year_created' => $request->year_created,
            'actors' => $request->actors,
            // 'category' => $request->category,
            'created_at' => now()
        ]);

            // 1-Verify if User select image or not
        // if ($request->has('images')) {
        // // 2-stock all images selected in array
        // $imagesSelected = $request->file('images');
        // // 3- loop storage each image
        // foreach ($imagesSelected as $image) {
        //     // give a new name for each image
        //     $image_name = md5(rand(1000, 10000)) . '.' . strtolower($image->extension());
        //     // set the pathname
        //     $path_upload = 'images/';
        //     $image->move(public_path($path_upload), $image_name);

        //     Images::create([
        //     "slug" => $path_upload . $image_name, // posts/images/shhjhjshshshsjh.png
        //     "created_at" => now(),
        //     "post_id" => $new_video->id
        //     ]);
        // }
        // }
        
        // Category::create([
        //     'name' => $new_video->category,
        //     'video_id' => $new_video->id,
        //     'created_at' => now(),
        // ]);

        return redirect()
        ->route('home')
        ->with('status', 'Le film a bien été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        return view('pages.show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('pages.edit', compact('video'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //verify is_published
        $published = 0; 
        if($request->has('is_published')){
            $published = 1;
        }

        // verify is file exist
        // if file exist, to delete previous img
        if($request->hasFile('url_img')){
            // delete previous img 
            Storage::delete($video->url_img);
            // store the new img 
            $video->url_img = $request->file('url_img')->store('posts');
        }
        $request->validate([
            'title' => 'required|min:5|string|max:180',
            'Content' => 'required|min:20|max:350|string',
            'url_img' => 'required|image|mimes:png,jpg,jpeg|max:5000',
            'nationality' => 'required',
            'year_created' => 'required',
            'actors' => 'required',
        ]);

        $video->update([
            'title' => $request->title,
            'description' => $request->description,
            'url_img' => $request->url_img ,
            'nationality' => $request->nationality,
            'year_created' => $request->year_created,
            'actors' => $request->actors,
            'updated_at' => now()
        ]);

        return redirect()
        ->route('home')
        ->with('status', 'Le film a bien été modifié!');
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
