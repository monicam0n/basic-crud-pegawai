<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PEGAWAI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 p-3">
        <h1 class="mb-4">Daftar Pegawai</h1>
        <div class="mb-3">
            <a class="btn btn-primary" href="{{route('pegawai.create')}}">Tambah Pegawai</a>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <table class="table table-bordered">
            <thead class="table">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Gaji</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->posisi}}</td>
                    <td>{{$p->gaji}}</td>
                    <td><a href="{{route('pegawai.edit', ['pegawai' => $p->id])}}">Edit</a></td>
                    <td>
                        <form action="{{route('pegawai.delete', ['pegawai' => $p->id])}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
