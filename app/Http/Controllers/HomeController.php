<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Livewire\Vendor;

class HomeController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user(); // Get the currently authenticated user
        return view('profile', compact('user'));
    }

    public function index()
    {    
        $packages = DB::table('packages')->get();
        $categories = DB::table('categories')->get();
        return view('admin.dashboard', compact('packages', 'categories'));
    }

    public function packageaddition()
    {
        $packages = DB::table('packages')->get();
        $categories = DB::table('categories')->get();
        return view('admin.packageaddition', compact('packages', 'categories'));
    }

    public function packagestore(Request $request)
    {
        $request->validate([
            'package_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'categories' => 'required|array',
        ]);

        $packageId = DB::table('packages')->insertGetId([
            'package_name' => $request->input('package_name'),
            'price' => $request->input('price'),
            'duration' => $request->input('duration'),
            'categories' => implode(',', $request->input('categories')), 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.packageaddition')->with('success', 'Package added successfully!');
    }

    public function editPackage($id)
    {
        $package = DB::table('packages')->where('id', $id)->first();
        $categories = DB::table('categories')->get();
        
        if (!$package) {
            return redirect()->route('admin.packageaddition')->with('error', 'Package not found!');
        }

        return view('admin.editpackage', compact('package', 'categories'));
    }

    public function packagedestroy($id)
    {
        DB::table('packages')->where('id', $id)->delete();
        return redirect()->route('admin.packageaddition')->with('success', 'Package deleted successfully!');
    }

    public function updatePackage(Request $request, $id)
    {
        $request->validate([
            'package_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'categories' => 'required|array',
        ]);

        DB::table('packages')->where('id', $id)->update([
            'package_name' => $request->input('package_name'),
            'price' => $request->input('price'),
            'duration' => $request->input('duration'),
            'categories' => implode(',', $request->input('categories')), 
            'updated_at' => now(),
        ]);
        return redirect()->route('admin.packageaddition')->with('success', 'Package updated successfully!');
    }

    public function categories()
    {
        return view('admin.categories');
    }

    public function categoriestore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        DB::table('categories')->insert([
            'categories' => $request->input('name'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.categories')->with('success', 'Category added successfully!');
    }

    public function editcategories()
    {
        $categories = DB::table('categories')->get();
        return view('admin.editcategories', compact('categories'));
    }

    public function destroyCategory($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return redirect()->route('admin.editcategories')->with('success', 'Category deleted successfully!');
    }

    public function partnerslist()
    {
        
        $partners= DB::table('partners')->get();
        return view('admin.partnerslist', compact('partners'));
    }

    public function createpartner()
    {
        $discounts = DB::table('discountaddition')->get();
        // $currentstep = <livewire:vendor />;
        return view('livewire.vendor');
        return view('vendor.vendordashboard','livewire.vendor', compact('discounts'));
    }
    
   

//     public function partnerstore(Request $request)
//     {
//         $validated = $request->validate([
//             'organization_name' => 'required|string|max:255',
//            'mobile_number' => 'required|numeric|digits:10',
//             'email_address' => 'required|email',
//             'location' => 'required|string|max:255',
//             'country' => 'required|string|max:255',
//             'website' => 'nullable|url',
//             'shop_type' => 'required|string',
//             'business_type' => 'required|string',
//             'state' => 'required|string',
//             'district' => 'required|string',
//             'locality' => 'required|string',
//             'town' => 'required|string',
//             'pincode' => 'required|numeric',
//             'owner_name' => 'nullable|string|max:255',
//             'manager_name' => 'required|string|max:255',
//             'manager_contact' => 'required|numeric',
//             'land_phone' => 'nullable|numeric',
//             'registered_address' => 'required|string',
//             'facebook_link' => 'nullable|url',
//             'instagram_link' => 'nullable|url',
//             'google_map_link' => 'nullable|url',
//             'youtube_link' => 'nullable|url',
//             'working_hours' => 'nullable|string',
//             'home_delivery' => 'required|string|in:yes,no',
//             'store_photo' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
//             'total_bill_discount' => 'nullable|exists:discountaddition,id',
//             'discount_type' => 'nullable|string|in:flat,percentage',
//             'discount_value' => 'nullable|numeric'
//         ]);

//         $photoPath = null;
//         if ($request->hasFile('store_photo')) {
//             $photoPath = $request->file('store_photo')->store('store_photos', 'public');
//         }
        
//             DB::table('partners')->insert([
//                 'organization_name' => $request->input('organization_name'),
//                 'mobile_number' => $request->input('mobile_number'),
//                 'email_address' => $request->input('email_address'),
//                 'location' => $request->input('location'),
//                 'country' => $request->input('country'),
//                 'website' => $request->input('website'),
//                 'shop_type' => $request->input('shop_type'),
//                 'business_type' => $request->input('business_type'),
//                 'state' => $request->input('state'),
//                 'district' => $request->input('district'),
//                 'locality' => $request->input('locality'),
//                 'town' => $request->input('town'),
//                 'pincode' => $request->input('pincode'),
//                 'owner_name' => $request->input('owner_name'),
//                 'manager_name' => $request->input('manager_name'),
//                 'manager_contact' => $request->input('manager_contact'),
//                 'land_phone' => $request->input('land_phone'),
//                 'registered_address' => $request->input('registered_address'),
//                 'facebook_link' => $request->input('facebook_link'),
//                 'instagram_link' => $request->input('instagram_link'),
//                 'google_map_link' => $request->input('google_map_link'),
//                 'youtube_link' => $request->input('youtube_link'),
//                 'working_hours' => $request->input('working_hours'),
//                 'home_delivery' => $request->input('home_delivery'),
//                 'store_photo' => $photoPath,
//                 'total_bill_discount' => $request->input('total_bill_discount'),
//                 'discount_type' => $request->input('discount_type'),
//                 'discount_value' => $request->input('discount_value'),
//                 'created_at' => now(),
//             'updated_at' => now()
//         ]);

//         return redirect()->route('admin.partnerslist')->with('success', 'Partner created successfully!');
//     }
//     public function partnerview($id)
//    {
//     $partner = DB::table('partners')->where('id', $id)->first();
//     return view('admin.editpartner', compact('partner'));
//    }

    public function discountaddition()
    {
        $discounts = DB::table('discountaddition')->get();
        return view('admin.discountaddition', compact('discounts'));
    }

    public function discountstore(Request $request)
    {
        $request->validate([
            'discount' => 'required|string|max:255',
        ]);

        DB::table('discountaddition')->insert([
            'discount' => $request->discount,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.discountaddition')->with('success', 'Discount added successfully.');
    }

    public function discountedit($id)
    {
        $discounts = DB::table('discountaddition')->get();
        $discount = DB::table('discountaddition')->where('id', $id)->first();
        return view('admin.editdiscount', compact('discount', 'discounts'));
    }

    public function discountupdate(Request $request, $id)
    {
        $request->validate([
            'discount' => 'required|string|max:255',
        ]);

        DB::table('discountaddition')->where('id', $id)->update([
            'discount' => $request->discount,
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.discountaddition')->with('success', 'Discount updated successfully.');
    }

    public function discountdestroy($id)
    {
        DB::table('discountaddition')->where('id', $id)->delete();

        return redirect()->route('admin.discountaddition')->with('success', 'Discount deleted successfully.');
    }

    public function ads()
    {
        $ads = DB::table('ads')->get(); 
        return view('admin.ads', compact('ads'));
    }

    public function create()
    {
        return view('admin.create_ad');
    }

    public function storeAd(Request $request)
    {
        $request->validate([
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url',
            'expiry' => 'required|date',
        ]);

        $imagePath = $request->file('image')->store('ads_images', 'public');
        DB::table('ads')->insert([
            'country' => $request->input('country'),
            'state' => $request->input('state'),
            'district' => $request->input('district'),
            'image' => $imagePath,
            'link' => $request->input('link'),
            'expiry' => $request->input('expiry'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.ads')->with('success', 'Ad created successfully.');
    }

    public function edit($id)
    {
        $ad = DB::table('ads')->where('id', $id)->first();
        if (!$ad) {
            return redirect()->route('admin.ads')->with('error', 'Ad not found.');
        }
        return view('admin.adsedit', ['ad' => $ad]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url',
            'expiry' => 'required|date',
        ]);

        $ad = DB::table('ads')->where('id', $id)->first();
        if (!$ad) {
            return redirect()->route('admin.ads')->with('error', 'Ad not found.');
        }

        $imagePath = $ad->image;
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($ad->image);
            $imagePath = $request->file('image')->store('ads_images', 'public');
        }

        DB::table('ads')->where('id', $id)->update([
            'country' => $request->input('country'),
            'state' => $request->input('state'),
            'district' => $request->input('district'),
            'image' => $imagePath,
            'link' => $request->input('link'),
            'expiry' => $request->input('expiry'),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.ads')->with('success', 'Ad updated successfully.');
    }

    public function destroy($id)
    {
        $ad = DB::table('ads')->where('id', $id)->first();
        if (!$ad) {
            return redirect()->route('admin.ads')->with('error', 'Ad not found.');
        }

        Storage::disk('public')->delete($ad->image);
        DB::table('ads')->where('id', $id)->delete();

        return redirect()->route('admin.ads')->with('success', 'Ad deleted successfully.');
    }
}
