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

                   
    int main() {    
        int number1, number2, sum;
        
        printf("Enter two integers: ");
        scanf("%d %d", &number1, &number2);
        // calculating sum
        sum = number1 + number2;      
        
        printf("%d + %d = %d", number1, number2, sum);
        return 0;
    }
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
