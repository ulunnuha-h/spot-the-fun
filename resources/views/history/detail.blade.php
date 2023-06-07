@extends('layout.main')

@section('title', "History")

@section('content')
    <main class="container">
        <h2>Detail Tiket</h2>
        <div class="row">
            <section class="col-8">
                <div id="carouselExampleIndicators" class="carousel slide container px-0 rounded overflow-hidden">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://placekitten.com/400/500" class="d-block w-100 object-fit-cover rounded" style="aspect-ratio:18/9">
                      </div>
                      <div class="carousel-item">
                        <img src="https://placekitten.com/600/500" class="d-block w-100 object-fit-cover rounded" style="aspect-ratio:18/9">
                      </div>
                      <div class="carousel-item">
                        <img src="https://placekitten.com/400/1200" class="d-block w-100 object-fit-cover rounded" style="aspect-ratio:18/9">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            <section class="col-4 bg-primary rounded p-4" style="height: fit-content">
                <div class="bg-white p-4 rounded">
                    <h4>Andi Iqbal Ilham</h4>
                    <h4>17 May 2000</h4>
                    <h4>Pria</h4>
                    <h4>08123456789</h4>
                </div>
            </section>
        </div>
        <div class="bg-primary text-white p-4 rounded mt-3">
            <h3 class="mb-4">Coldplay: Music of the Spheres</h3>
            <div class="d-flex justify-content-between">
                <section class="w-50">
                    <span>
                        <span class="iconify" data-icon="zondicons:calendar"></span> 15 November 2023
                    </span>
                    <br>
                    <span>
                        <span class="iconify" data-icon="material-symbols:alarm"></span> 19.00 - 23.00 WIB
                    </span>
                </section>
                <section class="d-flex gap-1">
                    <span class="iconify" data-icon="bxs:map" style="width: 30px; height: 30px"></span>
                    <section>Stadium Gelora Bung Karno (GBK) Jl. Pintu Satu Senayan, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270</section>
                </section>
            </div>
        </div>
        <div class="my-4 bg-primary text-white p-4 rounded">
            <h3 class="text-center mb-4">Syarat dan Ketentuan</h3>
            <ol>
                <li>description description description description description description description description description description description description description description description description </li>
                <li>description description description description description description description description description description description description description description description description </li>
                <li>description description description description description description description description description description description description description description description description </li>
                <li>description description description description description description description description description description description description description description description description </li>
            </ol>
        </div>
    </main>
@endsection