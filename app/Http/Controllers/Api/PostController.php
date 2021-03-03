<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    Public function create(Request $request){
        $post = new Post;
        $post->user_id = Auth::user()->id;
        $post->inventarisEdit = $request->inventarisEdit;
        $post->jangkaWaktu = $request->jangkaWaktu;
        $post->jenisEdit = $request->jenisEdit;
        $post->lokasiEdit = $request->lokasiEdit;
        $post->merkEdit = $request->merkEdit;

        $post->save();
        $post->user;
        return response()->json([
            'success' => true,
            'message' => 'posted',
            'post' => $post
        ]);
    }

    public function update(Request $request){
        $post = Post::find($request->id);
        //check if user is editing his own post
        if(Auth::user()->id != $post->user_id){
            return response()->json([
                'success' => false,
                'message' => 'unauthorized access'
            ]);
        }
        $post->inventarisEdit = $request->inventarisEdit;
        $post->jangkaWaktu = $request->jangkaWaktu;
        $post->jenisEdit = $request->jenisEdit;
        $post->lokasiEdit = $request->lokasiEdit;
        $post->merkEdit = $request->merkEdit;
        $post->update();
        return response()->json([
            'success' => true,
            'message' => 'post Edited'
        ]);
    }

    public function delete(Request $request){
        $post = Post::find($request->id);
        //check if user is delete his own post
        if(Auth::user()->id !=$post->user_id){
            return response()->json([
                'success' => false,
                'message' => 'unauthorized access'
            ]);
        }
        $post->delete();

        return response()->json([
            'success' => true,
            'message' => 'post deleted'
        ]);
    }

    public function posts(){
        $posts = Post::orderBy('id')->get();
        foreach($posts as $post){
            //get user of post
            $post->user;
            //update count
            //$post['updateCount'] = count($post->updates);
        }
        return response()->json([
            'success' => true,
            'posts' => $posts
        ]);
    }
}
