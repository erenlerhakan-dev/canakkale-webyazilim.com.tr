<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
<title>Canakkale Web Development - Professional Web Development and Software Solutions</title>
<meta name="description" content="Canakkale Web Development - Professional Web Development and Software Solutions. Professional web development and software solutions in Çanakkale, Türkiye. CRM, ERP, E-commerce, Reservation Systems and Custom Software Development with Laravel, React, Django and more.">

<?php include_once('head_meta.php'); ?>

<meta property="og:type" content="website">
<meta property="og:url" content="https://www.canakkale-webyazilim.com.tr/en/">
<meta property="og:title" content="Canakkale Web Development - Professional Web Development and Software Solutions">
<meta property="og:description" content="Canakkale Web Development - Professional Web Development and Software Solutions. Professional web development and software solutions in Çanakkale, Türkiye. CRM, ERP, E-commerce, Reservation Systems and Custom Software Development with Laravel, React, Django and more.">
<meta property="og:image" content="https://www.canakkale-webyazilim.com.tr/images/cozum-cloud-logo.png">

<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Canakkale Web Development - Professional Web Development and Software Solutions">
<meta name="twitter:description" content="Canakkale Web Development - Professional Web Development and Software Solutions. Professional web development and software solutions in Çanakkale, Türkiye. CRM, ERP, E-commerce, Reservation Systems and Custom Software Development with Laravel, React, Django and more.">
<meta name="twitter:image" content="https://www.canakkale-webyazilim.com.tr/images/cozum-cloud-logo.png">

<script type="application/ld+json" data-rh="true">{"@context":"https:/schema.org","@type":"LocalBusiness","name":"Çanakkale Web Development","url":"https://canakkale-webyazilim.com.tr","logo":"https://www.canakkale-webyazilim.com.tr/logo.png","description":"Çanakkale, Türkiye'de profesyonel web geliştirme ve yazılım çözümleri","address":{"@type":"PostalAddress","streetAddress":"Esenler Mh. Ahmet Piriştina Cd. No:19 Daire:17","addressLocality":"Çanakkale","postalCode":"17000","addressCountry":"TR"},"contactPoint":{"@type":"ContactPoint","telephone":"+90-534-792-2531","contactType":"customer service","email":"info@cozumcloud.com.tr"},"sameAs":["https://www.facebook.com/cozum.cloud/","https://x.com/cozumcloud","https://www.instagram.com/cozum.cloud/","https://www.linkedin.com/company/cozum-cloud"]}</script>

</head>

<body>

<?php include_once('../preloader.php'); ?>

<?php include_once('header.php'); ?>

<div id="main-wrapper">
<div class="site-wrapper-reveal">

<?php include_once('home_welcome.php'); ?>

<?php include_once('home_services.php'); ?>

<?php include_once('home_divider.php'); ?>

<?php include_once('home_tags.php'); ?>

<?php include_once('home_testimonials.php'); ?>

<?php include_once('home_faq.php'); ?>

<?php include_once('home_contact.php'); ?>

</div>

<?php include_once('footer.php'); ?>

</div>

<a href="#" class="scroll-top" id="scroll-top">
<i class="arrow-top fas fa-chevron-up"></i>
<i class="arrow-bottom fas fa-chevron-up"></i>
</a>

<?php include_once('mobile_menu.php'); ?>

<?php include_once('../footer_scripts.php'); ?>

<script>
$("#request_button").click(function() {

$.ajax({
url: "/send_request",
type: 'POST',
data: $('#request_form').serialize(),
success: function(response){ 
if (response === "ok") { swal(" ", "Thank you. Your message has been sent. We will get back to you as soon as possible.", "success"); }
$("#request_form")[0].reset();
$("#request_button").attr("disabled", true);
} 
if (response === "name") { swal(" ", "Please enter your name.", "warning"); }
if (response === "emailbad") { swal(" ", "Your email address is incorrect. Please check and try again.", "warning"); }
if (response === "email") { swal(" ", "Please enter your email address.", "warning"); }
if (response === "phone") { swal(" ", "Please enter your phone number.", "warning"); }
if (response === "message") { swal(" ", "Please enter your message.", "warning"); }
if (response === "message_short") { swal(" ", "Please write a more descriptive message.", "warning"); }
if (response === "nok") { swal(" ", "An error occurred. Please refresh the page and try again.", "warning"); }
if (response === "bad") { swal(" ", "An error occurred. Please refresh the page and try again.", "warning"); }
});

});
</script>

<script>
$(document).ready(function() {
$('.nicesel').niceSelect();
});
</script>

</body>

</html>