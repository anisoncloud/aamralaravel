<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        //$posts = Post::where('publication_status', 1)->get()->sortByDesc('id');
        $posts = Post::All()->sortByDesc('id');
        return view('admin.post.list_post', ['posts'=>$posts]);
    }

    public function create(Request $request){
        $categories = Category::where('publication_status', 1)->get();
        return view('admin.post.add_post',['categories'=>$categories]);
    }

    protected function featuredImageUpload(Request $request){
        if($request->has('post_featured_image')){
            $featuredImage = $request->file('post_featured_image');
            $featuredImageName = $featuredImage->getClientOriginalName();
            $imageDirectory = 'media-library/';
            $imageUrl = $imageDirectory . $featuredImageName;
            $featuredImage->move($imageDirectory, $featuredImageName);
            return $imageUrl;
        }
            //return $imageUrl = '';
    }

    protected function savePostBasicInfo($request, $imageUrl=null){
        $post = new Post();
        $post->category_id = $request->category_id;
        $post->post_title = $request->post_title;
        $post->post_short_description = $request->post_short_description;
        $post->post_content = $request->post_content;
        if(!empty($imageUrl)) {
            $post->post_featured_image = $imageUrl;
        }
        $post->publication_status = $request->publication_status;
        $post->save();
    }

    public function savePost(Request $request){
        $imageUrl = $this->featuredImageUpload($request);
        $this->savePostBasicInfo($request, $imageUrl);
        return redirect('post/add')->with('message', 'Post Added Successfully');
    }

    protected function updatePostBasicInfo($request, $imageUrl=null){
        $post = Post::find($request->post_id);
        $post->category_id = $request->category_id;
        $post->post_title = $request->post_title;
        $post->post_short_description = $request->post_short_description;
        $post->post_content = $request->post_content;
        if(!empty($imageUrl)) {
            $post->post_featured_image = $imageUrl;
        }
        $post->publication_status = $request->publication_status;
        $post->save();
    }


    public function editPost($id){
        $post = Post::find($id);
        $categories = Category::all()->sortBy('category_name');
        return view('admin.post.edit_post',['post'=>$post, 'categories'=>$categories]);
    }
    public function updatePost(Request $request){
        //$post = Post::find($request->post_id);
        $imageUrl = $this->featuredImageUpload($request);
        $this->updatePostBasicInfo($request, $imageUrl);
        //return redirect('/post/all')->with('message', 'Updated successfully');
        return redirect()->back();
    }
    public function publishedPost($id){
        $post = Post::find($id);
        $post->publication_status = 1;
        $post->save();
        return redirect('/post/all')->with('message', 'Post Published');
    }
    public function unpublishedPost($id){
        $post = Post::find($id);
        $post->publication_status = 0;
        $post->save();
        return redirect('/post/all')->with('message','Post Unpublished');
        return $id;

    }
    public function deletePost($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('/post/all')->with('message', 'Category Deleted Successfully');
    }
}
