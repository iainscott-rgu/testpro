<html>
<body>
<section class="container" id="featured">
    <div class="centre">
        <p>You're almost there... please enter your details to complete your booking</p>
    </div>
</section>
<section class="container" id="content2">

    <form action="send.php" method="post">
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

</body>
</html>
