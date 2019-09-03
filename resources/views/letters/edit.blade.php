@extends('layouts.master')
@section('title')
    @parent

@stop
@section('sidebar')
    @parent
@stop
@section('content')

    <form action="{{route('letters.update', ['letter' => $letter -> id])}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div>
                <div class="inputLabel">To</div>
                <input type="text" name="receiver_name" class="textBox" value={{$letter -> receiver_name}}>
            </div>
            <div>
                <div class="inputLabel">Reveal Date (Date when your letter will be available to your friend)</div>
                <input type="text" class="datepicker" name="show_letter_date" value="{{$letter -> show_letter_date}}" />
            </div>
            <div>
                <div class="inputLabel">Remove Date (Date when your letter will no longer be available to your friend)</div>
                <input type="text" class="datepicker" name="hide_letter_date" value="{{$letter -> hide_letter_date}}" />
            </div>
            <div>
                <div class="inputLabel">Password (Optional)</div>
                <input type="text" name="password" class="textBox" value={{$letter -> password}}>
            </div>
            <div class="inputLabel">Title</div>
            <div>
                <input class="textBox" type="text" name="title" value={{$letter -> title}}>
            </div>
            <div class="inputLabel">Body</div>
            <div>
                <textarea class="textBox" name="body" rows="20"> {{$letter -> body}}</textarea>
            </div>
            <button class="btn btn-secondary mt-2">Update</button>
    </form>
    <script type="text/javascript">

        $( ".datepicker" ).datepicker(
            {dateFormat: "yy-mm-dd"}
        );
    </script>

@stop