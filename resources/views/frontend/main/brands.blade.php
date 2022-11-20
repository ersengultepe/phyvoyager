@if($brands->count() > 0)
    <!--- BRANDS : start --->
    <div class="container">
        <div class="row py-5 my-5">
            <div class="col">
                <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">

                    @foreach($brands as $item)
                        <div>
                            <img style="width: 180px;height: 60px" class="img-fluid opacity-2" src="{{ \TCG\Voyager\Facades\Voyager::image( $item->img ) }}" alt="{{ $item->title }}">
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!--- BRANDS : end --->
@endif