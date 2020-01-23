@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="grid-container">
  <div class="grid-item"><a href="/logicInfo"><img src="img/SVG/Asset 2.svg" alt=""></div>
  <div class="grid-item"></div>
  <div class="grid-item"><a href="/logicInfo"><img src="img/SVG/Asset 3.svg" alt=""></div>
 
  
  <div class="grid-item"><a href="/logicInfo"><img src="img/SVG/Asset 5.svg" alt=""></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"><a href="/logicInfo"><img src="img/SVG/Asset 6.svg" alt=""></div>
  <div class="grid-item"><a href="/logicInfo"><img src="img/SVG/Asset 4.svg" alt=""></div>
  
  <div class="grid-item"><a href="/logicInfo"><img src="img/SVG/Asset 7.svg" alt=""></div>
</div>

    </body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
