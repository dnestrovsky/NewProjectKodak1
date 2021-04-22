@extends('layouts.app')


@section('title-block','Услуги')

@section('content')
    <!-- Services -->
    <section id="services" class="dark1">
        <div class="inner-width">
            <h1 class="section-title">@lang('main.servicii')</h1>
            <div class="services">
                <div class="service">
                    <a href="#rest">
                        <i class="icon fas fa-paint-brush"></i>
                        <h4>@lang('main.serv_rest')</h4>
                        <p>@lang('main.main_info1')</p>
                    </a>
                </div>

                <div class="service">
                    <a href="#acte">
                    <i class="icon fas fa-images"></i>
                    <h4>@lang('main.main_info1')</h4>
                    <p>@lang('main.serv_photo_acte1')</p>
                    </a>
                </div>

                <div class="service">
                    <a href="#collaj">
                    <i class="icon fas fa-photo-video"></i>
                    <h4>@lang('main.serv_collaj')</h4>
                    <p>@lang('main.serv_collaj1')</p>
                    </a>
                </div>

                <div class="service">
                    <a href="#photo">
                    <i class="icon fas fa-images"></i>
                    <h4>@lang('main.serv_photo_dig')</h4>
                    <p>@lang('main.serv_photo_dig1')</p>
                    </a>
                </div>

                <div class="service">
                    <a href="#holst">
                    <i class="icon far fa-file-image"></i>
                    <h4>@lang('main.serv_holst')</h4>
                    <p>@lang('main.serv_holst1')</p>
                    </a>
                </div>

                <div class="service">
                    <a href="#album">
                    <i class="icon fas fa-camera-retro"></i>
                    <h4>@lang('main.serv_acces')</h4>
                    <p>@lang('main.serv_acces1')</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

   @include('inc.info')

    <!-- Home -->
    <section id="rest">
        <div class="inner-width">
            <h1 class="section-title">Реставрация фото</h1>
            <div class="gallery-section">
                <div class="inner-width">
                    <h1>Примеры</h1>
                    <div class="border"></div>
                    <div class="gallery">

                        <a href="img/2.jpg" class="image">
                            <img src="img/2.jpg" alt="">
                        </a>

                        <a href="img/1.jpg" class="image">
                            <img src="img/1.jpg" alt="">
                        </a>

                    </div>
                    <div class="border"></div>
                    <div class="gallery">
                    <a href="img/3.jpg" class="image">
                        <img src="img/3.jpg" alt="">
                    </a>

                    <a href="img/4.jpg" class="image">
                        <img src="img/4.jpg" alt="">
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Home -->
    <section id="acte">
        <div class="inner-width">
            <h1 class="section-title">Фото на документы</h1>
            <div class="about-content">
                <img src="img/documente.jpg" alt="" class="about-pic">
                <div class="about-text">
                    <div class="skills">
                        <div class="skill">
                            <div class="skill-info">
                                <span>3 x 4</span>
                                <span>3,5 x 4,5</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>

                        <div class="skill">
                            <div class="skill-info">
                                <span>4 x 4</span>
                                <span>4,5 x 6</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>

                        <div class="skill">
                            <div class="skill-info">
                                <span>5 x 5</span>
                                <span>7 x 10</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>

                        <div class="skill">
                            <div class="skill-info">
                                <span>9 x 12</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>

                    </div>
                    <p>
                        @lang('main.serv_doc')
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Works -->
    <section id="collaj" class="dark3">
        <div class="inner-width">
            <h1 class="section-title">Коллажи</h1>
            <div class="works">
                <a href="img/collaj.jpg" class="work">
                    <img src="img/collaj.jpg" alt="">
                    <div class="info">
                        <h3>Коллажи</h3>
                    </div>
                </a>

                <a href="img/collaj2.jpg" class="work">
                    <img src="img/collaj2.jpg" alt="">
                    <div class="info">
                        <h3>Коллажи</h3>
                    </div>
                </a>

                <a href="img/collaj3.jpg" class="work">
                    <img src="img/collaj3.jpg" alt="">
                    <div class="info">
                        <h3>Коллажи</h3>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- Home -->
    <section id="photo">
        <div class="inner-width">
            <h1 class="section-title">Цифровая печать фото</h1>
            <div class="about-content">
                <img src="img/photo_dig.jpg" alt="" class="about-pic">
                <div class="about-text">
                    <div class="skills">
                        <div class="skill">
                            <div class="skill-info">
                                <span>15 x 20</span>
                                <span>18 x 24</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>

                        <div class="skill">
                            <div class="skill-info">
                                <span>20 x 25</span>
                                <span>20 x 30</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>

                        <div class="skill">
                            <div class="skill-info">
                                <span>30 x 40</span>
                                <span>40 x 50</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>

                        <div class="skill">
                            <div class="skill-info">
                                <span>40 x 60</span>
                                <span>50 x 60</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>

                        <div class="skill">
                            <div class="skill-info">
                                <span>60 x 70</span>
                                <span>60 x 90</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>

                    </div>
                    <p>
                        @lang('main.serv_foto')
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Home -->
    <section id="holst" class="dark3">
        <div class="inner-width">
            <h1 class="section-title">Печать на холсте</h1>
            <div class="about-content">
                <img src="img/holst.jpg" alt="" class="about-pic">
                <div class="about-text">
                    <h1 class="skillsh1">С подрамником</h1>
                    <div class="skills">
                        <div class="skill">
                            <div class="skill-info">
                                <span>30 x 40</span>
                                <span>40 x 50</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>

                        <div class="skill">
                            <div class="skill-info">
                                <span>40 x 60</span>
                                <span>50 x 70</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>
                        <div class="skill">
                            <div class="skill-info">
                                <span>56 x 84</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>
                    </div>
                    <h1 class="skillsh1">Без подрамника</h1>
                        <div class="skills">
                        <div class="skill">
                            <div class="skill-info">
                                <span>30 x 40</span>
                                <span>40 x 50</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>

                        <div class="skill">
                            <div class="skill-info">
                                <span>40 x 60</span>
                                <span>50 x 70</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>

                        <div class="skill">
                            <div class="skill-info">
                                <span>60 x 90</span>
                            </div>
                            <div class="skill-bar html"></div>
                        </div>

                    </div>
                    <p>
                        @lang('main.serv_holsts')
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Home -->
    <section id="album">
        <div class="inner-width">
            <h1 class="section-title">Альбомы и фоторамки</h1>
            <div class="about-content">
                <img src="img/album.jpg" alt="" class="about-pic">
                <div class="about-text">
                    <p>
                        @lang('main.serv_access')
                    </p>
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
