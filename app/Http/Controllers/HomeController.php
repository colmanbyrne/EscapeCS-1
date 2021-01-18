<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Mqtt;

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

       // return view('home');
        return view('LogicPuzzle');
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
    public function levels()
    {
        return view('levels');
    }
   /*  public function logicPA()
     {


         $input =  $_POST["inputvalue1"];
         if ($input == 1011) {
             if (session('puzzle') == 0) {
                 session()->put('puzzle', 1);
             }
             return view('home')->with('result', 'Very logical ,you found the first step ,maybe try assembling some brains and we can move onto the next step?');
         } else {

             return view('logicP')->with('result', 'Ha not very logical are you, your gonna have to learn the basics first');
         }
     } */
    public function logicPA()
    {

        //https://157b5eec-858e-4a65-801d-5af67c9a7c5f.mock.pstmn.io/solved
        $input =  $_POST["inputvalue1"];

        $mqtt = new Mqtt();
        if ($input == 1011) {

            //$json = json_decode(file_get_contents('https://157b5eec-858e-4a65-801d-5af67c9a7c5f.mock.pstmn.io/solved'), true);
            //error_log(var_dump($json));



            $topic='LIT/PuzzleLock';
            $message='Unlock';
            $output = Mqtt::ConnectAndPublish($topic, $message);

            if ($output === true)
            {
                error_log("published");
            }
               error_log("Failed");


            return view('logicP')->with('result', 'Very logical ,youv done it well done, check the lock now');
        } else {
            $topic='LIT/PuzzleLock';
            $message='Lock';
            $output = Mqtt::ConnectAndPublish($topic, $message);

            if ($output === true)
            {
                error_log("published");
            }
               error_log("Failed");

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

        if (strtoupper ($input) == "B"||strtoupper ( $input ) == "0XB"||strtoupper ( $input ) == "0X0B") {
            $result['response1'] = "Thats correct ,could you B slower ?";
        }elseif (strtoupper ($input) == "1011") {
            $result['response1'] = "so close, but we dont deal in binary anymore, we only speak in 16s these days";
        }
         else {
            $result['response1'] = "I dont know what your entering but it aint right , try using something logical";
        }

        if (strtoupper ( $input2 )=="D"||strtoupper ( $input2 ) == "0XD"||strtoupper ( $input2 ) == "0X0D"||strtoupper ( $input2 ) == "13") {

            if (session('puzzle') == 1) {
                session()->put('puzzle', 2);
            }
            return view('home')->with('result', 'Boom!!! well done that was a tough one im suprised,Your beginning to C more clearly');
        } else {
            $result['response2'] = "Do you really understand this ?? I left instructions laying around somewhere.";
        }

        return view('assembler')->with('result', $result);
    }
    public function cPA()
    {
        $input =  $_POST["inputvalue1"];
        $input2 =  $_POST["inputvalue2"];

        if ($input == "13") {
            $result['response1'] = "well You know how to go from one page to another following instructions ,well done";
        } else {
            $result['response1'] = "can you not even assemble some simple instructions ?";
        }

        if ($input2 == "27") {
            if (session('puzzle') == 2) {
                session()->put('puzzle', 3);
            }
            return view('home')->with('result', 'Looks like your beginning to c clearly ,Im impressed maybe you do understand');
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
            return view('home')->with('result', 'Objectively you have done it but im not happy about it. Fine its over this is the code to unlock the Website 2 5 6');
        } else {
            $result['response1'] = "Objectively your wrong very very wrong and you were so close as well ,times running out";
        }

        if ($input2 == "0x1B"||$input2 == "0x1b"||$input2 == "27") {
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
        else{
            return view('home')->with('result', 'Nope, stop guessing');  
        }
    }
    public function feedback()
    {
        $input =  $_POST["input1"];
        $input2 =  $_POST["input2"];
        $date = Carbon::now();

        $gender =  $_POST["gender"];
        $age =  $_POST["age"];
        $schoolLevel =  $_POST["schoolLevel"];
        $country =  $_POST["country"];
        $subject =  $_POST["subject"];

        $q1 =  $_POST["q1"];
        $q2 =  $_POST["q2"];
        $q3 =  $_POST["q3"];
        $q4 =  $_POST["q4"];
        $q5 =  $_POST["q5"];
        $q6 =  $_POST["q6"];
        $q7 =  $_POST["q7"];
        $q8 =  $_POST["q8"];
        $q9 =  $_POST["q9"];
        $q10 =  $_POST["q10"];
        $q11 =  $_POST["q11"];
        $q12 =  $_POST["q12"];
        $q13 =  $_POST["q13"];
        $q14 =  $_POST["q14"];
        $q15 =  $_POST["q15"];
        

        DB::table('feedback')->insert(
            ['Email' =>$input2 , 'Date' => $date, 'Comment' => $input, 'Gender' => $gender, 'Age' => $age, 'SchoolLevel' => $schoolLevel, 'Country' => $country
            , 'Subject' => $subject, 'q1' => $q1, 'q2' => $q2, 'q3' => $q3, 'q4' => $q4, 'q5' => $q5, 'q6' => $q6, 'q7' => $q7, 'q8' => $q8, 'q9' => $q9, 'q10' => $q10, 'q11' => $q11, 'q12' => $q12, 'q13' => $q13, 'q14' => $q14, 'q15' => $q15]
        );
        return view('home');

    }
}
