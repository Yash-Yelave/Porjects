<?php include './components/header.php'; ?>

<div class="ui container">

    <!-- Top Navigation Bar -->
    <?php include './components/top-menu.php'; ?>

    <!-- BODY Content -->
    <div class="ui grid">
        <!-- Left menu -->
        <?php include './components/side-menu.php'; ?>
        
        <!-- Right Content -->
        <div class="twelve wide column">
            <h1 class="animated-title">Our Programs</h1>
            
            <ol class="animated-list">
                <?php

                    $sql = "SELECT * FROM programs";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                ?>
                
                <li class="animated-item"><?php echo $row['program_title'] ?></li>
                <p class="animated-text"><?php echo $row['program_desc'] ?></p>

                <?php
                        }
                    }
                ?>
                
            </ol>

            <span class="p-20"></span>
        </div>
    </div>

</div>

<?php include './components/footer.php'; ?>

<style>
    /* General Layout Improvements */
    .ui.container {
        margin-top: 20px;
    }

    h1.animated-title {
        font-family: 'Arial', sans-serif;
        color: #2c3e50;
        text-align: center;
        animation: fadeInUp 1.5s ease-out forwards;
        font-size: 2.5em;
    }

    /* Animated List Styling */
    .animated-list {
        font-family: 'Arial', sans-serif;
        list-style-type: none;
        padding-left: 0;
        margin-top: 30px;
    }

    .animated-item {
        font-size: 1.3em;
        color: #34495e;
        font-weight: bold;
        margin-bottom: 10px;
        opacity: 0;
        animation: fadeInUp 2s ease-out forwards;
        animation-delay: 0.5s; /* Stagger animation for list items */
    }

    .animated-text {
        font-family: 'Arial', sans-serif;
        font-size: 1.1em;
        color: #7f8c8d;
        line-height: 1.6;
        text-align: justify;
        opacity: 0;
        animation: fadeInUp 2s ease-out forwards;
        animation-delay: 1s; /* Staggered animation */
    }

    /* Spacing and Padding Adjustments */
    .p-20 {
        padding: 20px;
    }

    /* Keyframes for animations */
    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        h1.animated-title {
            font-size: 2em;
        }

        .animated-item {
            font-size: 1.2em;
        }

        .animated-text {
            font-size: 1em;
        }
    }
</style>
