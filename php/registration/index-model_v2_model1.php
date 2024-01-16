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
                <h1>Registration Form</h1>
                <div class="registration-form-wrapper">
                    <form action="" method="POST">
                        <!-- user name -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="username">User Name</label></div>
                            <div><input class="regi-form-input" type="text" id="username" name="username"></div>
                        </div>
                        <!-- date of birth -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="datebirth">Date of Birth</label></div>
                            <div><input class="regi-form-input" type="text" id="datebirth" name="datebirth"></div>
                        </div>
                        <!-- work start time -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="workstarttime">Work Start Time</label></div>
                            <div><input class="regi-form-input" type="text" id="workstarttime" name="workstarttime"></div>
                        </div>
                        <!-- divsion name -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="divisionname">Division Name</label></div>
                            <div>
                                <select class="regi-form-select" name="divisionname" id="divisionname">
                                    <option value="dhaka">Dhaka</option>
                                    <option value="chittagong">Chittagong</option>
                                    <option value="barisal">Barisal</option>
                                    <option value="khulna">Khulna</option>
                                    <option value="rajshahi">Rajshahi</option>
                                    <option value="sylhet">Sylhet</option>
                                    <option value="rongpur">Rongpur</option>
                                    <option value="mymensing">Mymensing</option>
                                </select>
                            </div>
                        </div>
                        <!-- skill name -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="skillname">Skill Name</label></div>
                            <div>
                                <select class="regi-form-select" name="skillname" id="skillname" multiple>
                                    <option value=""></option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScript</option>
                                    <option value="php">PHP</option>
                                    <option value="bootstrap">BootStrap</option>
                                    <option value="tailwind">Tailwind</option>
                                    <option value="laravel">Laravel</option>
                                    <option value="python">Python</option>
                                </select>
                            </div>
                        </div>
                        <!-- registration cause -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="causefor">Cause for</label></div>
                            <div>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" name="causefor" id="checkbox1">
                                    <label for="causefor1">Cause for One</label>
                                </div>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" name="causefor" id="checkbox2">
                                    <label for="causefor2">Cause for Two</label>
                                </div>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" name="causefor" id="checkbox3">
                                    <label for="causefor3">Cause for Three</label>
                                </div>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" name="causefor" id="checkbox4">
                                    <label for="causefor4">Cause for Four</label>
                                </div>
                                <div>
                                    <input class="regi-form-checkbox" type="checkbox" name="causefor" id="checkbox5">
                                    <label for="causefor5">Cause for Five</label>
                                </div>
                            </div>
                        </div>
                        <div class="regi-form-row">
                            <div class="form-label"><label for="email">Email</label></div>
                            <div><input class="regi-form-input" type="email" id="email" name="email"></div>
                        </div>
                        <div class="regi-form-row">
                            <div class="form-label"><label for="aboutmyself">About your self</label></div>
                            <div><textarea class="regi-form-input" name="aboutmyself" id="aboutmyself"></textarea></div>
                        </div>
                        <div class="regi-form-row">
                            <div class="form-label"><label for="gender">Gender</label></div>
                            <div>
                                <input class="regi-form-radio" type="radio" name="gender" id="gender1">
                                <label for="gender1">Male</label>
                                <input class="regi-form-radio" type="radio" name="gender" id="gender2">
                                <label for="gender2">Female</label>
                            </div>
                        </div>
                        <div class="regi-form-row">
                            <div><input class="regi-form-checkbox" type="checkbox" id="myagree" name="myagree"></div>
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