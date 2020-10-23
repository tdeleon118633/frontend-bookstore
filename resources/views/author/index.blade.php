@extends('author.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Front end</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href=""> Create new author</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Action</th>
        </tr>
        @foreach ($authors_all as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td>{{ $author->created_at }}</td>
            <td>
              <form action="" method="POST">



                 <a class="btn btn-primary" href="">Edit</a>

                 @csrf
                 @method('DELETE')

                 <button type="submit" class="btn btn-danger">Delete</button>
             </form>
            </td>

        </tr>
        @endforeach
    </table>



@endsection
