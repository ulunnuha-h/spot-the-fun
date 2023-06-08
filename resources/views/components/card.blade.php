<div class="col">
    <section class="rounded overflow-hidden @if ($type == 'pri')
            card-primary
        @else
            card-secondary
        @endif">
        <img src="/events/{{$data->id}}/{{explode('|',$data->images)[0]}}" alt="images event" class="w-100" style="aspect-ratio:16/9; object-fit:cover">
        <section class="p-3">
            <h4 class="fw-semibold"><a href="/event/{{$data->id}}">{{$data["title"]}}</a></h4>
            <span class="fs-6 fw-light">{{$data['date']}}</span>
            <p class="fs-5 mt-3 mb-0 fw-semibold">Rp {{number_format($data['price'])}}</p>
        </section>
    </section>
</div>
