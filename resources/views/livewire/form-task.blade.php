<div>
    <form wire:submit.prevent="simpanTask">
        <div class="form-group">
            <h5>Nama</h5>
            <input class="form-control" type="text" wire:model="nama" name="" placeholder="Masukan Nama">
        </div>
        <div class="form-group">
            <h5>Judul Task</h5>
            <input class="form-control" type="text" wire:model="judul_task" name="" placeholder="Masukan Judul">
        </div>
        <div class="form-group">
            <h5>Deskripsi</h5>
            <textarea wire:model="deskripsi_task" name="" id="" cols="30" rows="10"
                placeholder="masukan deskripsi" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </form>
</div>
