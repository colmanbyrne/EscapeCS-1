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
                    <p>Basics of Memory Addresses in C
When C was created, in 1972, computers were much slower. Most programs were written in assembly. C came along as a better assembly allowing programmers to manipulate memory directly with pointers. Programmers worked much closer to the machine and had to understand how memory worked to make their programs efficient.

Memory Addresses


Memory can be though of as an array of bytes where each address is on index in the array and holds 1 byte. If a computer has 4K of memory, it would have 4096 addresses in the memory array. How operating systems handle memory is much more complex than this, but the analogy provides an easy way to think about memory to get started.

Let’s say our computer has 4K of memory and the next open address is 2048. We declare a new char variable i = ‘a’. When the variable gets declared, enough memory is set aside for its value from unused memory. The variable name is linked to the starting address in memory. Our char i has a value ‘a’ stored at the address 2048. Our char is a single byte so it only takes up index 2048. If we use the & operator on our variable it would return the address 2048. If the variable was a different type, int for instance, it would take up 4 bytes and use up elements 2048-2051 in the array. Using the & would still return 2048 though because the int starts at that index even though it takes up 4 bytes. </p>
                    <p>A pointer is a variable that stores the address of another variable. Unlike other variables that hold values of a certain type, pointer holds the address of a variable. For example, an integer variable holds (or you can say stores) an integer value, however an integer pointer holds the address of a integer variable. </p>
                    <p>The * Operator is also known as Value at address operator.

                        How to declare a pointer?

                        int *p1 /*Pointer to an integer variable*/
                        double *p2 /*Pointer to a variable of data type double*/
                        char *p3 /*Pointer to a character variable*/
                        float *p4 /*pointer to a float variable*/</p>

                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection