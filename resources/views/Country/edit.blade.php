@extends('Layout.master')

@section('title','Edit country Information')

@section('content')

    <form action={{ route('countries.update' ,[ 'id' => $country->id ] ) }} method="POST">
        {{csrf_field()}}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label >Name</label>
            <input type="text" class="form-control"  value={{ $country->name }} name="name">

        </div>
        <div class="form-group">
            <label >Code</label>
            <input type="text" class="form-control"  value={{ $country->code }} name="code">
        </div>
        <div class="form-group">
            <label >Currency Code</label>
            <input type="text" class="form-control"  value={{ $country->currency_code }} name="currency_code">
        </div>
        <div class="form-group">
            <label >Symbol</label>
            <input type="text" class="form-control"  value={{ $country->currency_symbol }} name="currency_symbol">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>


@endsection