<?php

// Fungsi untuk mengubah angka menjadi format mata uang Indonesia
function money_format($number)
{
    return number_format($number, 0, ",", ".");
}

// Fungsi untuk mengubah angka menjadi teks dalam bahasa Indonesia
function be_calculated_in_indonesia($number)
{
    $number = abs($number);
    $read = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $be_calculated = "";

    if ($number < 12) {
        $be_calculated = " " . $read[$number];
    } else if ($number < 20) {
        $be_calculated = be_calculated_in_indonesia($number - 10) . " belas";
    } else if ($number < 100) {
        $be_calculated = be_calculated_in_indonesia($number / 10) . " puluh" . be_calculated_in_indonesia($number % 10);
    } else if ($number < 200) {
        $be_calculated = " seratus" . be_calculated_in_indonesia($number - 100);
    } else if ($number < 1000) {
        $be_calculated = be_calculated_in_indonesia($number / 100) . " ratus" . be_calculated_in_indonesia($number % 100);
    } else if ($number < 2000) {
        $be_calculated = " seribu" . be_calculated_in_indonesia($number - 1000);
    } else if ($number < 1000000) {
        $be_calculated = be_calculated_in_indonesia($number / 1000) . " ribu" . be_calculated_in_indonesia($number % 1000);
    } else if ($number < 1000000000) {
        $be_calculated = be_calculated_in_indonesia($number / 1000000) . " juta" . be_calculated_in_indonesia($number % 1000000);
    }


    return $be_calculated;
}

// Fungsi untuk mengubah format tanggal menjadi format tanggal Indonesia
function indonesia_date($date, $show_day = true)
{
    $day_name = array(
        "Minggu",
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jum\'at",
        "Sabtu"
    );
    $month_name = array(
        1 =>
            "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
    );

    $year = substr($date, 0, 4);
    $month = $month_name[(int) substr($date, 5, 2)];
    $dates = substr($date, 8, 2);
    $text = "";

    if ($show_day) {
        $order_day = date("w", mktime(0, 0, 0, substr($date, 5, 2), $dates, $year));
        $day = $day_name[$order_day];
        $text .= "$day, $dates $month $year";
    } else {
        $text .= "$dates $month $year";
    }

    return $text;
}