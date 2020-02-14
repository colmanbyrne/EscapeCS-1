@extends('layouts.app')
<style>
    .cMemory {
        width: 50%;
        float: left;
        display: grid;
        grid-template-columns: 33% 33% 33%;
        grid-template-rows: auto;
    }

    .gridData {
        font-size: 150%;
        border: 1px solid black;
        text-align: center;
        padding: 1%;
    }

    .code {
        width: 50%;
        float: right;
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

                        <div class="gridData">0x072</div>
                        <div class="gridData"></div>
                        <div class="gridData">Unallocated</div>

                        <div class="gridData">0x071</div>
                        <div class="gridData"></div>
                        <div class="gridData">Unallocated</div>

                        <div class="gridData">0x070</div>
                        <div class="gridData"></div>
                        <div class="gridData">ptr2[1]</div>

                        <div class="gridData">0x06F</div>
                        <div class="gridData"></div>
                        <div class="gridData">ptr2[0]</div>

                        <div class="gridData">0x06E</div>
                        <div class="gridData">5</div>
                        <div class="gridData">ptr[4]</div>

                        <div class="gridData">0x06D</div>
                        <div class="gridData">4</div>
                        <div class="gridData">ptr[3]</div>

                        <div class="gridData">0x06C</div>
                        <div class="gridData">3</div>
                        <div class="gridData">ptr[2]</div>

                        <div class="gridData">0x06B</div>
                        <div class="gridData">2</div>
                        <div class="gridData">ptr[1]</div>

                        <div class="gridData">0x06A</div>
                        <div class="gridData">1</div>
                        <div class="gridData">ptr[0]</div>

                        <div class="gridData">0x069</div>
                        <div class="gridData">0x06f</div>
                        <div class="gridData">ptr2</div>

                        <div class="gridData">0x068</div>
                        <div class="gridData"></div>
                        <div class="gridData">x</div>

                        <div class="gridData">0x067</div>
                        <div class="gridData">0x0A</div>
                        <div class="gridData">y</div>

                        <div class="gridData">0x066</div>
                        <div class="gridData">0x67</div>
                        <div class="gridData">ptr</div>

                        <div class="gridData">0x065</div>
                        <div class="gridData">5</div>
                        <div class="gridData">n</div>

                        <div class="gridData">0x064</div>
                        <div class="gridData">4</div>
                        <div class="gridData">i</div>


                    </div>
                    <div class="code">
                        int i;</br>
                        int n;</br>
                        int *ptr;</br>
                        int y;</br>
                        int x;</br>
                        int *ptr2;</br>

                        y=10;</br>
                        <?php echo Form::open(array('route' => 'cPA'));?>
                        x=<?php echo Form::text('inputvalue1'); ?><div id="response">{{ $result['response1'] ?? '' }} ;</div>  </br>

                        ptr= (int*)malloc(n * sizeof(int));</br>

                         for (i = 0; i < n; ++i) {</br>
                        ptr[i]=i + 1;         } </br>
                             ptr2=(int*)malloc(2 * sizeof(int));</br>
                              *ptr2=x + y + ptr[2]; </br>
                             
                              What is the content of *ptr2 ? 
                              <?php
                            echo Form::text('inputvalue2');
                            echo Form::submit('Click Me!');
                            echo Form::close();
                            ?>
                          <div id="response"> {{ $result['response2'] ?? '' }}   </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> @endsection