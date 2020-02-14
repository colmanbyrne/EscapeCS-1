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
                <div class="card-header">Java Program</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <?php
                    echo Form::open(array('route' => 'javaPA')); ?>

<pre class="prettyprint">
    <code>
public class Test {

    public static void main(String[] args) {
        Animal animal1=new Animal("Male",6,"Tim");
        Animal animal2=new Animal("Female",4,"David");
        animal2.setAge(animal1.getAge()+1);
        animal2.Random( <?php echo Form::text('inputvalue2'); ?>);<div id="response"> {{ $result['response2'] ?? '' }}</div>
        System.out.println(animal2.getAge()+animal1.getAge());

    }
}


public class Animal {
    String gender;
    int age;
    String name;

    public Animal() {

    }

    public Animal(String gender, int age, String name) {
        this.gender = gender;
        this.age = age;
        this.name = name;
    }

    public String getGender() {
        return gender;
    }

    public void setGender(String gender) {
        this.gender = gender;
    }

    public int getAge() {
        return age;
    }

    public void setAge(int age) {
        this.age = age;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void Random(String input){
        switch (input) {
            case "0x1b":
                 age = 250;
                break;
            case "0x34":
                 age = 4000;
                break;
            default:
        }
    }
}

</code>
</pre>
What is the output from System ?


                    <?php echo Form::text('inputvalue1'); ?><br>

                    <?php

                    echo Form::submit('Click Me!');

                    echo Form::close()
                    ?>
                   <div id="response">   {{ $result['response1'] ?? '' }}     </div>
                </div> </div> </div> </div> </div> @endsection
