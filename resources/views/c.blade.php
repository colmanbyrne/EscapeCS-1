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

                    <div class="cMemory">
    <div class="gridData">col1</div>
    <div class="gridData">col2</div>
    <div class="gridData">col3</div>
    <div class="gridData">0100</div>
    <div class="gridData">010a</div>
    <div class="gridData">010b</div>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
