<section class="slider">
    <div class="rev_slider_wrapper fullwidthbanner-container rs1-revo">
        <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">
            <ul>
                @foreach ($banner as $item)
                <li data-transition="fade">
                    <img src="{{ url('storage', $item->image) }}" alt="IMG-SLIDE" class="rev-slidebg">

                    <h2 class="tp-caption tp-resizeme txt1 txt-center p-l-15 p-r-15"
                        data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-width="['1200','992','768','480']"
                        data-hoffset="['0','0','0','0']" data-voffset="['-85','-85','-85','-160']"
                        data-fontsize="['50', '50', '50', '50']" data-lineheight="['60', '60', '60', '60']"
                        data-height="['auto']">{{ $item->title }}</h2>

                    <p class="tp-caption tp-resizeme txt2 txt-center p-l-15 p-r-15"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-width="['780','780','780','480']"
                        data-hoffset="['0','0','0','0']" data-voffset="['-10','-10','-10','-50']"
                        data-fontsize="['18', '18', '18', '16']" data-lineheight="['30', '30', '30', '30']"
                        data-height="['auto']">{{ $item->description }}</p>

                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>