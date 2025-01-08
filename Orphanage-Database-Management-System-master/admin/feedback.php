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
            <h1 class="animated-title">Feed Back</h1>

            <div class="ui segment animated-table">
                <table class="ui celled table animated-table-content">
                    <thead>
                        <tr>
                            <th>Feed ID</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $sql = "SELECT * FROM feedback";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                        ?>

                        <tr class="animated-row">
                            <td><?php echo $row['feed_id']; ?></td>
                            <td><?php echo $row['full_name']; ?></td>
                            <td><?php echo $row['full_address']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['comment']; ?></td>
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
    /* Title Animation */
    .animated-title {
        font-size: 36px;
        font-weight: bold;
        color: black; /* Changed to black */
        text-align: center;
        animation: fadeIn 2s ease-in-out;
    }

    /* Table Animation */
    .animated-table {
        animation: slide-up 0.8s ease-out forwards;
    }

    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    @keyframes slide-up {
        0% {
            transform: translateY(20px);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Table Row Animation */
    .animated-row {
        animation: fadeInRow 1s ease-in-out forwards;
    }

    @keyframes fadeInRow {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    /* Styling for Table */
    .ui.table {
        font-family: 'Arial', sans-serif;
        margin-top: 20px;
    }

    .ui.table th {
        background-color: #f4f4f4;
        color: #333;
        text-transform: uppercase;
        font-weight: bold;
    }

    .ui.table td {
        color: #555;
        font-size: 14px;
    }

    /* Hover Effect for Table Rows */
    .ui.table tr:hover {
        background-color: #f9f9f9;
        transform: scale(1.02);
        transition: transform 0.3s ease-in-out;
    }

    .ui.segment {
        background-color: #f9f9f9;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
</style>
