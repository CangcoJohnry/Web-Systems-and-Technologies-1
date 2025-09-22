<?php
// Handle file upload
$photoPath = "";
if(isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK){
    $photoTmp = $_FILES['photo']['tmp_name'];
    $photoName = basename($_FILES['photo']['name']);
    $uploadDir = "uploads/";
    if(!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
    $photoPath = $uploadDir . $photoName;
    move_uploaded_file($photoTmp, $photoPath);
}

// Collect all POST data
$fields = $_POST;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bio-Data Output</title>
<style>
body {
    font-family: Arial, sans-serif;
    font-size: 13px;
    margin: 30px;
    background: #fff;
}

h2 {
    text-align: center;
    font-size: 26px;
    font-weight: bold;
    margin-bottom: 15px;
    text-transform: uppercase;
}

.bio-container {
    max-width: 900px;
    margin: auto;
}

.section {
    margin-bottom: 8px;
}

.section-title {
    background: #000;
    color: #fff;
    padding: 3px 6px;
    font-weight: bold;
    font-size: 13px;
    text-transform: uppercase;
}

table {
    width: 100%;
    border-collapse: collapse;
}

td {
    padding: 2px 6px;
    vertical-align: top;
    font-size: 13px;
}

.line {
    display: inline-block;
    border-bottom: 1px solid #000;
    width: 100%;
    height: 14px;
    margin-top: 2px;
}

.photo {
    float: right;
    width: 140px;
    height: 140px;
    border: 1px solid #000;
    margin-top: -40px;
    margin-left: 10px;
    text-align: center;
    font-size: 12px;
    line-height: 140px;
}

.clearfix::after {
    content: "";
    display: table;
    clear: both;
}

.signature {
    margin-top: 60px;
    text-align: right;
    font-size: 13px;
}

.signature-line {
    border-top: 1px solid #000;
    width: 220px;
    margin-left: auto;
    margin-bottom: 4px;
}
</style>

</head>
<body>
<div class="bio-container">
    <h2>BIO-DATA</h2>

    <div class="section clearfix">
        <?php if($photoPath): ?>
            <img src="<?= $photoPath ?>" alt="Photo" class="photo">
        <?php else: ?>
            <div class="photo"></div>
        <?php endif; ?>
        <div class="section-title">PERSONAL DATA</div>
        <table>
            <tr>
                <td>Position Desired: <span class="line"><?= htmlspecialchars($fields['position'] ?? '') ?></span></td>
                <td>Date: <span class="line"><?= htmlspecialchars($fields['date'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>Name: <span class="line"><?= htmlspecialchars($fields['fullname'] ?? '') ?></span></td>
                <td>Gender: <span class="line"><?= htmlspecialchars($fields['gender'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>City Address: <span class="line"><?= htmlspecialchars($fields['city_address'] ?? '') ?></span></td>
                <td>Provincial Address: <span class="line"><?= htmlspecialchars($fields['prov_address'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>Telephone: <span class="line"><?= htmlspecialchars($fields['telephone'] ?? '') ?></span></td>
                <td>Cellphone: <span class="line"><?= htmlspecialchars($fields['cellphone'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td colspan="2">Email Address: <span class="line"><?= htmlspecialchars($fields['email'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>Date of Birth: <span class="line"><?= htmlspecialchars($fields['dob'] ?? '') ?></span></td>
                <td>Birth Place: <span class="line"><?= htmlspecialchars($fields['birthplace'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>Civil Status: <span class="line"><?= htmlspecialchars($fields['civil_status'] ?? '') ?></span></td>
                <td>Citizenship: <span class="line"><?= htmlspecialchars($fields['citizenship'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>Height: <span class="line"><?= htmlspecialchars($fields['height'] ?? '') ?></span></td>
                <td>Weight: <span class="line"><?= htmlspecialchars($fields['weight'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>Religion: <span class="line"><?= htmlspecialchars($fields['religion'] ?? '') ?></span></td>
                <td>Spouse: <span class="line"><?= htmlspecialchars($fields['spouse'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>Occupation: <span class="line"><?= htmlspecialchars($fields['spouse_occ'] ?? '') ?></span></td>
                <td>Name of Children: <span class="line"><?= htmlspecialchars($fields['children'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>Date of Birth: <span class="line"><?= htmlspecialchars($fields['children_dob'] ?? '') ?></span></td>
                <td>Father’s Name: <span class="line"><?= htmlspecialchars($fields['father'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>Occupation: <span class="line"><?= htmlspecialchars($fields['father_occ'] ?? '') ?></span></td>
                <td>Mother’s Name: <span class="line"><?= htmlspecialchars($fields['mother'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>Occupation: <span class="line"><?= htmlspecialchars($fields['mother_occ'] ?? '') ?></span></td>
                <td>Language/Dialect: <span class="line"><?= htmlspecialchars($fields['languages'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td colspan="2">Person to be contacted in case of emergency: <span class="line"><?= htmlspecialchars($fields['emergency'] ?? '') ?></span></td>
            </tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">EDUCATIONAL BACKGROUND</div>
        <table>
            <tr>
                <td>Elementary: <span class="line"><?= htmlspecialchars($fields['elementary'] ?? '') ?></span></td>
                <td>Year Graduated: <span class="line"><?= htmlspecialchars($fields['elem_year'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>High School: <span class="line"><?= htmlspecialchars($fields['highschool'] ?? '') ?></span></td>
                <td>Year Graduated: <span class="line"><?= htmlspecialchars($fields['hs_year'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>College: <span class="line"><?= htmlspecialchars($fields['college'] ?? '') ?></span></td>
                <td>Year Graduated: <span class="line"><?= htmlspecialchars($fields['college_year'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td colspan="2">Degree Received: <span class="line"><?= htmlspecialchars($fields['degree'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td colspan="2">Special Skills: <span class="line"><?= htmlspecialchars($fields['skills'] ?? '') ?></span></td>
            </tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">EMPLOYMENT RECORD</div>
        <table>
            <tr><td colspan="2">Company Name: <span class="line"><?= htmlspecialchars($fields['company1'] ?? '') ?></span></td></tr>
            <tr><td>Position: <span class="line"><?= htmlspecialchars($fields['position1'] ?? '') ?></span></td>
                <td>From: <span class="line"><?= htmlspecialchars($fields['from1'] ?? '') ?></span> To: <span class="line"><?= htmlspecialchars($fields['to1'] ?? '') ?></span></td></tr>
            <tr><td colspan="2">Company Name: <span class="line"><?= htmlspecialchars($fields['company2'] ?? '') ?></span></td></tr>
            <tr><td>Position: <span class="line"><?= htmlspecialchars($fields['position2'] ?? '') ?></span></td>
                <td>From: <span class="line"><?= htmlspecialchars($fields['from2'] ?? '') ?></span> To: <span class="line"><?= htmlspecialchars($fields['to2'] ?? '') ?></span></td></tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">CHARACTER REFERENCE</div>
        <table>
            <tr>
                <td>Name: <span class="line"><?= htmlspecialchars($fields['ref_name1'] ?? '') ?></span></td>
                <td>Company: <span class="line"><?= htmlspecialchars($fields['ref_company1'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>Position: <span class="line"><?= htmlspecialchars($fields['ref_pos1'] ?? '') ?></span></td>
                <td>Contact No.: <span class="line"><?= htmlspecialchars($fields['ref_contact1'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>Name: <span class="line"><?= htmlspecialchars($fields['ref_name2'] ?? '') ?></span></td>
                <td>Company: <span class="line"><?= htmlspecialchars($fields['ref_company2'] ?? '') ?></span></td>
            </tr>
            <tr>
                <td>Position: <span class="line"><?= htmlspecialchars($fields['ref_pos2'] ?? '') ?></span></td>
                <td>Contact No.: <span class="line"><?= htmlspecialchars($fields['ref_contact2'] ?? '') ?></span></td>
            </tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">OTHER INFORMATION</div>
        <table>
            <tr><td>Res. Cert. No.: <span class="line"><?= htmlspecialchars($fields['res_cert'] ?? '') ?></span></td></tr>
            <tr><td>Issued at: <span class="line"><?= htmlspecialchars($fields['issued_at'] ?? '') ?></span></td></tr>
            <tr><td>Issued on: <span class="line"><?= htmlspecialchars($fields['issued_on'] ?? '') ?></span></td></tr>
            <tr><td>SSS: <span class="line"><?= htmlspecialchars($fields['sss'] ?? '') ?></span></td></tr>
            <tr><td>TIN: <span class="line"><?= htmlspecialchars($fields['tin'] ?? '') ?></span></td></tr>
            <tr><td>NBI No.: <span class="line"><?= htmlspecialchars($fields['nbi'] ?? '') ?></span></td></tr>
            <tr><td>Passport No.: <span class="line"><?= htmlspecialchars($fields['passport'] ?? '') ?></span></td></tr>
        </table>
    </div>

    <div class="signature">
        <div class="signature-line"></div>
        Applicant’s Signature
    </div>
</div>
</body>
</html>