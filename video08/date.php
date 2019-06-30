<?php
  #DATE / TIME

  # Day
  echo date('d');
  echo '<br />';

  # Month
  echo date('m');
  echo '<br />';

  # Year
  echo date('Y');
  echo '<br />';

  # Day of the week
  echo date('l');
  echo '<br />';

  # Combined
  echo date('Y/m/d');
  echo '<br />';
  echo date('l, d.m.Y');
  echo '<br />';

  # Hour
  echo date('h');
  echo '<br />';

  # Minute
  echo date('i');
  echo '<br />';

  # Seconds
  echo date('s');
  echo '<br />';

  # AM or PM
  echo date('a');
  echo '<br />';

  # Combined
  echo date('h:i:sa');
  echo '<br />';

  # Set Time Zone
  date_default_timezone_set('Europe/Berlin');

  # Timestamp (hours, minutes, seconds, month, day, year)
  /*
    Unix timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
  */
  $timestamp = mktime(11, 23, 54, 1, 19, 1998);
  echo $timestamp;
  echo '<br />';
  echo date('d.m.Y h:i:sa', $timestamp);
  echo '<br />';

  $timestamp2 = strtotime('7:00pm March 22 2016');
  echo $timestamp2;
  echo '<br />';
  echo date('d.m.Y h:i:sa', $timestamp2);
  echo '<br />';

  $timestamp3 = strtotime('tomorrow');
  echo date('d.m.Y h:i:sa', $timestamp3);
  echo '<br />';

  $timestamp4 = strtotime('next Sunday');
  echo date('d.m.Y h:i:sa', $timestamp4);
  echo '<br />';

  $timestamp5 = strtotime('+2 Months');
  echo date('d.m.Y h:i:sa', $timestamp5);
  echo '<br />';
?>
