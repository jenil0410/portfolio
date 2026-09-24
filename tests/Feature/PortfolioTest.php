<?php

namespace Tests\Feature;

use App\Data\Portfolio\PortfolioData;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    /**
     * Test home page loads successfully with Systems in Motion branding.
     */
    public function test_home_page_returns_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('JENIL');
        $response->assertSee('DESAI');
        $response->assertSee('usable products');
        $response->assertSee('Selected Work');
        $response->assertSee('Nivaas');
    }

    /**
     * Test work index page loads and lists all projects.
     */
    public function test_work_page_returns_successful_response(): void
    {
        $response = $this->get('/work');

        $response->assertStatus(200);
        $response->assertSee('Systems built for real workflows.');
        $response->assertSee('Mineral Industry ERP');
        $response->assertSee('ShilpShastra');
    }

    /**
     * Test all project case study pages load successfully.
     */
    public function test_each_project_case_study_loads_successfully(): void
    {
        foreach (PortfolioData::getProjects() as $project) {
            $response = $this->get('/work/' . $project['slug']);

            $response->assertStatus(200);
            $response->assertSee($project['name']);
            $response->assertSee('ENGINEERING CASE / ' . $project['number']);
        }
    }

    /**
     * Test invalid project slug returns 404.
     */
    public function test_invalid_project_slug_returns_404(): void
    {
        $response = $this->get('/work/non-existent-system');

        $response->assertStatus(404);
    }

    /**
     * Test experience page loads successfully.
     */
    public function test_experience_page_returns_successful_response(): void
    {
        $response = $this->get('/experience');

        $response->assertStatus(200);
        $response->assertSee('Engineering for operational reality.');
        $response->assertSee('Binstellar Technologies Pvt Ltd');
    }

    /**
     * Test independent products page loads successfully.
     */
    public function test_products_page_returns_successful_response(): void
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertSee('Learning by building the whole system.');
        $response->assertSee('Nivaas');
        $response->assertSee('ShilpShastra');
    }

    /**
     * Test about page loads successfully.
     */
    public function test_about_page_returns_successful_response(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertSee('A developer who thinks in systems.');
        $response->assertSee('Before software, I learned to think spatially.');
    }

    /**
     * Test contact page loads successfully.
     */
    public function test_contact_page_returns_successful_response(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('Have a problem worth building?');
        $response->assertSee('jenildesai0410@gmail.com');
    }
}
