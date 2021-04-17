@extends('layouts.app')


@section('title-block', 'Сувениры')

@section('content')

    <section id="works" class="dark1">
        <div class="inner-width">
            <!-- Contact -->
            <h2 class="section-title">{{$data->__('name')}}</h2>
            <div class="about-content">
                <img src="{{Storage::url($data->image)}}" alt="" class="about-pic">
                <div class="about-text">

                <p class="descrip">{{ $data->__('description') }}</p>

                </div>
            </div>
        </div>
    </section>

    <!-- Home -->
    <section id="about">
        <div class="inner-width">
            <h1 class="section-title">Примеры</h1>
            <div class="about-content">
                <div class="gallery-section">
                    <div class="inner-width">
                        <div class="gallery">

                            <a href="../img/2.jpg" class="image">
                                <img src="../img/2.jpg" alt="">
                            </a>

                            <a href="../img/1.jpg" class="image">
                                <img src="../img/1.jpg" alt="">
                            </a>

                            <a href="../img/2.jpg" class="image">
                                <img src="../img/2.jpg" alt="">
                            </a>

                            <a href="../img/1.jpg" class="image">
                                <img src="../img/1.jpg" alt="">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        $(".gallery").magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery:{
                enabled: true
            }
        });
    </script>
@endsection
