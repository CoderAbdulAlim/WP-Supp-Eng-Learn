<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Handlee&display=swap');

		body {
			margin-top: 0px;
			font-size: large;
			font-weight: 400;
			font-family: 'Handlee', cursive;
			color: white;
		}

		.page-body{
			width: 940px;
			background: rgb(64, 64, 64);
			padding: 20px 20px 20px 50px;
			margin: auto;

		}

		.page-body-wrapper{
			width: 1380px;

		}

		h1, h2, h3, h4, h5, h6 {
			text-align: center;
		}

		.registration-form{
			width: 600px;
		}

		.regi-form-row{
			display: flex;
			padding: 10px 10px;
		}

		.form-label{
			width: 150px;
		}

		.regi-form-input,
		.regi-form-textarea,
		.regi-form-select,
		.regi-form-checkbox,
		.regi-form-radio,
		.regi-form-button {
			border: 1px solid;
			border-radius: 5px;
			padding: 10px;
			font-family: 'Handlee', cursive;
		}

		.regi-form-input:hover,
		.regi-form-textarea:hover,
		.regi-form-select:hover,
		.regi-form-button:hover {
			background-color: green;
			color: white;
		}

		.regi-form-input{
			width: 220px;
		}

		.regi-form-select{
			width: 240px;
		}

		.regi-form-checkbox{
			width: 20px;
			height: 20px;
		}

		.regi-form-radio{
			width: 20px;
			height: 20px;
		}

		.regi-form-textarea{
			width: 220px;
		}

		.regi-form-button:hover{
			background: green;
			color: white;
		}
	</style>
</head>

<body>
    <div class="page-body">
        <div class="page-body-wrapper">
            <div class="registration-form">
                <?php

					if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						$userName = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
						$birthDate = isset($_POST['datebirth']) ? htmlspecialchars($_POST['datebirth']) : '';
						$workStartTime = isset($_POST['workstarttime']) ? htmlspecialchars($_POST['workstarttime']) : '';
						$divisionName = isset($_POST['divisionname']) ? htmlspecialchars($_POST['divisionname']) : '';
						$skillName = isset($_POST['skillname']) ? implode(', ', $_POST['skillname']) : '';
						$what2Do = isset($_POST['what2do']) ? implode(', ', $_POST['what2do']) : '';
						$userEmail = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
						$aboutmySelf = isset($_POST['aboutmyself']) ? htmlspecialchars($_POST['aboutmyself']) : '';
						$userGender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
						$myAgree = isset($_POST['myagree']) ? 'Checked' : 'Not Checked';

						echo '<div>';
						echo '<ul>';
						echo '<li> User Name : ' . $userName . '</li>';
						echo '<li> Date of birth : ' . $birthDate . '</li>';
						echo '<li> Work start time : ' . $workStartTime . '</li>';
						echo '<li> Self Division name : ' . $divisionName . '</li>';
						echo '<li> Skill Name : ' . $skillName . '</li>';
						echo '<li> What to do : ' . $what2Do . '</li>';
						echo '<li> User email : ' . $userEmail . '</li>';
						echo '<li> User myself : ' . $aboutmySelf . '</li>';
						echo '<li> Gender : ' . $userGender . '</li>';
						echo '<li> Agree Response : ' . $myAgree . '</li>';
						echo '</ul>';
						echo '</div>';
					}

				?>
                <h1>Registration Form</h1>
                <div class="registration-form-wrapper">
                    <form action="" method="POST">
                        <!-- user name -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="username">User Name</label></div>
                            <div><input class="regi-form-input" type="text" id="username" name="username" value="<?php echo $userName; ?>"></div>
                        </div>
                        <!-- date of birth -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="datebirth">Date of Birth</label></div>
                            <div><input class="regi-form-input" type="text" id="datebirth" name="datebirth" value="<?php echo $birthDate; ?>"></div>
                        </div>
                        <!-- work start time -->
                        <div class="regi-form-row">
                            <div class="form-label"><label for="workstarttime">Work Start Time</label></div>
                            <div><input class="regi-form-input" type="text" id="workstarttime" name="workstarttime" value="<?php echo $workStartTime; ?>"></div>
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
                            <div><input class="regi-form-input" type="email" id="email" name="email" value="<?php echo $userEmail; ?>"></div>
                        </div>
                        <div class="regi-form-row">
                            <div class="form-label"><label for="aboutmyself">About your self</label></div>
                            <div><textarea class="regi-form-input" name="aboutmyself" id="aboutmyself"><?php echo $aboutmySelf; ?></textarea></div>
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
                            <div><input class="regi-form-checkbox" type="checkbox" id="myagree" name="myagree" <?php echo $myAgree; ?> value="Yes"></div>
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