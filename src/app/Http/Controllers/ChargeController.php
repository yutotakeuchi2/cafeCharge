<?php

namespace App\Http\Controllers;

use DateTimeImmutable;
use Illuminate\Http\Request;

class ChargeController extends Controller
{
    public function calculate(Request $req){
        $courses = array(
            "1h" => array(
                "price" => 500,
                "seconds" => 3600
            ),
            "3h" => array(
                "price" => 800,
                "seconds" => 10800
            ),
            "5h" => array(
                "price" => 1500,
                "seconds" => 18000
            ),
            "8h" => array(
                "price" => 1900,
                "seconds" => 28800
            )
        );
        $enter_date = $this->formatEnterDate($req);
        $exit_date = $this->formatExitDate($req);
        //ここまで入力値と値の準備 実際の運用だと入店時と退店時にDateTimeオブジェクトを直接作り料金表はDBにある形になるかと?

        //ここから処理
        $enter_date_unix = $enter_date->format("U");
        $exit_date_unix = $exit_date->format("U");
        $stay_time = $this->getDifferenceDate($enter_date_unix, $exit_date_unix);
        //$extension = $this->isExtension($stay_time, $req->course, $courses);
        $extension_border = $this->calculateExtensionBorder($enter_date_unix, $courses[$req->course]["seconds"]);
        $charge = $this->calculateCharge($extension_border, $exit_date_unix, $courses[$req->course]["price"]);
        return view("result", compact("charge","extension_border","exit_date_unix"));
    }

    public function formatEnterDate($req)
    {
        $enter_day = $req->enter_day;
        $enter_time = $req->enter_time;
        $enter_date = $enter_day . " " . $enter_time;
        return new DateTimeImmutable($enter_date);
    }

    public function formatExitDate($req)
    {
        $exit_date = $req->exit_day . " " . $req->exit_time;
        return new DateTimeImmutable($exit_date);
    }

    public function getDifferenceDate($enter_date, $exit_date)
    {
        return $exit_date - $enter_date;
    }

    // public function isExtension($stay_time, $customer_course, $courses)
    // {
    //     if($stay_time > $courses[$customer_course]["seconds"]){
    //         return "延長アリ";
    //     } else {
    //         return "延長なし";
    //     }
    // }

    public function calculateExtensionBorder($enter_date, $course_seconds)
    {
        return $enter_date + $course_seconds;
    }

    public function calculateCharge($extension_border, $exit_date, $charge)
    {
        $extension_time = $exit_date - $extension_border;
        while($extension_time > 0){

            if(date("H:i:s",$exit_date - $extension_time) >= date("22:00:00")){
                $charge += 115;
                $extension_time -= 600;
            }elseif(date("H:i:s", $exit_date - $extension_time) < date("05:00:00")){ //05:00ピッタリは迷った結果深夜時間に含めませんでした
                $charge += 115;
                $extension_time -= 600;
            }else{
                $charge += 100;
                $extension_time -= 600;
            }
        }
        return $charge;
    }
}