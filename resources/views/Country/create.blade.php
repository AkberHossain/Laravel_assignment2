@extends('Layout.master')

@section('title','Enter Country Information')

@section('content')


    <form action={{ route('countries.store') }} method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label >Name</label>
            <input type="text" class="form-control"  placeholder="Name" name="name">

        </div>
        <div class="form-group">
            <label >Code</label>
            <input type="text" class="form-control"  placeholder="Code No" name="code">
        </div>
        <div class="form-group">
            <label >Currency Code</label>
            <input type="text" class="form-control"  placeholder="Currency Code No" name="currency_code">
        </div>
        <div class="form-group">
            <label >Symbol</label>
            <input type="text" class="form-control"  placeholder="Currency Symbol" name="currency_symbol">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection