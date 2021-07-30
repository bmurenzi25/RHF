<?php

namespace App\Http\Livewire;

use App\Http\Resources\PartnersCollection;
use App\Models\Member;
use App\Models\Partner;
use Livewire\Component;

class AboutUs extends Component
{
    public $members;
    public $partners;

    public function mount()
    {
        $data_members = Member::all();
        $data_partners = new PartnersCollection(Partner::all());
        $this->members = $data_members;
        $this->partners = $data_partners;
    }
    
    public function render()
    {
        return view('livewire.about-us');
    }
}
