@extends('layouts.dashboard')



@section('title-block', 'Сообщения')

@section('content')

    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <div class="blog-posts">
                    @foreach($data as $el)
                    <div class="post">
                        <a  href="{{ route('messages-data-one', $el->id) }}">
                        <img src="img/letter.png" alt="" class="post-img">
                        <div class="post-content">
                            <h3>{{$el->name}}</h3>
                            <span class="date">Дата: {{$el->created_at}}</span>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="w-100">{{$data->links()}}</div>
            </div>
        </div>
    </section>
@endsection
