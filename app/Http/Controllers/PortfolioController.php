<?php

namespace App\Http\Controllers;

use App\Data\Portfolio\PortfolioData;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio home page.
     */
    public function home(): View
    {
        return view('pages.portfolio.home', [
            'projects' => PortfolioData::getProjects(),
            'otherWork' => PortfolioData::getOtherWork(),
            'stack' => PortfolioData::getStack(),
            'explorations' => PortfolioData::getExplorations(),
            'experience' => PortfolioData::getExperience(),
            'contact' => PortfolioData::getContact(),
        ]);
    }

    /**
     * Display selected work.
     */
    public function work(): View
    {
        return view('pages.portfolio.work', [
            'projects' => PortfolioData::getProjects(),
        ]);
    }

    /**
     * Display individual project case study.
     */
    public function show(string $slug): View
    {
        $project = PortfolioData::findProject($slug);

        if (!$project) {
            abort(404, 'Project not found');
        }

        return view('pages.portfolio.work.show', [
            'project' => $project,
        ]);
    }

    /**
     * Display professional experience.
     */
    public function experience(): View
    {
        $experience = PortfolioData::getExperience();
        $relatedSlugs = $experience['relatedProjects'] ?? [];

        $relatedProjects = array_filter(
            PortfolioData::getProjects(),
            fn ($p) => in_array($p['slug'], $relatedSlugs)
        );

        return view('pages.portfolio.experience', [
            'experience' => $experience,
            'relatedProjects' => $relatedProjects,
        ]);
    }

    /**
     * Display independent products.
     */
    public function products(): View
    {
        $products = array_filter(
            PortfolioData::getProjects(),
            fn ($p) => in_array($p['slug'], ['nivaas', 'shilpshastra'])
        );

        return view('pages.portfolio.products', [
            'products' => $products,
        ]);
    }

    /**
     * Display about page.
     */
    public function about(): View
    {
        return view('pages.portfolio.about');
    }

    /**
     * Display contact page.
     */
    public function contact(): View
    {
        return view('pages.portfolio.contact', [
            'contact' => PortfolioData::getContact(),
        ]);
    }
}
