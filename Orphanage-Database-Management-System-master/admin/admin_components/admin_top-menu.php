<div class="ui black inverted menu animate-menu" style="position: relative; overflow: hidden;">
    <div class="header item" style="font-size: 20px; font-weight: bold; color: #ffae42;">
        Orphan Foundation Development
    </div>
    <a class="item" href="index.php" style="color: white; text-transform: uppercase;">
        Home
    </a>
    <div class="right menu">
        <?php if (empty($_SESSION['user_id'])) { ?>
            <a href="login.php" class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/login.php" ? "active" : ""); ?>" 
               style="color: white; text-transform: uppercase;">
                Login
            </a>
        <?php } else { ?>
            <a href="../logout.php" class="item" style="color: white; text-transform: uppercase;">
                Logout
            </a>
        <?php } ?>
    </div>
</div>

<style>
    /* Animation for the Menu Container */
    .animate-menu {
        animation: slide-in-once 1s ease-in-out forwards;
    }

    @keyframes slide-in-once {
        0% {
            transform: translateY(-50px);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Hover Effect for Menu Items */
    .menu .item {
        position: relative;
        overflow: hidden;
        padding: 10px 15px;
        transition: color 0.3s ease;
    }

    .menu .item:hover {
        color: #ffae42 !important;
    }

    .menu .item:hover::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: #ffae42;
        transition: all 0.3s ease-in-out;
        transform: translateX(-50%);
    }

    .menu .item:hover::before {
        width: 100%;
    }
</style>
