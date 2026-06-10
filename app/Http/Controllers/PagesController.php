<?php

namespace App\Http\Controllers;

use App\Support\PdfforgeContent;
use Illuminate\Contracts\View\View;

class PagesController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'title' => 'Professional PDF Editing',
            'testimonials' => array_slice(PdfforgeContent::testimonials(), 0, 6),
        ]);
    }

    public function about(): View
    {
        return view('pages.about', [
            'title' => 'About',
        ]);
    }

    public function services(): View
    {
        return view('pages.services', [
            'title' => 'Services',
        ]);
    }

    public function portfolio(): View
    {
        return view('pages.portfolio', [
            'title' => 'Portfolio',
            'items' => PdfforgeContent::portfolioItems(),
        ]);
    }

    public function pricing(): View
    {
        return view('pages.pricing', [
            'title' => 'Pricing',
        ]);
    }

    public function reviews(): View
    {
        return view('pages.reviews', [
            'title' => 'Reviews',
            'testimonials' => PdfforgeContent::testimonials(),
        ]);
    }

    public function faq(): View
    {
        return view('pages.faq', [
            'title' => 'FAQ',
            'faqs' => PdfforgeContent::faqs(),
        ]);
    }

    public function blog(): View
    {
        return view('pages.blog', [
            'title' => 'Blog',
            'posts' => PdfforgeContent::blogPosts(),
        ]);
    }

    public function blogShow(string $slug): View
    {
        $post = collect(PdfforgeContent::blogPosts())->firstWhere('slug', $slug);

        abort_if($post === null, 404);

        return view('pages.blog-show', [
            'title' => $post['title'],
            'post' => $post,
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact', [
            'title' => 'Contact',
        ]);
    }
}
