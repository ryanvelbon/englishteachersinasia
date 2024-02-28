@extends('layouts.app')

@section('content')
<section id="profile-header" class="bg-gray-800">
    <div class="relative isolate flex flex-col justify-end overflow-hidden pb-8 pt-80 md:pt-20 md:pb-20">
        <div class="md:hidden">
            <img class="absolute inset-0 -z-10 h-full w-full object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/60"></div>
            <div class="absolute inset-0 -z-10 ring-1 ring-inset ring-gray-900/10"></div>
        </div>

        <div class="container grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="my-auto space-y-6">
                <h2 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-white">{{ $tutor->user->name }}</h2>
                <div>
                    <i class="fa-solid fa-star-sharp text-primary-500"></i>
                    <i class="fa-solid fa-star-sharp text-primary-500"></i>
                    <i class="fa-solid fa-star-sharp text-primary-500"></i>
                    <i class="fa-solid fa-star-sharp text-primary-500"></i>
                    <i class="fa-solid fa-star-sharp text-gray-200"></i>
                    <span class="text-base text-gray-200 ml-2">57 reviews</span>
                </div>
                <p class="text-gray-200">Da Nang, Vietnam</p>
            </div>
            <div class="hidden md:block">
                <img class="mx-auto h-96" src="http://placehold.co/600">
            </div>
        </div>
    </div>
</section>
<section id="profile-subnav" class="border-0 border-b">
    <div class="container flex justify-between">
        <nav class="text-gray-500 space-x-4 my-auto">
            <a href="#profile-bio" class="hover:text-gray-800">Profile</a>
            <a href="#profile-reviews" class="hover:text-gray-800">Reviews (57)</a>
            <a href="#profile-interview" class="hover:text-gray-800">Interview</a>
        </nav>
        <div class="flex gap-4 py-4">
            <button class="btn btn-lg text-gray-500 hover:text-primary-500 hover:bg-gray-100">
                <i class="fa-sharp fa-regular fa-heart mr-1"></i>
                Save to favorites
            </button>
            <a href="" class="btn btn-primary btn-lg">Contact {{ $tutor->user->name }}</a>
        </div>
    </div>
</section>
<section class="bg-gray-50">
    <div class="container pt-16 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <main class="lg:col-span-2">
            <div id="profile-bio" class="pb-16 border-0 border-b">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div id="profile-reviews" class="py-16 border-0 border-b">
                <h4 class="mb-6 text-3xl text-gray-500">57 Reviews</h4>
                <ul class="space-y-3">
                    @for($i=0; $i<3; $i++)
                        <li class="border rounded p-6">
                            <div class="flex gap-2">
                                <img class="rounded h-16" src="https://placehold.co/100">
                                <div class="my-auto">
                                    <div>
                                        <i class="fa-solid fa-star-sharp text-yellow-500"></i>
                                        <i class="fa-solid fa-star-sharp text-yellow-500"></i>
                                        <i class="fa-solid fa-star-sharp text-yellow-500"></i>
                                        <i class="fa-solid fa-star-sharp text-yellow-500"></i>
                                        <i class="fa-solid fa-star-sharp text-yellow-500"></i>
                                    </div>
                                    <p class="text-gray-400 text-sm">
                                        <span>5 days ago</span>
                                        by
                                        <span class="font-semibold">Tony Adams</span>
                                    </p>
                                </div>
                            </div>
                            <div class="mt-6 text-sm text-gray-800">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </li>
                    @endfor
                </ul>
            </div>
            <div id="profile-interview" class="py-16 border-0 border-b">
                Interview
            </div>
        </main>
        <aside class="space-y-6 mb-12">
            <div class="rounded border bg-white px-6 py-3">
                <h3 class="font-bold text-center text-lg text-gray-800 mt-4 mb-4">Choose a package</h3>
                @foreach($packages as $package)
                    <div class="w-full mb-2 py-4 text-gray-700 bg-gray-100 hover:text-gray-800 hover:bg-gray-300 focus:ring-primary-300 rounded cursor-pointer text-center">
                        <p class="font-bold uppercase text-xs mb-1">{{ $package->title }}</p>
                        <p>
                            <span class="line-through">${{ $tutor->rate * $package->n_hours }}</span>
                            <span class="font-bold">${{ $tutor->rate * $package->n_hours * ((100 - $package->discount)/100) }}</span>
                            for {{ $package->n_hours }} hours tuition
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="rounded border bg-white px-6 py-3">
                card
            </div>
        </aside>
    </div>
</section>
@endsection
