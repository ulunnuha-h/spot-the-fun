@extends('layout.main')

@section('title', "History")

@section('content')
    <main class="container">
        <h2>Detail Tiket</h2>
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
                            <img src="/events/{{$data->event_id}}/{{$val}}" class="d-block w-100 object-fit-cover rounded" style="aspect-ratio:18/9">
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
            </section>
            <section class="col-4 bg-primary rounded p-4" style="height: fit-content">
                <div class="bg-white p-4 rounded">
                    <h4>{{$data->name}}</h4>
                    <h4>{{date_format(date_create($data->birth),"d M Y")}}</h4>
                    <h4>{{$data->gender}}</h4>
                    <h4>{{$data->phone}}</h4>
                </div>
            </section>
        </div>
        <div class="bg-primary text-white p-4 rounded mt-3">
            <h3 class="mb-4">{{$event->title}}</h3>
            <div class="d-flex justify-content-between">
                <section class="w-50">
                    <span>
                        <span class="iconify" data-icon="zondicons:calendar"></span> {{$event->date}}
                    </span>
                    <br>
                    <span>
                        <span class="iconify" data-icon="material-symbols:alarm"></span> {{$event->time}}
                    </span>
                </section>
                <section>
                    <span>
                        <span class="iconify" data-icon="bxs:map"></span>
                        {{$event->location}}
                    </span>
                    <section class="ms-4">
                        {{$event->address}}
                    </section>
                </section>
            </div>
        </div>
        <div class="my-4 bg-primary text-white p-4 rounded">
            <h3 class="text-center mb-4">Syarat dan Ketentuan</h3>
            <ol>
                @foreach (explode("|", $event->description) as $i)
                    <li>{{$i}}</li>
                @endforeach
            </ol>
        </div>
    </main>
@endsection