<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    public function generateSitemap()
    {
        Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/packages')->setPriority(0.9))
            ->add(Url::create('/about')->setPriority(0.9))
            ->add(Url::create('/contacts')->setPriority(0.9))
            ->writeToFile(public_path('sitemap.xml'));
    }
}
