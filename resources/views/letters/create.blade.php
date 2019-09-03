@extends('layouts.master')
@section('title')
@section('sidebar')
    @parent
@stop
@section('content')
    <form action="{{route('letters.store')}}" method="POST">
        @csrf
        <div>
            <div class="inputLabel">To</div>
            <input type="text" name="receiver_name" class="textBox">
        </div>
        <div>
            <div class="inputLabel">Reveal Date (Date when your letter will be available to your friend)</div>

            <input class="datepicker" id="datepicker" name="show_letter_date" size="16" type="text" value="" readonly>

        </div>
        <div>
            <div class="inputLabel">Remove Date (Date when your letter will no longer be available to your friend)</div>

            <input class="datepicker"  size="16" type="text" value="" name="hide_letter_date" readonly>

        </div>
        <div>
            <div class="inputLabel">Password (Optional)</div>
            <input type="text" name="password" class="textBox">
        </div>
        <div>
            <div class="inputLabel">Title</div>
            <input type="text" name="title" class="textBox">
        </div>
        <div>
            <div class="inputLabel">Body</div>
            <textarea type="text" name="body" rows="20" width="70%" class="textBox"></textarea>
        </div>


        <button class="btn btn-secondary mt-2">Add</button>
    </form>

    <script type="text/javascript">
        $( ".datepicker" ).datepicker(
            {dateFormat: "yy-mm-dd"}
        );
    </script>
@stop