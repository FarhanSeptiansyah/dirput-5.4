<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ URL('/dirput/admin/store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <ol>
                        <li>
                            <input type="text" name="no_banding" placeholder="no_banding" class="form-control">
                        </li>
                        <li>
                            <input type="text" name="j_perkara" placeholder="j_perkara" class="form-control">
                        </li>
                        <li>
                            <input type="date" name="tgl_put_banding" placeholder="tgl_put_banding" class="form-control">
                        </li>
                        <li>
                            <input type="text" name="putusan" placeholder="putusan" class="form-control">
                        </li>

                        <li>
                            <button class="btn btn-sm btn-success">Simpan</button>
                            <a href="{{ URL('/') }}">Kembali</a>
                        </li>

                    </ol>

                </div>
            </form>
        </div>
    </div>
</body>

</html>