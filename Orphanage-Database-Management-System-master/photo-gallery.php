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
            <h1 class="animated-title">Photo Gallery</h1>
            <p class="animated-text"><strong>CCDF</strong> is a non-profit, non-government and voluntary organization committed to the care & development of the underprivileged children.</p>
            <p class="animated-text"><strong>CCDF is a group</strong> of qualified, hardworking, dedicated, like-minded people trying to make a difference in the lives of the underrepresented, disadvantaged, and marginalized sections of society. It has been established to work as a platform to channelize and make optimum use of available resources and infrastructure.</p>
            <p class="animated-text"><strong>Our effort</strong> at CCDF is to guide and motivate people to use their resources constructively in changing the lives of these street children.</p> 
            <p class="animated-text"><strong>We are working</strong> in the field of education and overall development of the destitute children by providing them with an opportunity to realize their full potential and lead a dignified and respectable life.</p>

            <h2 class="animated-header">AAKAR - the first step</h2>
            <div class="ui medium images animated-images">
                <img class="ui medium rounded image" src="img/orphan-gallery-1.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-2.png">
                <img class="ui medium rounded image" src="img/orphan-gallery-3.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-4.jpg">
            </div>

            <h2 class="animated-header">AHAR APURTI</h2>
            <div class="ui medium images animated-images">
                <img class="ui medium rounded image" src="img/orphan-gallery-5.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-6.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-7.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-8.jpg">
            </div>

            <h2 class="animated-header">AVSAR - a chance</h2>
            <div class="ui medium images animated-images">
                <img class="ui medium rounded image" src="img/orphan-gallery-9.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-10.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-11.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-12.jpg">
            </div>

            <h2 class="animated-header">Lakshya</h2>
            <div class="ui medium images animated-images">
                <img class="ui medium rounded image" src="img/orphan-gallery-13.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-14.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-15.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-16.jpg">
            </div>

            <h2 class="animated-header">PARIVARTAN - change of direction</h2>
            <div class="ui medium images animated-images">
                <img class="ui medium rounded image" src="img/orphan-gallery-17.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-18.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-19.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-20.jpg">
            </div>
            
            <h2 class="animated-header">UPHAAR - gift a smile</h2>
            <div class="ui medium images animated-images">
                <img class="ui medium rounded image" src="img/orphan-gallery-1.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-3.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-5.jpg">
                <img class="ui medium rounded image" src="img/orphan-gallery-7.jpg">
            </div>
            
            <h2 class="animated-header">RAKTHADHAAN - save a child</h2>
            <div class="ui medium images animated-images">
                <img class="ui medium rounded image" src="img/blooddonationcamp1.jpg">
                <img class="ui medium rounded image" src="img/blooddonationcamp2.jpg">
                <img class="ui medium rounded image" src="img/blooddonationcamp3.jpg">
                <img class="ui medium rounded image" src="img/blooddonationcamp4.jpg">
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

    /* Consistent Font Styling */
    .animated-title, .animated-header, .animated-text {
        font-family: 'Arial', sans-serif;
    }

    h1.animated-title {
        font-size: 2.5em;
        font-weight: bold;
        text-align: center;
        color: #2c3e50;
        animation: fadeInUp 1.5s ease-out forwards;
    }

    h2.animated-header {
        font-size: 1.8em;
        color: #34495e;
        font-weight: bold;
        margin-bottom: 20px;
        animation: fadeInUp 1.5s ease-out forwards;
    }

    p.animated-text {
        font-size: 1.2em;
        color: #7f8c8d;
        line-height: 1.6;
        text-align: justify;
        animation: fadeInUp 2s ease-out forwards;
        opacity: 0;
    }

    /* Image Hover Animation */
    .animated-images img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.4s ease, opacity 0.4s ease;
    }

    .animated-images img:hover {
        transform: scale(1.05);
        opacity: 0.9;
    }

    /* Image Grid Layout */
    .ui.medium.images {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
        margin-top: 20px;
    }

    @media (max-width: 768px) {
        .ui.medium.images {
            grid-template-columns: repeat(2, 1fr);
        }
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

    /* Spacing Adjustments */
    .p-20 {
        padding: 20px 0;
    }

    /* Footer Styling */
    .footer {
        padding-top: 30px;
        text-align: center;
        background-color: #f4f4f4;
        margin-top: 40px;
    }
</style>
