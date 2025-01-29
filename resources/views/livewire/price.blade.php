
<div class="row">
    @if ($prices)
        @foreach ($prices as $price)
        <div class="col-sm-6 col-lg-4 p-t-30">
            <div class="block-3 bo2 bgwhite">
                <div class="wrap-pic-b3 wrap-pic-w hov5 bo2-b">
                    <a href="#"><img width="370" height="260" src="{{ url('storage', $price->image) }}" alt="{{ $price->title }}"></a>
                </div>
    
                <div class="wrap-text-b3 p-l-20 p-r-20 p-t-16 p-b-26">
                    <p class="m-txt8 hov-color-main trans-04 p-b-12">
                        {{ mb_substr($price->description, 0, 80) }}
                    </p>
                    <a href="#">
                        <h4 class="m-txt8 hov-color-main trans-04 p-b-12">
                            {{ $price->title }}
                        </h4>
                    </a>
                    <span class="m-txt9">{{ $price->price }} руб.</span>
    
                </div>
            </div>
        </div>  
        @endforeach
    @else
        {{ __("Данный раздел редактируется. Приносим свои извинения!") }}
    @endif
</div>