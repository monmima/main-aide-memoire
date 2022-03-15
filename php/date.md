# Getting the date and time

Day of the month

    echo date("d"); // day

Month of the year

    echo date("m"); // month

Year

    echo date("Y"); // year

Day of the week

    echo date("l"); // day of the week

Year, month and day in 0000/00/00 format

    echo date("Y/m/d");

Year, month and day in 0000-00-00 format

    echo date("Y-m-d");

Hour, no minutes

    echo date("h"); // hour

Minutes

    echo date("i"); // minutes

Seconds

    echo date("s"); // seconds

AM or PM

    // echo date("a"); // AM or PM

Time of the day with default time zone

    echo date("h:i:sa");

Time of the day with New York time zone

    date_default_timezone_set("America/New_York");
    echo date("h:i:sa");

Creating a Unix timestamp.

The "Unix timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified."

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    echo $timestamp; // 368979294

Turning a timestamp to a readable date.

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    echo date("Y-m-d h:i:sa", $timestamp);

Turning a string to a timestamp

    $timestamp2 = strtotime("7:00pm March 22 2016");
    echo $timestamp2;

Turning a string to a readable timestamp

    $timestamp2 = strtotime("7:00pm March 22 2016");
    echo date("Y-m-d h:i:sa", $timestamp2);

Being much more vague with <code>strtotime()</code> and getting a timestamp all the same

    $timestamp3 = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $timestamp3);

Getting the date for next Sunday with <code>strtotime()</code>

    $timestamp4 = strtotime("next Sunday");
    echo date("Y-m-d h:i:sa", $timestamp4);

Getting the date for two months from now

    $timestamp5 = strtotime("+2 Months");
    echo date("Y-m-d h:i:sa", $timestamp5);