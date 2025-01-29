<div>
    <div class="slide-slick-3 js-slick-3">
        @foreach ($reviews as $review)
        <div class="item-slick-3" data-thumb="{{ url('storage', $review->image) }}">
            <span class="xl-txt1 float-l p-r-5 dis-block h-full ab-t-l">“</span>
            <p class="para-slide-slick-3 s-txt2 p-t-12 p-l-33 p-b-20 animated">
                {{ $review->text }}
            </p>

            <div class="wrap-person-slick-3 p-l-33 animated">
                <div class="wrap-info-person">
                    <span class="s-txt12 m-r-15">{{ $review->name }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="wrap-slick3-dots p-l-33 p-t-25"></div>
</div>
