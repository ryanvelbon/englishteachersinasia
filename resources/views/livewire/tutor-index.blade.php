<div>
    <aside>
        <div class="h-16 flex items-center px-8">
            <a href="#filter-tutors-modal" class="btn btn-sm btn-muted">
                <i class="fa-regular fa-filter mr-1"></i>
                <span>Filters</span>
            </a>
        </div>
    </aside>
    <main class="container py-12">
        <ul role="list" class="grid grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:grid-cols-3">
            @forelse($tutors as $tutor)
                <a href="{{ route('tutors.show', $tutor->id ) }}">
                    <li class="border border-2">
                        <div class="relative">
                            <img class="aspect-[3/2] w-full object-cover" src="https://placehold.co/500" alt="">
                            <div class="absolute bottom-6 left-0 bg-primary-500/50 text-white text-lg font-bold w-20 h-12 flex items-center justify-center">$ {{ $tutor->rate }}</div>
                            @if($tutor->is_native)
                                <div class="absolute rotate-45 top-6 right-0 bg-black text-white px-4 py-2 text-center uppercase tracking-widest text-xs">Native</div>
                            @endif
                        </div>
                        <div class="py-6 px-4">
                            <h3 class="text-lg font-semibold leading-8 tracking-tight text-gray-900">{{ $tutor->user->name }}</h3>
                            <p class="text-base leading-7 text-gray-600">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                <span>Da Nang, Vietnam</span>
                            </p>
                            <div>
                                <i class="fa-solid fa-star-sharp text-primary-500"></i>
                                <i class="fa-solid fa-star-sharp text-primary-500"></i>
                                <i class="fa-solid fa-star-sharp text-primary-500"></i>
                                <i class="fa-solid fa-star-sharp text-primary-500"></i>
                                <i class="fa-solid fa-star-sharp"></i>
                                <span class="text-xs text-gray-600 ml-2">57 reviews</span>
                            </div>
                            <p class="mt-4 text-xs text-primary-600">View Profile</p>
                        </div>
                    </li>
                </a>
            @empty
                <div>No results found.</div>
            @endforelse
        </ul>
        <div class="mt-8">
            {{ $tutors->links() }}
        </div>
    </main>
    <x-modal name="filter-tutors-modal" width="3xl">
        Filter your search.
    </x-modal>
</div>
