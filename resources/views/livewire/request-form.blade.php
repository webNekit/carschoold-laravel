<div>
    <form wire:submit.prevent="submit" class="validate-form rs1-alert-validate" id="contact-form" name="contact">
        <div class="row">
            <div class="col-md-12 col-lg-6 m-t-30 validate-input" data-validate="Поле обязательно к заполнению">
                <input wire:model="first_name" class="size6 s-txt6 p-l-20" type="text" placeholder="Имя">
            </div>

            <div class="col-md-12 col-lg-6 m-t-30 validate-input" data-validate="Не верный формат">
                <input wire:model="email" class="size6 s-txt6 p-l-20" type="text" placeholder="Адрес эл.почты">
            </div>

            <div class="col-md-12 col-lg-6 m-t-30">
                <input wire:model="last_name" class="size6 s-txt6 p-l-20" type="text" placeholder="Фамилия">
            </div>

            <div class="col-md-12 col-lg-6 m-t-30">
                <input wire:model="phone" class="size6 s-txt6 p-l-20" type="text" placeholder="Номер телефона">
            </div>

            <div class="col-md-12 col-lg-12 m-t-30 validate-input" data-validate="Поле обязательно к заполнению">
                <textarea wire:model="text" class="size10 s-txt6 p-l-20 p-t-12" placeholder="Ваше сообщение"></textarea>
            </div>
        </div>

        <div class="p-t-30">
            <button type="submit" class="btn-drive m-txt1 size7 bg-main hov-color-white bo-rad-4">
                Отправить
            </button>
        </div>

        @if (session()->has('message'))
            <div class="alert alert-success mt-2">
                {{ session('message') }}
            </div>
        @endif
    </form>
</div>
