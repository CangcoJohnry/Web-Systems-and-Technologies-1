<?php
$name = "Johnry Cangco";
$title = "Web Developer";
$email = "23ur0562@psu.edu.ph";
$phone = "+63 927 963 4827";
$address = "Ungab, Cuyapo, Nueva Ecija";
$linkedin = "linkedin.com/in/johnrycangco";
$gitlab = "gitlab.com/johnrycangco";
$dob = "January 31, 2005";
$gender = "Male";
$nationality = "Filipino";

$summary = "Passionate web developer skilled in PHP, HTML, and CSS, always eager to learn more and take on new coding challenges.";
$experience = "N/A";

$education_primary = "Dr. A Ongsiako Sr. Elementary School";
$education_secondary = "OLRA College Foundation INC";
$education_tertiary = "Pangsinan State University";

$skill1 = "PHP";
$skill2 = "HTML & CSS";
$skill3 = "Basketball";
?>

<!DOCTYPE html>
<html>

<head>

    <title>Case Study 1 - <?php echo $name; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0; padding: 0;
            background: #f7f9fc;
            color: #333;
            font-size: 16px;
        }
        .container {
            width: 850px;
            margin: 40px auto;
            background: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
        }
        .header {
            display: flex;
            align-items: center;
            background: #333333;
            color: white;
            padding: 30px;
        }
        .profile-pic {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 25px;
        }
        .header-text h1 {
            margin: 0;
            font-size: 34px;
            font-weight: bold;
            color: white;
        }
        .header-text h3 {
            margin: 6px 0 0 0;
            font-weight: 400;
            font-size: 20px;
            color: white;
        }
        .info-grid {
            width: 100%;
            margin-top: 18px;
            font-size: 15px;
        }
        .info-grid td {
            padding: 4px 12px 4px 0;
            color: white;
            width: 50%;
        }
        .info-grid strong {
            color: white;
            font-weight: 600;
        }
        .content {
            padding: 35px 50px;
            line-height: 1.6;
        }
        h1 {
            color: #000000ff;
            border-bottom: 2px solid #ddd;
            padding-bottom: 3px;
            margin-top: 40px;
            font-size: 25px;
            letter-spacing: 0.5px;
        }
        p, li {
            margin: 8px 0;
        }
        ul {
            padding-left: 22px;
            margin: 12px 0;
        }
        .edu-entry {
            margin-bottom: 10px;
        }
    </style>

</head>

<body>

<div class="container">

    <div class="header">
        <img src="picture.jpg" alt="Profile Picture" class="profile-pic">

        <div class="header-text">

            <h1><?php echo $name; ?></h1>
            <h3><?php echo $title; ?></h3>

            <table class="info-grid">
                <tr>
                    <td><strong>Phone:</strong> <?php echo $phone; ?></td>
                    <td><strong>Address:</strong> <?php echo $address; ?></td>
                </tr>
                <tr>
                    <td><strong>Email:</strong> <?php echo $email; ?></td>
                    <td><strong>Date of Birth:</strong> <?php echo $dob; ?></td>
                </tr>
                <tr>
                    <td><strong>LinkedIn:</strong> <?php echo $linkedin; ?></td>
                    <td><strong>Gender:</strong> <?php echo $gender; ?></td>
                </tr>
                <tr>
                    <td><strong>GitLab:</strong> <?php echo $gitlab; ?></td>
                    <td><strong>Nationality:</strong> <?php echo $nationality; ?></td>
                </tr>
            </table>
            
        </div>

    </div>

    <div class="content">
        <h1>Profile</h1>
        <p><?php echo $summary; ?></p>

        <h1>Experience</h1>
        <p><?php echo $experience;?></p>

        <h1>Education</h1>
        <p class="edu-entry"><strong>Primary Education:</strong> <?php echo $education_primary; ?></p>
        <p class="edu-entry"><strong>Secondary Education:</strong> <?php echo $education_secondary; ?></p>
        <p class="edu-entry"><strong>Tertiary Education:</strong> <?php echo $education_tertiary; ?></p>

        <h1>Skills</h1>
        <ul>
            <li><?php echo $skill1; ?></li>
            <li><?php echo $skill2; ?></li>
            <li><?php echo $skill3; ?></li>
        </ul>
    </div>

</div>
</body>
</html>
