<div>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr class="text-center">
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Judul Task</th>
                <th scope="col">Deskipsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($task as $idx => $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->judul_task }}</td>
                    <td>{{ $data->deskripsi_task }}</td>
                </tr>
            @endforeach
        </tbody>
        <span class="float-right mr-2">{{ $task->links() }}</span>
    </table>
    <div class="alert alert-success" role="alert">
        Total Data Yang Suskses Ditampilkan : {{ $task->count() }}
    </div>
</div>
