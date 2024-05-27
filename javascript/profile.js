

function changePass()
{  
   document.querySelector('.main2').innerHTML.remove();
     document.querySelector('.main2').innerHTML +=` 
     <h1>Change Password</h1>
    <div class="reset-form">
    <form class="reset">
    <h1>Reset Password</h1>
    <label for="password">Password</label><br>
    <input  name="old"type="text" id="password"><br>
    <label for="confirm">Confirm Password</label><br>
    <input type="text" name="new" id="confirm"><br><br>
    <input type="submit" name="reset" placeholder="Reset Password" id="reset-pass">
    </form></div>`;
}