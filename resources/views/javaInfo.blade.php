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
li.L0, li.L1, li.L2, li.L3, li.L5, li.L6, li.L7, li.L8 {
     list-style-type: decimal !important;
}
</style>

<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Java Language<div class="float-md-right"><a href="/" class="btn btn-primary" role="button">Home</a></div></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div>

                    Java is an object-oriented programming language. <br>
                    <ul>

                        <li>Everything in Java is associated with classes and objects, along with its attributes and methods. </li>
                        <ul>
                        <li>For example: in real life, a car is an object. The car has attributes, such as weight and color, and methods, such as drive and brake.</li>
                        </ul>
                        <li>A Class is like an object constructor, or a "blueprint" for creating objects.</li>
                        <li>A method is a block of code which only runs when it is called.</li>
                        <li>You can pass data, known as parameters, into a method.</li>
                        <li>Methods are used to perform certain actions, and they are also known as functions.</li>
                        <ul>
                        <li>Why use methods? To reuse code: define the code once, and use it many times.</li>
                        </ul>
                    </ul>

                    </div>

<pre class="prettyprint linenums">
    <code class="language-java">
// Create a Car class
public class Car {

  // Create a fullThrottle() method
  public void fullThrottle() {
    System.out.println("The car is going as fast as it can!");
  }

  // Create a speed() method and add a parameter
  public void speed(int maxSpeed) {
    System.out.println("Max speed is: " + maxSpeed);
  }

  // Inside main, call the methods on the myCar object
  public static void main(String[] args) {
    Car myCar = new Car();     // Create a myCar object
    myCar.fullThrottle();      // Call the fullThrottle() method
    myCar.speed(200);          // Call the speed() method
  }
}

</code>
</pre>
<ul>
<li>Result =The car is going as fast as it can!</li>
<li>Max speed is: 200</li>
</ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
