<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Image;
use Carbon\Carbon;

class PostController extends Controller
{
    function index(){
        return view('admin.post.addpost');
    }

    function savepost(Request $request){

        $image_one= $request->file('post_image');
        $name_gen = hexdec(uniqid()).'.'. $image_one->getClientOriginalExtension();
        Image::make($image_one)->resize(1900,1265)->save('backend/images/'. $name_gen);
        $img_url1= 'images/'.$name_gen;

        $image_two= $request->file('post_image2');
        $name_gen = hexdec(uniqid()).'.'. $image_two->getClientOriginalExtension();
        Image::make($image_two)->resize(778,514)->save('backend/images/'. $name_gen);
        $img_url2= 'images/'.$name_gen;

        Post:: insert([
            'post_title'=> $request-> post_title,
            'post_image'=> $img_url1,
            'post_image2'=> $img_url2,
            'post_description'=> $request-> post_description,
            'created_by'=> $request-> created_by, 
            'created_at'=> Carbon::now(),
            
            ]);

            return back()->with('post_added','Post Added Successfully');

    }

    function allpost(){
        $all_posts= Post::latest()->get();
        return view('admin.post.allpost', compact('all_posts'));
    }

    //end
}
