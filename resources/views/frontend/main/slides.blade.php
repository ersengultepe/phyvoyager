<!--- SLIDES : start --->
<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['700px','700px','700px','550px','500px']" style="height: 700px;">
    <div class="owl-stage-outer">
        <div class="owl-stage">
            <!-- Carousel Slide 1 -->
            @foreach($slides as $slide)
            <div class="owl-item position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['700px','700px','700px','550px','500px']"
                 style="background-image: url({{ \TCG\Voyager\Facades\Voyager::image( $slide->path ) }}); background-size: cover; background-position: center;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                        <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                            <img src="/porto/img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                    <span style="color: white">
                                    {{ $slide->getTranslatedAttribute('title1', \Illuminate\Support\Facades\Session::get('locale')) }}
                                    </span>
                                  <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7" style="color:#ffffff!important" >
                                        <img src="/porto/img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h1 class="text-color-light font-weight-extra-bold text-12-5 line-height-3 mb-2 appear-animation exploreBtn" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">
                                    {{ $slide->getTranslatedAttribute('title2', \Illuminate\Support\Facades\Session::get('locale')) }}
                                </h1>
                                <p class="text-4-5 text-color-light font-weight-light opacity-7 text-center mb-5" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}" style="color:#ffffff!important" >
                                    {!! $slide->getTranslatedAttribute('title3', \Illuminate\Support\Facades\Session::get('locale')) !!}
                                </p>
                                <a href="{{ $slide->btnHref }}" class="d-inline-flex align-items-center btn btn-outline-light text-color-hover-light font-weight-bold px-4 btn-py-2 text-1 rounded" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" data-plugin-options="{'minWindowWidth': 0}" >
                                    {{ $slide->getTranslatedAttribute('btnTitle', \Illuminate\Support\Facades\Session::get('locale')) }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <div class="owl-dots mb-5">
        <button role="button" class="owl-dot active"><span></span></button>
        <button role="button" class="owl-dot"><span></span></button>
    </div>
</div>
<!--- SLIDES : end --->