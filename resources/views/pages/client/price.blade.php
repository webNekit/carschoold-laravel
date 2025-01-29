<x-layout.app>
    <x-slot:title>Наши цены</x-slot:title>
    <div>
        <section class="bg-img-1 bg-overlay-3 p-t-93 p-b-95" style="background-image: url('{{ asset('client/images/bg-title-01.jpg') }}');">
            <div class="container">
                <div class="flex-w flex-sb-m">
                    <div class="p-t-10 p-b-10 p-r-30">
                        <div class="flex-w p-b-9">
                            <span>
                                <a href="index.html" class="s-txt19 hov-color-main trans-02">
                                    <i class="fa fa-home"></i>
                                    Главная
                                </a>
                                <span class="s-txt19 p-l-6 p-r-9">/</span>
                            </span>
    
                            <span>
                                <span class="s-txt19">
                                    Цены
                                </span>
                            </span>
                        </div>
    
                        <h2 class="m-txt6 respon1">
                            Цены
                        </h2>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Content -->
        <section class="bgwhite p-t-70 p-b-65">
            <div class="container">
                <!-- Course list -->
                <div class="js-list">
                    <livewire:price :prices='$prices' />
                </div>
    
    
            </div>
        </section>
    </div>
    
</x-layout.app>