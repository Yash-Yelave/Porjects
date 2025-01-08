<?php include './admin_components/admin_header.php' ?>

<div class="ui container animated-container">

    <!-- Top Navigation Bar -->
    <?php include './admin_components/admin_top-menu.php' ?>

    <!-- BODY Content -->
    <div class="ui grid">
        <!-- Left menu -->
        <?php include './admin_components/admin_side-menu.php' ?>
        
        <!-- Right content -->
        <div class="twelve wide column">
            <h1 class="animated-title">Child Registration Form</h1>

            <?php
                if(isset($_POST['submit_child'])) {
                    $child_name = $_POST['child_name'];
                    $child_dob = $_POST['child_dob'];
                    $child_yoe = $_POST['child_yoe'];
                    $child_class = $_POST['child_class'];
                    $child_story_behind = $_POST['child_story_behind'];
                    $child_pic = $_POST['child_pic'];

                    $sql = "INSERT INTO children (cname, cdob, cyoe, cclass, cstory, cphoto) VALUES ('$child_name', '$child_dob', '$child_yoe', '$child_class', '$child_story_behind', '$child_pic')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script> alert('New record created successfully'); </script>";
                    } else {
                        echo "<script> alert('Error in Insertion'); </script>";
                    }
                    
                    $conn->close();
                }
            ?>

            <!-- Registration Form -->
            <form action="<?php $_PHP_SELF ?>" method="post" class="ui form animated-form">
                <div class="seven wide field animated-field">
                    <label>Child Name</label>
                    <input type="text" name="child_name" placeholder="Child's Name" required>
                </div>
                <div class="seven wide field animated-field">
                    <label>Date of Birth</label>
                    <input type="date" name="child_dob" required>
                </div>
                <div class="seven wide field animated-field">
                    <label>Year of Enroll</label>
                    <input type="number" min="1900" max="2200" name="child_yoe" required>
                </div>
                <div class="seven wide field animated-field">
                    <label>Class / Grade</label>
                    <input type="number" min="1" max="12" name="child_class" required>
                </div>
                <div class="field animated-field">
                    <label>Story Behind</label>
                    <textarea name="child_story_behind" rows="2" required></textarea>
                </div>
                <div class="field animated-field">
                    <label>Upload Child Image</label>
                    <input type="file" name="child_pic" accept="image/*">
                </div>
                <div class="animated-buttons">
                    <button name="submit_child" type="submit" class="ui primary button animated-button">Submit</button>
                    <button type="reset" class="ui button animated-button">Reset</button>
                </div>
            </form>

        </div>
    </div>
</div>

<?php include './admin_components/admin_footer.php' ?>

<style>
    /* Basic Font Styling */
    body, h1, h2, h3, h4, h5, h6, .item {
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    /* Animation for Title */
    .animated-title {
        font-size: 36px;
        font-weight: bold;
        color: #000000;
        text-align: center;
        animation: fadeIn 2s ease-in-out;
    }

    /* Slide-in Animation for Form and Content */
    .animated-container {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Form Field Animation */
    .animated-form .field {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.5s forwards;
        animation-delay: 0.2s;
    }

    .animated-form .field:nth-child(2) {
        animation-delay: 0.3s;
    }

    .animated-form .field:nth-child(3) {
        animation-delay: 0.4s;
    }

    .animated-form .field:nth-child(4) {
        animation-delay: 0.5s;
    }

    .animated-form .field:nth-child(5) {
        animation-delay: 0.6s;
    }

    .animated-form .field:nth-child(6) {
        animation-delay: 0.7s;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Form Button Styling */
    .animated-buttons {
        margin-top: 20px;
        animation: fadeIn 1s ease-in-out;
    }

    .animated-button {
        display: inline-block;
        padding: 12px 20px;
        text-transform: uppercase;
        font-weight: bold;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .animated-button:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Adjusting field spacing */
    .animated-field {
        margin-bottom: 15px;
    }
</style>
