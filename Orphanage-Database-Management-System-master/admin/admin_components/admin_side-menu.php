<!-- Left menu -->
<div class="four wide column" id="example1">
    <div class="ui secondary vertical pointing menu animate-side-menu">
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/index.php" ? "active" : "");?>" href="index.php">Dashboard</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/children.php" ? "active" : "");?>" href="./children.php">Children</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/sponsorer.php" ? "active" : "");?>" href="./sponsorer.php">Sponsorers</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/donators.php" ? "active" : "");?>" href="donators.php">Donators</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/gift-sent.php" ? "active" : "");?>" href="gift-sent.php">Gift Sent</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/programs.php" ? "active" : "");?>" href="./programs.php">Programs</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/feedback.php" ? "active" : "");?>" href="feedback.php">Feedback</a>
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
