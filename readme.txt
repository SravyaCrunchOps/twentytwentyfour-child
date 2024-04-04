<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"color":{"text":"#4c4b4b"},"elements":{"link":{":hover":{"color":{"text":"#652b9f"}}}}},"backgroundColor":"base-2","layout":{"type":"constrained","wideSize":"100%"}} -->
<div class="wp-block-group alignwide has-base-2-background-color has-text-color has-background" style="color:#4c4b4b;padding-top:20px;padding-right:var(--wp--preset--spacing--20);padding-bottom:20px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"1em"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:site-logo {"width":45,"className":".wp-block-site-logo img {border-radius: 50%;} is-style-rounded"} /-->

<!-- wp:site-title {"style":{"spacing":{"blockGap":"0px"},"typography":{"fontStyle":"normal","fontWeight":"700"},"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"2em","left":"2em"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull" style="padding-right:2em;padding-left:2em"><!-- wp:navigation {"ref":4,"align":"full","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"2em"},"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontSize":"1em","fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:navigation {"ref":139} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

------------------

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"color":{"text":"#4c4b4b"},"elements":{"link":{":hover":{"color":{"text":"#652b9f"}}}}},"backgroundColor":"base-2","layout":{"type":"constrained","wideSize":"100%"}} -->
<div class="wp-block-group alignwide has-base-2-background-color has-text-color has-background" style="color:#4c4b4b;padding-top:20px;padding-right:var(--wp--preset--spacing--20);padding-bottom:20px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"1em"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:site-logo {"width":45,"className":".wp-block-site-logo img {border-radius: 50%;} is-style-rounded"} /-->

<!-- wp:site-title {"style":{"spacing":{"blockGap":"0px"},"typography":{"fontStyle":"normal","fontWeight":"700"},"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"2em","left":"2em"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull" style="padding-right:2em;padding-left:2em"><!-- wp:navigation {"ref":4,"align":"full","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"2em"},"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontSize":"1em","fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:navigation {"ref":139} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->


------------------------------

<?php
    if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date = date();

    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $errors = array();

    if(empty($fullname) || $empty($email) || empty($password)) {
        array_push($errors, "All field are required to fill");
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }

    if(strlen($password) < 5) {
        array_push($errors, "Password must be atleast 8 characters long");
    }
    
    $dbhost = 'localhost';
    $dbuser = 'root';
    $db = 'techies_blog';

    $conn = mysqli_connect($dbhost, $dbuser, "", $db);

    if(!$conn) {
        die("something went wrong!!");
    }

    // check for existing user
    $sql = "SELECT * FROM wp_website_users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num > 0) {
        array_push($errors, "Email already exists");
    }

    if(count($errors) > 0) {
        foreach($errors as $error) {
            echo "<div class='danger'>$error</div>";
        }
    } else {
        $sql = "insert into wp_website_users (fullname, email, password, joindate) values ('$fullname', '$email', '$password_hash', '$date')";
        echo "<div class='success'>Registered successfully. Now you can login</div>";
    }
}
?>

--------------------------------------------

myexponent.old
-----------------

<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}},"className":"article-toc"} -->
<div class="wp-block-column article-toc" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;flex-basis:33.33%">
<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
<!-- wp:simpletoc/toc {"title_level":4,"title_text":"Article","add_smooth":true} /--></div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-content {"fontFamily":"body"} /--></div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"19px"} -->
<div style="height:19px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(135deg,rgb(106,50,237) 0%,rgb(120,60,175) 100%)"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"textColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-color has-text-color has-background has-link-color"
        style="background:linear-gradient(135deg,rgb(106,50,237) 0%,rgb(120,60,175) 100%);margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)">
<!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"padding" {"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"textColor":"base-2","className":"is-style-default","fontSize":"large"} -->
<h4 class="wp-block-heading has-text-align-center is-style-default has-base-2-color has-text-color has-link-color has-large-font-size"
            style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
<strong>Membership await </strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
	<p style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing-10);padding-left:var(--wp--preset--spacing--30)">
Exponent is the fastest-growing tech interview prep platform. Get free interview guides, insider tips, and
courses</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0">
<!-- wp:button {"textAlign":"center","backgroundColor":"base","textColor":"contrast","style":{"spacing":{"padding {"top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" style="padding-top:10px;padding-bottom:10px">Create your account</a></div>
<!-- /wp:button -->
	</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontFamily":"body"} -->
<h3 class="wp-block-heading has-body-font-family" style="font-style:normal;font-weight:700">Related Blog Post
</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"dimensions":{"minHeight":"0px"},"border":{"width":"0px","style":"none"}},"layout"{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;min-height:0px">
<!-- wp:latest-posts {"postsToShow":3,"excerptLength":20,"postLayout":"grid","displayFeaturedImage":true,"featuredImageSizeSlug":"medium","style":{"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"margin":{"right":"0","left":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} /-->
</div>
<!-- /wp:group -->
</div>
</div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"twentytwentyfour-child","tagName":"footer","area":"footer"} /-->
