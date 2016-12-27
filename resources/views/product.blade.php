@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $product->p_title }}</div>

                <div class="panel-body">
                    <img src="../pic/{{$product->p_title}}.jpg" width="100%">
                    <p>Category: {{$product->p_cat}}</p>
                    <p>Brand: {{$product->p_brand}}</p>
                    <p>Price: {{$product->p_price}} บาท</p>
                    <p>Description:</p>
                    <p style="margin-left:4em">{{$product->p_desc}}</p>
                    <br>
                    <form action="update/{{$product->id}}" method="post" style="float:right">
                        {{ csrf_field() }}
                        <p><span>quantity: </span><input type="text" name="qty" required size="5">
                        <button type="submit">Add to Cart</button> </p>
                    </form>
                </div>
                
            </div>
                
        </div>
    </div>
</div>
@endsection