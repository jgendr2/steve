<?php

    $stores = array();
    $defaults = array();

    //////DEFAULTS//////

    define('IMAGE_FOLDER_PATH', 'images/');

    $defaults['avl']['logo_image'] = '';
    $defaults['avl']['link_color'] = '';
    $defaults['avl']['promotion_text'] = "Yes, I would like to receive a 10% off Lowe's coupon.";
    $defaults['avl']['promotion_image'] = 'allied-lowes.png';  //<<<< ONLY NEED THE FILE NAME
    $defaults['avl']['non_promotion_image'] = 'avl-non-promotion.jpg';  //<<<< ONLY NEED THE FILE NAME
    $defaults['avl']['success_message'] = 'Thank you! Someone from Allied Van Lines will be in contact with you soon.';

    $defaults['navl']['logo_image'] = '';
    $defaults['navl']['link_color'] = '';
    $defaults['navl']['promotion_text'] = "Yes, I would like to receive a 10% off Lowe's coupon.";
    $defaults['navl']['promotion_image'] = 'northamerican-lowes.png';  //<<<< ONLY NEED THE FILE NAME
    $defaults['navl']['non_promotion_image'] = 'navl-non-promotion.jpg';  //<<<< ONLY NEED THE FILE NAME
    $defaults['navl']['success_message'] = 'Thank you! Someone from North American Van Lines will be in contact with you soon.';
    ////////////////////


    //a1
    //facebook url should be index.php?store=a1
    $stores['a1']['type'] = 'navl';  //can be 'avl' or 'navl'
    $stores['a1']['has_promotion'] = TRUE;  //can be TRUE or FALSE
    $stores['a1']['promo_code'] = '';
    $stores['a1']['referral_code'] = 'FBK16050';
    $stores['a1']['promotion_text'] = '';  //leave empty for default or 'insert the image file name here'
    $stores['a1']['promotion_image'] = '';  //leave empty for default or 'insert the image file name here'

    //allam
    //facebook url should be index.php?store=allam
    $stores['allam']['type'] = 'avl';  //can be 'avl' or 'navl'
    $stores['allam']['has_promotion'] = TRUE;  //can be TRUE or FALSE
    $stores['allam']['promo_code'] = '';
    $stores['allam']['referral_code'] = 'FBK00660';
    $stores['allam']['promotion_text'] = '';  //leave empty for default or 'insert the image file name here'
    $stores['allam']['promotion_image'] = '';  //leave empty for default or 'insert the image file name here'

    //belt
    //facebook url should be index.php?store=belt
    $stores['belt']['type'] = 'navl';  //can be 'avl' or 'navl'
    $stores['belt']['has_promotion'] = TRUE;  //can be TRUE or FALSE
    $stores['belt']['promo_code'] = '';
    $stores['belt']['referral_code'] = 'FBK11100';
    $stores['belt']['promotion_text'] = '';  //leave empty for default or 'insert the image file name here'
    $stores['belt']['promotion_image'] = '';  //can be '' or 'insert the image file name here'

    //ca
    //facebook url should be index.php?store=ca
    $stores['ca']['type'] = 'avl';  //can be 'avl' or 'navl'
    $stores['ca']['has_promotion'] = TRUE;  //can be TRUE or FALSE
    $stores['ca']['promo_code'] = '';
    $stores['ca']['referral_code'] = 'FBK03758';
    $stores['ca']['promotion_text'] = '';  //leave empty for default or 'insert the image file name here'
    $stores['ca']['promotion_image'] = '';  //leave empty for default or 'insert the image file name here'

    //dehaven
    //facebook url should be index.php?store=dehaven
    $stores['dehaven']['type'] = 'navl';  //can be 'avl' or 'navl'
    $stores['dehaven']['has_promotion'] = TRUE;  //can be TRUE or FALSE
    $stores['dehaven']['promo_code'] = '';
    $stores['dehaven']['referral_code'] = 'FBK14020';
    $stores['dehaven']['promotion_text'] = '';  //leave empty for default or 'insert the image file name here'
    $stores['dehaven']['promotion_image'] = '';  //can be '' or 'insert the image file name here'

    //excel
    //facebook url should be index.php?store=excel
    $stores['excel']['type'] = 'avl';  //can be 'avl' or 'navl'
    $stores['excel']['has_promotion'] = TRUE;  //can be TRUE or FALSE
    $stores['excel']['promo_code'] = 'TEST';
    $stores['excel']['referral_code'] = 'FBK06100';
    $stores['excel']['promotion_text'] = '';  //leave empty for default or 'insert the image file name here'
    $stores['excel']['promotion_image'] = '';  //leave empty for default or 'insert the image file name here'

    //ferree
    //facebook url should be index.php?store=ferree
    $stores['ferree']['type'] = 'navl';  //can be 'avl' or 'navl'
    $stores['ferree']['has_promotion'] = TRUE;  //can be TRUE or FALSE
    $stores['ferree']['promo_code'] = '';
    $stores['ferree']['referral_code'] = 'FBK11380';
    $stores['ferree']['promotion_text'] = '';  //leave empty for default or 'insert the image file name here'
    $stores['ferree']['promotion_image'] = '';  //can be '' or 'insert the image file name here'

    //halllane
    //facebook url should be index.php?store=halllane
    $stores['halllane']['type'] = 'navl';  //can be 'avl' or 'navl'
    $stores['halllane']['has_promotion'] = TRUE;  //can be TRUE or FALSE
    $stores['halllane']['promo_code'] = '';
    $stores['halllane']['referral_code'] = 'FBK18650';
    $stores['halllane']['promotion_text'] = '';  //leave empty for default or 'insert the image file name here'
    $stores['halllane']['promotion_image'] = '';  //can be '' or 'insert the image file name here'

    //na
    //facebook url should be index.php?store=na
    $stores['na']['type'] = 'avl';  //can be 'avl' or 'navl'
    $stores['na']['has_promotion'] = TRUE;  //can be TRUE or FALSE
    $stores['na']['promo_code'] = '';
    $stores['na']['referral_code'] = 'FCBKNVL';
    $stores['na']['promotion_text'] = '';  //leave empty for default or 'insert the image file name here'
    $stores['na']['promotion_image'] = '';  //can be '' or 'insert the image file name here'

    //allied
    //facebook url should be index.php?store=allied
    $stores['allied']['type'] = 'avl';  //can be 'avl' or 'navl'
    $stores['allied']['has_promotion'] = TRUE;  //can be TRUE or FALSE
    $stores['allied']['promo_code'] = '';
    $stores['allied']['referral_code'] = 'FCBKAVL';
    $stores['allied']['promotion_text'] = '';  //leave empty for default or 'insert the image file name here'
    $stores['allied']['promotion_image'] = '';  //can be '' or 'insert the image file name here'

    //prestige
    //facebook url should be index.php?store=prestige
    $stores['prestige']['type'] = 'avl';  //can be 'avl' or 'navl'
    $stores['prestige']['has_promotion'] = TRUE;  //can be TRUE or FALSE
    $stores['prestige']['promo_code'] = '';
    $stores['prestige']['referral_code'] = 'FBK18280';
    $stores['prestige']['promotion_text'] = '';  //leave empty for default or 'insert the image file name here'
    $stores['prestige']['promotion_image'] = '';  //can be '' or 'insert the image file name here'

    //qmm
    //facebook url should be index.php?store=qmm
    $stores['qmm']['type'] = 'avl';  //can be 'avl' or 'navl'
    $stores['qmm']['has_promotion'] = TRUE;  //can be TRUE or FALSE
    $stores['qmm']['referral_code'] = 'FBK29750';
    $stores['qmm']['promotion_text'] = '';  //leave empty for default or 'insert the image file name here'
    $stores['qmm']['promotion_image'] = '';  //can be '' or 'insert the image file name here'

    //reebie
    //facebook url should be index.php?store=reebie
    $stores['reebie']['type'] = 'avl';  //can be 'avl' or 'navl'
    $stores['reebie']['has_promotion'] = TRUE;  //can be TRUE or FALSE
    $stores['reebie']['promo_code'] = '';
    $stores['reebie']['referral_code'] = 'FBK20070';
    $stores['reebie']['promotion_text'] = '';  //leave empty for default or 'insert the image file name here'
    $stores['reebie']['promotion_image'] = '';  //can be '' or 'insert the image file name here'

    //whalen
    //facebook url should be index.php?store=whalen
    $stores['whalen']['type'] = 'avl';  //can be 'avl' or 'navl'
    $stores['whalen']['has_promotion'] = TRUE;  //can be TRUE or FALSE
    $stores['whalen']['promo_code'] = '';
    $stores['whalen']['referral_code'] = 'FBK00070';
    $stores['whalen']['promotion_text'] = '';  //leave empty for default or 'insert the image file name here'
    $stores['whalen']['promotion_image'] = '';  //can be '' or 'insert the image file name here'
