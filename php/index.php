<?php
    // https://www.youtube.com/watch?v=EHfr-edosmA

    // echo date("d"); // day
    // echo date("m"); // month
    // echo date("Y"); // year
    // echo date("l"); // day of the week

    // echo date("Y/m/d");
    // echo date("Y-m-d");

    // echo date("h"); // hour
    // echo date("i"); // minutes
    // echo date("s"); // seconds
    // echo date("a"); // AM or PM

    // default time zone
    // echo date("h:i:sa");

    // set time zone

    // date_default_timezone_set("America/New_York");
    // echo date("h:i:sa");

    /**
     * Unix timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
     */
    $timestamp = mktime(10, 14, 54, 9, 10, 1981);

    // echo $timestamp;

    // echo date("Y-m-d h:i:sa", $timestamp);

    # STRING TO TIME

    // $timestamp2 = strtotime("7:00pm March 22 2016");

    // echo $timestamp2;
    // echo date("Y-m-d h:i:sa", $timestamp2);

    // $timestamp3 = strtotime("tomorrow");
    // echo date("Y-m-d h:i:sa", $timestamp3);

    // $timestamp4 = strtotime("next Sunday");
    // echo date("Y-m-d h:i:sa", $timestamp4);

    $timestamp5 = strtotime("+2 Months");
    echo date("Y-m-d h:i:sa", $timestamp5);
?>