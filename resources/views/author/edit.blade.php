<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid mt-4" style="width:60%">
      <h4>Edit Author</h4>
      <hr>
      <form class="" action="{{ route('author.update', $row->id )}}" method="post">
        @method("PUT")
        @csrf
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{ $row->name }}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" value="{{ $row->email }}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">No Telpon</label>
          <input type="number" class="form-control" name="no_telp" value="{{ $row->no_telp }}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
          <input type="text" class="form-control" name="tempat_lahir" value="{{ $row->tempat_lahir }}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" name="tanggal_lahir" value="{{ $row->tanggal_lahir }}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Address</label>
          <textarea class="form-control" name="address" rows="3">{{ $row->address }}</textarea>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="status" value="1" {{ $row->status == 1 ? 'checked' : '' }}>
          <label class="form-check-label" for="flexSwitchCheckDefault" >Status</label>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
      </form>

    </div>
  </body>
</html>
