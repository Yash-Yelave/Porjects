<?php include './admin_components/admin_header.php' ?>

    <div class="ui container">

        <!-- Top Navigation Bar -->
        <?php include './admin_components/admin_top-menu.php' ?>

        <!-- BODY Content -->
        <div class="ui grid">
            <!-- Left menu -->
            <?php include './admin_components/admin_side-menu.php' ?>
            
            <!-- Right content -->
            <div class="twelve wide column">
                <h1 class="animated-title">Create New Programme Details</h1>

                <?php
                    if(isset($_POST['submit_program'])) {
                        $title = $_POST['title'];
                        $desc = $_POST['desc'];

                        $sql = "INSERT INTO programs (program_title, program_desc) VALUES ('$title', '$desc')";
                    
                        if ($conn->query($sql) === TRUE) {
                                echo "<script> alert('New Program created successfully'); </script>";
                        } else {
                            echo "<script> alert('Error in Insertion'); </script>";
                        }
                        $conn->close();
                    }
                ?>
                
                <form action="<?php $_PHP_SELF ?>" method="post" class="ui form animated-form">

                    <div class="field">
                        <label>Title</label>
                        <div class="eight wide field">
                            <input type="text" name="title" placeholder="Program Title" class="animated-input">
                        </div>
                    </div>

                    <div class="field">
                        <label>Description</label>
                        <textarea type="text" name="desc" rows="2" class="animated-input"></textarea>
                    </div>

                    <button name="submit_program" type="submit" class="ui primary button animated-button">Submit</button>
                    <button type="reset" class="ui button animated-button">Reset</button>

                </form>

            </div>
            <span class="p-20"></span>
        </div>

    </div>
    
<?php include './admin_components/admin_footer.php' ?>

<style>
    /* Basic Animation for Title */
    .animated-title {
        font-size: 36px;
        font-weight: bold;
        text-align: center;
        color: #333;
        animation: fadeInUp 1s ease-out forwards;
    }

    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    /* Animation for Form and Inputs */
    .animated-form {
        animation: fadeIn 1s ease-in-out;
    }

    .animated-input {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .animated-input:focus {
        border-color: #ffae42;
        box-shadow: 0 0 10px rgba(255, 174, 66, 0.5);
    }

    .animated-button {
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .animated-button:hover {
        background-color: #ffae42;
        transform: scale(1.05);
    }

    /* Hover effects for form elements */
    .ui.form .field label {
        font-size: 18px;
        color: #555;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .ui.form .field textarea,
    .ui.form .field input[type="text"] {
        font-size: 16px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        width: 100%;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .ui.form .field textarea:focus,
    .ui.form .field input[type="text"]:focus {
        border-color: #ffae42;
        box-shadow: 0 0 5px rgba(255, 174, 66, 0.5);
    }

    /* Button Hover Animation */
    .ui.button {
        transition: all 0.3s ease-in-out;
    }

    .ui.button:hover {
        background-color: #ffae42;
        color: white;
        transform: scale(1.05);
    }

    /* Spacing and Layout Improvements */
    .ui.grid {
        margin-top: 40px;
    }

    .p-20 {
        padding: 20px 0;
    }

    /* Responsive form */
    @media (max-width: 768px) {
        .ui.form .field {
            margin-bottom: 15px;
        }
    }
</style>
