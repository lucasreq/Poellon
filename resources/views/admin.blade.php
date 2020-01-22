@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="row">
        <div class="col-md-_ col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> ADMIN Dashboard </div>

                <div class="panel-body">
                    Welcome <strong> ADMIN </strong> !

                </div>


            </div>
        </div>
    </div>

    <strong>USERS</strong>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Pseudo</th>
            <th scope="col">Email</th>
            <th scope="col">DELETE</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->pseudo }}</td>
                <td>{{ $row->email }}</td>
            <td>
            <form action="{{ route('deleteUser', $row->id) }}" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
            </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    <hr/>
      <strong>RECIPES</strong>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">DELETE</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($recipes as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->image }}</td>
                    <td>
                        <form action="{{ route('deleteRecipe', $row->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
