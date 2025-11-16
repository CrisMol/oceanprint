<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <!-- Páginas estáticas -->
    <url>
        <loc>{{ url('/') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>{{ url('/nosotros') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/servicios') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>

    <url>
        <loc>{{ url('/contacto') }}</loc>
        <changefreq>yearly</changefreq>
        <priority>0.5</priority>
    </url>

    <url>
        <loc>{{ url('/tienda') }}</loc>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>

    <!-- Categorías -->
    @foreach($categories as $cat)
    <url>
        <loc>{{ url('/tienda/categoria/' . $cat->slug) }}</loc>
        <lastmod>{{ $cat->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach

    <!-- Productos -->
    @foreach($products as $product)
    <url>
        <loc>{{ url('/tienda/producto/' . $product->slug) }}</loc>
        <lastmod>{{ $product->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach

</urlset>
