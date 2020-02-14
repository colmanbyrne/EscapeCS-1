@extends('layouts.app')

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
                    
                    <p>Well here we are ,you have done it stepped through all my layers of abstraction to reach us here.</p>
                   <p> Maybe i overeaceted maybe things arent as bad as it seems.</p>
                   <p> I do think we need to have a better understanding in our past ,we are losing skills that are still needed today ,what will you do when you cheats and librarys fail you.</p>
                   <p> What if OS systems stop working or shut you out.The old ways will always work and they will make you a better programmer.</p>

                   <p> But then i also see this </p>
                    //////////////////////////

                   <p> Maybe there is hope if we can make it accessible to everyone maybe more will participate.</p>
                    

                    <p>Anyway you have solved my little trials il turn your website back to normal when i get a chance ,im doing things the old ways it might take awhile.</p>
                        

                    <?php echo Form::open(array('route' => 'feedback'));
                       
                       echo Form::label('input2', 'E-Mail Address');
                            echo Form::text('input2');
                            echo Form::label('input1', 'Comments');
                            echo Form::textarea('input1');
                            echo Form::submit('Click Me!');
                            echo Form::close();
                            ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection