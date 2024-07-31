<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorRegistrationRequest extends FormRequest
{
    public function authorize()
    {
        // Return true if the user is authorized to make this request
        return true;
    }

    public function rules()
    {
        return [
            'organization_name' => 'required|string|max:255',
            'mobile_number' => 'required|numeric|digits:10',
            'email_address' => 'required|email',
            'location' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'website' => 'nullable|url',
            'shop_type' => 'required|string',
            'state' => 'required|string',
            'district' => 'required|string',
            'locality' => 'required|string',
            'town' => 'required|string',
            'pincode' => 'required|numeric',
            'owner_name' => 'nullable|string|max:255',
            'manager_name' => 'required|string|max:255',
            'manager_contact' => 'required|numeric',
            'land_phone' => 'nullable|numeric',
            'registered_address' => 'required|string',
            'facebook_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
            'google_map_link' => 'nullable|url',
            'youtube_link' => 'nullable|url',
            'working_hours' => 'nullable|string',
            'home_delivery' => 'required|string|in:yes,no',
            'store_photo' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'total_bill_discount' => 'nullable|exists:discountaddition,id',
            'discount_type' => 'nullable|string|in:flat,percentage',
            'discount_value' => 'nullable|numeric'
        ];
    }
}
