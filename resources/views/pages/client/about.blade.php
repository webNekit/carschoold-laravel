<x-layout.app title="Dashboard">
    <x-slot:title>О нас</x-slot:title>
    <section class="bg-img-1 bg-overlay-3 p-t-93 p-b-95" style="background-image: url('{{ asset('client/images/bg-title-01.jpg') }}');">
        <div class="container">
            <div class="flex-w flex-sb-m">
                <div class="p-t-10 p-b-10 p-r-30">
                    <div class="flex-w p-b-9">
                        <span>
                            <a href="{{ route('client.home') }}" class="s-txt19 hov-color-main trans-02">
                                <i class="fa fa-home"></i>
                                Главная
                            </a>
                            <span class="s-txt19 p-l-6 p-r-9">/</span>
                        </span>

                        <span>
                            <span class="s-txt19">
                                О нас
                            </span>
                        </span>
                    </div>

                    <h2 class="m-txt6 respon1">
                        О нас
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial & About-->
    <section class="bgwhite p-t-25 p-b-80">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-t-40">
                    <div class="p-b-22">
                        <h3 class="m-txt4 p-b-8 respon1">
                            О школе
                        </h3>

                        <div class="bg-main size2 bo-rad-3"></div>
                    </div>

                    <p class="s-txt2 p-t-12">
                        Автошкола «Сигнал" одна из старейших автошкол Южного округа. История автошколы берёт своё начало
                        в сентябре 1997 года. Более 20 лет назад около станции метро «Красногвардейская» была открыта
                        наша первая автошкола, которая очень быстро завоевала популярность среди жителей этого, а также
                        ближайших районов
                    </p>

                    <ul class="list-01 p-t-18">
                        <li class="p-b-6">
                            <span class="s-txt2">Современные классы.</span>
                        </li>

                        <li class="p-b-6">
                            <span class="s-txt2">Поэтапная оплата</span>
                        </li>

                        <li class="p-b-6">
                            <span class="s-txt2">Свой автопарк</span>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 p-t-40">
                    <div class="wrap-slide-slick-3">
                        <div class="p-b-22">
                            <h3 class="m-txt4 p-b-8 p-r-90 respon1">
                                Отзывы наших учеников
                            </h3>

                            <div class="bg-main size2 bo-rad-3"></div>
                        </div>

                        <livewire:review />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video -->
    <section class="parallax100 bg-overlay-4 p-t-115 p-b-120" style="background-image: url('{{ asset('client/images/video-bg-01.jpg') }}');">
</x-layout.app>
