@extends('layouts.app')
<style>
.io{
    text-align: center;
}
#response{
color: blueviolet
}

</style>
<style>
.gridTable2{

 display: grid;
 grid-template-columns:10% 10%  ;
 grid-template-rows:auto ;

}
.gridTable{

 display: grid;
 grid-template-columns:10% 10% 10% ;
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
                <div class="card-header">Logic <div class="float-md-right"><a href="/" class="btn btn-primary" role="button">Home</a></div></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h1>Logic</h1>

<h2>NOT Gate</h2>
<img src="img/SVG/g9607.svg" width="200" height="100" alt="NOT Gate">
 <p>The NOT gate is also known as an inverter because the output is the exact opposite of the input. It has one input and one output. The two possibilities are written out in the table below. Tables listing all logical possibilities like this are known as truth tables.</p>
 <div class="gridTable2">
<div class="gridData">Input</div>
<div class="gridData">Output</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
<div class="gridData">0</div>
</div>
</br>
<h2>AND Gate</h2>
<img src="img/SVG/g9477.svg" width="200" height="100" alt="AND Gate">
 <p>The AND gate has two inputs and one output. The output is 1 if both inputs are 1, and for all other cases the output is 0.</p>
 <div class="gridTable">
<div class="gridData">Input 1</div>
<div class="gridData">Input 2</div>
<div class="gridData">Output</div>
<div class="gridData">0</div>
<div class="gridData">0</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">0</div>
<div class="gridData">0</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
</div>
</br>
<h2>NAND Gate</h2>
<img src="img/SVG/g9489.svg" width="200" height="100"alt="NAND Gate">
 <p>The NAND gate behaves in the opposite fashion to and AND gate. You can think of it as an AND gate followed immediately by a NOT gate. Its output is 0 when the two inputs are 1, and for all other cases, its output is 0. The name NAND comes from joining NOT and AND. The symbol for NAND is the same as that for AND except for the addition of a small circle on the right side.</p>
 <div class="gridTable">
<div class="gridData">Input</div>
<div class="gridData">Input 2</div>
<div class="gridData">Output</div>
<div class="gridData">0</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
<div class="gridData">0</div>
</div>
<br>
<h2>OR Gate</h2>
<img src="img/SVG/g9502.svg" width="200" height="100" alt="OR Gate">
 <p>The OR gate has two inputs and one output. If at least one of the inputs is 1, then the output will be 1. If neither input is 1, the output will be 0.</p>
 <div class="gridTable">
<div class="gridData">Input</div>
<div class="gridData">Input 2</div>
<div class="gridData">Output</div>
<div class="gridData">0</div>
<div class="gridData">0</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
</div>
<br>
<h2>NOR Gate</h2>
<img src="img/SVG/g9514.svg" width="200" height="100" alt="NOR Gate">
 <p>Just as the NAND gate could be thought of as an AND followed by a NOT, a NOR can be thought of as an OR also followed by a NOT.</p>
 <div class="gridTable">
<div class="gridData">Input</div>
<div class="gridData">Input 2</div>
<div class="gridData">Output</div>
<div class="gridData">0</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
<div class="gridData">0</div>
<div class="gridData">0</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
<div class="gridData">0</div>
</div>
<br>
<h2>XOR Gate</h2>
<img src="img/SVG/g9527.svg" width="200" height="100" alt="XOR Gate">
 <p>With an OR gate, if both inputs were 1, the output was 1. However, with an XOR, (exclusive OR), if both inputs are 1, the output is 0. For all other scenarios, the XOR behaves the same as the OR.</p>
 <div class="gridTable">
<div class="gridData">Input</div>
<div class="gridData">Input 2</div>
<div class="gridData">Output</div>
<div class="gridData">0</div>
<div class="gridData">0</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">0</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
<div class="gridData">1</div>
<div class="gridData">0</div>
</div>

                    <h1>Logic P</h1>
                    <img src="img\Asset 3.svg" alt="">
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
