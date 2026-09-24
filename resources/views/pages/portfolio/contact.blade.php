<x-layouts.portfolio
    title="Contact — Jenil Desai"
    description="Contact Jenil Desai about software engineering opportunities and product-focused collaborations."
>
    <x-portfolio.system-index
        index="05"
        eyebrow="Contact"
        title="Have a problem worth building?"
        copy="I'm open to software engineering opportunities, product-focused roles and interesting technical collaborations."
    />

    <section class="contact-page">
        <a href="mailto:{{ $contact['email'] }}">
            <span>01 / EMAIL</span>
            <strong>{{ $contact['email'] }}</strong>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="7" y1="17" x2="17" y2="7"></line>
                <polyline points="7 7 17 7 17 17"></polyline>
            </svg>
        </a>

        <a href="tel:{{ str_replace(' ', '', $contact['phone']) }}">
            <span>02 / PHONE</span>
            <strong>{{ $contact['phone'] }}</strong>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="7" y1="17" x2="17" y2="7"></line>
                <polyline points="7 7 17 7 17 17"></polyline>
            </svg>
        </a>

        <div>
            <span>03 / BASE</span>
            <strong>{{ $contact['location'] }}</strong>
        </div>

        <div class="contact-placeholder">
            <span>04 / LINKEDIN</span>
            <strong>URL pending</strong>
        </div>

        <div class="contact-placeholder">
            <span>05 / GITHUB</span>
            <strong>URL pending</strong>
        </div>

        <div class="contact-placeholder">
            <span>06 / R&Eacute;SUM&Eacute;</span>
            <strong>File pending</strong>
        </div>
    </section>
</x-layouts.portfolio>
