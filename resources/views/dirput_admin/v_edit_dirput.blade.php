<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach($data as $key => $value)
    <form action="dirput/admin/update/{{$value->id}}" method="multiple/enctype">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="no_banding">No Perkara: </label>
            <input type="text" class="form-control" id="no_banding" name="no_banding" value="{{ $value->no_banding }}">
        </div>
        <div class="form-group">
            <label for="j_perkara">Jenis Perkara:</label>
            <input type="j_perkara" class="form-control" id="j_perkara" name="j_perkara" value="{{ $value->j_perkara }}">
        </div>
        <div class="form-group">
            <label for="tgl_put_banding">Tanggal Putus:</label>
            <input type="text" class="form-control" id="tgl_put_banding" name="tgl_put_banding" value="{{ $value->tgl_put_banding }}">
        </div>
        <div class="form-group">
            <label for="putusan">Putusan:</label>
            <input text="file" class="form-control" id="putusan" name="putusan" value="{{ $value->putusan }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
    </form>
    @endforeach
</body>

</html>