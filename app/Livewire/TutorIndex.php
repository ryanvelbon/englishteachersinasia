<?php

namespace App\Livewire;

use App\Models\Tutor;
use Livewire\Component;
use Livewire\WithPagination;

class TutorIndex extends Component
{
    use WithPagination;

    public function render()
    {
        $tutors = Tutor::paginate(12);

        return view('livewire.tutor-index', [
            'tutors' => $tutors,
        ]);
    }
}
