@extends('layout')

@section('pagetitlepart')
Update
@endsection
@section('pagecontent')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center display-4">Update Todo</h1>
        </div>
        <div class="col-md-12">
            <form method="POST" action="{{route('updateEntry',$todo->id)}}">
                @csrf
                <label for="title">Title*</label>
                <input type="text" name="name" value="{{ old('name')? old('name'):$todo->name }}" id="title" class="form-control mb-2"/>
                
                @foreach ($errors->get('name') as $error)
                <small class="text-danger"> {{$error}} </small>
                @endforeach
                <input type="submit" class="btn btn-dark btn-block" value="Update"/>

            </form>
        </div>
    </div>
</div>

@endsection
