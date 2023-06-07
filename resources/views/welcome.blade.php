@extends('layout.main')

@section('title', "Homepage")

@section('content')
    <x-hero/>
    <div class="container my-5">
        <h1>Most Loved Event</h1>
        <section class="row row-cols-lg-4 row-cols-1 g-3">
            @foreach ($data as $i)
            <x-card type="pri" :data="$i"/>
            @endforeach
        </section>
    </div>
    <div class="py-5 bg-primary w-full">
        <section class="container">
            <h1 class="text-white">What's Fun This Week</h1>
            <section class="row row-cols-lg-4 row-cols-1 g-3">
                @foreach ($data as $i)
                <x-card type="sec" :data="$i"/>
                @endforeach
            </section>
        </section>
    </div>
    <div class="d-flex item-aligns-center justify-content-center p-5">
        <a href="#" class="btn-primary py-2 px-4">
            Explore more events >
        </a>
    </div>
@endsection