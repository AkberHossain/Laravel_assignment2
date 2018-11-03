@extends('Layout.master')

@section('title' , 'All Countries info')

@section('content')
    <center>
        <form action= {{ route('countries.create') }} method="GET">
            {{csrf_field()}}
            <button type="submit" class="btn btn-primary">Create new Country</button>
        </form>
        <br>
        <br>
        <br>

        <table class="table border-dark">
            <tr>
                <th>Name</th><th colspan="2">Option</th>
            </tr>

            @foreach($countries as $country)
                <tr>
                    <td>{{ $country->name }}</td>
                    <td>
                        <form action= {{ route('countries.show' , $country->id) }} method="GET">
                            {{csrf_field()}}

                            <button type="submit" class="btn btn-primary">Details</button>
                        </form>
                    </td>
                    <td>
                        <form action= {{ route('countries.destroy' , $country->id) }} method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </center>
@endsection