@extends('questionapp.layout')

@section('Content')
<div style="margin-left:50px;">
       <h3>Question</h3>    
</div>

       @if(count($asda)>0)
        @foreach ($asda as $asda)

        <div class="well" style="
        margin-left:12%;
        
  width: 40%;
  border: 3px solid green;
  size:50%;
  margin-top:2rem;
  padding: 10px; text-align: left;
  border: 3px solid green;">
                    <h3><a href="/add/{{$asda->id}}">{{$asda->q_id}}</a></h3>
                    {{$asda->created_at}}
                 
        </div>


@endforeach
@else
        <p>question found
@endif
@endsection