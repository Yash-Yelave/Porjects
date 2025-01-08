<!-- Left menu -->
<div class="four wide column" id="example1">
    <div class="ui secondary vertical pointing menu animate-side-menu">
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/index.php" ? "active" : "");?>" href="index.php">Home</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/child-gallery-sponsored.php" ? "active" : "");?>" href="child-gallery-sponsored.php">Child Gallery</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/program.php" ? "active" : "");?>" href="program.php">Programs</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/donation.php" ? "active" : "");?>" href="donation.php">Donation</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/photo-gallery.php" ? "active" : "");?>" href="photo-gallery.php">Photo Gallery</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/feedback-form.php" ? "active" : "");?>" href="feedback-form.php">FeedBack</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/contact-us.php" ? "active" : "");?>" href="contact-us.php">Contact Us</a>
    </div>
</div>

<style>
    /* Slide-in animation for the side menu */
    .animate-side-menu {
        animation: slide-in 0.5s ease-out forwards;
    }

    @keyframes slide-in {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    /* Styling for the menu */
    .ui.secondary.vertical.pointing.menu .item {
        padding: 10px 15px;
        color: #555555; /* Minimal gray font color */
        text-transform: uppercase;
        font-weight: bold;
        transition: color 0.3s ease, background-color 0.3s ease;
    }

    .ui.secondary.vertical.pointing.menu .item:hover {
        color: #fff; /* White text on hover */
        background-color: #f0f0f0; /* Subtle light gray background on hover */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Light shadow effect */
    }

    .ui.secondary.vertical.pointing.menu .active {
        background-color: #d1d1d1; /* Soft light gray for active item */
        color: #333333; /* Dark gray text on active */
    }
</style>
