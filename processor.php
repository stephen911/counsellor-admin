<?php

// require '../loader/autoloader.php';
require 'functions.php';
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'update':
            extract($_POST);
            // extract($_POST);

            updateuser($id, $name, $email, $tdate, $contact, $gender, $wnumber, $enumber, $address, $occupation, $mstatus, $region, $nationality, $edulevel, $area, $membership, $challenge, $color, $size, $school, $programme, $year);

            break;

        case 'cfuser':
            extract($_POST);
            // extract($_POST);
            confirmuser($id, $confirmation);


            break;

        case 'ticket':
            extract($_POST);
            // extract($_POST);
            confirmuser($id, $confirmation);


            break;

            // case 'enrolluser':
            //     extract($_POST);
            //     // extract($_POST);
            //     enrollmembers($id, $enroll);


            //     break;      

        case 'login':
            extract($_POST);
            login($email, $password);
            break;

        case 'register':
            extract($_POST);
            if ($oname == '') {
                $name = $title . ' ' . $fname . ' ' . $lname;
            } else {
                $name = $title . ' ' . $fname . ' ' . $oname . ' ' . $lname;
            }
            if ($password != $repass) {
                echo 'Password do not match';
            } elseif ($fname == '' || $lname == '') {
                echo ' All field must be filled';
            } else {
                register($name, $title, $email, $tdate, $contact, $gender, $wnumber, $enumber, $address, $occupation, $mstatus, $region, $nationality, $edulevel, $area, $challenge, $color, $size, $student, $school, $programme, $year, $heard, $password);
            }

            break;

        case 'changepass':

            extract($_POST);
            if ($newpass != $repass) {
                echo 'Password do not match';
            } else {
                changepass($id, $password, $newpass);
            }
            break;

        case 'attend':
            extract($_POST);
            attend($id);
            break;

        case 'pay':
            extract($_POST);
            pay($id, $membership);
            break;

        case 'payrenewal':
            extract($_POST);
            payrenewal($id);
            break;

        case 'dele':
            extract($_POST);
            dele($id);
            break;

        default:

            break;
    }
}
