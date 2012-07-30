<?php
	
//If the form is submitted
if(isset($_POST['submit'])) {

        //Check to make sure that the name field is not empty
        if(trim($_POST['contactname']) == '') {
                $hasError = true;
        } else {
                $name = trim($_POST['contactname']);
        }

        //Check to make sure that the subject field is not empty
        if(trim($_POST['subject']) == '') {
                $hasError = true;
        } else {
                $subject = trim($_POST['subject']);
        }

        //Check to make sure sure that a valid email address is submitted
        if(trim($_POST['email']) == '')  {
                $hasError = true;
        } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
                $hasError = true;
        } else {
                $email = trim($_POST['email']);
        }

        //Check to make sure comments were entered
        if(trim($_POST['message']) == '') {
                $hasError = true;
        } else {
                if(function_exists('stripslashes')) {
                        $comments = stripslashes(trim($_POST['message']));
                } else {
                        $comments = trim($_POST['message']);
                }
        }

        //If there is no error, send the email
        if(!isset($hasError)) {
                $emailTo = 'info@hugodarosa.com'; //Put your own email address here
                $body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
                $headers = 'From: [www.hugodarosa.com] <'. $subject .'>' . "\r\n" . 'Reply-To: ' . $email;

                mail($emailTo, $subject, $body, $headers);
                $emailSent = true;
        }
}

?>


<div id="contact">

        <h1>Contact</h1>

                    <center><p>Submit all inquiries, booking requests, website issues, and any other concerns through the following form. Be as thorough as possible to ensure a timely response. Please be patient after submission as it may take a minute to process the form. Do not refresh the page or go back, as the message may not successfully send. </p><br />
            
                <div id="contact-wrapper">
            
                <?php if(isset($hasError)) { //If errors are found ?>
                    <center><p class="error" style="color: #a73724;">There was an error in the your submission. Please check if you've filled all the fields with valid information. Thank you.</p></center>
                <?php } ?>
            
                <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
                    <center><p style="color: #48be8a;"><strong>Email Successfully Sent!</strong></p>
                    <p><i>Thank you <strong><?php echo $name;?></strong> for reaching out to us! Your email was successfully sent and we will be in touch with you soon.</i></p></center>
                <?php } ?>
                
                <center><form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contactform">                
                <table cellspacing="10" cellpadding="4" border="0" width="550">
                <tr>
                	<td width="100" align=right>
                            <label for="name"><strong>Name:</strong></label>
                    </td>
                    <td width="450">
                            <input type="text" size="50" name="contactname" id="contactname" value="" class="required" />
                    </td>
                </tr>    
                <tr>
            		<td align=right>
                            <label for="email"><strong>Email:</strong></label>
                    </td>
                    <td width="450">
                            <input type="text" size="50" name="email" id="email" value="" class="required email" />
            		</td>
               	</tr>
                <tr>
                	<td align=right>
                            <label for="subject"><strong>Subject:</strong></label>
                    </td>
                    <td width="450">       
                            <input type="text" size="50" name="subject" id="subject" value="" class="required" />
            		</td>
                </tr>
                <tr>
                	<td align=right>    
                            <label for="message"><strong>Message:</strong></label>
                    </td>
                    <td width="450">
                            <textarea rows="5" cols="40" name="message" id="message" class="required"></textarea>
                    </td>
                </tr>
                <tr>
                	<td></td>
                	<td>
                    	<input type="submit" value="Send Message" name="submit" class="submit"/>
                    </td>
                </tr>
                </table>
                </form></center>
                </div>

</div>