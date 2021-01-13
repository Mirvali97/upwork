@include('header')
<div class="vizew-archive-list-posts-area mb-80">
    <div class="container mt-4">
        <h1 class="text-uppercase text-info text-center">{{ __('text.aloqalar') }}</h1>
        <div class="grid-view  row justify-content-center">
            <div class=" col-12 col-lg-8">
                <!-- Archive Catagory & View Options -->
                <div class="archive-catagory-view mb-50">
                    @foreach ($relations as $relation)
                        <div class="jumbotron mt-5 bg-transparent">
                            <img src="/storage/{{ $relation->image }}" alt="">
                            <p class="text-uppercase">{{ $relation->title }}</p>
                            <p class="lead">{{ $relation->email }}</p>
                            <hr class="my-2">
                            <p>{{ $relation->body }}</p>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>

@include('footer')
