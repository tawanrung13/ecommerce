@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Orders</div>

                <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($order as $o)
                            <tr>
                                <form action="upCart/{{ $o->id }}/{{ $o->p_id }}" method="post">
                                {{ csrf_field() }}
                                <td>{{$o->p_title}}</td>
                                <td><input type="text" name="qty" value="{{$o->qty}}" size="5"></td>
                                <td>{{$o->total_price}}</td>
                                <td><button type="submit">Update</button></td>
                                </form>
                                <form action="delete/{{ $o->id  }}" method="post">
                                {{ csrf_field() }}
                                    <td><button type="submit">Delete</button></td>
                                </form>
                            </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td>{{$price}}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                        <div style="display:none">$price = {{$price}}</div>
                        <form action="{{url('checkout')}}" method="get">
                            {{ csrf_field() }}

                            @if ($price > 0)
                            <button type="submit" style="float:right">Checkout</button>
                            @endif
                        </form>

                        <form action="{{url('/')}}" method="post">
                            {{ csrf_field() }}
                            <button type="submit" style="float:right;margin-right:20px;">Continue Shopping</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
