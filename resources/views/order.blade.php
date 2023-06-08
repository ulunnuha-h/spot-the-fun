@extends('layout.main')

@section('title', "Order")

@section('content')
    <main class="container">
        <h2>Detail Pemesanan</h2>
        <div class="bg-primary p-4 text-white rounded mb-4 ms-3">
            <h2 class="mb-5">{{$event->title}}</h2>
            <section class="d-flex justify-content-between">
                <span class="fw-bold">
                    {{$category[0]->category}}
                </span>
                <section class="d-flex gap-5">
                    <span>Rp {{number_format($category[0]->price)}}</span>
                    <span>Quantity(x{{$quantity}})</span>
                </section>
            </section>
        </div>
        <h2>Detail Pemesan</h2>
    </main>
    <form action="{{route("history.create")}}" method="POST" id="order-form">
        @csrf
        <div class="container">
            <section class="d-flex flex-column ms-3">
                <label for="name" class="fs-4 fw-semibold">Name Lengkap<span class="text-danger">*</span></label>
                <span class="text-secondary">Gunakan nama yang tertera pada KTP/Paspor</span>
                <input type="text" id="name" name="name" required>
                <label for="birth" class="fs-4 fw-semibold">Tanggal Lahir<span class="text-danger">*</span></label>            
                <input type="date" id="birth" name="birth" required>
                <label for="gender" class="fs-4 fw-semibold">Jenis Kelamin<span class="text-danger">*</span></label>            
                <section class="d-flex gap-4">
                    <span>
                        <input type="radio" name="gender" id="male" required value="male" style="cursor: pointer">
                        <label for="male">Laki laki</label>
                    </span>
                    <span>
                        <input type="radio" name="gender" id="female" value="female" style="cursor: pointer">
                        <label for="female">Perempuan</label>
                    </span>
                </section>
                <label for="phone" class="fs-4 fw-semibold">Nomor Ponsel<span class="text-danger">*</span></label>            
                <input type="number" id="phone" name="phone" required>
                <input type="number" name="event_id" value="{{$event_id}}" hidden>
                <input type="number" name="category_id" value="{{$category_id}}" hidden>
                <input type="number" name="quantity" value="{{$quantity}}" hidden>
            </section>
        </div>
        <div class="bg-primary text-white py-4">
            <section class="container">
                <h2>Detail Pembayaran</h2>
                <section class="d-flex justify-content-between w-100">
                    <span class="fw-semibold">Total Harga Tiket</span>
                    <span>Rp {{number_format($category[0]->price * $quantity)}}</span>
                </section>
                <section class="d-flex justify-content-between w-100">
                    <span class="fw-semibold">Biaya Layanan</span>
                    <span>Rp {{number_format(110000)}}</span>
                </section>
                <hr>
                <section class="d-flex justify-content-between w-100">
                    <span class="fw-semibold">Total Bayar</span>
                    <span>Rp {{number_format($category[0]->price * $quantity + 110000)}}</span>
                </section>
                <hr>
                <section class="d-flex justify-content-between w-100 align-items-center">
                    <div>
                        <span class="fw-semibold">Total {{$quantity}} Tiket</span>
                        <br>
                        <span>Rp {{number_format($category[0]->price * $quantity + 110000)}}</span>
                    </div>
                    <button class="btn-white">Bayar Tiket</button>
                </section>
            </section>
        </div>
    </form>
@endsection