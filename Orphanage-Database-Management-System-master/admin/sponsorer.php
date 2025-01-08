<?php include './admin_components/admin_header.php' ?>

<div class="ui container animated-container">

    <!-- Top Navigation Bar -->
    <?php include './admin_components/admin_top-menu.php' ?>

    <!-- BODY Content -->
    <div class="ui grid">
        <!-- Left menu -->
        <?php include './admin_components/admin_side-menu.php' ?>

        <!-- Right content -->
        <div class="twelve wide column">
            <h1 class="animated-title">Sponsorers</h1>

            <?php
                if(isset($_GET['del']) && $_GET['cid']) {
                    $spn_id = $_GET['del'];
                    $cid = $_GET['cid'];

                    $sql = "DELETE FROM sponsorer WHERE spn_id = $spn_id";
                    $del_result = mysqli_query($conn, $sql);

                    $sql2 = "UPDATE children SET sponsored=0 WHERE cid='$cid' ";
                    $update_result = mysqli_query($conn, $sql2);
                }
            ?>

            <table class="ui celled table animated-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Sponsored Date</th>
                        <th>No of years</th>
                        <th>Email</th>
                        <th>Amount</th>
                        <th>Check No.</th>
                        <th>Children ID</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $sql = "SELECT * FROM sponsorer";
                        $result = $conn->query($sql);
        
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                            $unformated = $row['spnd_date'];
                            $formateddate = date("d-m-Y", strtotime($unformated));
                    ?>

                    <tr class="animated-row">
                        <td><?php echo $row['spn_firstname']; ?></td>
                        <td><?php echo $formateddate; ?></td>
                        <td><?php echo $row['spn_noofyears']; ?></td>
                        <td><?php echo $row['spn_email']; ?></td>
                        <td><?php echo $row['spn_amount']; ?></td>
                        <td><?php echo $row['spn_checkno']; ?></td>
                        <td><?php echo $row['cid']; ?></td>
                        <td>
                            <a 
                                onclick="return confirm('Are you sure you want to delete this post and all its comments?');" 
                                class="ui red button animated-button"
                                href="sponsorer.php?del=<?php echo $row['spn_id']; ?>&cid=<?php echo $row['cid']; ?>">
                                Delete
                            </a>
                        </td>
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
    /* Basic Font Styling */
    body, h1, h2, h3, h4, h5, h6, .item {
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    /* Animation for Title */
    .animated-title {
        font-size: 36px;
        font-weight: bold;
        color: #000000;
        text-align: center;
        animation: fadeIn 2s ease-in-out;
    }

    /* Slide-in Animation for Table and Content */
    .animated-container {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Animation for Table Rows */
    .animated-table .animated-row {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.5s forwards;
        animation-delay: 0.2s;
    }

    .animated-table .animated-row:nth-child(2) {
        animation-delay: 0.3s;
    }

    .animated-table .animated-row:nth-child(3) {
        animation-delay: 0.4s;
    }

    .animated-table .animated-row:nth-child(4) {
        animation-delay: 0.5s;
    }

    .animated-table .animated-row:nth-child(5) {
        animation-delay: 0.6s;
    }

    .animated-table .animated-row:nth-child(6) {
        animation-delay: 0.7s;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Button Styling and Animation */
    .animated-button {
        display: inline-block;
        padding: 12px 20px;
        text-transform: uppercase;
        font-weight: bold;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .animated-button:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
