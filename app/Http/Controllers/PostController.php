<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
     // GET ALL
     public function index(){
        return view('posts.posts')->with([
            'posts' => Post::paginate()
        ]);
    }

    //GET BY ID
    public function show($id){
        $post = Post::find($id);
        $images = $post->pictures;
        $videos = $post->videos;
        return view('posts.post')->with([
            'post' => $post,
            'pictures' => $images,
            'videos' => $videos
        ]);
    }

    // POST

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'post_category' => 'required',
        ]);

        // dd($request);

        $user = Auth::user();
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = intval($request->input('post_category'));
        $post->author_id = $user->id;
        $post->posttype = 'text';
        $post->metadata = '';
        $post->save();
        if ($request->has('post_tags')) {
            foreach ($request->input('post_tags') as $id) {
                DB::table('post_tag')->insert([
                    'post_id' => $post->id,
                    'tag_id' => $id
                ]);
            }
        }
        if ($request->hasFile('post_images')) {
            $counter = 0;
            $images = $request->file('post_images');
            foreach ($images as $image) {
                $path = $image->store('public');
                $image->description = '';
                $image->url = $path;
                $image->post_id = $post->id;
                if ($counter == 0) {
                    $image->featured = true;
                } else {
                    $image->featured = false;
                }
                $image->store($path);
                $counter++;
            }
        }
        return redirect(route('posts'));
    }

    public function newPost(){
        $categories = Category::all();
        $tags = Tags::all();
        return view('posts.new-post')->with([
            'categories' => $categories,
            'tags' => $tags
        ]);
    }
}
