@extends('layouts.app')
<style>
    #response {
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
                    <p>This website is a hostage</p>
                    <p>Programmers fail to appreciate how lucky they are standing on the shoulders of giants, men who coded every step in their programmes</p>
                    <p>You have no idea how easy it is for you now memory allocation stackoverflows ha your greatest worry is incorporating cheats to speed up "productivity" </p>
                    <p>Ineffecient mindless saps learn your past to move forward</p>
                    <p>You will have to look back to move on</p>

                    <div id="response"> {{ $result ?? '' }}</div>
                    </br>
                    <?php echo session('puzzle'); ?>
                    </br>

                    <?php
                    if (session('puzzle') != 0) {
                        echo "<s>";
                    }
                    ?>
                    <a href="/logicInfo">Logic Info</a>
                    <?php
                    if (session('puzzle') != 0) {
                        echo "</s>";
                    }
                    ?>

                    <br>

                    <?php
                    if (session('puzzle') != 0) {
                        echo "<s>";
                    }
                    ?>
                    <a href="/logicP">Logic Puzzle</a>
                    <?php
                    if (session('puzzle') != 0) {
                        echo "</s>";
                    }
                    ?>

                    <br>

                    <?php
                    if (session('puzzle') > 1) {
                        echo "<s>";
                    }
                    ?>
                    <a href="/binaryHex">Binary Hex Info</a>
                    <?php
                    if (session('puzzle') != 0) {
                        echo "</s>";
                    }
                    ?>
                    <br>
                    <a href="/assembler">Assembler Puzzle</a>
                    <br>
                    <a href="/cInfo">C Info</a>
                    <br>
                    <a href="/c">C Puzzle</a>
                    <br>
                    <a href="/javaInfo">Java Info</a>
                    <br>
                    <a href="/java">Java Puzzle</a>
                    <br>

                    <a href="/decomp">Decompisition</a>
                    <br>
                    <a href="/jvsc">Java vs C</a>
                    <br>
                    <h1>Unlock Code</h1>
                    <?php
                    echo Form::open(array('route' => 'final')); ?>

                    <?php echo Form::text('inputvalue1');
                    echo Form::text('inputvalue2');
                    echo Form::text('inputvalue3');


                    echo Form::submit('Click Me!');

                    echo Form::close()
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection