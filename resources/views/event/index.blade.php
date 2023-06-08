@extends('layout.main')

@section('title', "Events")

@section('content')
    <main class="container" style="min-height: 100vh">
        @if ($key)
            <h2 class="mt-4 mb-3">Searching "{{$key}}"</h2>
        @else
            <h2 class="mt-4 mb-3">Browse all events</h2>
        @endif
        <section class="row row-cols-lg-4 row-cols-1 g-3 mb-4">
            @foreach ($data as $i)
            <x-card type="pri" :data="$i"/>
            @endforeach
        </section>
    </main>
@endsection