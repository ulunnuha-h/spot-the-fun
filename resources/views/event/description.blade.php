@extends('layout.main')

@section('title', "Description")

@section('content')
    <header class="">
        <div class="container">
            <div class="row">
                <section class="col-8">
                        <div id="carouselExampleIndicators" class="carousel slide container px-0 rounded overflow-hidden" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                            @foreach (range(1, count($images)) as $i)
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i-1}}" aria-label="Slide {{$i+1}}" @if ($i==1)
                                    class="active" aria-current="true"
                                @endif></button>  
                            @endforeach
                            </div>
                            <div class="carousel-inner">
                                @foreach ($images as $idx => $val)
                                <div class="carousel-item @if ($idx == 0)
                                    active
                                @endif">
                                    <img src="/events/{{$data->id}}/{{$val}}" class="d-block w-100 object-fit-cover rounded" style="aspect-ratio:18/9">
                                  </div>          
                                @endforeach
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
                        <div class="my-5">
                            <h2>Deskripsi</h2>
                            <section class="ms-4">
                                <h4>Syarat dan Ketentuan</h4>
                                <ol>
                                    @foreach ($desc as $i)
                                    <li>{{$i}}</li>    
                                    @endforeach
                                </ol>
                            </section>
                        </div>
                </section>
                <section class="col-4 bg-white">
                    <div class="bg-primary p-4 text-white rounded-3">
                        <h3>{{$data->title}}</h3>
                        <ul>
                            <li>{{$data->date}}</li>
                            <li>{{$data->time}}</li>
                            <li>{{$data->location}}</li>
                        </ul>
                        <section class="d-flex">
                            <footer>
                                <span>Diselenggarakan oleh </span>
                                <h5>{{$data->organizer}}</h5>
                            </footer>
                        </section>
                    </div>
                    <div class="w-100 mt-3 mb-2 bg-primary rounded-3 d-flex align-items-center justify-content-center p-4">
                        <a class="btn-white w-100 border-0 rounded-2 py-2 fw-semibold text-center text-black" href="{{$data->id}}/category">Kategori tiket</a>
                    </div>
                    <a href="#" >Bagikan Event</a>
                </section>
            </div>
        </div>
        <div class="py-5 bg-primary w-full mt-5">
            <section class="container">
                <h1 class="text-white mb-4">What's Fun This Week</h1>
                <section class="row row-cols-lg-4 row-cols-1 g-3">
                    @foreach ($other as $i)
                        <x-card type="sec" :data="$i"/>    
                    @endforeach
                </section>
            </section>
        </div>
        <div class="d-flex item-aligns-center justify-content-center p-5">
          <a href="/event" class="btn-primary py-2 px-4">
              Explore more events >
          </a>
        </div>
    </header>
@endsection