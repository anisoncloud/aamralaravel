<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        //$services = Service::where('publication_status', 1)->get()->sortByDesc('id');
        $services = Service::All()->sortByDesc('id');
        return view('admin.service.list_service', ['services'=>$services]);
    }

    public function create(Request $request){
        //$categories = Category::where('publication_status', 1)->get();
        return view('admin.service.add_service');
    }

    protected function featuredImageUpload(Request $request){
        if($request->has('service_featured_image')){
            $featuredImage = $request->file('service_featured_image');
            $featuredImageName = $featuredImage->getClientOriginalName();
            $imageDirectory = 'media-library/';
            $imageUrl = $imageDirectory . $featuredImageName;
            $featuredImage->move($imageDirectory, $featuredImageName);
            return $imageUrl;
        }
            //return $imageUrl = '';
    }

    protected function saveServiceBasicInfo($request, $imageUrl=null){
        $service = new Service();
        $service->service_title = $request->service_title;
        $service->service_short_description = $request->service_short_description;
        $service->service_content = $request->service_content;
        $service->service_url = $request->service_url;
        $service->publication_status = $request->publication_status;
        if(!empty($imageUrl)) {
            $service->service_featured_image = $imageUrl;
        }
        $service->publication_status = $request->publication_status;
        $service->save();
    }

    public function saveService(Request $request){
        $imageUrl = $this->featuredImageUpload($request);
        $this->saveServiceBasicInfo($request, $imageUrl);
        return redirect('service/add')->with('message', 'Service Added Successfully');
    }

    protected function updateServiceBasicInfo($request, $imageUrl=null){
        $service = Service::find($request->service_id);
        $service->service_title = $request->service_title;
        $service->service_short_description = $request->service_short_description;
        $service->service_content = $request->service_content;
        $service->service_url = $request->service_url;
        $service->publication_status = $request->publication_status;
        if(!empty($imageUrl)) {
            $service->service_featured_image = $imageUrl;
        }
        $service->publication_status = $request->publication_status;
        $service->save();
    }


    public function editService($id){
        $service = Service::find($id);
        return view('admin.service.edit_service',['service'=>$service]);
    }
    public function updateService(Request $request){
        //$service = Service::find($request->service_id);
        $imageUrl = $this->featuredImageUpload($request);
        $this->updateServiceBasicInfo($request, $imageUrl);
        //return redirect('/service/all')->with('message', 'Updated successfully');
        return redirect()->back();
    }
    public function publishedService($id){
        $service = Service::find($id);
        $service->publication_status = 1;
        $service->save();
        return redirect('/service/all')->with('message', 'Service Published');
    }
    public function unpublishedService($id){
        $service = Service::find($id);
        $service->publication_status = 0;
        $service->save();
        return redirect('/service/all')->with('message','Service Unpublished');
        return $id;

    }
    public function deleteService($id){
        $service = Service::find($id);
        $service->delete();
        return redirect('/service/all')->with('message', 'Category Deleted Successfully');
    }
}
