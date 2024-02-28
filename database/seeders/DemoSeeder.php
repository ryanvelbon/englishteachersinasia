<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Student;
use App\Models\Tutor;
use App\Models\TutorReview;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        $tutors = Tutor::factory(20)->create();

        $students = Student::factory(20)->create();

        $startDate = Carbon::today()->subMonths(3);
        $endDate = Carbon::today()->addMonth(1);

        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {

            for ($i=0; $i < 10; $i++) {

                $tutorId = $tutors->random()->id;
                $studentId = $students->random()->id;

                $duration = rand(1, 4) * 30;
                $startTime = $date->copy()->addHours(rand(8, 16)); // lessons start between 8 AM and 4 PM
                $endTime = $startTime->copy()->addMinutes($duration);

                Lesson::create([
                    'student_id' => $studentId,
                    'tutor_id' => $tutorId,
                    'duration' => $duration,
                    'start_time' => $startTime,
                    'end_time' => $endTime,
                    'status' => collect(['planned', 'ongoing', 'completed', 'cancelled'])->random(),
                ]);
            }
        }

        for ($date = Carbon::now()->subYears(2); $date->lte(Carbon::today()); $date->addDay()) {

            TutorReview::factory()->create([
                'tutor_id' => $tutors->random()->id,
                'student_id' => $students->random()->id,
                'created_at' => $date,
            ]);
        }
    }
}
