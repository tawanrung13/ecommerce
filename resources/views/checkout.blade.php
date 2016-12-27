@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Check Out Information</div>

                <div class="panel-body">
                    <form action="{{url('pay')}}" method="get">
                        {{ csrf_field() }}
                        <p>Name: &emsp;&emsp;<input type="text" name="name" size="50" required ></p>
                        <p>Contact: &emsp;<input type="text" name="contact" size="50" required ></p>
                        <p>Address: &emsp;<input type="text" name="address" size="80" required ></p>
                        <p style="float:right" >Total Price: {{ $price }}<button type="submit" style="margin-left:30px">Confirm</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection