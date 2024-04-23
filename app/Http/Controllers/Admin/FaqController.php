<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::with('serviceCategory')->get();
        $pageTitle = 'Faqs';
        $serviceCategories = ServiceCategory::all();
        return view('admin.faqs.index', compact('faqs', 'pageTitle', 'serviceCategories'));
    }

    public function store(Request $request)
    {
        $faq = new Faq();
        $faq->qn = $request->input('qn');
        $faq->answer = $request->input('answer');
        $faq->service_category_id = $request->input('service_category_id'); // Assign the selected service category
        $faq->save();

        $notify[] = ['success', 'Faq created successfully'];

        return back()->withNotify($notify);
    }

    public function update(Request $request, Faq $faq)
    {
        $faq->qn = $request->input('qn');
        $faq->answer = $request->input('answer');
        $faq->service_category_id = $request->input('service_category_id'); // Update the service category
        $faq->save();
        $notify[] = ['success', 'Faq updated successfully'];

        return back()->withNotify($notify);
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return back()->withNotify($notify);
    }
}
