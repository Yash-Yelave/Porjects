<?php include './admin_components/admin_header.php' ?>

<div class="ui container">

    <?php include './admin_components/admin_top-menu.php' ?>

    <div class="ui grid">
        <?php include './admin_components/admin_side-menu.php' ?>

        <!-- Right Content -->
        <div class="twelve wide column">
            <h1 class="animated-title">Administrator Dashboard</h1>
            <h3 class="animated-subtitle">Manage and Oversee Orphanage Activities</h3>

            <p class="animated-text">
                Welcome to the Administrator Dashboard. This platform provides you with powerful tools to manage the daily operations of the orphanage, including overseeing adoption requests, organizing events, and ensuring the welfare of every child. Your role is crucial in maintaining transparency, efficiency, and compassion in every task undertaken.
            </p>

            <p class="animated-text">
                Explore the sections below to access detailed management features. From tracking children’s progress to planning community-driven events, the dashboard helps you make informed and impactful decisions to improve the lives of the children under our care.
            </p>

            <!-- Quick Links Section -->
            <div class="ui segments">
                <div class="ui segment animated-fade">
                    <h3 class="animated-subtitle">Quick Links</h3>
                </div>
                <div class="ui segment animated-fade">
                    <div class="ui four column grid">
                        <div class="column">
                            <a href="./children.php" class="ui blue button fluid animated-button">Manage Children</a>
                        </div>
                        <div class="column">
                            <a href="./feedback.php" class="ui yellow button fluid animated-button">FeedBacks</a>
                        </div>
                        <div class="column">
                            <a href="./programs.php" class="ui red button fluid animated-button">Plan Programs</a>
                        </div>
                        <div class="column">
                            <a href="./donators.php" class="ui green button fluid animated-button">View Donators</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include './admin_components/admin_footer.php' ?>

<style>
    /* Admin Dashboard Styling */
    h1.animated-title, h3.animated-subtitle {
        font-family: 'Arial', sans-serif;
        color: #2c3e50;
        text-align: center;
        animation: fadeInUp 1.5s ease-out forwards;
    }

    h1.animated-title {
        font-size: 36px;
        font-weight: bold;
    }

    h3.animated-subtitle {
        font-size: 24px;
        font-weight: lighter;
        margin-top: 10px;
        color: #e67e22;
    }

    p.animated-text {
        font-family: 'Arial', sans-serif;
        font-size: 18px;
        color: #34495e;
        line-height: 1.6;
        text-align: justify;
        animation: fadeInUp 2s ease-out forwards;
        opacity: 0;
    }

    /* Button Hover Animations */
    .animated-button {
        transition: transform 0.4s ease, opacity 0.4s ease;
    }

    .animated-button:hover {
        transform: scale(1.1);
        opacity: 0.9;
    }

    /* Image Animation */
    .animated-image {
        animation: fadeIn 2s ease-out forwards;
        opacity: 0;
        margin: 10px;
    }

    /* Fade-In Animation for Segments */
    .animated-fade {
        animation: fadeInUp 1.2s ease-out;
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

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    /* Layout Improvements */
    .ui.container {
        margin-top: 20px;
    }

    .ui.grid {
        margin-top: 30px;
    }

    .ui.medium.images {
        display: flex;
        justify-content: center;
        margin-top: 30px;
        opacity: 0;
        animation: fadeInUp 1.5s ease-out forwards;
    }
</style>
