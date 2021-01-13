@include('header')
<!-- ##### Post Details Area Start ##### -->
<section class="post-details-area mb-80">
    <div class="container bg-white">

        <div class="row mt-5">

            <div class="col-12 col-3 col-6 ">
                <div class="post-content mt-2 text-center">
                    <a href="" class="post-title mb-2" style="font-size: 30px;">{{ $postviews->title }}</a>
                </div>
                <div class="post-details-thumb  ml-5">
                    <img class="img-fluid height-500  border-info mt-5" style="margin-left: 13%;" src="/storage/{{ $postviews->image }} " alt="">
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-lg-8 col-xl-7">
                <div class="post-details-content">
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <!-- Post Content -->
                        <p class="text-black  text-center">{!! $postviews->body !!}</p>
                        <span  class="post-cata cata-sm cata-success "><i class="fa fa-list mr-1"></i>{{ $postviews->category->name }}</span>
                        <div class="post-meta d-flex">
                            <i class="fa fa-calendar text-black-50 pr-2 pt-1" style="font-size: 18px;"></i> <span>{{ $postviews->created_at }}</span>
                            <i class="fa fa-eye pl-4"></i> <span class="pl-2">{{ $postviews->count_view }}</span>

                        </div>
                        <!-- Related Post Area -->
                        <div class="related-post-area mt-5">
                            <!-- Section Title -->
                            <div class="section-heading style-2">
                                <h4>O'xshash ma'lumotlar</h4>
                                <div class="line"></div>
                            </div>

                            <div class="row">

                            @foreach($same_posts as $same_post)
                                <!-- Single Blog Post -->
                                    <div class="col-12 col-md-6">
                                        <div class="single-post-area mb-50">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src=" /storage/{{ $same_post->image }}" alt="">
                                                <!-- Video Duration -->
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="post-cata cata-sm cata-success text-uppercase">{{$same_post->category->name}}</a>
                                                <a href="{{route('new.index', ['id'=>$same_post->id])}}" class="post-title">{{$same_post->title}}</a>
                                                <div class="post-meta d-flex">
                                                    <i class="fa fa-calendar text-black-50 pr-2 pt-1" style="font-size: 18px;"></i> <span>{{ $postviews->created_at }}</span>
                                                    <i class="fa fa-eye pl-4"></i> <span class="pl-2">{{ $postviews->count_view }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- ##### Post Details Area En
@include('footer')
