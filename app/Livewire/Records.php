<?php

namespace App\Livewire;

use App\Models\Record;
use Livewire\Component;
use Livewire\WithPagination;

class Records extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.records',
            [
                'records' => Record::orderBy('created_at', 'desc')->paginate(10),
            ]);
    }
}
