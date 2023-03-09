<div>
    <div class="container col-md-6 mt-5">
        <div class="card p-3">
            <h3>Add category</h3>

            <div class="form-floating mb-3">
                <input wire:model="category" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Category</label>
                @error('category')
                <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-floating">
                <textarea wire:model="remarks" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Content</label>
                @error('remarks')
                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="container mt-3">
                <button wire:click="createCategory" class="btn btn-primary float-end">Add</button>
            </div>
        </div>
    </div>
</div>
