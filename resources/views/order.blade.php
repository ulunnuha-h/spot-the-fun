@extends('layout.main')

@section('title', "Order")

@section('content')
    <main class="container">
        <h2>Detail Pemesanan</h2>
        <div class="bg-primary p-4 text-white rounded mb-4 ms-3">
            <h2 class="mb-5">Coldplay: Music of the Spheres</h2>
            <section class="d-flex justify-content-between">
                <span class="fw-bold">
                    Festival
                </span>
                <section class="d-flex gap-5">
                    <span>Rp 11.000.000</span>
                    <span>Quantity(x2)</span>
                </section>
            </section>
        </div>
        <h2>Detail Pemesan</h2>
    </main>
    <form action="" id="order-form">
        <div class="container">
            <section class="d-flex flex-column ms-3">
                <label for="name" class="fs-4 fw-semibold">Name Lengkap<span class="text-danger">*</span></label>
                <span class="text-secondary">Gunakan nama yang tertera pada KTP/Paspor</span>
                <input type="text" id="name" name="name" required>
                <label for="datebirth" class="fs-4 fw-semibold">Tanggal Lahir<span class="text-danger">*</span></label>            
                <input type="date" id="datebirth" name="datebirth" required>
                <label for="gender" class="fs-4 fw-semibold">Jenis Kelamin<span class="text-danger">*</span></label>            
                <section class="d-flex gap-4">
                    <span>
                        <input type="radio" name="gender" id="male" required>
                        <label for="male">Laki laki</label>
                    </span>
                    <span>
                        <input type="radio" name="gender" id="female">
                        <label for="female">Perempuan</label>
                    </span>
                </section>
                <label for="phone" class="fs-4 fw-semibold">Nomor Ponsel<span class="text-danger">*</span></label>            
                <input type="number" id="phone" name="phone" required>
            </section>
        </div>
        <div class="bg-primary text-white py-4">
            <section class="container">
                <h2>Detail Pembayaran</h2>
                <section class="d-flex justify-content-between w-100">
                    <span class="fw-semibold">Total Harga Tiket</span>
                    <span>Rp 22.000.000</span>
                </section>
                <section class="d-flex justify-content-between w-100">
                    <span class="fw-semibold">Biaya Layanan</span>
                    <span>Rp 110.000</span>
                </section>
                <hr>
                <section class="d-flex justify-content-between w-100">
                    <span class="fw-semibold">Total Bayar</span>
                    <span>Rp 22.220.000</span>
                </section>
                <hr>
                <section class="d-flex justify-content-between w-100">
                    <div>
                        <span class="fw-semibold">Total 1 Tiket</span>
                        <br>
                        <span>Rp 11.110.000</span>
                    </div>
                    <button class="btn-white">Bayar Tiket</button>
                </section>
            </section>
        </div>
    </form>
@endsection