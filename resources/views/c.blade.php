@extends('layouts.app')
<style>
    .cMemory {
        width :50%;
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
    .code{
        width :50%;
        float: right;
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
                        <div class="gridData"></div>

                        <div class="gridData">0x071</div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData">0x070</div>
                        <div class="gridData"></div>
                        <div class="gridData">ptr2[1]</div>

                        <div class="gridData">0x06F</div>
                        <div class="gridData">0x33</div>
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
                        <div class="gridData">0x14</div>
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
                        // This pointer will hold the<br>
                        // base address of the block created<br>
                        int* ptr;<br>
                        int n, i;<br>
                        int x.y;<br>
                        int *ptr2;<br>

                      
                        // Get the number of elements for the array<br>
                        n = 5;<br>
                        printf("Enter number of elements: %d\n", n);<br>
                      
                        // Dynamically allocate memory using calloc()<br>
                        ptr = (int*)calloc(n, sizeof(int));<br>
                      
                        // Check if the memory has been successfully<br>
                        // allocated by calloc or not<br>
                        if (ptr == NULL) {<br>
                            printf("Memory not allocated.\n");<br>
                            exit(0);<br>
                        }<br>
                        else {<br>
                      
                            // Memory has been successfully allocated<br>
                            printf("Memory successfully allocated using calloc.\n");<br>
                      
                            // Get the elements of the array<br>
                            for (i = 0; i < n; ++i) {<br>
                                     ptr[i]=i + 1;         } <br>
                            *ptr2=x + y + ptr[2];  <br>
                           }   <br>
                           return 0; } <br> 
                    </div>
                </div> </div> </div> </div> </div> @endsection