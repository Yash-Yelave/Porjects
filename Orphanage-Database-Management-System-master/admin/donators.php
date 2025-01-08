<?php include './admin_components/admin_header.php' ?>

<div class="ui container">

    <!-- Top Navigation Bar -->
    <?php include './admin_components/admin_top-menu.php' ?>

    <!-- BODY Content -->
    <div class="ui grid">
        <!-- Left menu -->
        <?php include './admin_components/admin_side-menu.php' ?>

        <!-- Right content -->
        <div class="twelve wide column">
            <h1 class="animated-title">Donators</h1>
            
            <!-- Table with improved styling -->
            <table class="ui celled table animated-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Program Name</th>
                        <th>Amount</th>
                        <th>Check No.</th>
                        <th>Bank Name</th>
                        <th>Place</th>
                        <th>Donator's Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM donation";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td data-label="ID"><?php echo $row['d_id']; ?></td>
                        <td data-label="Program"><?php echo $row['program']; ?></td>
                        <td data-label="Amount"><?php echo $row['amount']; ?></td>
                        <td data-label="Check No."><?php echo $row['checkno']; ?></td>
                        <td data-label="Bank Name"><?php echo $row['bank_name']; ?></td>
                        <td data-label="Place"><?php echo $row['place']; ?></td>
                        <td data-label="Donator's Name"><?php echo $row['d_name']; ?></td>
                        <td data-label="Email"><?php echo $row['email']; ?></td>
                        <td data-label="Phone"><?php echo $row['phone']; ?></td>
                        <td data-label="Address"><?php echo $row['d_address']; ?></td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

</div>

<?php include './admin_components/admin_footer.php' ?>

<style>
    /* Basic animation for title */
    .animated-title {
        font-size: 36px;
        font-weight: bold;
        text-align: center;
        color: #333;
        animation: fadeIn 2s ease-in-out;
    }

    /* Keyframe animation for fade-in */
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    /* Table animation and styling */
    .animated-table {
        animation: slide-in 0.8s ease-out forwards;
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }

    /* Animation for the table */
    @keyframes slide-in {
        0% { transform: translateX(-100%); opacity: 0; }
        100% { transform: translateX(0); opacity: 1; }
    }

    /* Table row hover effect */
    .ui.celled.table tr:hover {
        background-color: #f4f4f4;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
    }

    /* Table header styling */
    .ui.celled.table thead th {
        background-color: #333;
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        padding: 12px;
        text-align: center;
    }

    /* Table body cell styling */
    .ui.celled.table tbody td {
        padding: 10px 15px;
        text-align: center;
        font-size: 14px;
        color: #555;
        border: 1px solid #ddd;
    }

    /* Responsive styling for table */
    @media (max-width: 768px) {
        .ui.celled.table {
            width: 100%;
            display: block;
            overflow-x: auto;
        }

        .ui.celled.table td, .ui.celled.table th {
            display: block;
            text-align: left;
        }

        .ui.celled.table thead {
            display: none;
        }

        .ui.celled.table tr {
            margin-bottom: 10px;
        }

        .ui.celled.table tr:hover {
            background-color: #f9f9f9;
        }
    }
</style>
