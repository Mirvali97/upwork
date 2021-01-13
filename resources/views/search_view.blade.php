@include('header')

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center text-info mt-5">{{ $result->title }}</h1>
                        <div class="jumbotron jumbotron-fluid bg-white">
                                <img src="{{ $result->image }}" alt="">
                                <p class="lead text-black">{!! $result->body !!}</p>
                            <div class="post-meta d-flex justify-content-center">
                                <i class="fa fa-calendar text-black-50 pr-2 pt-1" style="font-size: 18px;"></i> <span>{{ $result->created_at }}</span>
                                <i class="fa fa-eye pl-4"></i> <span class="pl-2">{{ $result->count_view }}</span>

                            </div>
                                <hr class="my-2">
                        </div>
                    </div>
                </div>
            </div>


@include('footer')
