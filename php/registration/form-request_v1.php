<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = isset($_POST['username']);
    $datebirth = isset($_POST['datebirth']);
    $workstarttime = isset($_POST['workstarttime']);
    $divisionname = isset($_POST['divisionname']);
    $skillname = isset($_POST['skillname']);
    $causefor = isset($_POST['causefor']);
    $email = isset($_POST['email']);
    $aboutmyself = isset($_POST['aboutmyself']);
    $gender = isset($_POST['gender']);
    $myagree = isset($_POST['myagree']);

    echo '<div>';
    echo '<ul>';
    echo '<li> User Name : ' . $username . '</li>';
    echo '<li> Date of birth : ' . $datebirth . '</li>';
    echo '<li> Work start time : ' . $workstarttime . '</li>';
    echo '<li> Self Division name : ' . $divisionname . '</li>';
    echo '<li> Skill Name : ' . $skillname . '</li>';
    echo '<li> Regi cause for : ' . $causefor . '</li>';
    echo '<li> User email : ' . $email . '</li>';
    echo '<li> User myself : ' . $aboutmyself . '</li>';
    echo '<li> Gender : ' . $gender . '</li>';
    echo '<li> Agree Response : ' . $myagree . '</li>';
    echo '</ul>';
    echo '</div>';
}
