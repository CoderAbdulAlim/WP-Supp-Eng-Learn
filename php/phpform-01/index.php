<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <div class="page-body">
        <div class="page-body-wrapper">
            <div class="registration-form">
                <?php require_once 'form-request.php' ?>
                <h1>Registration Form</h1>
                <div class="registration-form-wrapper">
                    <form action="" method="POST">
                        <!-- user name -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="username">User Name</label></div>
                            <div><input class="regi-form-input" type="text" id="username" name="username" value="<?php  ?>"></div>
                        </div>
                        <!-- date of birth -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="datebirth">Date of Birth</label></div>
                            <div><input class="regi-form-input" type="text" id="datebirth" name="datebirth" value="<?php  ?>"></div>
                        </div>
                        <!-- work start time -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="workstarttime">Work Start Time</label></div>
                            <div><input class="regi-form-input" type="text" id="workstarttime" name="workstarttime" value="<?php  ?>"></div>
                        </div>
                        <!-- divsion name -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="divisionname">Division Name</label></div>
                            <div>
                                <select class="regi-form-select" name="divisionname" id="divisionname">
                                    <option value=""></option>
                                    <option value="dhaka" <?php  ?> >Dhaka</option>
                                    <option value="chittagong" <?php  ?> >Chittagong</option>
                                    <option value="barisal" <?php  ?> >Barisal</option>
                                    <option value="khulna" <?php  ?> >Khulna</option>
                                    <option value="rajshahi" <?php  ?> >Rajshahi</option>
                                    <option value="sylhet" <?php  ?> >Sylhet</option>
                                    <option value="rongpur" <?php  ?> >Rongpur</option>
                                    <option value="mymensing" <?php  ?> >Mymensing</option>
                                </select>
                            </div>
                        </div>
                        <!-- skill name -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="skillname">Skill Name</label></div>
                            <div>
                                <select class="regi-form-select" name="skillname[]" id="skillname" multiple>
                                    <option value=""></option>
                                    <option value="HTML">HTML</option>
                                    <option value="CSS">CSS</option>
                                    <option value="JavaScript">JavaScript</option>
                                    <option value="PHP">PHP</option>
                                    <option value="BootStrap">BootStrap</option>
                                    <option value="Tailwind">Tailwind</option>
                                    <option value="Laravel">Laravel</option>
                                    <option value="Python">Python</option>
                                </select>
                            </div>
                        </div>
                        <!-- registration cause -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="what2do">What to do</label></div>
                            <div>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" name="what2do[]" id="what2do1" value="Learn">
                                    <label for="what2do1">For Learn Only</label>
                                </div>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" name="what2do[]" id="what2do2" value="Practice">
                                    <label for="what2do2">Self Practice</label>
                                </div>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" name="what2do[]" id="what2do3" value="Improve">
                                    <label for="what2do3">Improve Basic to Advance</label>
                                </div>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" name="what2do[]" id="what2do4" value="Job">
                                    <label for="what2do4">Hunting Job</label>
                                </div>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" name="what2do[]" id="what2do5" value="Freelancing">
                                    <label for="what2do5">Freelancing</label>
                                </div>
                            </div>
                        </div>
                        <div class="regi-form-row">
                            <div class="form-label"><label for="email">Email</label></div>
                            <div><input class="regi-form-input" type="email" id="email" name="email" value="<?php  ?>"></div>
                        </div>
                        <div class="regi-form-row">
                            <div class="form-label"><label for="aboutmyself">About your self</label></div>
                            <div><textarea class="regi-form-input" name="aboutmyself" id="aboutmyself"><?php  ?></textarea></div>
                        </div>
                        <div class="regi-form-row">
                            <div class="form-label"><label for="gender">Gender</label></div>
                            <div>
                                <input class="regi-form-radio" type="radio" name="gender" id="gender1" value="Male">
                                <label for="gender1">Male</label>
                                <input class="regi-form-radio" type="radio" name="gender" id="gender2" value="Female">
                                <label for="gender2">Female</label>
                            </div>
                        </div>
                        <div class="regi-form-row">
                            <div><input class="regi-form-checkbox" type="checkbox" id="myagree" name="myagree" value="Yes"></div>
                            <div><label for="myagree"></label>I read the all of <a href="#">condition</a>. And I agree with all of them.</div>
                        </div>
                        <div class="regi-form-row">
                            <div class="form-label"></div>
                            <div>
                                <button class="regi-form-button" type="submit">Apply for Regi</button>
                                <button class="regi-form-button" type="reset">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>