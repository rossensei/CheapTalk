<div>
<div class="container">
        <div class="p-3 border-start border-bottom border-end rounded-bottom mb-3" style="background-color: #00BFFF;">
            <div class="container d-flex justify-content-between align-items-center" style="margin-top: 75px;">
                <h2 class="text-dark">Categories</h2>
                <div class="d-flex justify-content-between align-items-center w-50">
                    <input wire:model="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                    <select wire:model="sortCategory" class="form-select me-2" aria-label="Default select example">
                        <option value="all">All</option>
                        @foreach($allCategories as $category)
                        <option value="{{ $category->category }}">{{ $category->category }}</option>
                        @endforeach
                    </select>

                    <a href="{{ url('/add-category') }}" class="btn btn-primary w-75">Add category</a>
                </div>
            </div>
        </div>

        <div class="container col-md-12">
        @if (session()->has('message'))
            <div class="alert alert-success text-center">{{ session('message') }}</div>
        @endif
        <div class="row gy-3">
            @if($categories->count() > 0)
                @foreach($categories as $category)
                    <div class="col-4">
                        <div class="container p-3 border shadow-sm rounded" style="background-color: #e5e7eb;">
                            <h4>{{ $category->category }}</h4>
                            <p>{{ $category->remarks }}</p>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="container">
                <img src="https://static.vecteezy.com/system/resources/previews/004/333/412/original/sad-robot-emoji-linear-icon-upset-chatbot-smiley-thin-line-illustration-chat-bot-emoticon-artificial-conversational-entity-virtual-assistant-contour-symbol-isolated-outline-drawing-vector.jpg" alt="" class="mx-auto d-block w-25">
                <p class="text-center fs-4">No category found.</p>
            </div>
            @endif
        </div>
        </div>

    </div>
</div>
