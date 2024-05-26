<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Contact Us</title>
    <link rel="icon" href="img/logo.jpg" type="image/x-icon">
    <style>
        .icon-badge-group .icon-badge-container {
            display: inline-block;
        }
        .icon-badge-container {
            position: absolute;
        }
        .icon-badge-icon {
            font-size: 30px;
            color: rgb(0 0 0 / 50%);
            position: relative;
        }
        .icon-badge {
            background-color: #979797;
            font-size: 10px;
            color: white;
            text-align: center;
            width: 15px;
            height: 15px;
            border-radius: 49%;
            position: relative;
            top: -35px;
            left: 17px;
        }
        .footer.container-fluid.bg-dark.text-light {
            position: fixed;
            bottom: 0;
        }
        .contact2 {
            font-family: "Montserrat", sans-serif;
            color: #8d97ad;
            font-weight: 300;
            background-position: center top;
        }
        .contact2 h1, .contact2 h2, .contact2 h3, .contact2 h4, .contact2 h5, .contact2 h6 {
            color: #3e4555;
        }
        .contact2 .font-weight-medium {
            font-weight: 500;
        }
        .contact2 .subtitle {
            color: #8d97ad;
            line-height: 24px;
        }
        .contact2 .bg-image {
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            position: relative;
            display: flex;
        }
        .contact2 .card.card-shadow {
            box-shadow: 0px 0px 30px rgba(61, 109, 214, 0.774);
        }
        .contact2 .detail-box .round-social {
            margin-top: 100px;
        }
        .contact2 .round-social a {
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            margin: 0 7px;
            padding: 11px 12px;
        }
        .contact2 .contact-container .links a {
            color: #8d97ad;
        }
        .contact2 .contact-container {
            position: relative;
            top: 107px;
        }
        .contact2 .btn-danger-gradiant {
            background: #ff4d7e;
            background: -webkit-linear-gradient(legacy-direction(to right), #ff4d7e 0%, #ff6a5b 100%);
            background: -webkit-gradient(linear, left top, right top, from(#ff4d7e), to(#ff6a5b));
            background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
            background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
            background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
        }
        .contact2 .btn-danger-gradiant:hover {
            background: #ff6a5b;
            background: -webkit-linear-gradient(legacy-direction(to right), #ff6a5b 0%, #ff4d7e 100%);
            background: -webkit-gradient(linear, left top, right top, from(#ff6a5b), to(#ff4d7e));
            background: -webkit-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
            background: -o-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
            background: linear-gradient(to right, #ff6a5b 0%, #ff4d7e 100%);
        }
    </style>
</head>
<body>
<?php include 'partials/_dbconnect.php'; ?>
<?php include 'partials/_nav.php'; ?>

<div class="contact2" style="background-image:url(img/map.jpg);height: 400px;" id="contact">
    <div class="container">
        <div class="row contact-container justify-content-center">
            <div class="col-lg-12">
                <div class="card card-shadow border-0 mb-4">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="contact-box p-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="title">Contact Us</h4>
                                    </div>
                                    <?php if ($loggedin) { ?>
                                        <div class="col-lg-12 text-center">
                                            <div class="icon-badge-container mx-1" style="padding-left: 167px;">
                                                <a href="#" data-toggle="modal" data-target="#adminReply"><i class="far fa-envelope icon-badge-icon"></i></a>
                                                <div class="icon-badge"><b><span id="totalMessage">0</span></b></div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <?php
                                $passSql = "SELECT * FROM users WHERE id='$userId'";
                                $passResult = mysqli_query($conn, $passSql);

                                if ($passResult && mysqli_num_rows($passResult) > 0) {
                                    $passRow = mysqli_fetch_assoc($passResult);
                                    $email = $passRow['email'];
                                    $phone = $passRow['phone'];
                                } else {
                                    $email = ''; // Default value if no user found
                                    $phone = ''; // Default value if no user found
                                }
                                ?>
                                <form action="partials/_manageContactUs.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mt-3">
                                                <b><label for="email">Email:</label></b>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required value="<?php echo $email ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-3">
                                                <b><label for="phone">Phone No:</label></b>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon">+63</span>
                                                    </div>
                                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number" required value="<?php echo $phone ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <b><label for="message">Message:</label></b>
                                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter Your Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-danger-gradiant mt-3">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 bg-image" style="background-image:url();">
                            <div class="detail-box p-4">
                                <h5 class="text-white font-weight-light mb-3">ADDRESS</h5>
                                <p class="text-white op-7">123 Street, City, Country</p>
                                <h5 class="text-white font-weight-light mb-3 mt-4">CALL US</h5>
                                <p class="text-white op-7">+63 123 456 789</p>
                                <h5 class="text-white font-weight-light mb-3 mt-4">EMAIL US</h5>
                                <p class="text-white op-7">support@example.com</p>
                                <div class="round-social light">
                                    <a href
