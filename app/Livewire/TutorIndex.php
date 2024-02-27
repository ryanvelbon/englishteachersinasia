<?php

namespace App\Livewire;

use App\Models\Tutor;
use Livewire\Component;

class TutorIndex extends Component
{
    public function render()
    {
        $tutors = Tutor::all();

        return view('livewire.tutor-index', [
            'tutors' => $tutors,
        ]);
    }
}
