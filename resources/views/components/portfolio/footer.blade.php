@php
    $contact = App\Data\Portfolio\PortfolioData::getContact();
@endphp
<footer class="site-footer">
    <div>
        <strong>JENIL DESAI</strong>
        <p>Software Developer &amp; Independent Product Builder</p>
    </div>
    <div class="footer-links">
        <a href="mailto:{{ $contact['email'] }}">Email</a>
        <a href="tel:{{ str_replace(' ', '', $contact['phone']) }}">Phone</a>
        @if(!empty($contact['linkedin']))
            <a href="{{ $contact['linkedin'] }}" target="_blank" rel="noopener noreferrer">LinkedIn</a>
        @endif
        @if(!empty($contact['github']))
            <a href="{{ $contact['github'] }}" target="_blank" rel="noopener noreferrer">GitHub</a>
        @endif
        @if(!empty($contact['resume']))
            <a href="{{ route('portfolio.resume') }}" target="_blank" rel="noopener noreferrer">R&eacute;sum&eacute;</a>
        @endif
        <a href="{{ route('portfolio.contact') }}">Contact</a>
    </div>
    <div class="footer-signature">
        <span>&copy; 2026</span>
        <span>Designed for Laravel &middot; PHP &middot; Livewire &middot; Tailwind</span>
    </div>
</footer>
