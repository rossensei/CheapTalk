<div>
    <div class="container col-6 col-md-6 mt-5">
        <div class="card shadow-sm p-3">
            <h1>Create Post</h1>
            <div class="d-flex">
                <div class="form-floating w-75 mb-3 me-2">
                    <input wire:model="author" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Author</label>
                    @error('content')
                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-floating w-75 mb-3">
                <select wire:model="category_id" class="form-select" id="floatingSelectGrid">
                    <option selected>Select category</option>
                    <option value="1">Comedy</option>
                    <option value="2">Romance</option>
                    <option value="3">Religion</option>
                    <option value="4">Politics</option>
                    <option value="5">Education</option>
                    <option value="6">Business</option>
                </select>
                <label for="floatingSelectGrid">Category</label>
                @error('content')
                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="form-floating mb-3">
                <input wire:model="title" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Title</label>
                @error('content')
                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-floating">
                <textarea wire:model="content" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Content</label>
                @error('content')
                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="container mt-3">
                <button wire:click="create" class="btn btn-primary float-end">Post</button>
            </div>
        </div>
    </div>
</div>
