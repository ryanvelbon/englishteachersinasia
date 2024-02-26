@extends('layouts.app')

@section('content')
<style>
</style>
<section class="bg-gray-800 py-32">
    <div class="container grid grid-cols-1 grid-cols-2">
        <div class="my-auto space-y-8">
            <h2 class="text-5xl font-semibold text-white">1-on-1 English Lessons with Native Speakers</h2>
            <p class="text-gray-100">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <div class="flex flex-col lg:flex-row gap-4">
                <a href="{{ route('register') }}" class="btn btn-primary btn-xl">Start Learning Today</a>
                <a href="{{ route('tutors.index') }}" class="btn btn-secondary btn-xl">Find a Tutor</a>
            </div>
        </div>
        <img class="mx-auto" src="https://placehold.co/400">
    </div>
</section>
<section class="bg-white py-24">
    <div class="container">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-16">Nisi ut Aliquip ex ea Commodo</h2>
        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @for($i=0; $i<6; $i++)
                <li class="h-32 bg-black/70 text-white flex flex-col justify-center items-center rounded">
                    Category
                </li>
            @endfor
        </ul>
        <p class="mt-16 text-center">
            <a href="" class="text-sm text-gray-800 underline">More categories</a>
        </p>
    </div>
</section>
<section class="bg-secondary-800 py-24">
    <div class="container">
        How it works
    </div>
</section>
<section class="bg-gray-100 py-24">
    <div class="container">
        Testimonials
    </div>
</section>
<section class="bg-white py-24">
    <div class="container grid grid-cols-1 md:grid-cols-2">
        <div>
            <!-- img -->
        </div>
        <div>
            <h2 class="text-gray-800 text-5xl font-bold">Join 15,000+ students who are already on their journey to mastering English</h2>
        </div>
    </div>
</section>
<section class="bg-secondary-950 py-24">
    <div class="container grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-x-4 gap-y-8">
        @for($i=0; $i<4; $i++)
            <div>
                <h4 class="text-white text-lg font-bold mb-6">Title</h4>
                <ul class="text-gray-400 space-y-3">
                    <li>Link</li>
                    <li>Link</li>
                    <li>Link</li>
                    <li>Link</li>
                    <li>Link</li>
                </ul>
            </div>
        @endfor
    </div>
</section>
<section class="bg-secondary-950 py-24">
    <div class="container flex flex-col items-center">
        <h2 class="text-5xl font-bold text-white mb-12">Start learning English today</h2>
        <a href="{{ route('tutors.index') }}" class="btn btn-xl btn-primary">Find a Tutor</a>
    </div>
</section>
@endsection
