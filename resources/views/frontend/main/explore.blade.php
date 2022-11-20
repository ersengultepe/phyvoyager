<div class="container container-xl-custom py-1 my-1">
    <div class="row justify-content-center">
        <div class="col-md-10 px-lg-5">
            <div class="row">

				@foreach($explores as $item)
					<div class="col-md-{{ $loop->index < 2 ? "6" : "4" }} mb-2 pb-2 px-2 appear-animation" data-appear-animation="fadeInRightShorter">
					<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
						<span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
							<img src="{{ \TCG\Voyager\Facades\Voyager::image( $item->img ) }}" class="img-fluid" alt="{{  $item->title  }}"
								 @if($loop->index < 2) style="width: 548px; height: 189px" @else style="width: 360px; height: 124px" @endif>
							<span class="thumb-info-title">
								<span class="thumb-info-slide-info-hover-1">
									<span class="thumb-info-inner text-4">{{ $item->getTranslatedAttribute('title', \Illuminate\Support\Facades\Session::get('locale')) }}</span>
								</span>
								<span class="thumb-info-slide-info-hover-2">
									<span class="thumb-info-inner text-2">
										<a href="#" class="d-inline-flex align-items-center btn btn-outline-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded exploreBtn" >
											{{ __('physmart.view') }} <i class="fa fa-arrow-right ms-2 ps-1 text-3"></i>
										</a>
									</span>
								</span>
							</span>
						</span>
					</span>
					</div>
				@endforeach

            </div>
        </div>
    </div>
</div>