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
                                <label for="studentName">Student Name</label>
                            </div>
                            <div class="form-input">
                                <input class="regi-form-text" type="text" id="studentName" name="studentName" value="<?php echo $studentName ?>">
                            </div>
                        </div>
                        <!-- Student Email -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="studentEmail">Student Email</label>
                            </div>
                            <div class="form-input">
                                <input class="regi-form-text" type="text" id="studentEmail" name="studentEmail" value="<?php echo $studentEmail ?>">
                            </div>
                        </div>
                        <!-- Student Birth of Date -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="studentBirthDate">Date of Birth</label>
                            </div>
                            <div class="form-input">
                                <input class="regi-form-text" type="text" id="studentBirthDate" name="studentBirthDate" value="<?php echo $studentBirthDate ?>">
                            </div>
                        </div>
                        <!-- Student Education Level -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="studentEduLevel">Education Qualification</label>
                            </div>
                            <div class="form-input">
                                <select class="regi-form-select" name="studentEduLevel" id="studentEduLevel">
                                    <option value=""></option>
                                    <option value="Class Five" <?php echo $studentEduLevel == 'Class Five' ? 'selected' : '' ?>>Class Five</option>
                                    <option value="Class Eight" <?php echo $studentEduLevel == 'Class Eight' ? 'selected' : '' ?>>Class Eight</option>
                                    <option value="Class Ten" <?php echo $studentEduLevel == 'Class Ten' ? 'selected' : '' ?>>Class Ten</option>
                                    <option value="SSC" <?php echo $studentEduLevel == 'SSC' ? 'selected' : '' ?>>SSC</option>
                                    <option value="HSC" <?php echo $studentEduLevel == 'HSC' ? 'selected' : '' ?>>HSC</option>
                                    <option value="Hons" <?php echo $studentEduLevel == 'Hons' ? 'selected' : '' ?>>Hons</option>
                                    <option value="Masters" <?php echo $studentEduLevel == 'Masters' ? 'selected' : '' ?>>Masters</option>
                                </select>
                            </div>
                        </div>
                        <!-- Student Class Shift -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="studentClassTime">Class Time</label>
                            </div>
                            <div class="form-input">
                                <input class="regi-form-text" type="text" id="studentClassTime" name="studentClassTime" value="<?php echo $studentClassTime ?>">
                            </div>
                        </div>
                        <!-- Student Learning Mission -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="studentMission">Learning Mission</label>
                            </div>
                            <div class="form-input">
                                <select class="regi-form-select" name="studentMission[]" id="studentMission" multiple>
                                    <option value=""></option>
                                    <option value="Learn HTML" <?php echo in_array('Learn HTML', $studentMission) ? 'selected' : '' ?> >Learn HTML</option>
                                    <option value="Learn CSS" <?php echo in_array('Learn CSS', $studentMission) ? 'selected' : '' ?> >Learn CSS</option>
                                    <option value="Learn JavaScript" <?php echo in_array('Learn JavaScript', $studentMission) ? 'selected' : '' ?>>Learn JavaScript</option>
                                    <option value="Learn PHP" <?php echo in_array('Learn PHP', $studentMission) ? 'selected' : '' ?> >Learn PHP</option>
                                    <option value="Learn BootStrap" <?php echo in_array('Learn BootStrap', $studentMission) ? 'selected' : '' ?> >Learn BootStrap</option>
                                    <option value="Learn Tailwind" <?php echo in_array('Learn Tailwind', $studentMission) ? 'selected' : '' ?> >Learn Tailwind</option>
                                    <option value="Learn Laravel" <?php echo in_array('Learn Laravel', $studentMission) ? 'selected' : '' ?> >Learn Laravel</option>
                                    <option value="Learn MySQL" <?php echo in_array('Learn MySQL', $studentMission) ? 'selected' : '' ?> >Learn MySQL</option>
                                </select>
                            </div>
                        </div>
                        <!-- Student Match Checkbox -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="leisureTime">How to pass your leisure time.</label>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" <?php echo in_array('Book', $leisureTime) ? 'checked' : '' ?>  name="leisureTime[]" id="leisureTime1" value="Book">
                                    <label for="leisureTime1">Reading Book</label>
                                </div>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" <?php echo in_array('Newspaper', $leisureTime) ? 'checked' : '' ?>  name="leisureTime[]" id="leisureTime2" value="Newspaper">
                                    <label for="leisureTime2">Reading Newspaper</label>
                                </div>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" <?php echo in_array('Movie', $leisureTime) ? 'checked' : '' ?>  name="leisureTime[]" id="leisureTime3" value="Movie">
                                    <label for="leisureTime3">Watching Movie</label>
                                </div>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" <?php echo in_array('Travel', $leisureTime) ? 'checked' : '' ?>  name="leisureTime[]" id="leisureTime4" value="Travel">
                                    <label for="leisureTime4">Travel</label>
                                </div>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" <?php echo in_array('Photography', $leisureTime) ? 'checked' : '' ?>  name="leisureTime[]" id="leisureTime5" value="Photography">
                                    <label for="leisureTime5">Photography</label>
                                </div>
                            </div>
                            <div class="form-input">
                            </div>
                        </div>
                        <!-- Student Self About -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="studentSelf">Write about yourself</label>
                            </div>
                            <div class="form-input">
                                <textarea class="regi-form-text" name="studentSelf" id="studentSelf"><?php echo $studentSelf ?></textarea>
                            </div>
                        </div>
                        <!-- Student Gender Radio Button -->
                        <div class="regi-form-row">
                            <div class="form-label">
                                <label for="studentGender">Student Gender</label>
                            </div>
                            <div class="form-input">
                                <input class="regi-form-radio" type="radio" name="studentGender" <?php echo $studentGender == 'Male' ? 'checked' : '' ?> id="studentGenderMale" value="Male">
                                <label for="studentGenderMale">Male</label>
                                <input class="regi-form-radio" type="radio" name="studentGender" <?php echo $studentGender == 'Female' ? 'checked' : '' ?> id="gstudentGenderFemale" value="Female">
                                <label for="gstudentGenderFemale">Female</label>
                            </div>
                        </div>
                        <!-- Student Agreement -->
                        <div class="regi-form-row">
                            <input class="regi-form-checkbox" type="checkbox" name="studentAgree" <?php echo $studentAgree == 'on' ? 'checked' : '' ?> id="studentAgree">
                            <label for="studentAgree">I will follow all the rules and regulations of the organization.</label>
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