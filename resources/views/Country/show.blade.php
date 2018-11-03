@extends('Layout.master')

@section('title','Show country Information')

@section('content')

    <div class="form-group">
        <label >Name</label>
        <input type="text" class="form-control" disabled  value={{ $country->name }} name="name">

    </div>
    <div class="form-group">
        <label >Code</label>
        <input type="text" class="form-control" disabled  value={{ $country->code }} name="code">

    </div>
    <div class="form-group">
        <label >Currency Code</label>
        <input type="text" class="form-control" disabled  value={{ $country->currency_code }} name="currency_code">

    </div>
    <div class="form-group">
        <label >Currency Symbol</label>
        <input type="text" class="form-control"  name="currency_symbol"  disabled  value={{ $country->currency_symbol }} >
    </div>



    <form action = {{ route('countries.edit' , $country->id) }} method="GET">
        {{csrf_field()}}

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>

    <form action= {{ route('countries.index') }} method="GET">
        {{csrf_field()}}

        <button type="submit" class="btn btn-primary">Home</button>
    </form>

@endsection