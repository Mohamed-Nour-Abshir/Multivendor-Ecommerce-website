<?php

namespace App\Http\Livewire\Admin;

use App\Models\ShopSeller;
use Livewire\Component;

class AdminManageVendors extends Component
{
    public function render()
    {
        $vendors = ShopSeller::paginate(10);
        return view('livewire.admin.admin-manage-vendors',['vendors'=>$vendors])->layout('layouts.admin');
    }
}
