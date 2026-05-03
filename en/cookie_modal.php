<div id="cookie_bildirim" class="modal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-body">

<h5>Cookie Settings</h5>

<p>We use tools such as cookies to provide essential services and functionality on our site and to collect data about how you interact with our site and services.</p>

<div class="form-group form-check">
<input type="checkbox" class="form-input" id="cookieCheck1" checked="checked">
<label class="form-check-label" for="cookieCheck1"><b>Technically Necessary Cookies and Technologies</b></label>
</div>
<span style='display: block;margin-left: 25px;'>These cookies are essential for our website to be accessible, usable and function properly for you. Without these cookies, our website cannot function properly.</span>

<br>

<div class="form-group form-check">
<input type="checkbox" class="form-input" id="cookieCheck2">
<label class="form-check-label" for="cookieCheck2"><b>Analytical and Performance Cookies</b></label>
</div>
<span style='display: block;margin-left: 25px;'>We are constantly working to improve the usability and performance of our website. For this reason, we use analysis technologies (cookies) to track and evaluate which functions and content on our website are used, how much they are used, and so that we can improve our website for you and provide you with a better experience.</span>

<p><?php echo $sitesettings['site_policy_box_footer']; ?></p>

<button type="button" class="ht-btn ht-btn-xs acceptcookies" style="float: right;margin-left: 10px;" data-bs-dismiss="modal" onclick='$(".cookiealert").hide();'>Accept</button>
<button type="button" class="ht-btn btn--secondary ht-btn-xs" style="float: right;" data-bs-dismiss="modal">Cancel</button>

</div>

</div>
</div>
</div>