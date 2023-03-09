<div>

    <div class="container">
        <div class="p-3 border-start border-bottom border-end border-dark rounded-bottom mb-3">
            <div class="container d-flex justify-content-between align-items-center" style="margin-top: 75px;">
                <h2 class="text-dark">Home</h2>
                <div class="d-flex justify-content-between align-items-center w-50">
                    <input wire:model="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                    <select wire:model="category" class="form-select me-2" aria-label="Default select example">
                        <!-- <option selected>Open this select menu</option> -->
                        <option value="all">All</option>
                        <option value="1">Comedy</option>
                        <option value="2">Romance</option>
                        <option value="3">Religion</option>
                        <option value="4">Politics</option>
                        <option value="5">Education</option>
                        <option value="6">Business</option>
                    </select>

                    <a href="{{ url('/create-post') }}" class="btn btn-primary w-50">Create post</a>
                </div>
            </div>
        </div>

        @if (session()->has('message'))
            <div class="alert alert-success text-center">{{ session('message') }}</div>
        @endif

        @if($posts->count() > 0)
            @foreach($posts as $post)

            <div class="row shadow-sm rounded border p-2 mb-2">
                <div class="container">
                    <!-- <div class="d-flex justify-content-between"> -->
                    <p class="mb-2 fw-light fs-6">Posted by {{ $post->author }} &#8226; {{ $post->category->category }}</p>
                    <p class="mb-0 h4 text-uppercase"> {{ $post->title }} </p>
                    <!-- </div> -->
                    <p>{{ $post->content }}</p>

                    <p class="mb-0 fw-light fs-6">Posted on {{ $post->created_at }}</p>
                </div>
            </div>

            @endforeach
        @else
            <div class="container">
                <p>No post found.</p>
            </div>
        @endif
    </div>
</div>
