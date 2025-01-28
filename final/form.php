<!-- CONTACT US PAGE -->
<?php 
    include 'top.php'; 
    
    $reasons = array('Question', 'Complaint', 'Feedback', 'Other');

    $dataIsGood = false;

    $message = '';

    $firstName = '';
    $lastName = '';
    $email = '';
    $reason = '';
    $description = '';

    function getData($field) {
        if (!isset($_POST[$field])) {
            $data = "";
        } else {
            $data = trim($_POST[$field]);
            $data = htmlspecialchars($data);
        }
        return $data;
    }

    function verifyAlphaNum($testString) {
        // Check for letters, numbers and dash, period, space and single quote only.
        // added & ; and # as a single quote sanitized with html entities will have 
        // this in it bob's will be come bob's
        return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
    }

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {

        print PHP_EOL . '<!-- Starting Sanitization -->' . PHP_EOL;
    }

    $firstName = getData('txtFirstName');
    $lastName = getData('txtLastName');
    $email = getData('txtEmail');
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $reason = getData('lstReason');
    $description = getData('txtDescription');

    print PHP_EOL . '<!-- Starting Validation -->' . PHP_EOL;
    $dataIsGood = true;

    if ($firstName == '') {
        $message .= '<p class="mistake">Please type in your first name.</p>';
        $dataIsGood = false;
    }
    elseif(!verifyAlphaNum($firstName)) {
        $message .= '<p class="mistake">Your first name contains invalid characters</p>';
        $dataIsGood = false;
    }

    if ($lastName == '') {
        $message .= '<p class="mistake">Please type in your last name.</p>';
        $dataIsGood = false;
    }
    elseif(!verifyAlphaNum($lastName)) {
        $message .= '<p class="mistake">Your last name contains invalid characters</p>';
        $dataIsGood = false;
    }

    if ($email == '') {
        $message .= '<p class="mistake">Please type in your email address.</p>';
        $dataIsGood = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message .= '<p class="mistake">Your email address contains invalid characters.</p>';
        $dataIsGood = false;
    }

    if ($reason == '') {
        $message .= '<p class="mistake">Please choose your reason for contact.</p>';
        $dataIsGood = false;
    } elseif(!in_array($reason, $reasons)) {
        $message .= '<p class="mistake">Please choose your reason for contact.</p>';
        $dataIsGood = false;
    }

    if ($description == '') {
        $message .= '<p class="mistake">Please write your request in the Description text box.</p>';
        $dataIsGood = false;
    }
    elseif(!verifyAlphaNum($description)) {
        $message .= '<p class="mistake">Your message contains invalid characters, please just use letters.</p>';
        $dataIsGood = false;
    }

    print '<!-- Starting Saving -->';
    if ($dataIsGood) {
        $sql = 'INSERT INTO tblContactInfo (fldFirstName, fldLastName, fldEmail, fldReason, fldDescription)
        VALUES (?, ?, ?, ?, ?)';
        $statement = $pdo->prepare($sql);
        $data = array($firstName, $lastName, $email, $reason, $description);

        if ($statement->execute($data)) {
            $to = $email;
            $from = 'Green Mountain Cycles <aperkel@uvm.edu>';
            $subject = 'Your Green Mountain Cycles Outreach';

            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=utf-8\r\n";
            $headers .= "From: " . $from . "\r\n";

            $message .= '<p>Thank you<!/p>';
            $message .= '<p>Your information was successfully saved.</p>';

            $mailMessage = '<p style="font: 14pt serif;">Hello,</p>';
            $mailMessage .= '<p style="font: 14pt serif;">Thank you for contacting ';
            $mailMessage .= 'Green Mountain Cycles.</p>';
            $mailMessage .= '<p style="font: 14pt serif;">We thank you for your ';
            $mailMessage .= 'patience and will respond to your message in ';
            $mailMessage .= '2-3 business days.</p>';
            $mailMessage .= '<p style="font: 14pt serif;">';
            $mailMessage .= '<span style="color: green;">';
            $mailMessage .= 'Green Mountain Cycles</span><br>';
            $mailMessage .= 'P: (802)123-4567 | E: aperkel@uvm.edu</p>';
            $mailMessage .= '<hr>';
            $mailMessage .= '<p style="font: 10pt serif;">Original Message:</p>';
            $mailMessage .= '<p style="font: 10pt serif;">Subject: ';
            $mailMessage .= $reason;
            $mailMessage .= '<br>';
            $mailMessage .= $description;
            $mailMessage .= '</p>';
            $mailMessage .= '<p style="font: 10pt serif;">From,<br>';
            $mailMessage .= $firstName;
            $mailMessage .= ' ';
            $mailMessage .= $lastName;
            $mailMessage .= '</p>';

            $mailSent = mail($to, $subject, $mailMessage, $headers);

            if ($mailSent) {
                $message .= '<p>A copy has been emailed to you for your records.</p>';
            }

        } else {
            $message .= '<p>Record was NOT successfully saved.</p>';
            $dataIsGood = false;
        }
    }
    ?>
    <main>
        <h1>Contact Us</h1>
        <section>
            <?php print $message; ?>
            <form action="#" id="contact" method="POST">
                <fieldset class = "contact">
                    <legend>Info</legend>
                    <p>
                        <label class="required" for="txtFirstName">First Name</label>
                        <input id="txtFirstName" manlength="30"
                        name="txtFirstName" onfocus="this.select()"
                        tabindex="305" value="<?php
                        print $firstName; ?>" required> 
                    </p>
                    <p>
                        <label class="required" for="txtLastName">Last Name</label>
                        <input id="txtLastName" manlength="30"
                        name="txtLastName" onfocus="this.select()"
                        tabindex="305" value="<?php
                        print $lastName; ?>" required>
                    </p>
                    <p>
                        <label class="required" for="txtEmail">Email</label>
                        <input id="txtEmail" manlength="30"
                        name="txtEmail" onfocus="this.select()"
                        tabindex="305" type="email" value="<?php
                        print $email; ?>" required> 
                    </p>
                </fieldset>

                <fieldset class="listbox">
                    <legend>Reason for Contact</legend>
                    <p>
                        <select id="lstReason" name="lstReason">
                            <option 
                            <?php if ($reason == "Question") print 'selected'; ?>
                                value="Question">Question</option>
                            <option 
                            <?php if ($reason == "Complaint") print 'selected'; ?>
                                value="Complaint">Complaint</option>
                            <option 
                            <?php if ($reason == "Feedback") print 'selected'; ?>
                                value="Feedback">Feedback</option>
                            <option 
                            <?php if ($reason == "Other") print 'selected'; ?>
                                value="Other">Other</option>
                        </select>
                    </p>
                </fieldset>

                <fieldset class="textarea">
                    <legend>Description</legend>
                    <p>
                        <textarea id="txtDescription"
                        name="txtDescription" tabindex="200"><?php
                        print $description; ?></textarea>
                    </p>
                </fieldset>

                <fieldset class="buttons">
                    <input id="btnSubmit" name="btnSubmit"
                    type="submit" value="Submit">
                </fieldset>
            </form>
        </section>
    </main>
    <?php include 'footer.php'; ?>