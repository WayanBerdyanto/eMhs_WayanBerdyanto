<form wire:submit.prevent="simpan">
    <div class="form-group">
        <h5>Judul</h5>
        <input class="form-control" type="text" wire:model="judul" name="" placeholder="Masukan Judul">
    </div>
    <div class="form-group">
        <textarea wire:model="deskripsi" name="" id="" cols="30" rows="10" placeholder="masukan deskripsi"
            class="form-control"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </div>
</form>
