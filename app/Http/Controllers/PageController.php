<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // list page
    public function index(){
        $pages = Page::All()->sortByDesc('id');
        return view('admin.page.all_pages', ['pages'=>$pages]);
    }

    public function create(){
        return view('admin.page.add_page');
    }

    // Save page

    protected function featuredImageUpload(Request $request){
        if($request->has('page_featured_image')){
            $featuredImage = $request->file('page_featured_image');
            $featuredImageName = $featuredImage->getClientOriginalName();
            $imageDirectory = 'media-library/';
            $imageUrl = $imageDirectory . $featuredImageName;
            $featuredImage->move($imageDirectory, $featuredImageName);
            return $imageUrl;
        }
            //return $imageUrl = '';
    }

    protected function savePageBasicInfo($request, $imageUrl=null){
        $page = new Page();
        $page->page_title = $request->page_title;
        $page->page_short_description = $request->page_short_description;
        $page->page_content = $request->page_content;
        if(!empty($imageUrl)) {
            $page->page_featured_image = $imageUrl;
        }
        $page->publication_status = $request->publication_status;
        $page->save();
    }

    public function savePage(Request $request){
        $imageUrl = $this->featuredImageUpload($request);
        $this->savePageBasicInfo($request, $imageUrl);
        return redirect('page/add')->with('message', 'Page Added Successfully');
    }

    // Edit Page
    
    protected function updatePageBasicInfo($request, $imageUrl=null){
        $page = Page::find($request->page_id);
        $page->page_title = $request->page_title;
        $page->page_short_description = $request->page_short_description;
        $page->page_content = $request->page_content;
        if(!empty($imageUrl)) {
            $page->page_featured_image = $imageUrl;
        }
        $page->publication_status = $request->publication_status;
        $page->save();
    }


    public function editPage($id){
        $page = Page::find($id);
        return view('admin.page.edit_page',['page'=>$page]);
    }
    public function updatePage(Request $request){
        //$post = Post::find($request->post_id);
        $imageUrl = $this->featuredImageUpload($request);
        $this->updatePageBasicInfo($request, $imageUrl);
        //return redirect('/post/all')->with('message', 'Updated successfully');
        return redirect()->back();
    }
    
}
