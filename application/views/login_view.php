<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Best School of Oulu</title>
   <style type="text/css">
     body {
      background-color: #CEF6EC;
     }
     form {
      position: absolute;
      width: 200px;
      height: 200px; 
      margin-left: 40%;
     }
     h1 {
      margin-left: 30%;
     }
     h4{
      margin-left: 30%;
      margin-top: 20%;
     }

   </style>
 </head>
 <body>
   <h1>Please type your username and password!</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('Verifylogin'); ?>

     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="Login"/>

   </form>
<h4><u>Note: Read the application document from <a href="http://www.students.oamk.fi/~t5acpr00/Prakash_Acharya_CodeIgniter.pdf" target="_blank">here</a> to login.</u></h4>
 </body>
</html>