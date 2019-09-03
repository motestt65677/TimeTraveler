<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DateTime;
class Letter extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'body', 'show_letter_date', 'hide_letter_date', 'receiver_name', 'password'];
    protected $dates = ['deleted_at'];

    //
    public function bodyFirstTwentyChar()
    {
        return mb_substr($this -> body, 0, 20) . "..." ;
    }
    
    public function convertDateTimeForView ()
    {
        //$this -> show_letter_date = $this -> show_letter_date->format('H:i:s') ;
        $format = 'Y-m-d H:i:s';
        $formatView = 'Y-m-d';
        if(!($this -> show_letter_date == null))
            $this -> show_letter_date = DateTime::createFromFormat($format, $this -> show_letter_date)->format($formatView);
        if(!($this -> hide_letter_date == null))
            $this -> hide_letter_date = DateTime::createFromFormat($format, $this -> hide_letter_date)->format($formatView);

        //$this -> show_letter_date = $this -> show_letter_date ->format("Y.m.d");
        return "";
    }


}
