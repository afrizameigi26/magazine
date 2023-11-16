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
      <a href="{{ route('author.create') }}">
        <button type="button" class="btn btn-primary">Create</button>
      </a>
      <br>
      <br>
      @if(Session::has("success"))
      <div class="alert alert-success" role="alert">
        {!! \Session::get('success') !!}
      </div>
      @endif
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">TTL</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @if(isset($data))
            @foreach ($data as $value)
            <tr>
              <td>{{ $value->id }}</td>
              <td>{{ $value->name }}</td>
              <td>{{ $value->address }}</td>
              <td>{{ $value->tempat_lahir }}, {{ $value->tanggal_lahir }}</td>
              <td>{{ $value->status == 1 ? "Active" : "Inactive" }}</td>
              <td><a href="{{ route('author.edit', $value->id) }}"><button type="button" class="btn btn-warning">Edit</button></a></td>
              <td>
                <form action="{{ route('author.destroy', $value->id) }}" method="POST">
                  @method("DELETE")
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </body>
</html>
