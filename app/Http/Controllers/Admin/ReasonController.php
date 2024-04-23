<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reason;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;

class ReasonController extends Controller
{
    public function index()
    {
        $reasons = Reason::with('serviceCategory')->get();
        $pageTitle = 'Reasons';
        $serviceCategories = ServiceCategory::all();
        return view('admin.reasons.index', compact('reasons', 'pageTitle', 'serviceCategories'));
    }

    public function store(Request $request)
    {
        $reason = new Reason();
        $reason->name = $request->input('name');
        $reason->title = $request->input('title');
        $reason->description = $request->input('description');
        $reason->svg = $request->input('svg');
        $reason->sub_title_1 = $request->input('sub_title_1');
        $reason->sub_title_2 = $request->input('sub_title_2');
        $reason->sub_title_3 = $request->input('sub_title_3');
        $reason->sub_desc_1 = $request->input('sub_desc_1');
        $reason->sub_desc_2 = $request->input('sub_desc_2');
        $reason->sub_desc_3 = $request->input('sub_desc_3');
        // $reason->url = $request->input('url');

        $reason->service_category_id = $request->input('service_category_id'); // Assign the selected service category
        $reason->save();

        $notify[] = ['success', 'Reason created successfully'];

        return back()->withNotify($notify);
    }

    public function update(Request $request, Reason $reason)
    {
        $reason->name = $request->input('name');
        $reason->title = $request->input('title');
        $reason->description = $request->input('description');
        $reason->svg = $request->input('svg');
        $reason->sub_title_1 = $request->input('sub_title_1');
        $reason->sub_title_2 = $request->input('sub_title_2');
        $reason->sub_title_3 = $request->input('sub_title_3');
        $reason->sub_desc_1 = $request->input('sub_desc_1');
        $reason->sub_desc_2 = $request->input('sub_desc_2');
        $reason->sub_desc_3 = $request->input('sub_desc_3');
        // $reason->url = $request->input('url');
        $reason->service_category_id = $request->input('service_category_id'); // Update the service category
        $reason->save();
        $notify[] = ['success', 'Reason updated successfully'];

        return back()->withNotify($notify);
    }

    public function destroy(Reason $reason)
    {
        $reason->delete();
        $notify[] = ['success', 'Reason deleted successfully'];

        return back()->withNotify($notify);
    }
}
