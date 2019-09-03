@extends('layouts.master')
@section('title')
@section('sidebar')
    @parent
@stop
@section('content')
    <div class="mt-3">
        <form action="{{route('letters.create')}}">
            <button class="btn btn-secondary mt-2">Write Letter</button>
        </form>
        @foreach ($letters as $letter)

            <div class="inputLabel">
                <h5>
                    <strong>
                        {{$letter -> title}}
                    </strong>
                </h5>
            </div>
            <div>
                {{$letter -> bodyFirstTwentyChar()}}
            </div>
            <div>
                <form action="{{route('letters.show', ['letter' => $letter -> id])}}" style="display:inline-block;">
                    <button type="button" class="deleteButton btn btn-link">View</button>
                </form>
                <form action="{{route('letters.edit', ['letter' => $letter -> id])}}" style="display:inline-block;">
                    <button type="button" class="deleteButton btn btn-link">Edit</button>
                </form>
                <form action="{{route('letters.destroy', ['letter' => $letter -> id])}}" method="POST" style="display:inline-block;">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="button" class="deleteButton btn btn-link">Delete</button>
                </form>
            </div>
        @endforeach
        <script type="text/javascript">
            var deleteButtons = document.getElementsByClassName('deleteButton');

            for(var i = 0; i < deleteButtons.length; i++)
            {
                deleteButtons[i].onclick = function(e){
                    e.preventDefault();
                    //console.log(event.target.form);
                    console.log(event.target);
                    event.target.form.submit();
                }
            }
        </script>
    </div>
@stop