@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Play of the game</div>

                <div class="panel-body">
                    Thank you for your purchase!
                    <br>
                    <br>
                    <form action="{{url('/')}}" method="get">
                            {{ csrf_field() }}
                            <button type="submit" style="float:right;margin-right:20px;">Continue Shopping</button>
                        </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
