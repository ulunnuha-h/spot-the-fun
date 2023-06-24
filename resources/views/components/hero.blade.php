<div class="w-100 py-4" style="background-color: var(--primary)">
    <div id="carouselExampleIndicators" class="carousel slide container rounded" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          @foreach ($data as $idx => $val)
            <div class="carousel-item @if ($idx == 0)
                active
            @endif">
              <a href="event/{{$val->id}}/category">
                <img src="events/{{$val->id}}/{{explode('|',$val->images)[0]}}" class="d-block w-100 rounded" style="aspect-ratio:20/9;object-fit:cover">
              </a>
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
</div>