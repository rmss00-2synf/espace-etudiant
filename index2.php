<?php
require "includes/header.php";
if (isset($_GET['val'])) {
    $val = $_GET['val'];

    if ($val == 1) {
        include "includes/resume.php";
    }
    else if ($val == 2) {
        include "includes/cv.php";
    }
    else if ($val == 3) {
        include "includes/blog.php";
    }
    else if ($val == 4) {
        include "includes/setting.php";
    }
    else include "includes/dashboard.php";
}
else include "includes/dashboard.php";
// include "includes/dashboard.php";
// include "includes/resume.php";
// include "includes/cv.php";
// include "includes/blog.php";
// include "includes/setting.php";
include "includes/footer.php";

