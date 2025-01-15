<div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <input type="text" placeholder="Cerca tra i post..." class="form-control" wire:model.live="search">
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-12 col-md-3 m-2">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>