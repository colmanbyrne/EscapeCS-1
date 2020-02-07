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

                    public class Test {

/**
 * @param args the command line arguments
 */
public static void main(String[] args) {
    Animal animal1=new Animal("Male",6,"Tim");
    Animal animal2=new Animal("Female",4,"David");
    
    animal2.setAge(animal1.getAge()+1);
    
    animal2.Random();
    System.out.println(animal2.getAge()+animal2.getAge());

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
    
    public void Random(){
        if(age<4){
            age=4000;
        }
        else if(age>4){
            age=250;
        }
        
    }
}

                   
                </div> </div> </div> </div> </div> @endsection