<?php include './components/header.php'; ?>

<div class="ui container">

    <!-- Top Navigation Bar -->
    <?php include './components/top-menu.php'; ?>

    <!-- BODY Content -->
    <div class="ui grid">
        <!-- Left menu -->
        <?php include './components/side-menu.php'; ?>
        
        <!-- Right content -->
        <div class="twelve wide column">
            <h1 class="animated-title">Donation Application</h1>

            <?php

              if(isset($_POST['submit_donation'])) {
                $program = $_POST['program'];
                $amount = $_POST['amount'];
                $checkno = $_POST['check'];
                $bank_name = $_POST['bank_name'];
                $place = $_POST['place'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];

                $sql = "INSERT INTO donation (program, amount, checkno, bank_name, place, d_name, email, phone, d_address) 
                        VALUES ('$program', '$amount', '$checkno', '$bank_name', '$place', '$name', '$email', '$phone', '$address')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script> alert('Donation form successfully submitted'); </script>";
                } else {
                    echo "<script> alert('Error in submission'); </script>";
                }
                
                $conn->close();
              }

            ?>

            <form action="<?php $_PHP_SELF ?>" method="post" class="ui form animated-content">

                <h4 class="ui dividing header">Select the program to sponsor</h4>
                <div class="grouped fields">
                    <label for="program">Programs: </label>
                    <div class="field">
                      <div class="ui radio checkbox">
                        <input type="radio" name="program" tabindex="0" class="hidden" id="aakar" value="Aakar">
                        <label for="aakar">AAKAR - the first step</label>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui radio checkbox">
                        <input type="radio" name="program" tabindex="0" class="hidden" id="ahar" value="Ahar">
                        <label for="ahar">AHAR APURTI</label>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui radio checkbox">
                        <input type="radio" name="program" tabindex="0" class="hidden" id="avsar" value="Avsar">
                        <label for="avsar">AVSAR - a chance</label>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui radio checkbox">
                        <input type="radio" name="program" tabindex="0" class="hidden" id="lakshya" value="Lakshya">
                        <label for="lakshya">Lakshya</label>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui radio checkbox">
                        <input type="radio" name="program" tabindex="0" class="hidden" id="parivartan" value="Parivartan">
                        <label for="parivartan">PARIVARTAN - change of direction</label>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui radio checkbox">
                        <input type="radio" name="program" tabindex="0" class="hidden" id="uphaar" value="Uphaar">
                        <label for="uphaar">UPHAAR - gift a smile</label>
                      </div>
                    </div>
                </div>

                <div class="field">
                  <label>Amount</label>
                  <input type="number" name="amount" min="1" placeholder="Amount" required>
                </div>

                <h4 class="ui dividing header">Check and Demand Draft</h4>
                <div class="field">
                  <label>Check / DD no.</label>
                  <input type="text" name="check" placeholder="Check / DD no." required>
                </div>
                <div class="field">
                  <label>Bank Name</label>
                  <input type="text" name="bank_name" placeholder="Bank Name" required>
                </div>
                <div class="field">
                  <label>Place</label>
                  <input type="text" name="place" placeholder="Place" required>
                </div>

                <h4 class="ui dividing header">Personal Information</h4>
                <div class="field">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="field">
                    <label>Phone no.</label>
                    <input type="tel" name="phone" placeholder="Phone / Mobile" required>
                </div>
                <div class="field">
                    <label>Address</label>
                    <input type="text" name="address" placeholder="Address" required>
                </div>

                <button name="submit_donation" class="ui primary button animated-button" type="submit">Submit</button>
                <button class="ui button" type="reset">Reset</button>

            </form>

            <span class="p-20"></span>
        </div>
    </div>

</div>

<?php include './components/footer.php'; ?>

<style>
    /* Basic Styling */
    .ui.container {
        margin-top: 30px;
    }

    .animated-title {
        font-size: 36px;
        font-weight: bold;
        text-align: center;
        color: #333;
        animation: fadeIn 1.5s ease-in-out;
    }

    .animated-content {
        animation: fadeInUp 1s ease-in-out;
    }

    .grouped.fields .field {
        margin-bottom: 20px;
    }

    .ui.form {
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .ui.primary.button.animated-button {
        background-color: #3498db;
        color: white;
        border-radius: 5px;
        transition: transform 0.3s;
    }

    .ui.primary.button.animated-button:hover {
        transform: scale(1.05);
    }

    .p-20 {
        padding: 20px;
    }

    /* Animation for Fade-In and Up */
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .animated-title {
            font-size: 28px;
        }
        
        .ui.form {
            padding: 20px;
        }
    }
</style>
