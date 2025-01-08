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
            <h1 class="animated-title">Donations</h1>
            <h3 class="animated-subtitle">Support Orphan Care & Development</h3>
            <p class="animated-text"><strong>Orphan Care & Development Foundation</strong> relies on the generous support of individuals, organizations, and foundations to continue its mission of helping children. Your support is vital to provide them with the resources and opportunities they need.</p>
            <p class="animated-text"><strong>Join hands</strong> to uplift the lives of children, providing them education, healthcare, and a brighter future. Your donation is not just money, but a gift that can change lives.</p>

            <p class="animated-text"><strong>Cash donations</strong> can be made either personally or via an account payee Cheque / Draft. (All donations are Tax Exempted U/s 80G of Income Tax Act)</p>
            <p class="animated-text">For making DD/Cheque: Payable to - <strong>Orphan Care & Development Foundation</strong>, Hyderabad. Please send it to:</p>
            <p class="animated-text">Orphan Care & Development Foundation, A-88, Madhu Vihar, Pajagutta, Bengaluru - 560020. Ph: 080-55555555</p>
            
            <p><a class="fluid ui primary animated button" href="donation-form.php">Make Your Contribution</a></p>

            <strong class="animated-text">Donation Guidelines:</strong>
            <ul>
                <li>Rs.200/month – Nutrition at learning centre</li>
                <li>Rs.300/month – Nutrition & After-school support</li>
                <li>Rs.400/month – Complete package including health check-up, after-school support, festivals, etc.</li>
                <li>Rs.1000/month – Sensitization & Awareness Programs</li>
                <li>Rs.5000/month – Infrastructure development</li>
                <li>Rs.50000/month – Corpus Fund</li>
            </ul>

            <p class="animated-text"><strong>We respect the intentions of our donors and ensure that funds are used as per their designated purpose.</strong></p>

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

    /* Button Styling */
    .ui.primary.animated.button {
        background-color: #3498db;
        color: white;
        border-radius: 5px;
        text-align: center;
        padding: 15px 30px;
        font-size: 16px;
        transition: transform 0.3s, background-color 0.3s ease;
    }

    .ui.primary.animated.button:hover {
        transform: scale(1.05);
        background-color: #2980b9;
    }

    /* List Styling */
    ul {
        list-style-type: none;
        padding: 0;
    }

    ul li {
        padding-left: 20px;
        position: relative;
        margin-bottom: 10px;
    }

    ul li::before {
        content: '•';
        color: #3498db;
        position: absolute;
        left: 0;
        top: 0;
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

    /* Responsive Design */
    @media (max-width: 768px) {
        .animated-title {
            font-size: 28px;
        }

        .animated-subtitle {
            font-size: 1.4em;
        }

        .ui.primary.animated.button {
            width: 100%;
            padding: 12px;
        }
    }
</style>
