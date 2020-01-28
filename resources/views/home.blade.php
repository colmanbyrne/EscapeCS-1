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

                    <a href="/logicInfo">Logic Info</a>
                    <br>
                    <a href="/logicP">Logic Puzzle</a>
                    <br>
                    <a href="/binaryHex">Binary Hex Info</a>
                    <br>
                    <a href="/assembler">Assembler Puzzle</a>
                    <br>
                    <a href="/c">C Puzzle</a>
                    <br>
                    <a href="/java">Java Puzzle</a>
                    <br>
                    <a href="/decomp">Decompisition</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
