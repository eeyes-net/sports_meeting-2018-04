<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo') && $request->file('photo')->isValid())
        {
            $photo = Photo::create([
                'path' => $request->file('photo')->storePublicly('photo'),
            ]);

            return response()->json([
                'errno' => 0,
                'data'  => [$photo->path],
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo $photo
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Photo $photo)
    {
        Storage::delete($photo->path);
        $photo->delete();
        return response()->json(true);
    }
}
