<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

class EntryPage extends Component
{
    public function render()
    {
        return view('livewire.customer.entry-page')->layout('layouts.app');
    }
}
