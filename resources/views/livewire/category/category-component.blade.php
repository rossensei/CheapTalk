<div>
<div class="container">
        <div class="p-3 border-start border-bottom border-end border-dark rounded-bottom mb-3">
            <div class="container d-flex justify-content-between align-items-center" style="margin-top: 75px;">
                <h2 class="text-dark">Categories</h2>
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

                    <a href="{{ url('/create-post') }}" class="btn btn-primary w-75">Create category</a>
                </div>
            </div>
        </div>

        <div class="container col-md-4">
        <div class="row">
            @if($categories->count() > 0)
                @foreach($categories as $category)
                    <div class="col p-3 border shadow-sm rounded">
                        <h4>{{ $category->category }}</h4>
                        <p>{{ $category->remarks }}</p>
                    </div>
                @endforeach
            @else
                <div class="container">
                    <p>No categories found.</p>
                </div>
            @endif
        </div>
        </div>

    </div>
</div>
