<?php

namespace App\Http\Controllers;

use App\Models\BillingDetail;
use Illuminate\Http\Request;

class BillingDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = BillingDetail::all();
        return view('admin.dashboard.details.index', compact('details'));
    }


    public function trashed_message()
    {
        $details = BillingDetail::onlyTrashed()->get(); // Fetch trashed categories

        return view('admin.dashboard.details.trashed', ['details' => $details]);
    }

    public function restore($id)
    {
        $details = BillingDetail::onlyTrashed()->findOrFail($id); // Retrieve the trashed category by its ID
        $details->restore();

        return redirect()->back()->with('success', 'Category restored successfully');
    }

    public function forceDelete($id)
    {
        $details = BillingDetail::onlyTrashed()->findOrFail($id); // Retrieve the trashed category by its ID
        $details->forceDelete();

        return redirect()->back()->with('success', 'Category deleted permanently');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_billing_details' => 'required|min:5',
            'email_billing_details' => 'required|email|max:255',
            'post_code_billing_details' => 'required|numeric',
            'phone_billing_details' => 'required|numeric|min:11',
            'company_billing_details' => 'nullable',
            'address_billing_details' => 'required',
            'city_billing_details' => 'required',
            'notes_billing_details' => 'nullable',
            'categories_billing_details' => 'required',
        ]);

        $data = [
            'name_billing_details' => $request->name_billing_details,
            'email_billing_details' => $request->email_billing_details,
            'post_code_billing_details' => $request->post_code_billing_details,
            'phone_billing_details' => $request->phone_billing_details,
            'company_billing_details' => $request->company_billing_details,
            'address_billing_details' => $request->address_billing_details,
            'city_billing_details' => $request->city_billing_details,
            'notes_billing_details' => $request->notes_billing_details,
            'categories_billing_details' => $request->categories_billing_details,
            'created_at' => now(),
        ];

        BillingDetail::create($data);

        return redirect()->route('/order_confirmation')->with('status', 'Order placed successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BillingDetail $billingDetail)
    {
        return view('admin.dashboard.details.show', ['order' => $billingDetail]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BillingDetail $billingDetail)
    {
        $name = $billingDetail->name_billing_details;
        $billingDetail->delete();
        return redirect()->route('admin.detail.index')->with(['status' => 'order ' . $name . ' Canceld Successfully']);
    }

    public function conform(BillingDetail $billingDetail)
    {
        $billingDetail->delete();
        return redirect()->route('admin.detail.index')->with(['status' => 'Order ' . $billingDetail->name_billing_details . ' Confirmed Successfully']);
    }
}
