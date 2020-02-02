@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Machine Code - Assembler</div>

                <div class="card-body">
                    <h5 class="card-title">Machine code Program</h5>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <?php
                    echo Form::open(array('route' => 'assemblerPA')); ?>
                    1. LDA A #$0
                    <?php echo Form::text('inputvalue1'); ?><br>
                    2. LDA B #$02<br>
                    3. ABA<br>
                    4. STA A , #$001a<br>
                    So what is the Content at memory #$001a ?
                    <?php echo Form::text('inputvalue2');

                    echo Form::submit('Click Me!');

                    echo Form::close()
                    ?>
                    
                                    <img src="{{ URL::to('/img/MC6800_Processor_Diagram.png') }}"><br>
                                
                                    Machine Code is one level above Binary, and is the fastest method to execute a software program. All programs are translated by compilers to machine code before execution. All computers have state machine cores which have Accumulators, which is where the main mathematics takes place when doing calcualtions
                                    some are significantly more complex than other. All controlers also have a staus register , which indicates the status of the core state machine and the status flags are changed based on the activites of the software program
                                    The software is written in a language called Assembler , using memonics for the state machine operations.
                               
                                        <a class="btn btn-primary" href="/instructionset" role="button">Machine code Instruction Set</a>
                  
@endsection