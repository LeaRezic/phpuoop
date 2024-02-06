<?php

include("Time.php");
include("HrTime.php");

// u main samo instanciramo i ispišemo razlomljeno hr time
$hrTime = new HRTime();
$hrTime->Split();
