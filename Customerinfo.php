<html>



<?php
/**
 * This example shows making an SMTP connection with authentication.
 */
echo "here is a message";


/**
 * This example shows how to make use of PHPMailer's exceptions for error handling.
 */
require 'PHPMailerAutoload.php';
//Create a new PHPMailer instance
//Passing true to the constructor enables the use of exceptions for error handling
$mail = new PHPMailer(true);
try {
    //Set who the message is to be sent from
    $mail->setFrom('from@example.com', 'First Last');
    //Set an alternative reply-to address
    $mail->addReplyTo('replyto@example.com', 'First Last');
    //Set who the message is to be sent to
    $mail->addAddress('whoto@example.com', 'John Doe');
    //Set the subject line
    $mail->Subject = 'PHPMailer Exceptions test';
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //and convert the HTML into a basic plain-text alternative body
    $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';
    //Attach an image file
    $mail->addAttachment('images/phpmailer_mini.png');
    //send the message
    //Note that we don't need check the response from this because it will throw an exception if it has trouble
    $mail->send();
    echo "Message sent!";
} catch (phpmailerException $e) {
    echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
    echo $e->getMessage(); //Boring error messages from anything else!
}

?>




<section class="spacer" id="spacer">


</section>


<section class="container" id="featured">
    <div class="centre">

        <p>You're almost there... please enter your details to complete your booking</p>
    </div>
</section>


<section class="container" id="content2">

    <form>

        <table class="table6">

            <tr><td class="small"><p>* Required Fields</p></td></tr>
            <tr><td>
                    <label for="title">Title: *</label></td>
                <td><select class="inputform" name="title" id="title">
                        <option value="">Select Title</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                        <option value="Ms">Ms</option>
                    </select>
                </td>
                <td>
                    <label for="email">Email: *</label></td>
                <td><input type="text" id="email" class="inputform" name="email" placeholder="Enter your Email Address" size="20" maxlength="50" /></td>
            </tr>
            <tr>
                <td><label for="firstname">First Name: *</label></td>
                <td><input type="text" id="firstname" class="inputform" name="firstname" placeholder="Enter your First Name" size="20" maxlength="25" /></td>
                <td>
                    <label for="telephone">Telephone: *</label></td>
                <td><input type="text" id="telephone" class="inputform" name="telephone" placeholder="Enter your telephone number" size="20" maxlength="20"  /></td>
            </tr>
            </tr>
            <tr>
                <td><label for="surname">Surname: *</label></td>
                <td><input type="text" id="surname" class="inputform" name="surname" placeholder="Enter your Surname" size="20" maxlength="25" /></td>
            </tr>
            <tr>
                <td colspan="4"><p align="right" ><input class="btn2" type="submit" value="Submit" class="submit" />
















                    </p></td>
            </tr>
        </table></form>
</section>

<section class="spacer" id="spacer">

</section>

<section class="container" id="foot">

    <div id="footernav">
        <nav role="sub">
            <ul>
                <li><a href="SearchBB.php">Search</a></li>
                <li><a href="OwnerSignIn.php">Member Area</a></li>
                <li><a href="B&Bregistration.html">Register</a></li>
                <li><a href="help.php#contactsection">Contact</a></li>
                <li><a href="help.php#helpsection">Help</a></li>
            </ul>
        </nav>
    </div>
    <div id="copyright">
        <hr width="100%" size="1">
        <p>Copyright. Team D Solutions.</p>
    </div>

</section>

</html>
