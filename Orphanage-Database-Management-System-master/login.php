<?php include './components/header.php'; ?>

<div class="ui container">

    <!-- Top Navigation Bar -->
    <?php include './components/top-menu.php'; ?>

    <!-- BODY Content -->
    <div class="ui centered grid">
        <h2 class="pt-4">Login Here</h2>
    </div>

    <div class="ui grid">
        <div class="six wide column centered">

            <?php
            // Clear the error message
            $error_msg = "";

            // If the user isn't logged in, try to log them in
            if (!isset($_SESSION['user_id'])) {
                if (isset($_POST['submit'])) {

                    // Grab the user-entered log-in data
                    $user_username = mysqli_real_escape_string($conn, trim($_POST['username']));
                    $user_password = mysqli_real_escape_string($conn, trim($_POST['password']));

                    if (!empty($user_username) && !empty($user_password)) {
                        // Look up the username and password in the database
                        $query = "SELECT user_id, username FROM member WHERE username = '$user_username' AND password = SHA('$user_password')";
                        $data = mysqli_query($conn, $query);

                        if (mysqli_num_rows($data) == 1) {
                        // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
                        $row = mysqli_fetch_array($data);
                        $_SESSION['user_id'] = $row['user_id'];
                        $_SESSION['username'] = $row['username'];
                        setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
                        setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
                        $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
                        $admin_page = './admin/index.php';
                        header('Location: ' . $admin_page);
                        }
                        else {
                        // The username/password are incorrect so set an error message
                        $error_msg = '<div class="ui warning message">Invalid Username and Password</div>';
                        }
                    }
                    else {
                        // The username/password weren't entered so set an error message
                        $error_msg = '<div class="ui warning message">Enter Username and Password</div>';
                    }
                }
            }

            // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
            if (empty($_SESSION['user_id'])) {
                echo '<p class="error">' . $error_msg . '</p>';
            ?>

            <!-- Login Form -->
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="ui form animate-form">
                <div class="field">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="User Name">
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <!-- <div>Don't have Account? <a href="signup.php">Sign Up</a></div> -->
                <button name="submit" class="ui primary button" type="submit">Login</button>
            </form>

            <?php
            }
            else {
                // Confirm the successful log-in
                echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '.</p>');
            }
            ?>

        </div>
    </div>

</div>

<?php include './components/footer.php'; ?>

<style>
    /* Animation for the form container */
    .animate-form {
        animation: slide-in-up 1s ease-in-out forwards;
        opacity: 0;
        transform: translateY(30px);
    }

    @keyframes slide-in-up {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Styling for the form and inputs */
    .ui.form {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .ui.form .field {
        margin-bottom: 20px;
    }

    .ui.form label {
        font-size: 14px;
        font-weight: bold;
        color: #333;
    }

    .ui.form input {
        padding: 10px;
        font-size: 16px;
        border-radius: 4px;
        border: 1px solid #ddd;
        width: 100%;
        box-sizing: border-box;
    }

    .ui.primary.button {
        background-color: #ffae42 !important;
        color: white !important;
        transition: background-color 0.3s ease;
    }

    .ui.primary.button:hover {
        background-color: #d98e2f !important;
    }

    /* Error message style */
    .ui.warning.message {
        margin-top: 10px;
        background-color: #ffeb3b;
        color: #d32f2f;
        font-weight: bold;
    }

    .ui.form .field input:focus {
        border: 1px solid #ffae42;
        outline: none;
    }

    /* Link styling */
    .ui.form div a {
        color: #ffae42;
        text-decoration: none;
    }

    .ui.form div a:hover {
        text-decoration: underline;
    }
</style>
