@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Customer Report</div>

                <div class="panel-body">
                    <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer Name</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Total Price</th>
                                <th>Purchased at</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i=1;
                            ?>
                            @foreach ($customer as $c)
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td>{{$c->user_name}}</td>
                                <td>{{$c->contact}}</td>
                                <td>{{$c->address}}</td>
                                <td>{{$c->price}}</td>
                                <td>{{$c->created_at}}</td>
  
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