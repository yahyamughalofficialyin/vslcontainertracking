<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    
    if (isset($_GET['id'])) { // Use isset to check if 'id' is present in the URL
        $id = $_GET['id']; // Secure the input to prevent SQL injection
    ?>
    <title><?php echo 'Tracking Results For ' . $id ?></title>
    <?php } else{ ?>
        <title>No Container Number Found</title>
        <?php } ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: #8C9EFF;
            background-repeat: no-repeat;
        }

        .card {
            z-index: 0;
            background-color: #ECEFF1;
            padding-bottom: 20px;
            margin-top: 90px;
            margin-bottom: 90px;
            border-radius: 10px;
        }

        .top {
            padding-top: 40px;
            padding-left: 13% !important;
            padding-right: 13% !important;
        }

        /*Icon progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: #455A64;
            padding-left: 0px;
            margin-top: 30px;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 13px;
            width: 50%;
            float: left;
            position: relative;
            font-weight: 400;
        }

        #progressbar .step0:before {
            font-family: FontAwesome;
            content: "\f10c";
            color: #fff;
        }

        #progressbar li:before {
            width: 40px;
            height: 40px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            background: #C5CAE9;
            border-radius: 50%;
            margin: auto;
            padding: 0px;
        }

        /*ProgressBar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 12px;
            background: #C5CAE9;
            position: absolute;
            left: 0;
            top: 16px;
            z-index: -1;
        }

        #progressbar li:last-child:after {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            position: absolute;
            left: -50%;
        }

        #progressbar li:nth-child(2):after,
        #progressbar li:nth-child(3):after {
            left: -50%;
        }

        #progressbar li:first-child:after {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            position: absolute;
            left: 50%;
        }

        #progressbar li:last-child:after {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        #progressbar li:first-child:after {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        /*Color number of the step and the connector before it*/
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #651FFF;
        }

        #progressbar li.active:before {
            font-family: FontAwesome;
            content: "\f00c";
        }

        .icon {
            width: 60px;
            height: 60px;
            margin-right: 15px;
        }

        .icon-content {
            padding-bottom: 20px;
        }

        @media screen and (max-width: 992px) {
            .icon-content {
                width: 50%;
            }
        }
    </style>
</head>

<body>
    <?php
    include "admin/v3.21.0/config.php";

    if (isset($_GET['id'])) { // Use isset to check if 'id' is present in the URL
        $id = mysqli_real_escape_string($conn, $_GET['id']); // Secure the input to prevent SQL injection

        // Use double quotes or single quotes for the SQL query
        $query = "SELECT * FROM container WHERE ContainerNo='$id'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $status = $row['Status'];
            $pol = $row['POL'];
            $pod = $row['POD'];
            $viaport = $row['VIAPORT'];
            $indate = new DateTime($row['GateIn']);
            $gatein = $indate->format('jS F, Y (l) \a\t g:i A');
            $outdate = new DateTime($row['GateOut']);
            $gateout = $outdate->format('jS F, Y (l) \a\t g:i A');
    ?>

            <div class="container px-1 px-md-4 py-5 mx-auto">
                <div class="card">
                    <div class="row d-flex justify-content-between px-3 top">
                        <div class="d-flex">
                            <a class="fa fa-home" href="index.php" aria-hidden="true" style="width: 45px; height: 45px; text-decoration: none; color: #fff; background-color: #651FFF; margin-right: 5px ; border-radius: 100%; padding-left: 5px; padding-top: 3px; font-size: 36px; "></a>
                            <h5 class="mt-2">ORDER <span class="text-primary font-weight-bold">#<?php echo $id; ?></span></h5>
                        </div>
                        <div class="d-flex flex-column text-sm-right">
                            <p class="mb-0">VIA PORT <span></span></p>
                            <p><span class="font-weight-bold"><?php echo $viaport; ?></span></p>
                        </div>
                    </div>
                    <?php if ($status == 'In Queue') { ?>
                        <div class="mt-5 mb-5 row d-flex justify-content-center">
                            <h1 class="text text-primary mt-5 mb-5">
                                <i class="fa fa-spinner fa-spin" aria-hidden="true"></i> In Queue
                            </h1>
                        </div>
                    <?php } else { ?>
                        <!-- Add class 'active' to progress -->
                        <div class="row d-flex justify-content-center">
                            <div class="col-12">

                                <ul id="progressbar" class="text-center">
                                    <li class="<?php if (($status == 'loaded') || ($status == 'discharged')) { ?> active <?php } ?> step0"></li>
                                    <li class="<?php if ($status == 'discharged') { ?>active <?php } ?> step0"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row justify-content-between top">
                            <div class="row d-flex icon-content">
                                <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                                <div class="d-flex flex-column">
                                    <p class="font-weight-bold">Loaded<br>
                                    <p><?php echo $gatein; ?></p>
                                    </p>
                                    </p>
                                </div>
                            </div>
                            <div class="row d-flex icon-content">
                                <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                                <div class="d-flex flex-column">
                                    <p class="font-weight-bold">Discharged<br>
                                    <p>
                                        <?php
                                        if ($status == 'discharged') {
                                            echo $gateout;
                                        } else {
                                            echo 'Not Discharged Yet';
                                        }
                                        ?>
                                    </p>
                                    </p>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
                <div class="card">

                    <div class="table-responsive scrollbar">
                        <table class="table table-bordered table-striped fs-10 mb-0">
                            <thead class="bg-200">
                                <tr>
                                    <th class="text-900 sort" data-sort="containerno">Container Number</th>
                                    <th class="text-900 sort" data-sort="containerno">Status</th>
                                    <th class="text-900 sort" data-sort="loading">Loading Time</th>
                                    <th class="text-900 sort" data-sort="discharge">Port of Loading</th>
                                    <th class="text-900 sort" data-sort="discharge">Via Port</th>
                                    <?php
                                    if ($status == 'discharged') { ?>
                                        <th class="text-900 sort" data-sort="discharge">Discharge Time</th>
                                        <th class="text-900 sort" data-sort="discharge">Port of Discharging</th>
                                    <?php } ?>

                                </tr>
                            </thead>
                            <tbody class="list" id="ContainerTable">
                                <td><?php echo $id ?></td>
                                <td><?php echo ucfirst($status) ?></td>
                                <td><?php echo $gatein ?></td>
                                <td><?php echo $pol ?></td>
                                <td><?php echo $viaport ?></td>
                                <?php
                                if ($status == 'discharged') { ?>
                                    <td><?php echo $gateout ?></td>
                                    <td><?php echo $pod ?></td>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    <?php
        } else {
            echo '
            <div class="container px-1 px-md-4 pt-5 pb-5 py-5 mx-auto">
                <div class="card pt-5 pb-5">
                <div class="row d-flex justify-content-center">
            <h1 class="text text-warning mt-5 mb-5">Invalid Container Number.</h1>
            </div>
            </div>
            </div>';
            $containerNo = $pol = $pod = $viaport = $finaldestination = $gatein = null;
        }
    } else {
        echo '
            <div class="container px-1 px-md-4 pt-5 pb-5 py-5 mx-auto">
                <div class="card pt-5 pb-5">
                <div class="row d-flex justify-content-center">
            <h1 class="text text-danger mt-5 mb-5">No Container Number Found.</h1>
            </div>
            </div>
            </div>';
        $containerNo = $pol = $pod = $viaport = $finaldestination = $gatein = null;
    }
    ?>




    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>