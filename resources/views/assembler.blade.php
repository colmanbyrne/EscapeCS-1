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


                    <div class="container-fluid">

                        <div class="row">
                            <div class="col">

                                <div class="well">
                                    <div class="form-group row">
                                        <label for="inputvalue1" class="col-sm-3 col-form-label">1. LDA    #</label>
                                        <div class="col-sm-2">
                                          <input type="text" class="form-control" id="inputvalue1" placeholder="Input Value">
                                        </div>
                                      </div>

                                      2. LDB #0x02<br>
                                      3. ABA<br>
                                      4. STA A , #0x001a<br>
                                      <div class="form-group row">
                                        <label for="inputvalue2" class="col-sm-7 col-form-label">Content of memory at #0x001a</label>
                                        <div class="col-sm-2">
                                          <input type="text" class="form-control" id="inputvalue2" placeholder="Input Value">
                                        </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="row">
                                <img src="{{ URL::to('/img/MC6800_Processor_Diagram.png') }}">
                                </div>
                                <div class="row">
                                Machine Code is one level above Binary, and is the fastest method to execute a software program. All programs are translated by compilers to machine code before execution. All computers have state machine cores which have Accumulators, which is where the main mathematics takes place when doing calcualtions
                                some are significantly more complex than other.  All controlers also have a staus register , which indicates the status of the core state machine and the status flags are changed based on the activites of the software program
                                The software is written in a language called Assembler , using memonics for the state machine operations.
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <a class="btn btn-primary" href="/instructionset" role="button">Machine code Instruction Set</a>
                                      </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
