<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
req
<div>
    <form class="login-form" action="form.php" method="post">
        <div class="heading">
            <p>Please fill the form to proceed...</p>
        </div>
        <hr>
        <div class="form-group">
            <label for="cmp-name">Company Name</label>
            <input type="text" class="form-control form-control-lg" id="cmp-name" placeholder="Enter the name of your company">
            <span class="error"> <?php echo "hello" ?></span>
        </div>
        <div class="form-group">
            <label for="contact-person">Contact Person</label>
            <input type="tel" class="form-control form-control-lg" id="contact-person" placeholder="Enter phone">
            <span class="error"></span>
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control form-control-lg" id="position" placeholder="Enter position">
            <span class="error"></span>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control form-control-lg" id="address" placeholder="Enter company address">
            <span class="error"></span>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control form-control-lg" id="phone" placeholder="Enter phone number">
            <span class="error"></span>
        </div>
        <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter E-Mail">
            <span class="error"></span>
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" class="form-control form-control-lg" id="website" placeholder="Enter country">
            <span class="error"></span>
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control" id="comment" rows="4"></textarea>
            <span class="error"></span>
        </div>
        <div class="form-group">
            <label for="prod-list">Product List</label>
            <select class="form-control form-control-lg" id="prod-list">
            <option value="select">Select</option>
            <option value="ps-7500">Payroll Software <p class="cost">Rs. 7500</p></option>
            <option value="female">Female</option>
            <option value="other">Other</option>
            </select>
            <span class="error"></span>
        </div>
        <button type="submit" class="btn btn-primary btn-lg" >Submit</button>
    </form>
</div>

</body>
</html>
