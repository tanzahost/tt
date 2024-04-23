<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::with('serviceCategory')->get();
        $pageTitle = 'Banners';
        $serviceCategories = ServiceCategory::all();
        return view('admin.banners.index', compact('banners', 'pageTitle', 'serviceCategories'));
    }

    public function store(Request $request)
    {
        $banner = new Banner();
        $banner->title = $request->input('title');
        $banner->short_description = $request->input('short_description');
        $banner->svg_code = $request->input('svg_code');
        $banner->url = $request->input('url');
        $banner->service_category_id = $request->input('service_category_id'); // Assign the selected service category
        $banner->save();

        $notify[] = ['success', 'Banner created successfully'];

        return back()->withNotify($notify);
    }

    public function update(Request $request, Banner $banner)
    {
        $banner->title = $request->input('title');
        $banner->short_description = $request->input('short_description');
        $banner->svg_code = $request->input('svg_code');
        $banner->url = $request->input('url');
        $banner->service_category_id = $request->input('service_category_id'); // Update the service category
        $banner->save();
        $notify[] = ['success', 'Banner updated successfully'];

        return back()->withNotify($notify);
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return back()->withNotify($notify);
    }
}
