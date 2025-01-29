<x-layout.app>
    <x-slot:title>Наши цены</x-slot:title>
    <div class="bg1 p-t-29 p-b-29">
        <div class="container">
            <div class="flex-w">
                <span>
                    <a href="{{ route('client.home') }}" class="s-txt21 hov-color-main trans-02">
                        <i class="fa fa-home"></i>
                        Главная
                    </a>
                    <span class="s-txt21 p-l-6 p-r-9">/</span>
                </span>

                <span>
                    <span class="s-txt21">
                        Контакты
                    </span>
                </span>
            </div>
        </div>
    </div>
    <section class="p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8 p-b-50">
                    <div>
                        <h3 class="m-txt28 rs1-color p-b-40">
                            Свяжитесь с нами
                        </h3>

                        <livewire:request-form />
                    </div>
                </div>

                <div class="col-md-5 col-lg-4 p-b-50">
                    <div class="p-l-20 p-l-0-lg">
                        <h3 class="m-txt28 rs1-color p-b-35">
                            Контактная информация
                        </h3>

                        <p class="s-txt2">
                            Мы всегда рады вашим вопросам и предложениям. Свяжитесь с нами любым удобным для вас способом!
                        </p>

                        <ul class="p-t-26">
                            <li class="s-txt32 rs2-color p-b-10">
                                <i class="m-r-5 fa fa-home" aria-hidden="true"></i>
                                г. Москва, ул.Домодедовская, д.28 (3 этаж) 
                            </li>
                            <li class="s-txt32 rs2-color p-b-10">
                                <i class="m-r-5 fa fa-phone" aria-hidden="true"></i>
                                +7-800-555-32-55 
                            </li>
                            <li class="s-txt32 rs2-color p-b-10">
                                <i class="m-r-5 fa fa-clock-o" aria-hidden="true"></i>
                                ПН-ПТ 9.00 - 20.00
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.app>