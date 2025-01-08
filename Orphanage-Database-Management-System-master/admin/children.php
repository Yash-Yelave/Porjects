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
            <h1 class="animated-title">Children - Orphan</h1>

            <div class="table-wrapper animated-table">
                <table class="ui celled table animated-table-content">
                    <thead>
                        <tr>
                            <th>CID</th>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Year of Enrolled</th>
                            <th>Class</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $sql = "SELECT * FROM children";
                            $result = $conn->query($sql);
    
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                $unformated = $row['cdob'];
                                $formateddate = date("d-m-Y", strtotime($unformated));
                        ?>

                        <tr>
                            <td><?php echo $row['cid']; ?></td>
                            <td><?php echo $row['cname']; ?></td>
                            <td><?php echo $formateddate; ?></td>
                            <td><?php echo $row['cyoe']; ?></td>
                            <td><?php echo $row['cclass']; ?></td>
                        </tr>
                        
                        <?php
                                }
                            }
                        ?>

                    </tbody>
                    <tfoot class="full-width">
                        <tr>
                            <th colspan="5">
                                <a class="ui primary button animated-button" href="children-add.php">Add Children</a>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>

<?php include './admin_components/admin_footer.php' ?>

<style>
    /* Basic Font Styling */
    body, h1, h2, h3, h4, h5, h6, .item {
        font-family: 'Arial', sans-serif; /* Add your preferred font-family here */
        color: #333; /* Basic dark color for text */
    }

    /* Animation for Title */
    .animated-title {
        font-size: 36px;
        font-weight: bold;
        color: #000000; /* Changed title color to black */
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

    /* Table Styling */
    .animated-table {
        margin-top: 30px;
        animation: fadeIn 1.5s ease-in-out;
    }

    .animated-table-content thead {
        background-color: #f5f5f5;
        color: #333;
    }

    .animated-table-content th, .animated-table-content td {
        padding: 12px;
        text-align: center;
        font-size: 14px;
    }

    .animated-table-content tbody tr:hover {
        background-color: #f9f9f9;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Button Animation */
    .animated-button {
        display: inline-block;
        margin-top: 20px;
        background-color: #ffae42;
        color: white;
        text-transform: uppercase;
        font-weight: bold;
        padding: 12px 25px;
        border-radius: 5px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .animated-button:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }
</style>
