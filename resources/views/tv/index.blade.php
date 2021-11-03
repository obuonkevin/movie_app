@extends('layouts.main')

@section('content')

<div class="container mx-auto px-4 pt-16">
    <div class="popular-tv">
        <h2 class="uppercase tracking-wider text-yellow-600 text-lg font-semibold">Popular Shows</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
            
            @foreach ($popularTv as $tvshow)
         
             <x-tv-card :tvshow="$tvshow"/>

            @endforeach
             
        </div>
    </div>
</div>
{{-- end of popular tv --}}

{{-- now playing section starts here --}}


<div class="container mx-auto px-4 pt-16">
    <div class="TopRated-tv">
        <h2 class="uppercase tracking-wider text-yellow-600 text-lg font-semibold">Top Rated Shows</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">

            @foreach ($topRatedTv as $tvshow)
         
            <x-tv-card :tvshow="$tvshow" />

            @endforeach

           
        </div>
    </div>
    {{-- end of popular --}}
</div>

@endsection