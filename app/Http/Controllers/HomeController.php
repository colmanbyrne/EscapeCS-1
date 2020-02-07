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
    public function java()
    {
        return view('java');
    }
    public function logicPA()
    {


        $input =  $_POST["inputvalue1"];
        if ($input == 1011) {
            return view('logicP')->with('result', 'Very logical ,you found the first step ,logically where to next?');
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
           $result['response1']="Looks like your getting it others solved it faster are you sure this is for you ??";
        } else {
            $result['response1']="I dont know what your entering but it aint right , try using something logcal";
        }

        if ($input2 == "D") {
            $result['response2']="Boom!!! well done that was a tough one im suprised";
         } else {
             $result['response2']="Do you really understand this ?? I left instructions laying around somewhere.";
         }

        return view('assembler')->with('result',$result);

    }
    public function cPA()
    {
        $input =  $_POST["inputvalue1"];
        if ($input == "0x33") {
            $result="Looks like your beginning to c clearly ,im impressed maybe you do understand";
         } else {
             $result="Are you wearing your glasses ? you will have to learn to c memory clearly for this one";
         }
        return view('c')->with('result',$result);
    }
    public function javaPA()
    {
        $input =  $_POST["inputvalue1"];
        if ($input == "256") {
            $result="Objectivley you have done it but im not happy about it. Fine its over this is the code to unlock the Website ";
         } else {
             $result="Objectivley your wrong very very wrong and you wer so close as well ,times running out";
         }
        return view('c')->with('result',$result);
    }
}
