<!DOCTYPE html>
<html>
    <head>
        <title>InterestPoint</title>
        <link rel="stylesheet" href="css/foundation.css">
    </head>
    <body>
        <a href="index.php"><img src="img/logo2.png"></a>
        <table border="0" width="80%">
  <tr>
    <td><div id="form">
            <!-- The form action has been removed because the development environment WAMP does not allow for email calls.
                Instead, I bypass the form processing script, and go to the Thanks page. You can see the form proccessing
                script inside the form_process.php -->
        <form action='thankyou.php' id='submit_form'>
            <h2>Contact InterestPoint or report a Problem</h2>
            <label for='userName'>Username</label>
            <input name='userName' type='text' id='userName'  />
            <label for='firstName'>First Name</label>
            <input name='firstName' type='text' id='firstName' />
            <label for='lastName'>Last Name</label>
            <input name='lastName' type='text' id='lastName' />
            <label for='email'>Email</label>
            <input name='email' type='email' id='email' /> <br />
            <p>Select a reason for Contacting InterestPoint</p>
            <select name='reason'>
                <option value='problem'>Problems with InterestPoint</option>
                <option value='question'>Questions for InterestPoint</option>
            </select><br />
            <p>Put the details here.</p>
            <textarea rows='50' cols='50' name='details'></textarea>

        </form>
        <a href="thankyou.php"><button>Submit</button></a>
        </div></td>
    <td>    <div id="contact_info">
        <h3>Contact Us</h3>
        <table width="263" border="0">
  <tr>
    <td>Name</td>
    <td>Josh Klug</td>
  </tr>
  <tr>
    <td>Address</td>
    <td>123 Your Street OK USA 36521</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>email@interestpoint.com</td>
  </tr>
  <tr>
    <td>Phone</td>
    <td>236.254.1254</td>
  </tr>
</table></div></td>
  </tr>
</table>
        


    
</body>
        <p>Copyright 2013 - 919 Web/Media - InterestPoint | Location data Powered by FourSquare</p>
</html>
