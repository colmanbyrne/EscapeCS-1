<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {



        $date = Carbon::now();
        $carbon_date = Carbon::parse($date);
        $carbon_date->addHours(1);
        if (session('start') == null) {
            session()->put('start', $carbon_date);
            session()->put('puzzle', 0);
        }

        return view('home');
    }
    public function logicInfo()
    {
        return view('logicInfo');
    }

    public function assembler()
    {
        return view('assembler');
    }

    public function instructionset()
    {
        return view('instructionset');
    }
    public function logicP()
    {
        return view('logicP');
    }
    public function binaryHex()
    {
        return view('binaryHex');
    }
    public function decomp()
    {
        return view('decomposition ');
    }
    public function jvsc()
    {
        return view('jVSc ');
    }
    public function c()
    {
        return view('c');
    }
    public function cInfo()
    {
        return view('cInfo');
    }
    public function java()
    {
        return view('java');
    }
    public function javaInfo()
    {
        return view('javaInfo');
    }
    public function logicPA()
    {


        $input =  $_POST["inputvalue1"];
        if ($input == 1011) {
            if (session('puzzle') == 0) {
                session()->put('puzzle', 1);
            }
            return view('home')->with('result', 'Very logical ,you found the first step ,logically where to next?');
        } else {

            return view('logicP')->with('result', 'Ha not very logical are you, your gonna have to learn the basics first');
        }
    }
    public function assemblerPA()
    {

        $input =  $_POST["inputvalue1"];
        $input2 =  $_POST["inputvalue2"];
        $result = [
            'response1' => '',
            'response2' => ''
        ];

        if ($input == "B") {
            $result['response1'] = "Looks like your getting it others solved it faster are you sure this is for you ??";
        } else {
            $result['response1'] = "I dont know what your entering but it aint right , try using something logical";
        }

        if ($input2 == "D") {
            return view('home')->with('result', 'Boom!!! well done that was a tough one im suprised');
            if (session('puzzle') == 1) {
                session()->put('puzzle', 2);
            }
        } else {
            $result['response2'] = "Do you really understand this ?? I left instructions laying around somewhere.";
        }

        return view('assembler')->with('result', $result);
    }
    public function cPA()
    {
        $input =  $_POST["inputvalue1"];
        $input2 =  $_POST["inputvalue2"];

        if ($input == "14") {
            $result['response1'] = "well u know how to go from one page to another following instructions ,well done";
        } else {
            $result['response1'] = "can you not even follow simple instructions ?";
        }

        if ($input2 == "0x1B") {
            if (session('puzzle') == 2) {
                session()->put('puzzle', 3);
            }
            return view('home')->with('result', 'Looks like your beginning to c clearly ,im impressed maybe you do understand');
        } else {
            $result['response2'] = "Are you wearing your glasses ? you will have to learn to c memory clearly for this one";
        }
        return view('c')->with('result', $result);
    }
    public function javaPA()
    {
        $input =  $_POST["inputvalue1"];
        $input2 =  $_POST["inputvalue2"];

        if ($input == "256") {
            if (session('puzzle') == 3) {
                session()->put('puzzle', 4);
            }
            return view('home')->with('result', 'Objectivley you have done it but im not happy about it. Fine its over this is the code to unlock the Website');
        } else {
            $result['response1'] = "Objectivley your wrong very very wrong and you wer so close as well ,times running out";
        }

        if ($input2 == "0x1B") {
            $result['response2'] = "Ok you can c but can you be objective enough to get to the end";
        } else {
            $result['response2'] = "you will need to c the right answer before moving to this problem";
        }

        return view('java')->with('result', $result);
    }
    public function final()
    {
        $input =  $_POST["inputvalue1"];
        $input2 =  $_POST["inputvalue2"];
        $input3 =  $_POST["inputvalue3"];

        if ($input == "2" && $input2 == "5" && $input3 == "6") {
            return view('final');
        }
    }
}
