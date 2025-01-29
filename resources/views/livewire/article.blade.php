<div>
    @foreach ($articles as $article)
    <div class="item-slick-4 m-l-15 m-r-15">
        <!-- Block 4 -->
        <div class="block-4">
            <div class="wrap-pic-b4 wrap-pic-w hov5">
                <a><img src="{{ url('storage', $article->image) }}" alt="{{ $article->title }}"></a>
            </div>

            <div class="wrap-text-b4 p-t-23">
                <a>
                    <h4 class="m-txt8 hov-color-main trans-04 m-b-10">
                        {{ $article->title }}
                    </h4>
                </a>

                <span class="s-txt7">{{ $article->created_at->format('d.m.Y') }}</span>

                <p class="s-txt2 p-t-11 p-b-22">
                    {{ $article->description }}
                </p>

            </div>
        </div>
    </div>
    @endforeach
</div>
