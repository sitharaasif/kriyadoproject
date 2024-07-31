<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Vendor extends Component
{
    public $currentStep = 1;
    public $shop_type, $business_type, $country, $state, $district, $locality, $town, $pincode, $organizationName, $ownerName, $mobilenumber, $managerName, $managerContact, $land_phone, $website;

    public function render()
    {
        return view('livewire.vendor');
    }

    public function firstStepSubmit()
    {
        $this->validate([
            'shop_type' => 'required',
            'business_type' => 'required',
        ]);
        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $this->validate([
            'country' => 'required',
            'state' => 'required',
            'district' => 'required',
            'locality' => 'required',
            'town' => 'required',
            'pincode' => 'required',
        ]);
        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $this->validate([
            'organizationName' => 'required',
            'ownerName' => 'required',
            'mobilenumber' => 'required',
            'managerName' => 'required',
            'managerContact' => 'required',
            'land_phone' => 'required',
            'website' => 'required',
        ]);
        $this->currentStep = 4;
    }

    public function submitForm()
    {
        // Submit form logic here

        session()->flash('successMessage', 'Vendor registration successful.'); 

        return redirect()->to('/vendors');
    }

    public function previousStep()
    {
        $this->currentStep--;
    }
}
