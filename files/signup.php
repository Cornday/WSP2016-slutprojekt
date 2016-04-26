<div class="row">

    <?php
    if (isset($_SESSION["message"])){
        echo $_SESSION["message"];

        $_SESSION["message"]=null;
    }
    ?>

    <div class="col-md-6">
        <form action="dosignup.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="InputNEmail" name="InputNEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Username</label>
                <input type="text" class="form-control" id="InputNUsername" name="InputNUsername" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">First Name</label>
                <input type="text" class="form-control" id="InputFName" name="InputFName" placeholder="FName">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Last Name</label>
                <input type="text" class="form-control" id="InputLName" name="InputLName" placeholder="LName">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="InputNPassword" name="InputNPassword" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">repeat Password</label>
                <input type="password" class="form-control" id="InputNPasswordRepeat" name="InputNPasswordRepeat" placeholder="PasswordRepeat">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    <div class="well col-md-6" style="border: solid black">
        <h3>It's easier than you think!</h3>
        <p>Just follow the instruktions to the left.</p>
        <p><a class="btn btn-success btn-lg" href="index.php?page=login" role="button">have a user already?</a></p>
    </div>
</div>