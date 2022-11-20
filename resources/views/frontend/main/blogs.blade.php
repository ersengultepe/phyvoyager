@if($blogs->count() > 0)
<!--- LATEST BLOGS : start --->
<div class="container">
    <div class="row pt-5 mt-4">
        <div class="col">
            <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Son Blog</strong> Yazıları</h2>
        </div>
    </div>
    <div class="row recent-posts pb-5 mb-4">
        @foreach($blogs as $blog)
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <article>
                <div class="row">
                    <div class="col-auto pe-0">
                        <div class="date">
                            <span class="day text-color-dark font-weight-extra-bold">{{ str_pad(\Carbon\Carbon::parse($blog->created_at)->day, 2, "0", STR_PAD_LEFT) }}</span>
                            <span class="month text-1" style="text-transform: uppercase">{{ \Illuminate\Support\Str::limit(\Carbon\Carbon::parse($blog->created_at)->monthName, 3, '') }}</span>
                        </div>
                    </div>
                    <div class="col ps-1">
                        <h4 class="line-height-3 text-4"><a href="#" class="text-dark">{{ $blog->getTranslatedAttribute('title', \Illuminate\Support\Facades\Session::get('locale')) }}</a></h4>
                        <p class="line-height-5 pe-4 mb-1">{{ \Illuminate\Support\Str::limit($blog->getTranslatedAttribute('excerpt', \Illuminate\Support\Facades\Session::get('locale')), 80) }}</p>
                        <a href="{{ route('phyblogs', ['slug' => $blog->slug]) }}" class="read-more text-color-dark font-weight-bold text-2">daha fazlası <i class="fas fa-chevron-right text-1 ms-1"></i></a>
                    </div>
                </div>
            </article>
        </div>
        @endforeach
    </div>
</div>
<!--- LATEST BLOGS : end --->
@endif