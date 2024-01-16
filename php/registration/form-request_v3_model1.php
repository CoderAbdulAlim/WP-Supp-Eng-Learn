<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
    $datebirth = isset($_POST['datebirth']) ? htmlspecialchars($_POST['datebirth']) : '';
    $workstarttime = isset($_POST['workstarttime']) ? htmlspecialchars($_POST['workstarttime']) : '';
    $divisionname = isset($_POST['divisionname']) ? htmlspecialchars($_POST['divisionname']) : '';
    $skillname = isset($_POST['skillname']) ? implode(', ', $_POST['skillname']) : '';
    $what2do = isset($_POST['what2do']) ? implode(', ', $_POST['what2do']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $aboutmyself = isset($_POST['aboutmyself']) ? htmlspecialchars($_POST['aboutmyself']) : '';
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
    $myagree = isset($_POST['myagree']) ? 'Checked' : 'Not Checked';

    echo '<div>';
    echo '<ul>';
    echo '<li> User Name : ' . $username . '</li>';
    echo '<li> Date of birth : ' . $datebirth . '</li>';
    echo '<li> Work start time : ' . $workstarttime . '</li>';
    echo '<li> Self Division name : ' . $divisionname . '</li>';
    echo '<li> Skill Name : ' . $skillname . '</li>';
    echo '<li> Regi cause for : ' . $what2do . '</li>';
    echo '<li> User email : ' . $email . '</li>';
    echo '<li> User myself : ' . $aboutmyself . '</li>';
    echo '<li> Gender : ' . $gender . '</li>';
    echo '<li> Agree Response : ' . $myagree . '</li>';
    echo '</ul>';
    echo '</div>';
}
