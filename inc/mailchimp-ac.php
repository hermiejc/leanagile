<?php 
$emailUrl = $_GET['Email'];
if( isset( $emailUrl )) {
    $input = $emailUrl;
} else {
    $input = '';
}
    

 ?>


<!-- Begin MailChimp Signup Form new 4/10/2017 -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//pbworks.us9.list-manage.com/subscribe/post?u=df06d21576b6ebaa8f4189dbc&amp;id=704b71232a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
    <div id="mc_embed_signup_scroll">
    <h2>Subscribe to our mailing list</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
    <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
    <input type="email" value="<?php echo $input; ?>" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
    <label for="mce-FNAME">First Name </label>
    <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
    <label for="mce-LNAME">Last Name </label>
    <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group">
    <label for="mce-MMERGE3">City </label>
    <input type="text" value="" name="MMERGE3" class="" id="mce-MMERGE3">
</div>
<div class="mc-field-group">
    <label for="mce-MMERGE4">State </label>
    <input type="text" value="" name="MMERGE4" class="" id="mce-MMERGE4">
</div>
<div class="mc-field-group">
    <label for="mce-MMERGE6">Business </label>
    <input type="text" value="" name="MMERGE6" class="" id="mce-MMERGE6">
</div>
<div class="mc-field-group input-group">
    <strong>Agile Carolinas Choices </strong>
    <ul><li><input type="checkbox" value="1" name="group[27205][1]" id="mce-group[27205]-27205-0"><label for="mce-group[27205]-27205-0">AC Newsletter</label></li>
<li><input type="checkbox" value="2" name="group[27205][2]" id="mce-group[27205]-27205-1"><label for="mce-group[27205]-27205-1">AC Mtg invites</label></li>
<li><input type="checkbox" value="4" name="group[27205][4]" id="mce-group[27205]-27205-2"><label for="mce-group[27205]-27205-2">Lean Agile Open events</label></li>
</ul>
</div>
<div class="mc-field-group input-group">
    <strong>Email Format </strong>
    <ul><li><input type="radio" value="html" name="EMAILTYPE" id="mce-EMAILTYPE-0"><label for="mce-EMAILTYPE-0">html</label></li>
<li><input type="radio" value="text" name="EMAILTYPE" id="mce-EMAILTYPE-1"><label for="mce-EMAILTYPE-1">text</label></li>
</ul>
</div>
    <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_df06d21576b6ebaa8f4189dbc_704b71232a" tabindex="-1" value=""></div>
    <div class="clear">
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
    <div class="unsubscribe" style="float: right; display: inline-block; padding: 10px 20px 0 0">
        <a href="https://pbworks.us9.list-manage.com/unsubscribe?u=df06d21576b6ebaa8f4189dbc&id=704b71232a" target="_blank">
            Unsubscribe
        </a>
    </div>
    </div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';fnames[4]='MMERGE4';ftypes[4]='text';fnames[5]='MMERGE5';ftypes[5]='text';fnames[6]='MMERGE6';ftypes[6]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->