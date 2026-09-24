<?php

namespace App\Data\Portfolio;

class PortfolioData
{
    /**
     * Get all portfolio projects.
     *
     * @return array<int, array<string, mixed>>
     */
    public static function getProjects(): array
    {
        return [
            [
                'slug' => 'mineral-industry-erp',
                'number' => '01',
                'name' => 'Mineral Industry ERP',
                'category' => 'Professional / Enterprise',
                'summary' => 'A complete industrial management system covering sales, purchasing and financial operations.',
                'capabilities' => [
                    'Orders',
                    'Invoices',
                    'Debit notes',
                    'Lab testing',
                    'Transport tracking',
                    'Multi-site support',
                    'GST workflows',
                    'Business reporting',
                ],
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'Tailwind CSS'],
                'scale' => 'large',
                'intent' => 'Bring connected sales, purchasing, testing, transport and financial operations into one operational system.',
                'architecture' => 'A multi-site ERP connecting commercial, operational and reporting workflows.',
                'workflows' => [
                    ['Sales', 'Order', 'Invoice', 'Payment'],
                    ['Purchase', 'Operations'],
                    ['Lab testing', 'Reporting'],
                    ['Dispatch', 'Transport tracking'],
                ],
                'implementation' => 'Laravel and PHP application development with MySQL-backed operational data and Tailwind CSS interfaces.',
                'interfaceViews' => [
                    'Order register',
                    'Invoice workspace',
                    'Lab testing queue',
                    'Transport tracking',
                    'Business reporting',
                ],
                'status' => 'Professional enterprise work focused on day-to-day industrial workflows.',
            ],
            [
                'slug' => 'refill-tank-erp',
                'number' => '02',
                'name' => 'Refill Tank ERP',
                'category' => 'Professional / Enterprise',
                'summary' => 'Industrial ERP platform supporting manufacturing and distribution workflows.',
                'capabilities' => [
                    'HRMS',
                    'Employee management',
                    'Punch-based attendance',
                    'Sales',
                    'Purchasing',
                    'Dispatch',
                    'Inventory',
                    'Barcode generation',
                    'Operational reporting',
                ],
                'technologies' => ['Laravel', 'Livewire', 'Tailwind CSS', 'MySQL'],
                'scale' => 'feature',
                'intent' => 'Support manufacturing and distribution teams across workforce, inventory and dispatch operations.',
                'architecture' => 'An ERP spanning people operations, commercial workflows, inventory and dispatch.',
                'workflows' => [
                    ['Employee', 'Punch attendance', 'HRMS'],
                    ['Sales', 'Inventory', 'Dispatch'],
                    ['Purchase', 'Inventory'],
                    ['Inventory', 'Barcode', 'Reporting'],
                ],
                'implementation' => 'Laravel and Livewire application work using MySQL and Tailwind CSS.',
                'interfaceViews' => [
                    'Attendance register',
                    'Inventory view',
                    'Barcode workflow',
                    'Dispatch board',
                    'Operational reporting',
                ],
                'status' => 'Professional ERP work grounded in manufacturing and distribution operations.',
            ],
            [
                'slug' => 'nivaas',
                'number' => '03',
                'name' => 'Nivaas',
                'category' => 'Independent Product / SaaS',
                'summary' => 'A digital operating system for PG and hostel management, independently designed and developed around the whole resident lifecycle.',
                'capabilities' => [
                    'Organization onboarding',
                    'Multi-tenancy',
                    'Role-based access',
                    'Property hierarchy',
                    'Leads & bookings',
                    'Resident allocation',
                    'Rent & invoices',
                    'Payments',
                    'Maintenance',
                    'Complaints',
                    'Visitors',
                    'Staff',
                    'Documents',
                    'Notices',
                    'Analytics',
                ],
                'technologies' => ['Laravel', 'Livewire', 'PHP', 'MySQL', 'Tailwind CSS'],
                'note' => 'Designed with a SaaS architecture and organization-level isolation.',
                'scale' => 'feature',
                'intent' => 'Create one product for managing the complete operational lifecycle of PG and hostel businesses.',
                'architecture' => 'A multi-tenant SaaS structure with organization-level isolation, role-based access and a property hierarchy from building to bed.',
                'workflows' => [
                    ['Lead', 'Booking', 'Allocation', 'Resident'],
                    ['Organization', 'Property', 'Building', 'Floor', 'Room', 'Bed'],
                    ['Resident', 'Rent', 'Invoice', 'Payment'],
                    ['Maintenance', 'Complaint', 'Resolution'],
                ],
                'implementation' => 'Independently designed and developed with Laravel, Livewire, PHP, MySQL and Tailwind CSS.',
                'decisions' => [
                    'Organization-level isolation',
                    'Multi-tenant product structure',
                    'Role-based access',
                    'Property hierarchy as a core domain model',
                ],
                'interfaceViews' => [
                    'Dashboard',
                    'Property hierarchy',
                    'Room / bed management',
                    'Resident management',
                    'Rent / invoices',
                    'Payments',
                    'Maintenance',
                    'Analytics',
                ],
                'status' => 'An independently developed SaaS product and an ongoing exercise in whole-product system design.',
            ],
            [
                'slug' => 'shilpshastra',
                'number' => '04',
                'name' => 'ShilpShastra',
                'category' => 'Independent Product / Marketplace',
                'summary' => 'An artisan-focused commerce product exploring digital infrastructure for craft businesses.',
                'capabilities' => [
                    'Marketplace architecture',
                    'Product management',
                    'Commerce workflows',
                    'Tenant isolation',
                    'Subscription concepts',
                    'Razorpay testing',
                    'Business management',
                ],
                'technologies' => ['Laravel', 'PHP', 'Livewire', 'MySQL', 'Tailwind CSS', 'Razorpay'],
                'scale' => 'large',
                'intent' => 'Explore digital commerce infrastructure centered on artisan businesses and their products.',
                'architecture' => 'A tenant-isolated marketplace concept connecting business management, products, commerce and payments.',
                'workflows' => [
                    ['Business / Artisan', 'Product', 'Marketplace'],
                    ['Marketplace', 'Customer', 'Order', 'Payment'],
                    ['Subscription concept', 'Razorpay testing'],
                ],
                'implementation' => 'Independently developed with Laravel, PHP, Livewire, MySQL and Tailwind CSS, including Razorpay testing.',
                'decisions' => [
                    'Tenant isolation',
                    'Marketplace-oriented product model',
                    'Subscription and payment concepts',
                    'Razorpay integration testing',
                ],
                'interfaceViews' => [
                    'Artisan workspace',
                    'Product management',
                    'Marketplace listing',
                    'Commerce workflow',
                    'Business management',
                    'Subscription / payment flow',
                ],
                'status' => 'An independent product exploration focused on marketplace and business-management architecture.',
            ],
            [
                'slug' => 'crystal-event-crm',
                'number' => '05',
                'name' => 'Crystal Event CRM',
                'category' => 'Business Application',
                'summary' => 'Event management CRM supporting event booking, guest management, expense tracking and automated communication.',
                'capabilities' => [
                    'Event booking',
                    'Guest lists',
                    'Expense tracking',
                    'Email notifications',
                ],
                'technologies' => ['Laravel', 'MySQL', 'Tailwind CSS'],
                'scale' => 'compact',
                'intent' => 'Coordinate event booking, guest information, expenses and communication in one business application.',
                'workflows' => [
                    ['Event booking', 'Guest list', 'Communication'],
                    ['Event', 'Expense tracking'],
                ],
                'implementation' => 'Built with Laravel, MySQL and Tailwind CSS.',
                'interfaceViews' => [
                    'Event register',
                    'Guest management',
                    'Expense tracking',
                    'Notification workflow',
                ],
                'status' => 'A focused business application represented only through its known workflows.',
            ],
        ];
    }

    /**
     * Find project by slug.
     *
     * @param string $slug
     * @return array<string, mixed>|null
     */
    public static function findProject(string $slug): ?array
    {
        foreach (self::getProjects() as $project) {
            if ($project['slug'] === $slug) {
                return $project;
            }
        }

        return null;
    }

    /**
     * Get preview screen layouts for projects.
     *
     * @return array<string, array<int, string>>
     */
    public static function getScreenLayouts(): array
    {
        return [
            'mineral-industry-erp' => ['Orders', 'Invoices', 'Lab queue', 'Transport'],
            'refill-tank-erp' => ['Attendance', 'Inventory', 'Barcodes', 'Dispatch'],
            'nivaas' => ['Properties', 'Beds', 'Residents', 'Billing', 'Maintenance', 'Analytics'],
            'shilpshastra' => ['Artisans', 'Products', 'Marketplace', 'Orders', 'Payments'],
            'crystal-event-crm' => ['Events', 'Guests', 'Expenses', 'Notifications'],
        ];
    }

    /**
     * Get preview views for a project.
     *
     * @param array<string, mixed> $project
     * @return array<int, string>
     */
    public static function getPreviewViews(array $project): array
    {
        $layouts = self::getScreenLayouts();
        return $layouts[$project['slug']] ?? array_slice($project['interfaceViews'] ?? [], 0, 4);
    }

    /**
     * Get other work list.
     *
     * @return array<int, string>
     */
    public static function getOtherWork(): array
    {
        return [
            'Payroll systems',
            'Employee salary management',
            'Leave management',
            'Overtime management',
            'Invoice / GST modules',
            'Sales reporting systems',
            'Construction monitoring platform',
            'Vehicle-sharing platform',
            'Multilingual Laravel portals',
            'API integrations',
            'WhatsApp integrations',
        ];
    }

    /**
     * Get stack groups.
     *
     * @return array<string, array<int, string>>
     */
    public static function getStack(): array
    {
        return [
            'Core' => ['Laravel', 'PHP', 'Livewire', 'Tailwind CSS', 'MySQL / MariaDB', 'REST APIs'],
            'Professional Engineering' => ['ERP Systems', 'API Integrations', 'Git / GitLab', 'Database Optimization', 'Caching'],
            'Independent Product Experience' => ['SaaS Architecture', 'Multi-tenancy', 'Razorpay', 'Marketplace Architecture'],
            'Exploring' => ['Python', 'AI / LLMs', 'Elasticsearch', 'Redis', 'S3 / Object Storage'],
        ];
    }

    /**
     * Get explorations ticker items.
     *
     * @return array<int, string>
     */
    public static function getExplorations(): array
    {
        return [
            'AI / LLM applications',
            'AI-assisted workflows',
            'Automation',
            'Modern AI models',
            'Python',
            'Elasticsearch',
            'Redis',
            'S3 / object storage',
        ];
    }

    /**
     * Get professional experience.
     *
     * @return array<string, mixed>
     */
    public static function getExperience(): array
    {
        return [
            'role' => 'Laravel Developer',
            'company' => 'Binstellar Technologies Pvt Ltd',
            'period' => 'Jan 2024 — Present',
            'location' => 'Ahmedabad, India',
            'responsibilities' => [
                'Laravel application development',
                'RESTful APIs',
                'Database optimization',
                'Caching',
                'Backend debugging',
                'Scalability',
                'Client requirement translation',
            ],
            'relatedProjects' => ['mineral-industry-erp', 'refill-tank-erp'],
        ];
    }

    /**
     * Get contact info.
     *
     * @return array<string, string>
     */
    public static function getContact(): array
    {
        return [
            'email' => 'jenildesai0410@gmail.com',
            'phone' => '+91 8733088369',
            'location' => 'Ahmedabad, Gujarat, India',
        ];
    }
}
