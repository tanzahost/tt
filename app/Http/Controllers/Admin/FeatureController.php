<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::with('serviceCategory')->get();
        $pageTitle = 'Features';
        $serviceCategories = ServiceCategory::all();
        return view('admin.features.index', compact('features', 'pageTitle', 'serviceCategories'));
    }

    public function store(Request $request)
    {
        $feature = new Feature();
        $feature->title = $request->input('title');
        $feature->description = $request->input('description');
        $feature->svg = $request->input('svg');
        $feature->service_category_id = $request->input('service_category_id'); // Assign the selected service category
        $feature->save();

        $notify[] = ['success', 'Feature created successfully'];

        return back()->withNotify($notify);
    }

    public function update(Request $request, Feature $feature)
    {
        $feature->title = $request->input('title');
        $feature->description = $request->input('description');
        $feature->svg = $request->input('svg');
        $feature->service_category_id = $request->input('service_category_id'); // Update the service category
        $feature->save();
        $notify[] = ['success', 'Feature updated successfully'];

        return back()->withNotify($notify);
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        return back()->withNotify($notify);
    }
}
