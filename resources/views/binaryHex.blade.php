@extends('layouts.app')
<style>
p{width: 60%;
float: right}
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Hexadecimal<div class="float-md-right"><a href="/" class="btn btn-primary" role="button">Home</a></div></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Binary Hexadecimal</h1>
                    <img src="img\Hexadecimal-and-Binary-Number-System-Representation.jpg" alt="">
                    <p>
                        The one main disadvantage of binary numbers is that the binary string equivalent of a large decimal base-10 number can be quite long.

                        When working with large digital systems, such as computers, it is common to find binary numbers consisting of 8, 16 and even 32 digits which makes it difficult to both read or write without producing errors especially when working with lots of 16 or 32-bit binary numbers.

                        One common way of overcoming this problem is to arrange the binary numbers into groups or sets of four bits (4-bits). These groups of 4-bits uses another type of numbering system also commonly used in computer and digital systems called Hexadecimal Numbers.

                        hexadecimal number
                        Hexadecimal Number String

                        The “Hexadecimal” or simply “Hex” numbering system uses the Base of 16 system and are a popular choice for representing long binary values because their format is quite compact and much easier to understand compared to the long binary strings of 1’s and 0’s.</p>
                    <p>

                        Being a Base-16 system, the hexadecimal numbering system therefore uses 16 (sixteen) different digits with a combination of numbers from 0 through to 15. In other words, there are 16 possible digit symbols.

                        However, there is a potential problem with using this method of digit notation caused by the fact that the decimal numerals of 10, 11, 12, 13, 14 and 15 are normally written using two adjacent symbols. For example, if we write 10 in hexadecimal, do we mean the decimal number ten, or the binary number of two (1 + 0). To get around this tricky problem hexadecimal numbers that identify the values of ten, eleven, . . . , fifteen are replaced with capital letters of A, B, C, D, E and F respectively.

                        Then in the Hexadecimal Numbering System we use the numbers from 0 to 9 and the capital letters A to F to represent its Binary or Decimal number equivalent, starting with the least significant digit at the right hand side.</p>
                    <p>

                        As we have just said, binary strings can be quite long and difficult to read, but we can make life easier by splitting these large binary numbers up into even groups to make them much easier to write down and understand. For example, the following group of binary digits 1101 0101 1100 11112 are much easier to read and understand than 11010101110011112 when they are all bunched up together.

                        In the everyday use of the decimal numbering system we use groups of three digits or 000’s from the right hand side to make a very large number such as a million or trillion, easier for us to understand and the same is also true in digital systems.

                        Hexadecimal Numbers is a more complex system than using just binary or decimal and is mainly used when dealing with computers and memory address locations. By dividing a binary number up into groups of 4 bits, each group or set of 4 digits can now have a possible value of between “0000” (0) and “1111” ( 8+4+2+1 = 15 ) giving a total of 16 different number combinations from 0 to 15. Don’t forget that “0” is also a valid digit.
                    </p>

                    </body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
