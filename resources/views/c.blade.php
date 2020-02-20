@extends('layouts.app')
<style>

pre, code {
    font-family: monospace, monospace;
}
pre {
    overflow: auto;
}
pre > code {
    display: block;
    padding: 1rem;
    word-wrap: normal;
}
li.L0, li.L1, li.L2, li.L3, li.L5, li.L6, li.L7, li.L8 {
     list-style-type: decimal !important;
}

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
<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> C Program<div class="float-md-right"><a href="/" class="btn btn-primary" role="button">Home</a></div></div>

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
                        <div class="gridData">11</div>
                        <div class="gridData">y</div>

                        <div class="gridData">0x066</div>
                        <div class="gridData">0x067</div>
                        <div class="gridData">ptr</div>

                        <div class="gridData">0x065</div>
                        <div class="gridData">5</div>
                        <div class="gridData">n</div>

                        <div class="gridData">0x064</div>
                        <div class="gridData">4</div>
                        <div class="gridData">i</div>


                    </div>
                    <div class="code">
                        <?php echo Form::open(array('route' => 'cPA'));?>
                        <pre class="prettyprint linenums">
                        <code>
                #include stdio.h
                int main() {
                        int i;
                        int n;
                        int *ptr;
                        int y;
                        int x;
                        int *ptr2;
                        y=11;

                        x=<?php echo Form::text('inputvalue1');?>;<div id="response"><span class="nocode"> {{ $result['response1'] ?? '' }}</span></div>

                        ptr= (int*)malloc(n * sizeof(int));

                        for (i = 0; i < n; ++i) {
                            ptr[i]=i + 1;
                        }
                        ptr2=(int*)malloc(2 * sizeof(int));
                        *ptr2=x + y + ptr[2];

                }

            </code>
        </pre>
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
