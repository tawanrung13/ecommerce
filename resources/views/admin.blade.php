@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hello Admin!</div>

                <div class="panel-body" align="center">
                    <form action="{{url('admin/report')}}" method="post">
                      {{ csrf_field() }}

                        <button type="submit" >View All Report</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
