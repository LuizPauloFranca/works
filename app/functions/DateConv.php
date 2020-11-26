<?php
class DateConv
{
    public function dateToBR($americanDateFormat){
        $date = explode("-",$americanDateFormat);
        $brazilianDateFormat = $date[2] . "/" . $date[1] . "/" . $date[0];
        return $brazilianDateFormat;
    }

    public function dateToUS($brazilianDateFormat){
        $date = explode("/",$brazilianDateFormat);
        $americanDateFormat = $date[2] . "-" . $date[1] . "-" . $date[0];
        return $americanDateFormat;
    }
}