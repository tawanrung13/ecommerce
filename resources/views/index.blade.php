@extends('layouts.app')

@section('content')
<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="height:400px;" align="center">
      <div class="item active">
        @foreach ($hit as $h)
          @if ($loop->first)
          <a href="product/{{ $h->id }}"onclick="event.preventDefault();
                                      document.getElementById('{{ $h->id }}').submit();">
          <img src="pic/{{$h->p_title}}.jpg" alt="{{$h->p_title}}.jpg" style="height:400px;"></a>
          <form id="{{$h->id}}" action="product/{{ $h->id }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          @break
          @endif
        @endforeach
      </div>

      @foreach ($hit as $h)
        @if ($loop->iteration == 2)
        <div class="item">
          <a href="product/{{ $h->id }}"onclick="event.preventDefault();
                                      document.getElementById('{{ $h->id }}').submit();">
          <img src="pic/{{$h->p_title}}.jpg" alt="{{$h->p_title}}.jpg" style="height:400px;"></a>
          <form id="{{$h->id}}" action="product/{{ $h->id }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </div>
        @break
        @endif
      @endforeach

      @foreach ($hit as $h)
        @if ($loop->iteration == 3)
        <div class="item">
          <a href="product/{{ $h->id }}"onclick="event.preventDefault();
                                      document.getElementById('{{ $h->id }}').submit();">
          <img src="pic/{{$h->p_title}}.jpg" alt="{{$h->p_title}}.jpg" style="height:400px;"></a>
          <form id="{{$h->id}}" action="product/{{ $h->id }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </div>
        @break
        @endif
      @endforeach

      @foreach ($hit as $h)
        @if ($loop->iteration == 4)
        <div class="item">
          <a href="product/{{ $h->id }}"onclick="event.preventDefault();
                                      document.getElementById('{{ $h->id }}').submit();">
          <img src="pic/{{$h->p_title}}.jpg" alt="{{$h->p_title}}.jpg" style="height:400px;"></a>
          <form id="{{$h->id}}" action="product/{{ $h->id }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </div>
        @break
        @endif
      @endforeach

      @foreach ($hit as $h)
        @if ($loop->iteration == 5)
        <div class="item">
          <a href="product/{{ $h->id }}"onclick="event.preventDefault();
                                      document.getElementById('{{ $h->id }}').submit();">
          <img src="pic/{{$h->p_title}}.jpg" alt="{{$h->p_title}}.jpg" style="height:400px;"></a>
          <form id="{{$h->id}}" action="product/{{ $h->id }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </div>
        @break
        @endif
      @endforeach

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <br>









    <div class="row">
                  @foreach ($product as $p)
                  <div class="col-xs-12 col-lg-4 col-md-6 col-sm-6">
                  <div class="card" style="height:385px;border-radius: 5px;
                  border: 2px solid #b3b3cc;padding: 10px;margin-bottom:20px;">


                    <a href="product/{{ $p->id }}"onclick="event.preventDefault();
                                                document.getElementById('{{ $p->id }}').submit();">
                    <img class="card-img-top" src="pic/{{ $p->p_title }}.jpg" alt="{{ $p->p_title  }}" width="100%" height="200"></a>

                                        <form id="{{$p->id}}" action="product/{{ $p->id }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                    <div class="card-block">
                      <h4 class="card-title" align="center">{{ $p->p_title }}</h4>
                      <p class="card-text">brand: {{$p->p_brand}}</p>
                      <p class="card-text">category: {{$p->p_cat}}</p>
                      <p class="card-text">price: {{$p->p_price}}</p>
                      <a href="product/{{ $p->id }}" style="float:right"onclick="event.preventDefault();
                                                document.getElementById('{{ $p->id }}').submit();">
                                                read more</a>
                    </div>
                  </div>
                </div>
                  @endforeach
    </div>
</div>


@endsection
