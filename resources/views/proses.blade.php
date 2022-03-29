<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kondisi Kesehatan</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                        <h3 class="mb-3">Kondisi Kesehatan</h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Kondisi Kesehatan</td>
                                <td>{{ $data->healthcondition }}</td>
                            </tr>
                            <tr>
                                <td>Suhu tubuh (Dalam Celcius)</td>
                                <td>{{ $data->temperature }} Celcius</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Foto Resep</td>
                                <td><img src="{{ $data->resep }}" alt="Foto Resep" width="150px"></td>
                            </tr>
                        </table>

                        <a href="/formulir" class="btn btn-primary">Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html> 