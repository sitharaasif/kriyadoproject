<?php

namespace App\Http\Controllers;
use App\Http\Livewire\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\VendorRegistrationRequest;
class VendorController extends Controller
{
    // public function index()
    // {     
    //      $discounts = DB::table('discountaddition')->get();
    //     return view('vendor.vendordashboard',compact('discounts'));
    // }
    public function index()
    {     
        
        return view('vendor.vendordashboard');
    }




    

//     public function partnerstore(VendorRegistrationRequest $request)
//     {
//         $validatedData = $request->validate([
//             'organization_name' => 'required|string|max:255',
//             'mobile_number' => 'required|string|max:20',
//             'email_address' => 'required|email|max:255',
//             'location' => 'required|string|max:255',
//             'country' => 'required|string|max:255',
//             'website' => 'required|url|max:255',
//             'shop_type' => 'required|string|max:255',
//             'state' => 'required|string|max:255',
//             'district' => 'required|string|max:255',
//             'locality' => 'required|string|max:255',
//             'town' => 'required|string|max:255',
//             'pincode' => 'required|string|max:10',
//             'owner_name' => 'nullable|string|max:255',
//             'manager_name' => 'required|string|max:255',
//             'manager_contact' => 'required|string|max:20',
//             'land_phone' => 'required|string|max:20',
//             'registered_address' => 'required|string|max:255',
//             'facebook_link' => 'required|url|max:255',
//             'instagram_link' => 'required|url|max:255',
//             'google_map_link' => 'required|url|max:255',
//             'youtube_link' => 'required|url|max:255',
//             'working_hours_from' => 'required|integer|min:0|max:23',
//             'working_hours_to' => 'required|integer|min:0|max:23',
//             'home_delivery' => 'required|in:yes,no',
//             'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
//             'store_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
//             'total_bill_discount' => 'required|string|max:255',
//             'discount_type' => 'required|string|max:255',
//             'discount_value' => 'required|numeric',
//         ]);

//         $data = $validatedData;
//         if ($request->hasFile('logo')) {
//             $data['logo'] = $request->file('logo')->store('logos', 'public');
//         }

//         if ($request->hasFile('store_photo')) {
//             $data['store_photo'] = $request->file('store_photo')->store('store_photos', 'public');
//         }

//         DB::table('partner')->insert($data);

     
//     return redirect()->route('vendor.viewprofile')->with('success', 'Vendor registered successfully!');
// }
}
