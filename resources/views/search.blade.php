@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="text-center">
        @if(isset($details))
        <?php 
            $no = count($details);
         ?>
        <h4>There are {{$no}} results on your search for {{$query}}<br>
            @foreach($details as $result)
                {{$result->name}}<br>{{$result->description}}<br>{{$result->state}}
            @endforeach
        @endif
        @if(isset($message))
            <h4>{{$message}}</h4>
        @endif
        
    </div>




@endsection
