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
            <h1 class="animated-title">Gift Sent</h1>

            <div class="ui segment animated-table">
                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>Gift ID</th>
                            <th>Child ID</th>
                            <th>Type</th>
                            <th>Sending Date</th>
                            <th>Sender Name</th>
                            <th>Sender Email</th>
                            <th>Sender Phone</th>
                            <th>Sender Address</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $sql = "SELECT * FROM gift";
                            $result = $conn->query($sql);
    
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                $unformated = $row['sending_date'];
                                $formateddate = date("d-m-Y", strtotime($unformated));
                        ?>

                        <tr class="animated-row">
                            <td><?php echo $row['gift_id']; ?></td>
                            <td><?php echo $row['cid']; ?></td>
                            <td><?php echo $row['gift_type']; ?></td>
                            <td><?php echo $formateddate; ?></td>
                            <td><?php echo $row['sender_name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['sender_address']; ?></td>
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
</div>

<?php include './admin_components/admin_footer.php' ?>

<style>
    /* Font and Animation Styles */
    .animated-title {
        font-size: 36px;
        font-weight: bold;
        color: #1a1a1a;
        text-align: center;
        animation: fadeIn 1.5s ease-in-out;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Table and Row Animations */
    .animated-table {
        animation: fadeInTable 1.5s ease-out forwards;
    }

    @keyframes fadeInTable {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animated-row {
        animation: fadeInRow 1s ease-in-out forwards;
    }

    @keyframes fadeInRow {
        0% {
            opacity: 0;
            transform: translateX(-10px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Table Styling */
    .ui.celled.table {
        border: 1px solid #ddd;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        background-color: #f9f9f9;
    }

    .ui.celled.table th, .ui.celled.table td {
        padding: 15px;
        text-align: left;
        color: #333;
        font-size: 14px;
        font-family: 'Arial', sans-serif;
    }

    .ui.celled.table th {
        background-color: #f1f1f1;
        font-weight: bold;
        color: #555;
    }

    .ui.celled.table tr:nth-child(even) {
        background-color: #fafafa;
    }

    .ui.celled.table tr:hover {
        background-color: #f0f0f0;
        cursor: pointer;
    }

    /* Responsive Styling for Mobile */
    @media (max-width: 768px) {
        .ui.celled.table {
            font-size: 12px;
        }

        .animated-title {
            font-size: 28px;
        }
    }
</style>
