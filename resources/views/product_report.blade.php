@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Product Report</div>

                <div class="panel-body">
                    <table class="table table-striped">
                            <thead>
                            <tr>
                            <th>#</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Time Visited</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i=1;
                            ?>
                            @foreach ($product as $p)
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td>{{$p->p_title}}</td>
                                <td>{{$p->p_price}}</td>
                                <td>{{$p->p_hit}}</td>
  
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