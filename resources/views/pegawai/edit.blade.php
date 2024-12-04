<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5  p-3">
        <h1>Edit Data Pegawai</h1>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
        @endif
        <form action="{{route('pegawai.update',['pegawai' => $pegawai])}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label"><strong>Nama</strong></label>
                <input type="text" class="form-control" name="name" placeholder="Nama" value="{{$pegawai->name}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label"><strong>Posisi</strong></label>
                <input type="text" class="form-control" name="posisi" placeholder="Posisi"  value="{{$pegawai->posisi}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label"><strong>Gaji</strong></label>
                <input type="text" class="form-control" name="gaji" placeholder="Gaji"  value="{{$pegawai->gaji}}">
            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="Update">
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
