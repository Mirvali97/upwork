@include('header')
<!-- ##### Vizew Post Area Start ##### -->

<!-- ##### Mag Posts Area Start ##### -->
<section class="mag-posts-area d-flex flex-wrap">
    <!-- >>>>>>>>>>>>>>>>>>>
     Post Left Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30 text-capitalize">
            <!-- Section Title -->
            <div class="section-heading">
                <h5 style="font-size: 17px;">{{ __('text.fed') }}</h5>
            </div>

            <!-- Single Blog Post -->
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="{{ asset('img/fed/olimp.jpg') }}" alt="">
                </div>
                <div class="post-content">
                    <a  target="_blank" href="http://olympic.uz/uz/fed/list.php?SECTION_ID=423" class="post-title">{{ __('text.milliy') }}</a>
                </div>
            </div>
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="{{ asset('img/fed/uff.png') }}" alt="">
                </div>
                <div class="post-content">
                    <a  target="_blank" href="http://www.the-uff.com/" class="post-title">{{ __('text.futbol') }}</a>
                </div>
            </div>
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="{{ asset('img/fed/rygbi.jpg') }}" alt="">
                </div>
                <div class="post-content">
                    <a  target="_blank" href="https://rugby.uz" class="post-title">
                        {{ __('text.regbi') }}</a>
                </div>
            </div>
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="{{ asset('img/fed/qilich.png') }}" alt="">
                </div>
                <div class="post-content">
                    <a  target="_blank" href="http://fencing.uz/uz" class="post-title">
                        {{ __('text.qilich') }}</a>
                </div>
            </div>
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="{{ asset('img/fed/tennis.jpg') }}" alt="">
                </div>
                <div class="post-content">
                    <a  target="_blank" href="http://www.tennis.uz/" class="post-title">
                        {{ __('text.tennis') }}</a>
                </div>
            </div>
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="{{ asset('img/fed/ath.png') }}" alt="">
                </div>
                <div class="post-content">
                    <a  target="_blank" href="http://www.fgu.uz" class="post-title">
                        {{ __('text.atlit') }}</a>
                </div>
            </div>
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="{{ asset('img/fed/golf.png') }}" alt="">
                </div>
                <div class="post-content">
                    <a  target="_blank" href="http://www.fgu.uz" class="post-title">
                        {{ __('text.golf') }}</a>
                </div>
            </div>
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="{{ asset('img/fed/judo.jpg') }}" alt="">
                </div>
                <div class="post-content">
                    <a  target="_blank" href="http://www.judo.uz/" class="post-title">
                        {{ __('text.judo') }}</a>
                </div>
            </div>
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="{{ asset('img/fed/med.jpg') }}" alt="">
                </div>
                <div class="post-content">
                    <a  target="_blank" href="#" class="post-title">
                        {{ __('text.soglik') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mag-posts-content mt-30 mb-30 p-30 box-shadow">
        <h1 class="text-center text-uppercase " style="color: #1D9AD4; font-size: 17px;"> {{ __('text.kontent') }}</h1>

        <div class="trending-now-posts mb-30 mt-4">
                <!-- Section Title -->
                <div class="trending-post-slides owl-carousel">
                    <!-- Single Trending Post -->
                    @foreach($posts as $post)
                        <div class="single-trending-post">
                            <img src="/storage/{{$post->image}}" alt="">
                            <div class="post-content">
                                <a target="_blank" href="{{route('new.index', ['id'=> $post->id])}}" class="post-title text-uppercase">{{ $post->title }}</a>
                                <p class="text-white"><i class="fa fa-eye"></i>  {{$post->count_view }}</p>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

                 <!-- Sports Videos -->
                <div class="posts-card pb-5">
                    <div class="sports-videos-area mb-5">
                        @foreach($posts as $post)
                                    <div class="jumbotron  bg-transparent" style="margin-bottom: -20px">
                                        <img class="img-fluid" src="/storage/{{ $post->image }}"   alt=""/>
                                            <h6 class="lead mt-2 text-black mt-3" style="color: #1da1f2;">{{ $post->title }}</h6>
                                        <span class="text-uppercase text-black pt-4" style="font-size: 10px;" >Kategoriya:</span> <span  class="post-cata cata-sm cata-success ">{{ $post->category->name }}</span>
                                        <div class="post-meta d-flex">
                                            <i class="fa fa-calendar text-black-50 pr-2 pt-1" style="font-size: 18px;"></i> <span>{{ $post->created_at }}</span>
                                        </div>
                                        <hr class="my-2">
                                        <p>{!! $post->meta_description !!}</p>
                                        <i class="fa fa-eye"></i> <span>{{ $post->count_view }}</span>

                                        <p class="lead">
                                            <a target="_blank" class="btn  btn-md text-white text-capitalize mt-3" style=" background-color: #1da1f2;" href="{{route('new.index', ['id'=> $post->id])}}" role="button">{{ __('text.batafsil') }}</a>
                                        </p>
                                    </div>
                        @endforeach
                        </div>
                    <!-- Pagination -->
                        {{ $posts->links("pagination::bootstrap-4") }}
                </div>
    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>
     Post Right Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30 mt-3">
            <h6 class="text-center text-uppercase pb-4" style="color: #1da1f2; font-size: 17px;">{{ __('text.yuqori') }}</h6>
            <a href="https://minsport.uz/" target="_blank"><img class="pl-3 img-fluid" src="{{ asset('img/bino_v.png') }}" alt=""></a>
            <p class="text-center text-uppercase" style=" color: #0eaade; font-size: 16px;">{{ __('text.vazirlik') }}</p>
        </div>
        <!-- Sidebar Widget -->

        <hr>
        <div class="single-sidebar-widget p-30">
            <!-- Social Followers Info -->
            <div class="calendar">
                <div class="header">
                    <a data-action="prev-month" href="javascript:void(0)" title="Previous Month"><i></i></a>
                    <div class="text" data-render="month-year"></div>
                    <a data-action="next-month" href="javascript:void(0)" title="Next Month"><i></i></a>
                </div>
                <div class="months" data-flow="left">
                    <div class="month month-a">
                        <div class="render render-a"></div>
                    </div>
                    <div class="month month-b">
                        <div class="render render-b"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="single-sidebar-widget p-30 mt-3">
            <h6 class="text-center text-uppercase pb-4" style="color: #1da1f2; font-size: 17px;">{{ __('text.kurs') }}</h6>
            <a href="https://bimm.uz/uz" target="_blank"><img class="pl-3 img-fluid" src="{{ asset('img/kurs.gif') }}" alt=""></a>
        </div>
    </div>
</section>
<!-- ##### Mag Posts Area End ##### -->

@include('footer')
