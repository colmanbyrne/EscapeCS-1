@extends('layouts.app')
<style>
    #response {
        color: blueviolet
    }

    .cMemory {
        width: 100%;
        float: left;
        display: grid;
        grid-template-columns: 33% 33% 33%;
        grid-template-rows: auto;
    }

    .gridData {
        font-size: 150%;
        border: 0px solid black;
        text-align: center;
        padding: 1%;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h2>This website is a hostage</h2>
                    <p style="font-size:18px;">Programmers fail to appreciate how lucky they are standing on the shoulders of giants, men who coded every step in their programmes.</p>
                    <p style="font-size:18px;">You have no idea how easy it is for you now memory allocation stackoverflows ha your greatest worry is incorporating cheats to speed up "productivity". </p>
                    <p style="font-size:18px;">Ineffecient mindless saps learn your past to move forward. You will have to look back to move on.</p>

                    <div id="response"> {{ $result ?? '' }}</div>
                    <!--
                    <br>
                    <?php echo session('puzzle'); ?>
                    <br>
                    -->

                    <div class="cMemory">
                        <div class="gridData"></div>
                        <div class="gridData">
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

                        </div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData"></div>
                        <div class="gridData">
                            <?php
                                if (session('puzzle')== 4) {
                                echo "<s>";
                                }
                            ?>
                            <a href="/java">Java Program</a>
                            <?php
                                if (session('puzzle') ==4) {
                                echo "</s>";
                                }
                            ?>
                        </div>

                        <div class="gridData">
                            <a href="/decomp">Decomposition</a>
                        </div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData">
                            <a href="/binaryHex">Binary Hex Info</a>
                        </div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData">

                        </div>
                        <div class="gridData">

                        </div>
                        <div class="gridData">
                            <?php
                            if (session('puzzle') > 2) {
                                echo "<s>";
                            }
                            ?>
                            <a href="/cInfo">C Info</a>
                            <?php
                            if (session('puzzle') >2) {
                                echo "</s>";
                            }
                            ?>
                        </div>

                        <div class="gridData"></div>
                        <div class="gridData">
                            <a href="/jvsc">Java vs C</a>
                        </div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData">
                            <?php
                            if (session('puzzle') > 1) {
                                echo "<s>";
                            }
                            ?>
                            <a href="/assembler">Assembler Program</a>
                            <?php
                            if (session('puzzle') >1) {
                                echo "</s>";
                            }
                            ?>
                        </div>
                        <div class="gridData"></div>
                        <div class="gridData">
                            <?php
                            if (session('puzzle') > 2) {
                            echo "<s>";
                            }
                            ?>
                            <a href="/c">C Program</a>
                            <?php
                            if (session('puzzle') >2) {
                            echo "</s>";
                            }
                            ?>
                        </div>

                        <div class="gridData"></div>
                        <div class="gridData">
                            <?php
                            if (session('puzzle') == 4) {
                            echo "<s>";
                            }
                            ?>
                            <a href="/javaInfo">Java Info</a>
                            <?php
                            if (session('puzzle') ==4) {
                            echo "</s>";
                            }
                            ?>
                        </div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData"></div>
                        <div class="gridData">

                        </div>

                        <div class="gridData">
                            <?php
                            if (session('puzzle') != 0) {
                                echo "<s>";
                            }
                            ?>

                            <a href="/logicP">Logic </a>
                            <?php
                            if (session('puzzle') != 0) {
                                echo "</s>";
                            }
                            ?>
                        </div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData">

                        </div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>


                    </div>



                </div>
                <div>
                <h1 class="text-center" >Unlock Code</h1>
                <?php echo Form::open(array('route' => 'final')); ?>
                <div class="d-flex justify-content-center">
                <div><?php echo Form::text('inputvalue1');?></div>
                <div><?php echo Form::text('inputvalue2');?></div>
                <div><?php echo Form::text('inputvalue3');?></div>
                <div><?php echo Form::submit('Click Me!');?></div>
                </div>

                    <?php  echo Form::close()?>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
