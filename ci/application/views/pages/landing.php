<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>YoAmar | Register now</title>
    <link rel="stylesheet" href="<?= asset_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= asset_url('fonts/fontawesome-all.min.css'); ?>">
</head>

<body class="text-white">
    <div class="d-flex d-xl-flex justify-content-center" style="height: 100vh;width: 100%;background-image: url(&quot;https://images.pexels.com/photos/1095814/pexels-photo-1095814.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260&quot;);">
        <div style="position: absolute;width: 100%;height: 100%;background-color: rgba(0,0,0,0.25);"></div>
        <div class="container d-flex flex-column justify-content-center align-items-center" style="z-index: 999;">

            <?php 
                if($submit_status !== NULL): 
                    $_alert_text = $submit_status ? 'Successfully added you to the list' : 'Failed to add you to the list';
            ?>
            <div class="alert font-weight-light" role="alert" style="background-color: transparent;border: 1px solid white;"><span><strong><?= $_alert_text; ?></strong></span></div>
            <?php
                else:
                    echo form_open('',array(
                        'method'=>'POST',
                        'class'=>'d-flex flex-column justify-content-center align-items-center p-4 p-sm-5',
                        'style'=>'min-width: 20rem;max-width: 30rem;'
                    ));
            ?>
            <div>
                <p class="text-center"><img class="img-fluid" src="<?= asset_url('img/logo.png'); ?>"
                        alt="Yoamar logo"></p>
            </div>
            <h1>Be the first to know</h1>
            <h4 class="font-weight-light" style="line-height: 150%;">Don't worry, we won't spam you. We'll send you an
                email once we go live.&nbsp;</h4>
            <div class="form-group w-100 ">
                <input class="form-control py-3" name="email" type="email" placeholder="Email Address" style="background-color: #ffffff;border-color: white;">
            </div>
            <div class="form-group w-100">
                <button class="btn btn-primary btn-block btn-lg py-3 font-weight-light" type="submit">SIGN ME UP</button>
            </div>
            <p class="lead">We ship internationally*</p>
            <?php 
                echo form_close(); 
             endif;
            ?>
            <div class="form-group">
                <p class="font-weight-light">In the mean time, you can find us on your favorite social media</p>
                <div class="row pb-5">
                    <div class="col-4 mx-auto"><a class="text-white" href="https://www.facebook.com/YoAMarLtd"><i class="fab fa-facebook-square fa-3x"></i></a></div>
                    <div class="col-4 mx-auto"><a class="text-white" href="https://www.instagram.com/yoamarl"><i class="fab fa-instagram fa-3x"></i></a></div>
                    <div class="col-4 mx-auto"><a class="text-white" href="https://twitter.com/yoamarl"><i class="fab fa-twitter-square fa-3x"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
