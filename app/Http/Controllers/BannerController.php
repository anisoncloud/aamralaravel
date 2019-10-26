<?php

namespace App\Http\Controllers;
use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    // list banner
    public function index(){
        $banners = Banner::All()->sortByDesc('id');
        return view('admin.banner.all_banners', ['banners'=>$banners]);
    }

    public function create(){
        return view('admin.banner.add_banner');
    }

    // Save banner

    protected function featuredImageUpload(Request $request){
        if($request->has('banner_featured_image')){
            $featuredImage = $request->file('banner_featured_image');
            $featuredImageName = $featuredImage->getClientOriginalName();
            $imageDirectory = 'media-library/';
            $imageUrl = $imageDirectory . $featuredImageName;
            $featuredImage->move($imageDirectory, $featuredImageName);
            return $imageUrl;
        }
            //return $imageUrl = '';
    }

    protected function saveBannerBasicInfo($request, $imageUrl=null){
        $banner = new Banner();
        $banner->banner_title = $request->banner_title;
        $banner->banner_link = $request->banner_link;
        $banner->banner_short_description = $request->banner_short_description;
        if(!empty($imageUrl)) {
            $banner->banner_featured_image = $imageUrl;
        }
        $banner->publication_status = $request->publication_status;
        $banner->save();
    }

    public function saveBanner(Request $request){
        $imageUrl = $this->featuredImageUpload($request);
        $this->saveBannerBasicInfo($request, $imageUrl);
        return redirect('banner/add')->with('message', 'Banner Added Successfully');
    }

    // Edit banner
    
    protected function updateBannerBasicInfo($request, $imageUrl=null){
        $banner = Banner::find($request->banner_id);
        $banner->banner_title = $request->banner_title;
        $banner->banner_link = $request->banner_link;
        $banner->banner_short_description = $request->banner_short_description;
        if(!empty($imageUrl)) {
            $banner->banner_featured_image = $imageUrl;
        }
        $banner->publication_status = $request->publication_status;
        $banner->save();
    }


    public function editBanner($id){
        $banner = Banner::find($id);
        return view('admin.banner.edit_banner',['banner'=>$banner]);
    }
    public function updateBanner(Request $request){
        //$post = Post::find($request->post_id);
        $imageUrl = $this->featuredImageUpload($request);
        $this->updateBannerBasicInfo($request, $imageUrl);
        //return redirect('/post/all')->with('message', 'Updated successfully');
        return redirect()->back();
    }
}
