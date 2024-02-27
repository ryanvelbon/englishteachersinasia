<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function show($id)
    {
        $tutor = Tutor::find($id);

        if (!$tutor) {
            return abort(404);
        }

        return view('pages.tutors.show', compact('tutor'));
    }
}
