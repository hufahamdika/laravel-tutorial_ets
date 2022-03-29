<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Form Formulir Kesehatan</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <h3 class="card-title text-center mt-5">
                        Form Formulir Kesehatan
                    </h3>
                    <div class="card-body">
                        <form action="/proses" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="healthcondition">Kondisi Kesehatan</label>
                                <input type="text" class="form-control" id="healthcondition" name="healthcondition" value = "{{ old('healthcondition') }}" class="@error('healthcondition') is-invalid @enderror">
                                @error('healthcondition')
                                           <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="temperature">Suhu Tubuh (Dalam Celcius)</label>
                                <input type="text" class="form-control" id="temperature" name="temperature" value = "{{ old('temperature') }}" class="@error('temperature') is-invalid @enderror">
                                @error('temperature')
                                           <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="resep">Foto Resep</label>
                                <input type="file" class="form-control-file" id="resep" name="resep" value = "{{ old('resep') }}" class="@error('resep') is-invalid @enderror">
                                @error('resep')
                                           <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary" value = "proses">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>