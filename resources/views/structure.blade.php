@include('header')


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

    <!-- >>>>>>>>>>>>>>>>>>>>
         Main Posts Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
        <div class="posts-card pb-5">
            <h2 class="text-center text-black text-uppercase">{{ __('text.shef') }}</h2>
            <hr>
            <div class="sports-videos-area mb-5 d-flex">
                @foreach ($boss as $sheff)
                    <div class="jumbotron  bg-transparent" style="margin-bottom: -20px">
                        <img class="img-fluid w-75" src="/storage/{{ $sheff->image }}"   alt=""/>
                        <h6 class="lead mt-2 text-black mt-3" style="color: #1da1f2;">{{ $sheff->title }}</h6>
                        <strong class="text-black"></strong>   {{ $sheff->name }}
                        <hr>
                        <p><i class=" fa fa-envelope-o text-black"></i>   {{ $sheff->email }}</p>
                        <p class="fa fa-phone text-black">   {{ $sheff->phone }}</p>
                        <div class="post-meta d-flex">
                            <i class="fa fa-calendar text-black-50 pr-2 pt-1" style="font-size: 18px;"></i> <span>{{ $sheff->created_at }}</span>
                        </div>
                        <hr class="my-2">
                    </div>
                @endforeach
            </div>
            <hr>
            <!-- Pagination -->
        </div>


        <div class="posts-card pb-5">
            <h2 class="text-center text-black text-uppercase">{{ __('text.uquv') }}</h2>
            <hr>
            <div class="sports-videos-area mb-5 d-flex">
                @foreach ($sports as $sport)
                    <div class="jumbotron  bg-transparent" style="margin-bottom: -20px">
                        <img class="img-fluid w-75" src="/storage/{{ $sport->image }}"   alt=""/>
                        <h6 class="lead mt-2 text-black mt-3" style="color: #1da1f2;">{{ $sport->title }}</h6>
                        <strong class="text-black">{{ $sport->status }}:</strong>   {{ $sport->name }}
                        <hr>
                        <br><i>Qabul vaqti:</i>  {{ $sport->work_time }}
                        <p><i class=" fa fa-envelope-o text-black"></i>   {{ $sport->email }}</p>
                        <p class="fa fa-phone text-black">   {{ $sport->phone }}</p>
                        <div class="post-meta d-flex">
                            <i class="fa fa-calendar text-black-50 pr-2 pt-1" style="font-size: 18px;"></i> <span>{{ $sport->created_at }}</span>
                        </div>
                        <hr class="my-2">
                    </div>
                @endforeach
            </div>
            <hr>
            <!-- Pagination -->
        </div>

        <div class="posts-card pb-5">
            <h2 class="text-center text-black text-uppercase">{{ __('text.kafe') }}</h2>
            <hr>
            <div class="sports-videos-area mb-5 d-flex">
                @foreach ($departments as $department)
                <div class="jumbotron  bg-transparent" style="margin-bottom: -20px">
                    <img class="img-fluid w-75" src="/storage/{{ $department->image }}"   alt=""/>
                    <h6 class="lead mt-2 text-black mt-3" style="color: #1da1f2;">{{ $department->title }}</h6>
                    <i class="text-black">   {{ $department->name }}</i>
                    <p><i class=" fa fa-envelope-o text-black"></i>   {{ $department->email }}</p>
                    <p class="fa fa-phone text-black">   {{ $department->phone }}</p>
                    <div class="post-meta d-flex">
                        <i class="fa fa-calendar text-black-50 pr-2 pt-1" style="font-size: 18px;"></i> <span>{{ $department->created_at }}</span>
                    </div>
                    <hr class="my-2">
                </div>
                @endforeach
            </div>
            <hr>
            <!-- Pagination -->
        </div>

        <div class="posts-card pb-5">
            <hr>
            <h2 class="text-center text-black text-uppercase">{{ __('text.kadr') }}</h2>
            <div class="sports-videos-area mb-5 d-flex justify-content-center">
                @foreach ($kadrs as $kad)
                    <div class="jumbotron  bg-transparent" style="margin-bottom: -20px">
                        <img class="img-fluid w-25" src="/storage/{{ $kad->image }}"   alt=""/>
                        <h6 class="lead mt-2 text-black mt-3" style="color: #1da1f2;">{{ $kad->title }}</h6>
                        <i class="text-black">Ismi</i>   {{ $kad->name }}
                        <p><i class=" fa fa-envelope-o text-black"></i>   {{ $kad->email }}</p>
                        <p>Qabul Vaqti:   {{ $kad->work_time }}</p>
                        <p class="fa fa-phone text-black">   {{ $kad->phone }}</p>
                        <div class="post-meta d-flex">
                            <i class="fa fa-calendar text-black-50 pr-2 pt-1" style="font-size: 18px;"></i> <span>{{ $kad->created_at }}</span>
                        </div>
                        <h5>{!! $kad->body !!}</h5>
                        <hr class="my-2">
                    </div>
                @endforeach
            </div>
            <hr>
            <!-- Pagination -->
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
        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget">
            <h6 class="text-center text-uppercase pb-4" style="color: #1da1f2; font-size: 17px;">{{ __('text.kurs') }}</h6>
            <a target="_blank" href="https://mt.bimm.uz/" class="add-img"><img src="{{ asset('img/kurs.gif') }}" alt=""></a>
        </div>
        <hr>
    </div>
</section>
<!-- ##### Mag Posts Area End ##### -->

@include('footer')
