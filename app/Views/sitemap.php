<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($pages as $page): ?>
    <url>
        <loc><?= base_url($page['url']) ?></loc>
        <lastmod><?= date('Y-m-d', strtotime($page['updated_at'])) ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <?php endforeach; ?>
</urlset>
