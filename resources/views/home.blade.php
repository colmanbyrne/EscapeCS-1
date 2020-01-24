@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="grid-container">
  <div class="grid-item"><a href="/logicInfo"><img src="img/SVG/Asset 2.svg" alt=""></a></div>
  <div class="grid-item"></div>
  <div class="grid-item"><a href="/logicP"><img src="img/SVG/Asset 3.svg" alt=""></a></div>
  <div class="grid-item"><a href="/logicInfo"><img src="img/SVG/Asset 5.svg" alt=""></a></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"><a href="/logicInfo"><img src="img/SVG/Asset 6.svg" alt=""/></a></div>
  <div class="grid-item"><a href="/logicInfo"><img src="img/SVG/Asset 4.svg" alt=""/></a></div>
  <div class="grid-item"><a href="/logicInfo"><img src="img/SVG/Asset 7.svg" alt=""></a></div>
</div>

    </body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
