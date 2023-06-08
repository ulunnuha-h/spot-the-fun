@extends('layout.main')

@section('title', "History")

@section('content')
    <main class="container" style="min-height: 100vh">
        <h2>Histori Tiket</h2>
        <section class="ms-3">
            @foreach ($data as $i)
            <div class="bg-primary p-4 text-white rounded mb-4">
                <section class="d-flex justify-content-between align-items-center">
                    <h2 class="mb-0">{{$i->title}}</h2>
                    <a href="history/{{$i->id}}" class="btn-white">Lihat Detail Tiket</a>
                </section>
                <span class="mb-5">Ordered on {{date_format($i->created_at,"d M Y")}}</span>
                <section class="d-flex justify-content-between mt-5">
                    <span class="fw-bold">
                        {{$i->category}}
                    </span>
                    <section class="d-flex gap-4">
                        <span>Rp {{number_format($i->price)}}</span>
                        <span>Quantity(x{{$i->quantity}})</span>
                    </section>
                </section>
            </div>
            @endforeach
        </section>
    </main>
@endsection