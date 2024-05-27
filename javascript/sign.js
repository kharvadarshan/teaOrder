var regEmail = new RegExp('[a-z0-9]+@[a-z]+\.[a-z]{2,3}');
var regPass = new RegExp('^(?=.*[0-9])(?=.*[@#$%^&+=])(?=\\S+$).{8,20}');
const mail = document.getElementById('memail');

// function checkEmail(){
//     const valEmail = document.getElementById('email').value;
//     const valPass = document.getElementById('password').value;
//     if(!regEmail.test(valEmail))
//     {    
//         document.getElementById('email').value ="Enter correct Email";
//         document.getElementById('email').style.color = 'red'; 
//     }
//     if(valPass.length<8)
//     {
//         document.querySelector('.invalid').innerHTML=`<p class="invalid-email">password length must be > 8 character</p>`;
//     }
// };


function signUp()
{
    document.querySelector(".sub").remove();

    document.querySelector(".main").innerHTML+=` <div class="sign-upform">
    <form action="signup.php" method="POST">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name">Name</label><br>
    <input type="text"name="name" placeholder="Enter name" required><br><br>
    <label for="email">Email</label><br>
    <input type="text" name="email" placeholder="Enter email" required><br><br>
    <label for="mobile">Mobile</label><br>
    <input type="text" name="phone" placeholder="Enter mobile" required><br><br>
    <label for="password">Password</label><br>
    <input type="text" name="password" placeholder="Enter password" required><br><br>
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    <input type="submit" name="apply" placeholder="Submit"><br><br>
</form></div>`;
}

function resetPassword()
{   document.querySelector(".sub").remove();
    document.querySelector(".main").innerHTML+=`
    <div class="reset-form">
    <form class="reset">
    <h1>Reset Password</h1>
    <label for="password">Password</label><br>
    <input type="text" id="password"><br>
    <label for="confirm">Confirm Password</label><br>
    <input type="text" id="confirm"><br><br>
    <input type="submit" placeholder="Reset Password" id="reset-pass">
    </form></div>`;
}

