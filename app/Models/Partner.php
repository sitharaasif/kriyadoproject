<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_name',
        'mobile_number',
        'email_address',
        'location',
        'country',
        'state',
        'district',
        'locality',
        'town',
        'pincode',
        'owner_name',
        'manager_name',
        'manager_contact',
        'land_phone',
        'registered_address',
        'facebook_link',
        'instagram_link',
        'google_map_link',
        'youtube_link',
        'working_hours',
        'home_delivery',
        'total_bill_discount',
        'discount_type',
        'discount_value',
        'store_photo',
    ];
}
