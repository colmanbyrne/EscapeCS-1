@extends('layouts.app')
<style>
.io{
    text-align: center;
}
#response{
color: blueviolet
}

</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Logic <div class="float-md-right"><a href="/" class="btn btn-primary" role="button">Home</a></div></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Logic P</h1>
                    <img src="img\LogicP\SVG\Asset 1.svg" alt="">
                    <div class="io">
                    <div id="response">  {{ $result ?? '' }}</div>
                    <?php

                    echo Form::open(array('route' => 'logicPA'));
                    echo Form::text('inputvalue1');
                    echo Form::submit('Click Me!');

                    echo Form::close()
                    ?>
                </div>

                </body>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
