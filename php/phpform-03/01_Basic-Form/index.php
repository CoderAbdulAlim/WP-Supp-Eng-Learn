<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Regi Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="whole-page">
        <div class="whole-page-wrap">
            <div class="regi-from">
                <h1>PHP Regi Form</h1>
                <div class="regi-form wrap">
                    <?php require_once 'request.php' ?>
                    <form action="" method="POST">
                        <!-- Student Name -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="student-name">Student Name</label>
                            </div>
                            <div class="form-input">
                                <input class="regi-form-text" type="text" id="student-name" name="student-name" value=" <?php echo 'student-name'; ?> ">
                            </div>
                        </div>
                        <!-- Student Email -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="student-email">Student Email</label>
                            </div>
                            <div class="form-input">
                                <input class="regi-form-text" type="text" id="student-email" name="student-email" value=" <?php echo 'student-email'; ?> ">
                            </div>
                        </div>
                        <!-- Student Birth of Date -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="student-birth-date">Date of Birth</label>
                            </div>
                            <div class="form-input">
                                <input class="regi-form-text" type="text" id="student-birth-date" name="student-birth-date" value=" <?php echo 'student-birth-date'; ?> ">
                            </div>
                        </div>
                        <!-- Student Education Level -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="student-education">Education Qualification</label>
                            </div>
                            <div class="form-input">
                                <select class="regi-form-select" name="student-education" id="student-education">
                                    <option value=""></option>
                                    <option value="Class Five">Class Five</option>
                                    <option value="Class Eight">Class Eight</option>
                                    <option value="Class Ten">Class Ten</option>
                                    <option value="SSC">SSC</option>
                                    <option value="HSC">HSC</option>
                                    <option value="Hons">Hons</option>
                                    <option value="Masters">Masters</option>
                                </select>
                            </div>
                        </div>
                        <!-- Student Class Shift -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="student-class-time">Class Time</label>
                            </div>
                            <div class="form-input">
                                <input class="regi-form-text" type="text" id="student-class-time" name="student-class-time" value=" <?php echo 'student-class-time'; ?> ">
                            </div>
                        </div>
                        <!-- Student Learning Mission -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="student-mission">Learning Mission</label>
                            </div>
                            <div class="form-input">
                                <select class="regi-form-select" name="student-mission" id="student-mission" multiple>
                                    <option value=""></option>
                                    <option value="Learn HTML">Learn HTML</option>
                                    <option value="Learn CSS">Learn CSS</option>
                                    <option value="Learn JavaScript">Learn JavaScript</option>
                                    <option value="Learn PHP">Learn PHP</option>
                                    <option value="Learn BootStrap">Learn BootStrap</option>
                                    <option value="Learn Tailwind">Learn Tailwind</option>
                                    <option value="Learn Laravel">Learn Laravel</option>
                                    <option value="Learn MySQL">Learn MySQL</option>
                                </select>
                            </div>
                        </div>
                        <!-- Student Match Checkbox -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="student-match">Check what will be best match with you.</label>
                            </div>
                            <div class="form-input">
                            </div>
                        </div>
                        <!-- Student Self About -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="student-self">Write about yourself</label>
                            </div>
                            <div class="form-input">
                                <textarea class="regi-form-text" name="student-self" id="student-self"><?php echo 'student-self' ?></textarea>
                            </div>
                        </div>
                        <!-- Student Gender Radio Button -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="student-gender">Student Gender</label>
                            </div>
                            <div class="form-input">
                                <input class="regi-form-radio" type="radio" name="gender" id="gender-male">
                                <label for="gender-male">Male</label>
                                <input class="regi-form-radio" type="radio" name="gender" id="gender-female">
                                <label for="gender-female">Female</label>
                            </div>
                        </div>
                        <!-- Student Agreement -->
                        <div class="regi-form-row">
                            <input class="regi-form-checkbox" type="checkbox" name="student-agree" id="student-agree">
                                <label for="student-agree">I will follow all the rules and regulations of the organization.</label>
                        </div>
                        <!-- Registration Form Button -->
                        <div class="regi-form-row">
                            <button class="regi-form-button" id="regi-submit-but" type="submit">Apply for Regi</button>
                            <button class="regi-form-button" id="regi-reset-but" type="reset">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>