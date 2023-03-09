<div>

    <div class="container">
        <div class="p-3 border-start border-bottom border-end bg-iris rounded-bottom mb-3">
            <div class="container d-flex justify-content-between align-items-center" style="margin-top: 75px;">
                <h2 class="text-white">Home</h2>
                <div class="d-flex justify-content-between align-items-center w-50">
                    <input wire:model="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                    <select wire:model="selectedCategory" class="form-select me-2" aria-label="Default select example">
                        <option value="all">All</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id}}"> {{ $category->category }}</option>
                        @endforeach
                    </select>
                    <a href="{{ url('/create-post') }}" id="createpost" class="btn w-50">Create post</a>
                </div>
            </div>
        </div>

        <!-- <p>{{ $selectedCategory }}</p> -->

        @if (session()->has('message'))
            <div class="alert alert-success text-center">{{ session('message') }}</div>
        @endif

        @if($posts->count() > 0)
            @foreach($posts as $post)

            <div class="container p-2">
                <div class="row shadow-sm rounded border p-2">
                    <div class="container">
                        <!-- <div class="d-flex justify-content-between"> -->
                        <p class="mb-2 fw-light fs-6">Posted by {{ $post->author }} &#8226; {{ $post->category->category }}</p>
                        <p class="mb-0 h4 text-uppercase"> {{ $post->title }} </p>
                        <!-- </div> -->
                        <p>{{ $post->content }}</p>

                        <p class="mb-0 fw-light fs-6">Posted on {{ $post->created_at }}</p>
                    </div>
                </div>
            </div>

            @endforeach
        @else
            <div class="container">
                <img src="https://static.vecteezy.com/system/resources/previews/004/333/412/original/sad-robot-emoji-linear-icon-upset-chatbot-smiley-thin-line-illustration-chat-bot-emoticon-artificial-conversational-entity-virtual-assistant-contour-symbol-isolated-outline-drawing-vector.jpg" alt="" class="mx-auto d-block w-25">
                <p class="text-center fs-4">No post found.</p>
            </div>
        @endif
    </div>
    
</div>

<style>

    .bg-iris {
        background-color: #5A4FCF !important;
    }
    #createpost {
        background-color: #132257 !important;
        color: #ffff !important;
    }

</style>
