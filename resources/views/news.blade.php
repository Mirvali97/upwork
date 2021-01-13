@include('header')

<div class="vizew-archive-list-posts-area mb-80">
    <div class="container mt-4">
        <div class="grid-view  row justify-content-center">
            <div class=" col-12 col-lg-8">
                <!-- Archive Catagory & View Options -->
                <div class="archive-catagory-view mb-50 d-flex align-items-center justify-content-between">
                    <!-- Catagory -->
                    <div class="archive-catagory">
                        <h4><i class="fa fa-newspaper-o text-uppercase" aria-hidden="true"></i> yangiliklar </h4>
                    </div>

                </div>
                <!-- Single Post Area -->
                @foreach($posts as $post)
                <div class="single-post-area style-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src=" /storage/{{$post->image}}" alt="imgpost">

                                <!-- Video Duration -->
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="{{route('new.index', ['id'=> $post->id])}}" class="post-title mb-2">{{ $post->title }}</a>
                               <span class="text-uppercase text-black" style="font-size: 10px;" >Kategoriya:</span> <span  class="post-cata cata-sm cata-success ">{{ $post->category->name }}</span>
                                <div class="post-meta d-flex">
                                    <i class="fa fa-calendar text-black-50 pr-2 pt-1" style="font-size: 18px;"></i> <span>{{ $post->created_at }}</span>
                                    <i class="fa fa-eye pl-4"></i> <span class="pl-2">{{ $post->count_view }}</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                <!-- Pagination -->
                {{ $posts->links("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>
</div>


@include('footer')
