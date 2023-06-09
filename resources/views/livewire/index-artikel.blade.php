<div>
    @foreach ($art as $a)   
    <div class="card border-info">
        <h5 class="card-header bg-dark text-light">New Article</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $a->judul }}</h5>
            <p class="card-text">{{ $a->deskripsi }}</p>
        </div>
    </div>
    @endforeach
</div>
