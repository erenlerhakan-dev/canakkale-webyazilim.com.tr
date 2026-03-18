<?php
include_once('include/initialize.inc.php');
header('Content-type: application/xml');

echo '<?xml version="1.0" encoding="UTF-8"?>
';

echo '
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
';

echo '
<url>
<loc>'; echo SITE_URL; echo '</loc>
<lastmod>'; echo date("m"); echo '</lastmod>
<changefreq>weekly</changefreq>
<priority>1.0</priority>
</url>
';

echo '
<url>
<loc>'; echo SITE_URL; echo 'dovme-hakkinda-sik-sorulan-sorular.php</loc>
<lastmod>'; echo date("m"); echo '</lastmod>
<changefreq>weekly</changefreq>
<priority>1.0</priority>
</url>
';

echo '
<url>
<loc>'; echo SITE_URL; echo 'hizmetler/index.php</loc>
<lastmod>'; echo date("m"); echo '</lastmod>
<changefreq>weekly</changefreq>
<priority>1.0</priority>
</url>
';

echo '
<url>
<loc>'; echo SITE_URL; echo 'blog/index.php</loc>
<lastmod>'; echo date("m"); echo '</lastmod>
<changefreq>weekly</changefreq>
<priority>1.0</priority>
</url>
';

echo '
</urlset>';

?>