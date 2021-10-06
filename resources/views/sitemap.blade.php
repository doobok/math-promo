<?php  echo '<?xml version="1.0" encoding="UTF-8"?>';?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">


<url>
  <loc>{{route('index')}}</loc>
  <lastmod>{{ date("Y-m-d H:i:s") }}</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>{{route('page', 'online')}}</loc>
  <lastmod>{{ date("Y-m-d H:i:s") }}</lastmod>
  <priority>0.90</priority>
</url>


</urlset>
