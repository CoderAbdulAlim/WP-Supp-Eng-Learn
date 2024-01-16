<?php

$studentName = '';
$studentEmail = '';
$studentBirthDate = '';
$studentEduLevel = '';
$studentClassTime = '';
$studentMission = [];
$leisureTime = [];
$studentSelf = '';
$studentGender = '';
$studentAgree = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $studentName = isset($_POST['studentName']) ? htmlspecialchars($_POST['studentName']) : '';
    $studentEmail = isset($_POST['studentEmail']) ? htmlspecialchars($_POST['studentEmail']) : '';
    $studentBirthDate = isset($_POST['studentBirthDate']) ? htmlspecialchars($_POST['studentBirthDate']) : '';
    $studentEduLevel = isset($_POST['studentEduLevel']) ? htmlspecialchars($_POST['studentEduLevel']) : '';
    $studentClassTime = isset($_POST['studentClassTime']) ? htmlspecialchars($_POST['studentClassTime']) : '';
    $studentMission = isset($_POST['studentMission']) ? $_POST['studentMission'] : [];
    $leisureTime = isset($_POST['leisureTime']) ? $_POST['leisureTime'] : [];
    $studentSelf = isset($_POST['studentSelf']) ? htmlspecialchars($_POST['studentSelf']) : '';
    $studentGender = isset($_POST['studentGender']) ? htmlspecialchars($_POST['studentGender']) : '';
    $studentAgree = isset($_POST['studentAgree']) ? htmlspecialchars($_POST['studentAgree']) : '';

    // for print
    echo '<div><ul>';
    echo '<li> Student Name : '. $studentName . '</li>';
    echo '<li> Student Email : '. $studentEmail . '</li>';
    echo '<li> Date of Birth : '. $studentBirthDate . '</li>';
    echo '<li> Education Level : '. $studentEduLevel . '</li>';
    echo '<li> Class Shift Time : '. $studentClassTime . '</li>';
    echo '<li> Learning Mission : '. implode(', ', $studentMission) . '</li>';
    echo '<li> Student Leisure Time : '. implode(', ', $leisureTime) . '</li>';
    echo '<li> Student Myself : '. $studentSelf . '</li>';
    echo '<li> Student Gender : '. $studentGender . '</li>';
    echo '<li> Student Agree : '. $studentAgree . '</li>';
    echo '</ul></div>';
}
