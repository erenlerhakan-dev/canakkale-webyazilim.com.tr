<!DOCTYPE html>
<html class="no-js" lang="tr" dir="ltr">

<head>
<title>Çanakkale Web Yazılım - Profesyonel Web Geliştirme ve Yazılım Çözümleri</title>
<meta name="description" content="Çanakkale Web Yazılım - Profesyonel Web Geliştirme ve Yazılım Çözümleri. Çanakkale, Türkiye'de profesyonel web geliştirme ve yazılım çözümleri. CRM, ERP, E-ticaret, Rezervasyon Sistemleri ve Laravel, React, Django ve daha fazlasıyla özel yazılım geliştirme.">
<meta name="keywords" content="web yazılım, Çanakkale web tasarım, mobil uygulama, özel yazılım, dijital çözümler">

<?php include_once('head_meta.php'); ?>

<meta property="og:type" content="website">
<meta property="og:url" content="https://www.canakkale-webyazilim.com.tr">
<meta property="og:title" content="Çanakkale Web Yazılım - Profesyonel Web Geliştirme ve Yazılım Çözümleri">
<meta property="og:description" content="Çanakkale Web Yazılım - Profesyonel Web Geliştirme ve Yazılım Çözümleri. Çanakkale, Türkiye'de profesyonel web geliştirme ve yazılım çözümleri. CRM, ERP, E-ticaret, Rezervasyon Sistemleri ve Laravel, React, Django ve daha fazlasıyla özel yazılım geliştirme.">
<meta property="og:image" content="https://www.canakkale-webyazilim.com.tr/images/cozum-cloud-logo.png">

<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Çanakkale Web Yazılım - Profesyonel Web Geliştirme ve Yazılım Çözümleri">
<meta name="twitter:description" content="Çanakkale Web Yazılım - Profesyonel Web Geliştirme ve Yazılım Çözümleri. Çanakkale, Türkiye'de profesyonel web geliştirme ve yazılım çözümleri. CRM, ERP, E-ticaret, Rezervasyon Sistemleri ve Laravel, React, Django ve daha fazlasıyla özel yazılım geliştirme.">
<meta name="twitter:image" content="https://www.canakkale-webyazilim.com.tr/images/cozum-cloud-logo.png">

<script type="application/ld+json" data-rh="true">{"@context":"https://schema.org","@type":"LocalBusiness","name":"Çanakkale Web Yazılım","url":"https://canakkale-webyazilim.com.tr","logo":"https://www.canakkale-webyazilim.com.tr/logo.png","description":"Çanakkale, Türkiye'de profesyonel web geliştirme ve yazılım çözümleri","address":{"@type":"PostalAddress","streetAddress":"Esenler Mh. Ahmet Piriştina Cd. No:19 Daire:17","addressLocality":"Çanakkale","postalCode":"17000","addressCountry":"TR"},"contactPoint":{"@type":"ContactPoint","telephone":"+90-534-792-2531","contactType":"customer service","email":"info@cozumcloud.com.tr"},"sameAs":["https://www.facebook.com/cozum.cloud/","https://x.com/cozumcloud","https://www.instagram.com/cozum.cloud/","https://www.linkedin.com/company/cozum-cloud"]}</script>

</head>

<body>

<?php include_once('preloader.php'); ?>

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

<?php include_once('cookie_modal.php'); ?>

<?php include_once('footer_scripts.php'); ?>

<script>
$("#request_button").click(function() {

$.ajax({
url: "/send_request",
type: 'POST',
data: $('#request_form').serialize(),
success: function(response){ 
if (response === "ok") { swal(" ", "Teşekkürler. Mesajınız iletildi. En kısa sürede size dönüş yapacağız.", "success");
$("#request_form")[0].reset();
$("#request_button").attr("disabled", true);
} 
if (response === "name") { swal(" ", "Lütfen adınızı yazın.", "warning"); }
if (response === "emailbad") { swal(" ", "Email adresiniz hatalı. Lütfen kontrol edip tekrar deneyin.", "warning"); }
if (response === "email") { swal(" ", "Lütfen email adresinizi yazın.", "warning"); }
if (response === "phone") { swal(" ", "Lütfen telefon numaranızı yazın.", "warning"); }
if (response === "message") { swal(" ", "Lütfen mesajınızı yazın.", "warning"); }
if (response === "message_short") { swal(" ", "Lütfen daha açıklayıcı bir mesaj yazın.", "warning"); }
if (response === "nok") { swal(" ", "Bir hata oluştu. Lütfen sayfayı yenileyip tekrar deneyin.", "warning"); }
if (response === "bad") { swal(" ", "Bir hata oluştu. Lütfen sayfayı yenileyip tekrar deneyin.", "warning"); } }
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