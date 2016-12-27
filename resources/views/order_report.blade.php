@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Order Report</div>

                <div class="panel-body">
                    <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer Name</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Order at</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i=1;
                            ?>
                            @foreach ($order as $o)
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td>{{$o->user_name}}</td>
                                <td>{{$o->p_title}}</td>
                                <td>{{$o->qty}}</td>
                                <td>{{$o->total_price}}</td>
                                <td>{{$o->created_at}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
