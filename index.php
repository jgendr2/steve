<?php

if($_POST['form_submit']==1) {
    require_once('sendxml.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom-theme/jquery-ui-1.8.21.custom.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script src="js/jquery.numeric.js"></script>
    <script src="js/jquery.maskedinput-1.3.min.js"></script>
    <script src="js/custom.js"></script>
</head>
<body>


<?php
    require_once('config.php');

    if(isset($_GET['store']) && !empty($_GET['store'])){
        $store = $_GET['store'];

        if (array_key_exists($store, $stores)) {
?>
            <div class="container">
                <div class="row">
                    <?php if($_POST['form_submit']==1) { ?>
                        <div class="alert alert-success">
                        <center>
                            <h2><?php echo $defaults[$stores[$store]['type']]['success_message']; ?></h2>
                        </center>
                        </div>
                    <?php } else { ?>

                        <div class="span4 nogap pushright">
                            <?php if($stores[$store]['has_promotion']) { ?>
                                <?php if($stores[$store]['promotion_image']=='') { ?>
                                    <img src="<?php echo IMAGE_FOLDER_PATH.$defaults[$stores[$store]['type']]['promotion_image'] ?>" />
                                <?php } else { ?>
                                    <img src="<?php echo IMAGE_FOLDER_PATH.$stores[$store]['promotion_image']; ?>" />
                                <?php } ?>
                            <?php } else { ?>
                                <img src="<?php echo IMAGE_FOLDER_PATH.$defaults[$stores[$store]['type']]['non_promotion_image']; ?>" />
                            <?php } ?>
                        </div>
                        <div class="span8 nogap">
                            <form id="lead_form" class="well" action="index.php?store=<?php echo $store; ?>" method=POST>
                                <div class="row">
                                    <div class="span4">
                                        <div class="control-group">
                                            <label class="control-label" for="name">Name</label>
                                            <div class="controls">
                                                <input type="text" class="span3" id="name" name="name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="pickup_zip">Pickup Zip</label>
                                            <div class="controls">
                                                <input type="text" class="span3 numeric" id="pickup_zip" name="pickup_zip" placeholder="">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="delivery_zip">Delivery Zip</label>
                                            <div class="controls">
                                               <input type="text" class="span3 numeric" id="delivery_zip" name="delivery_zip" placeholder="">
                                            </div>
                                        </div>
                                        <?php if($stores[$store]['has_promotion']) { ?>
                                            <input type="hidden" name="promo_code" value="<?php echo $stores[$store]['promo_code'] ?>" />
                                        <div class="control-group">
                                            <label class="control-label" for="optin" class="checkbox">
                                            <div class="controls">
                                                <input type="checkbox" id="optin" name="optin" checked="checked">
                                                <?php if($stores[$store]['promotion_text']=='') { ?>
                                                    <?php echo $defaults[$stores[$store]['type']]['promotion_text'] ?>
                                                <?php } else { ?>
                                                    <?php echo $stores[$store]['promotion_text']; ?>
                                                <?php } ?>
                                            </label>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="span3">
                                        <div class="control-group">
                                            <label class="control-label" for="email">Email</label>
                                            <div class="controls">
                                                <input type="text" class="span3" id="email" name="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="phone">Phone</label>
                                            <div class="controls">
                                                <input type="text" class="span3" id="phone" name="phone" placeholder="">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="move_date">Move Date</label>
                                            <div class="controls">
                                                <input type="text" class="span3" id="move_date" name="move_date" placeholder="">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="dwelling_type">Dwelling Type</label>
                                            <div class="controls">
                                                <select id="dwelling_type" name="dwelling_type">
                                                    <option value="">Select</option>
                                                    <option value="S1">Small Move (1000 lbs)</option>
                                                    <option value="S2">Small Move (2000 lbs)</option>
                                                    <option value="ST">Studio</option>
                                                    <option value="A1">1 Bdrm Apt.</option>
                                                    <option value="A2">2 Bdrm Apt.</option>
                                                    <option value="A3">3+ Bdrm Apt.</option>
                                                    <option value="H1">1 Bdrm House</option>
                                                    <option value="H2">2 Bdrm House</option>
                                                    <option value="H3">3 Bdrm House</option>
                                                    <option value="H4">4+ Bdrm House</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <hr style="margin:10px;">
                                    <div class="span4" style="padding-top:0; padding-bottom:0;">
                                        &nbsp;
                                        <input type="hidden" name="referral_code" value="<?php echo $stores[$store]['referral_code'] ?>" />
                                        <input type="hidden" name="form_submit" value="1" />
                                    </div>
                                    <div class="span3" style="padding-top:0; padding-bottom:0;">
                                        <button type="submit" class="btn btn-inverse btn-large">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php } ?>
                </div>
            </div> <!-- /container -->
<?php
        }else{
            echo "<h3>Oops! This page has not been configured properly.</h3><br />";
            echo "<b>Reason:</b>  $store is not a valid store in config.php";
        }

    }else{
        echo "<h3>Oops! This page has not been configured properly.</h3><br />";
        echo "<b>Reason:</b>  ?store= is not set in the page URL or is empty";
    }
?>


</body>
</html>