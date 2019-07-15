@foreach($photos as $p)
    <div class="mix col-md-6 col-lg-3 rened">
        <a href="{{ $p->url }}" class="portfolio-item pi-style2 set-bg"
           data-setbg="{{ $p->url }}">
            <div class="pi-inner">
                <h2>+ See Project</h2>
            </div>
        </a>
        <div class="portfolio-meta">
            <h2>{{ $p->title }}
                @auth
                    @if($p->user->id == Auth::id())
                        <form class="right" method="post" action="/photos/{{$p->id}}">
                            @csrf
                            @method('DELETE')
                            <button style="border:none;" type="submit"><i class="fa fa-trash-o"></i></button>
                        </form>
                    @endif
                @endauth

            </h2>
            <p><a href="/users/{{$p->user->id}}">{{ $p->user->name }}</a></p>
        </div>
    </div>
@endforeach