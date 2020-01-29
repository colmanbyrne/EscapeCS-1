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

procedural with pointers
                   
    <p>int main() {    </p>
        <p>  int number1, number2, sum; </p>
        
        <p>   printf("Enter two integers: "); </p>
        <p>   scanf("%d %d", &number1, &number2); </p>
        <p>   // calculating sum </p>
        <p>   sum = number1 + number2;     </p>  
        
        <p>    printf("%d + %d = %d", number1, number2, sum); </p>
        <p>    return 0; </p>
        <p>  } </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
