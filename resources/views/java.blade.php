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
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <?php
                    echo Form::open(array('route' => 'javaPA')); ?>
                    public class Test {</br>

public static void main(String[] args) {</br>
    Animal animal1=new Animal("Male",6,"Tim");</br>
    Animal animal2=new Animal("Female",4,"David");</br>
    
    animal2.setAge(animal1.getAge()+1);</br>
   
    animal2.Random( <?php echo Form::text('inputvalue2'); ?>);<div id="response"> {{ $result['response2'] ?? '' }}</div> </br>
    System.out.println(animal2.getAge()+animal1.getAge());</br>

}</br>



}</br>

</br></br>

public class Animal {</br>
    String gender;</br>
    int age;</br>
    String name;</br>

    public Animal() {</br>
        
    }</br>

    public Animal(String gender, int age, String name) {</br>
        this.gender = gender;</br>
        this.age = age;</br>
        this.name = name;</br>
    }</br>

    public String getGender() {</br>
        return gender;</br>
    }</br>

    public void setGender(String gender) {</br>
        this.gender = gender;</br>
    }</br>

    public int getAge() {</br>
        return age;</br>
    }</br>

    public void setAge(int age) {</br>
        this.age = age;</br>
    }</br>

    public String getName() {</br>
        return name;</br>
    }</br>

    public void setName(String name) {</br>
        this.name = name;</br>
    }</br>
    
    public void Random(String input){</br>
        switch (input) {</br>
            case "0x1b":</br>
                 age = 250;</br>
                break;</br>
            case "0x34":</br>
                 age = 4000;</br>
                break;</br>
            default:</br>
        
        }</br>
        
    }</br>
}</br>
What is the output from System ?
                  
                    
                    <?php echo Form::text('inputvalue1'); ?><br>
                   
                    <?php 

                    echo Form::submit('Click Me!');

                    echo Form::close()
                    ?>
                   <div id="response">   {{ $result['response1'] ?? '' }}     </div>
                </div> </div> </div> </div> </div> @endsection