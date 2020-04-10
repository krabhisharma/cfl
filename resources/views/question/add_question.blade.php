@extends('questionapp.layout')

@section('Content')
<style>
  .form-group{
    margin-left:12%;
        
        width: 80%;
        border: 3px solid green;
        size:50%;
        margin-top:2rem;
        padding: 10px; text-align: left;
        border: 3px solid green;"
  }
  </style>

<div class="card">
    <div class="card-header" >
       Add Question
    </div>
    <div class="card-body" style="width:500px;margin-left:5%; margin-top:12px">
    <form method="POST" action="{{route('add.store')}}">

        {{csrf_field()}}
            <div class="form-group">
              <label>q_id</label>
              <input type="integer" class="form-control" name="q_id" placeholder="enter qid">
            </div>

            <div class="form-group">
                <label>Question</label>
                
                <input type="text" class="form-control" name="question" placeholder="enter question">
              </div>

              <div class="form-group">
                <label>ans_id</label>
                <input type="integer" class="form-control" name="ans_id" placeholder="enter ans_id">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>
  </div>
  
@endsection