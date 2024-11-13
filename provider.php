<?php
include_once "scripts/checklogin.php";
include_once "include/header.php";

if (!check()) {
    header('Location: logout.php');
    exit();
}

$provider = $_SESSION['user'];

$cities = ["Banani", "Mohakhali", "Badda", "Gulshan-1", "Gulshan-2", "Natunbazar", "Nayanagar", "Basundhara", "Rampura", "Aftabnagar", 
"Santinagar", "Khilkhet", "Uttara Sector-1", "Uttara Sector-2", "Uttara Sector-11", "Uttara Sector-17"];
?>
<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Update Service Provider Information</h3>
            </div>
            <hr>

            <form action="scripts/updatehall.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input value="<?= $provider->name; ?>" id="name"
                        name="name" type="text" class="form-control" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label for="">Contact No.</label>
                    <input value="<?= $provider->contact; ?>"
                        id="contact" name="contact" type="text" class="form-control" placeholder="Contact"
                        minlength="10" maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for="">Address Line 1</label>
                    <input value="<?= $provider->adder1; ?>"
                        id="adder1" name="adder1" type="text" class="form-control" placeholder="Enter Address line-1"
                        required>
                </div>

                <div class="form-group">
                    <label for="">Address
                        Line 2</label>
                    <input value="<?= $provider->adder2; ?>"
                        id="adder2" name="adder2" type="text" class="form-control" placeholder="Enter Address line-2"
                        required>
                </div>

                <div class="form-group">
                    <label for="">City</label>
                    <select value="<?= $provider->city; ?>"
                        class="form-control" name="city" id="city">
                        <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city ?>"> <?= $city ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-2 text-center">
                            <img style=" height: 100px;"
                                src="images/<?= $provider->photo; ?>">
                            <div class="text-center">Old Photo</div>
                        </div>
                        <div class="col">
                            <label for="">New Photo</label>
                            <input id="photo" name="photo" type="file" class="form-control-file"
                                placeholder="Select Photo 1" required>
                        </div>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 15px;">
                    <label for="">Description</label>
                    <textarea name="descr" id="descr" class="form-control" cols="30" rows="5"
                        placeholder="Add Discription About Your Hall"
                        required><?= $provider->descr; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input value="<?= $provider->password; ?>"
                        id="password" name="password" type="password" class="form-control"
                        placeholder="Enter 6 Charectar Password" minlength="4" required>
                </div>

                <div class="form-group">
                    <label for="">Profession</label>
                    <select class="form-control" name="profession" id="profession">
                    <option value="electrician">Electrician</option>
                        <option value="plumber">Plumber</option>
                        <option value="Deep House Cleaning">Deep House Cleaning</option>
                        <option value="Window Cleaning">Window Cleaning</option>
                        <option value="Carpet Cleaning">Carpet Cleaning</option>
                        <option value="laundering services">laundering services</option>
                        <option value="Toilet Cleaning">Toilet Cleaning</option>
                        <option value="Office Cleaning">Office Cleaning</option>
                        <option value="Sofa Cleaning">Sofa Cleaning</option>
                        <option value="Home Shifting">Sofa Cleaning</option>
                    </select>
                </div>

                <button style="margin-top: 20px;" class="btn btn-success btn-block" type="submit" name="register"
                    id="register">Update</button>
            </form>

        </div>
    </div>
</div>

<?php include_once "./include/footer.php";
