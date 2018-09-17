<?php

namespace App\Http\Controllers;

use App\Series;
use App\User;
use Illuminate\Http\Request;

class SeriesController extends Controller
{

    public function index()
    {
        $posts=Series::all();
        return view('series.index',compact('posts'));
    }


    public function create()
    {
        return view('series.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $post = new Series;
        $post->name = $request->input('name');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/series');
    }


    public function show(Series $event)
    {
        return $event;
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {

    }
    public function userseries($userId)
    {
        $series=User::find($userId)->series;

        return view('series.userseries',compact('series'));
    }
}
