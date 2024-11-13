<?php include_once "./include/header.php"; ?>

<?php
$cities = ["Adabar", "Airport", "Badda", "Bangsal", "Cantonment", "Chowkbazar", "Darus Salam", "Demra", "Dhakshinkhan", "Dhanmondi", "Gendaria", 
"Gulshan", "Hazaribagh", "Jatrabari", "Kadamtali", "Kafrul", "Kalabagan", "Kamrangirchar", "Khilgaon", "Khilkhet", "Kotwali", "Lalbagh", "Mirpur", "Mohammadpur", "New Market", "Pallabi", "Paltan", "Panthapath", "Ramna", 
"Rampura", "Sabujbagh", "Shah Ali", "Shahbag", "Sher-e-Bangla Nagar", "Shyampur", "Sutrapur", "Tejgaon", "Turag", "Uttar Khan", "Vatara", "Wari" ];
?>
<?php include_once "msg/register.php"; ?>
<div class="container" style="margin-top: 30px; max-width: 800px;margin-bottom: 60px;">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Register as Service Provider</h3>
            </div>
            <hr>


            <form action="scripts/register.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label for="">Contact No.</label>
                    <input id="contact"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        name="contact" type="text" class="form-control" placeholder="Contact" minlength="10"
                        maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for="">Address Line 1</label>
                    <input id="adder1" name="adder1" type="text" class="form-control" placeholder="Enter Address line-1"
                        required>
                </div>

                <div class="form-group">
                    <label for="">Address Line 2</label>
                    <input id="adder2" name="adder2" type="text" class="form-control" placeholder="Enter Address line-2"
                        required>
                </div>

                <div class="form-group">
                    <label for="">City</label>
                    <select class="form-control" name="city" id="city">
                        <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city ?>"> <?= $city ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Photo(Square Size)</label>
                    <input id="photo" name="photo" type="file" class="form-control-file" placeholder="Select Photo 1"
                        required>
                </div>

                <div class="form-group">
                    <label for="">Add Description</label>
                    <textarea name="descr" id="descr" class="form-control" cols="30" rows="5"
                        placeholder="Tell something about you..." required></textarea>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input id="password" name="password" type="password" class="form-control"
                        placeholder="Enter 6 Character Password" minlength="4" required>
                </div>

                <div class="form-group">
                    <label for="">Profession</label>
                    <select class="form-control" name="profession" id="profession">
                    <option value="Electrician">Electrician</option>
                <option value="Plumber">Plumber</option>
                <option value="Deep House Cleaner">Deep House Cleaner</option>
                <option value="Window Cleaner">Window Cleaner</option>
                <option value="Carpet Cleaner">Carpet Cleaner</option>
                <option value="Laundering services">Laundering services</option>
                <option value="Toilet Cleaner">Toilet Cleaner</option>
                <option value="Office Cleaner">Office Cleaner</option>
                <option value="Sofa Cleaner">Sofa Cleaner</option>
                <option value="Home Shifting">Home Shifting</option>
                        
                        
                    </select>
                </div>

                <button style="margin-top: 30px;" class="btn btn-block btn-primary" type="submit" name="register"
                    id="register">Register</button>
            </form>

        </div>
    </div>
</div>

<?php include_once "./include/footer.php";
