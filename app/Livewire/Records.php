<?php

namespace App\Livewire;

use App\Models\Record;
use Livewire\Component;

class Records extends Component
{
    public $records;

    public function mount(): void
    {
        $this->records = Record::all();
    }

    public function render()
    {
        return view('livewire.records');
    }
}
