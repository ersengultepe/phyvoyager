<!--- WHO WE ARE : start --->
<div class="container">
    <div class="row py-5 my-5">
        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter">
            <h2 class="font-weight-normal text-6 line-heigh-2 mb-4">{!! __('physmart.whoWeAreTitle') !!}</h2>
            {!! __('physmart.whoWeAre') !!}
            <a href="#" class="learn-more text-color-primary font-weight-semibold text-2">{{ __('physmart.viewMore') }}<i class="ps-2 fas fa-chevron-right text-2"></i></a>
        </div>
        <div class="col-lg-8 mt-5 mt-lg-0">
            <div class="row">

                @foreach($bizKimiz as $item)
                    <div class="col-lg-6 mb-4 mb-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icon-{{ $item->icon }} icons "></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold mb-2"><mark>{{ $item->getTranslatedAttribute('title', \Illuminate\Support\Facades\Session::get('locale')) }}</mark></h4>
                                <p class="mb-0">{{ $item->getTranslatedAttribute('text', \Illuminate\Support\Facades\Session::get('locale')) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</div>
<!--- WHO WE ARE : end --->