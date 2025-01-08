<?php include './components/header.php'; ?>

<div class="ui container">

    <?php include './components/top-menu.php'; ?>

    <div class="ui grid">
        <?php include './components/side-menu.php'; ?>
        
        <!-- Right Content -->
        <div class="twelve wide column">
            <h1 class="animated-title">HOME</h1>
            <h3 class="animated-subtitle">Child Care & Development Foundation</h3>
            <p class="animated-text"><strong>CCDF</strong> is a non-profit, non-government and voluntary organization committed to the care & development and voluntary organization committed to the care and development of the underprivileged children.</p>
            <p class="animated-text"><strong>CCDF is a group</strong> of qualified, hardworking, dedicated, like-minded people trying to make a difference in the life of the underrepresented, disadvantaged and marginalized sections of society. It has been established to work as a platform to channelize and make optimum use of the resources and infrastructure available and people's desire to give back to society a bit of what they owe to it.</p>
            <p class="animated-text"><strong>It is our effort</strong> at CCDF to guide and motivate people to use their resources in a constructive way in changing the lives of these street children.</p>
            <p class="animated-text"><strong>We are working</strong> in the field of education and overall development of destitute children by providing them with an opportunity to realize their full potential and lead a dignified and respectable life.</p>

            <!-- Animated Images -->
            <div class="ui medium center aligned images" style="text-align: center;">
                <img class="ui medium rounded image animated-image" src="./img/children-1.jpg" alt="Children Image 1">
                <img class="ui medium rounded image animated-image" src="./img/children-2.jpg" alt="Children Image 2">
            </div>
    
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

    h1.animated-title, h3.animated-subtitle {
        font-family: 'Arial', sans-serif;
        color: #2c3e50;
        text-align: center;
        animation: fadeInUp 1.5s ease-out forwards;
    }

    h3.animated-subtitle {
        font-size: 1.6em;
        font-weight: lighter;
        margin-top: 10px;
        color: #e67e22;
    }

    p.animated-text {
        font-family: 'Arial', sans-serif;
        font-size: 1.2em;
        color: #34495e;
        line-height: 1.6;
        text-align: justify;
        animation: fadeInUp 2s ease-out forwards;
        opacity: 0;
    }

    /* Image Animation */
    .animated-image {
        animation: fadeIn 2s ease-out forwards;
        opacity: 0;
        margin: 10px;
    }

    /* Image Container Animation */
    .ui.images {
        display: flex;
        justify-content: center;
        margin-top: 30px;
        opacity: 0;
        animation: fadeInUp 1.5s ease-out forwards;
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

    /* Spacing and Padding Adjustments */
    .p-20 {
        padding: 20px;
    }
</style>
