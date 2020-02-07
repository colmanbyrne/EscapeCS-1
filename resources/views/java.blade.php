@extends('layouts.app')
<style>
    .cMemory {
        width :50%;
float: left;
        display: grid;
        grid-template-columns: 33% 33% 33%;
        grid-template-rows: auto;
    }

    .gridData {
        font-size: 150%;
        border: 1px solid black;
        text-align: center;
        padding: 1%;
    }
    .code{
        width :50%;
        float: right;
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

                    public class Test {</br>

public static void main(String[] args) {</br>
    Animal animal1=new Animal("Male",6,"Tim");</br>
    Animal animal2=new Animal("Female",4,"David");</br>
    
    animal2.setAge(animal1.getAge()+1);</br>
    
    animal2.Random();</br>
    System.out.println(animal2.getAge()+animal2.getAge());</br>

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
    
    public void Random(){</br>
        if(age<4{</br>
            age=4000;</br>
        }</br>
        else if(age>4){</br>
            age=250;</br>
        }</br>
        
    }
}

                   
                </div> </div> </div> </div> </div> @endsection