@extends('layouts.app')
<style>
.cMemory{

display: grid;
grid-template-columns:10% 10% 10% 10%;
grid-template-rows:auto;
}

.gridData{
font-size: 150%;
border: 1px solid black;
text-align: center;
padding: 1%;
}



</style>
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
    <div class="gridData">Memory Address</div>
    <div class="gridData">Memory Content</div>
    <div class="gridData">Memory Allocation</div>
    <div class="gridData">Code</div>
    <div class="gridData">0x07A</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x07A</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x07A</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x07A</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x07A</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x07A</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x07A</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x07A</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x07A</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x07A</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x07A</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x07A</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x06F</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x06E</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x06D</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x06C</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x06B</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x06A</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x069</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x068</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x067</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x066</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x065</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    <div class="gridData">0x064</div>
    <div class="gridData">2</div>
    <div class="gridData">3</div>
    <div class="gridData">4</div>
    
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
