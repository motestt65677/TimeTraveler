@extends('layouts.master')
@section('title')
@section('sidebar')
    @parent
@stop
@section('content')
   <div>
        <div class="inputLabel">To</div>
        <div>
            {{$letter -> receiver_name}}
        </div>
    </div>
    <div>
        <div class="inputLabel">Reveal Date</div>
        <div>
            {{$letter -> show_letter_date}}
        </div>
    </div>
    <div>
        <div class="inputLabel">Body</div>
        <div>
            {{$letter -> hide_letter_date}}
        </div>
    </div>
    <div>
        <div class="inputLabel">Password</div>
        <div>
            {{$letter -> password}}
        </div>
    </div>
    <div>
        <div class="inputLabel">Title</div>
        <div>
            {{$letter -> title}}
        </div>
    </div>
    <div>
        <div class="inputLabel">Body</div>
        <div>
            {{$letter -> body}}
        </div>
    </div>   
@stop