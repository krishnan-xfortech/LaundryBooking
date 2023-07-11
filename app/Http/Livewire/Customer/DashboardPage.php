<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

class DashboardPage extends Component
{
    public function render()
    {
        return view('livewire.customer.dashboard-page')->layout('layouts.app');
    }
}
