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
            <h1 class="animated-title">Feed Back</h1>

            <?php
                if(isset($_POST['submit_feedback'])) {
                    $name = $_POST['full_name'];
                    $address = $_POST['full_address'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $comment = $_POST['comment'];

                    $sql = "INSERT INTO feedback (full_name, full_address, phone, email, comment) 
                            VALUES ('$name', '$address', '$phone', '$email', '$comment')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script> alert('Feedback successfully sent'); </script>";
                    } else {
                        echo "<script> alert('Error in Insertion'); </script>";
                    }
                    
                    $conn->close();
                }
            ?>

            <form action="<?php $_PHP_SELF ?>" method="post" class="ui form animated-form">
                <div class="field">
                    <label for="full_name">Name</label>
                    <input type="text" name="full_name" placeholder="Full Name" required class="input-field">
                </div>
                <div class="field">
                    <label for="full_address">Address</label>
                    <input type="text" name="full_address" placeholder="Address" required class="input-field">
                </div>
                <div class="field">
                    <label for="phone">Phone No.</label>
                    <input type="tel" name="phone" placeholder="Phone / Mobile" required class="input-field">
                </div>
                <div class="field">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" placeholder="Email ID" required class="input-field">
                </div>
                <div class="field">
                    <label for="comment">Comments</label>
                    <textarea rows="2" name="comment" required class="textarea-field"></textarea>
                </div>
                <div class="buttons">
                    <button name="submit_feedback" class="ui primary button animated-button" type="submit">Submit</button>
                    <button class="ui button reset-button" type="reset">Reset</button>
                </div>
            </form>

            <span class="p-20"></span>

        </div>
    </div>

</div>

<?php include './components/footer.php'; ?>

<style>
    /* Basic Page Styling */
    .ui.container {
        margin-top: 20px;
    }

    .animated-title {
        font-size: 36px;
        font-weight: bold;
        text-align: center;
        color: #333;
        animation: fadeIn 2s ease-in-out;
    }

    /* Form Styling */
    .animated-form {
        background: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 0 auto;
        animation: fadeIn 1.5s ease-in-out;
    }

    .input-field, .textarea-field {
        width: 100%;
        padding: 12px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 20px;
        font-size: 16px;
        transition: border-color 0.3s ease, transform 0.3s ease;
    }

    .input-field:focus, .textarea-field:focus {
        border-color: #3498db;
        transform: scale(1.02);
    }

    .textarea-field {
        resize: vertical;
    }

    .buttons {
        display: flex;
        justify-content: space-between;
    }

    .animated-button {
        background-color: #3498db;
        color: #fff;
        font-size: 16px;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .animated-button:hover {
        background-color: #2980b9;
    }

    .reset-button {
        background-color: #f4f4f4;
        color: #333;
        font-size: 16px;
        padding: 10px 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
        transition: background-color 0.3s ease;
    }

    .reset-button:hover {
        background-color: #e0e0e0;
    }

    /* Animation for form elements */
    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    /* Mobile responsiveness for form */
    @media (max-width: 768px) {
        .ui.form {
            padding: 15px;
        }

        .animated-title {
            font-size: 28px;
        }
    }

</style>
