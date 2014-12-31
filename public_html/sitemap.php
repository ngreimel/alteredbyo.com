<?php
/**
 * Dynamic Sitemap - alteredbyo.com
 *
 * @author      Neal Greimel <neal@greimel.us>
 * @copyright   Copyright (c) 2014 Neal Greimel (http://neal.greimel.us)
 * @version     $Id$
 */

date_default_timezone_set('America/Chicago');
header('Content-type: application/xml');

$baseUrl = (isset($_SERVER['HTTPS']) ? 'https' : 'https')
    . '://' . $_SERVER['HTTP_HOST'];
$indexes = array('index.php', 'index.htm', 'index.html');
$defaultData = array(
    'changefreq' => 'monthly',
    'priority'   => 0.8,
);

$urls = array(
    '/',
);

?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $key => $data):
    if (is_numeric($key)) {
        $url = $data;
        $priority = $defaultData['priority'];
        $changefreq = $defaultData['changefreq'];
    } else {
        switch (count($data)) {
            case 2:
                $url = $key;
                list ($changefreq, $priority) = $data;
                break;
            case 1:
                $url = $key;
                if (is_numeric($data[0])) {
                    $priority = $data[0];
                    $changefreq = $defaultData['changefreq'];
                } else {
                    $changefreq = $data[0];
                    $priority = $defaultData['priority'];
                }
                break;
            default:
                $url = $key;
                $priority = $defaultData['priority'];
                $changefreq = $defaultData['changefreq'];
                break;
        }
    }

    $file = realpath('.' . $url);
    if (!is_file($file) && is_dir($file)) {
        foreach ($indexes as $index) {
            if (is_file(rtrim($file, '/') . '/' . $index)) {
                $file = rtrim($file, '/') . '/' . $index;
                break;
            }
        }
    }
    $lastmod = date('Y-m-d', filemtime($file));
    $loc = $baseUrl . $url;
?>
   <url>
      <loc><?php echo $loc; ?></loc>
      <lastmod><?php echo $lastmod; ?></lastmod>
      <changefreq><?php echo $changefreq; ?></changefreq>
      <priority><?php echo $priority; ?></priority>
   </url>
<?php endforeach; ?>
</urlset> 
