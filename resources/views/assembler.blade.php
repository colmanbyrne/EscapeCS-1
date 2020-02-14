@extends('layouts.app')
<style>
#response{
color: blueviolet
}
</style>
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
                    1. LDA A #$<?php echo Form::text('inputvalue1'); ?><br><div id="response">{{ $result['response1'] ?? '' }}</div>
                    2. LDA B #$2<br>
                    3. ABA<br>
                    4. STA A , #$001A<br>
                    So what is the Content at memory #$001a ?<br>
                    <div id="response">{{ $result['response2'] ?? '' }}</div>
                    <?php echo Form::text('inputvalue2');

                    echo Form::submit('Click Me!');

                    echo Form::close()
                    ?>

                    <img src="{{ URL::to('/img/MC6800_Processor_Diagram.png') }}"><br>

                    Machine Code is one level above Binary, and is the fastest method to execute a software program. All programs are translated by compilers to machine code before execution. All computers have state machine cores which have Accumulators, which is where the main mathematics takes place when doing calcualtions
                    some are significantly more complex than other.
                    The software is written in a language called Assembler , using memonics for the state machine operations as well as hexadeciaml for binary digits .

                    <a class="btn btn-primary" href="/instructionset" role="button">Machine code Instruction Set</a>

                    @endsection
