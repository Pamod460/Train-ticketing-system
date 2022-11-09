<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <title>LTMS REGISTER</title>
    <link href="stylesreg.css" rel="stylesheet">
   
    <script>
        window.addEventListener('load', initialize);

        function initialize() {
            submit.addEventListener('click', Register);

        }

        function Passenger(fname, lname, email, mobile, nic, province, district, address, username, password) {
            this.fname = fname;
            this.lname = lname;
            this.email = email;
            this.mobile = mobile;
            this.nic = nic;
            this.province = province;
            this.district = district;
            this.address = address;
            this.username = username;
            this.password = password;

        }

        function Register() {
            let passenger = new Passenger();
            passenger.fname = fname.value;
            passenger.lname = lname.value;
            passenger.email = email.value;
            passenger.mobile = mobile.value;
            passenger.nic = nic.value;
            passenger.province = province.value;
            passenger.district = district.value;
            passenger.address = address.value;
            passenger.username = username.value;
            if (password.value === repassword.value) {
                passenger.password =password.value;
            } else {
                PwError.innerHTML = "password Does mot match"
            }
            
            if(agree.checked){
                var pass = "passenger=" + JSON.stringify(passenger);
                post(pass);
            }else{
                PwError.innerHTML = "You Did Not Agreed With Our Conditions"
            }
           

        }

        function post(pass) {

            var httpd = new XMLHttpRequest();
            httpd.open("POST", "./registercontroller.php", false);
            httpd.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            httpd.send(pass);
        }
    </script>

</head>

<body>
<div class="center">
    <h1>Register</h1>
    <form onsubmit="return false">

        <div style="display:block; width:100%;">
            <div style="width:48%; float: left; display: inline-block;">
                <div class="txt_field">
                    <input id="fname" name="fname" required type="text">
                    <span></span>
                    <label>First Name</label>
                </div>

                <div class="txt_field">
                    <input id="lname" name="lname" required type="text">
                    <span></span>
                    <label>Last Name</label>
                </div>

                <div class="txt_field">
                    <input id="email" name="email" required type="text">
                    <span></span>
                    <label>Email</label>
                </div>

                <div class="txt_field">
                    <input id="mobile" name="mobile" required type="text">
                    <span></span>
                    <label>Mobile</label>
                </div>

                <div class="txt_field">
                    <input id="nic" name="nic" required type="text">
                    <span></span>
                    <label>Nic</label>
                </div>
                <div class="txt_field">
                    <input id="province" name="province" required type="text">
                    <span></span>
                    <label>Province</label>
                </div>
                <div class="txt_field">
                    <input id="district" name="district" required type="text">
                    <span></span>
                    <label>District</label>
                </div>
            </div>

            <div style="width:48%; float: right; display: inline-block;">

                <div class="txt_field">
                    <input id="address" name="address" required type="text">
                    <span></span>
                    <label>Address</label>
                </div>
                <div class="txt_field">
                    <input id="username" name="username" required type="text">
                    <span></span>
                    <label>Username</label>
                </div>

                <div class="txt_field">
                    <input id="password" name="password" required type="password">
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="txt_field">
                    <input id="repassword" name="repassword" required type="password">
                    <span></span>
                    <label>Re-Enter Password</label>
                </div>
                <div class="error_msg" style="color: red; font-size :small; margin-bottom : 5px ">
                    <p id="PwError"></p>
                </div>                
                <div class="checkbox">
                    <input id="agree" name="agree" type="checkbox">
                    <label for="agree"> I Agree To The Terms And Conditions.</label><br>
                </div>
            </div>
        </div>

        <input id="submit" type="submit" value="Register">
        <div class="signin_link">
            already Registered? <a href="./login.php">Signin</a>
        </div>
    </form>
</div>

</body>

</html>