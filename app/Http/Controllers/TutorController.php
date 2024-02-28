<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TutorController extends Controller
{
    public function show($id)
    {
        $tutor = Tutor::query()
                    ->withCount('reviews')
                    ->with('reviews.student.user')
                    ->find($id);

        if (!$tutor) {
            return abort(404);
        }

        $packages = Cache::rememberForever('packages', function () {
            return Package::all();
        });

        return view('pages.tutors.show', [
            'tutor' => $tutor,
            'packages' => $packages,
        ]);
    }
}
