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
            <h1 class="animated-title">Contact Us</h1>

            <div class="contact-info animated-content">
                <p><strong>Address:</strong><br> FICTIONAL ORPHAN - Yuvodhaya 85, <br> 'D' Street, 7th Cross, Gandhinagar, <br> Bangalore 560009 Karnataka, India </p>

                <p><strong>Email:</strong> <a href="mailto:fictional@gmail.com" class="contact-link">fictional@gmail.com</a></p>
                <p><strong>Tel:</strong> <a href="tel:+918022555555" class="contact-link">+918022555555</a>, <a href="tel:+918022666666" class="contact-link">+918022666666</a></p>
            </div>

            <span class="p-20"></span>
        </div>
    </div>

</div>

<?php include './components/footer.php'; ?>

<style>
    /* Basic Page Styling */
    .ui.container {
        margin-top: 20px;
    }

    /* Animation for Title */
    .animated-title {
        font-size: 36px;
        font-weight: bold;
        text-align: center;
        color: #333;
        animation: fadeIn 1.5s ease-in-out;
    }

    /* Contact Info Styling */
    .contact-info {
        font-size: 18px;
        color: #444;
        line-height: 1.6;
        animation: fadeIn 1.5s ease-in-out;
        margin-top: 30px;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .contact-info p {
        margin-bottom: 15px;
    }

    .contact-link {
        color: #3498db;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .contact-link:hover {
        color: #2980b9;
        text-decoration: underline;
    }

    /* Spacing */
    .p-20 {
        padding: 20px;
    }

    /* Animation for content fadeIn */
    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    /* Responsive Design for Mobile */
    @media (max-width: 768px) {
        .animated-title {
            font-size: 28px;
        }

        .contact-info {
            padding: 15px;
            font-size: 16px;
        }
    }
</style>
