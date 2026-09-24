/**
 * Systems in Motion - Lightweight Interactive Layer
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Compact Header on Scroll
    const header = document.getElementById('site-header');
    if (header) {
        const updateHeader = () => {
            if (window.scrollY > 48) {
                header.classList.add('is-compact');
            } else {
                header.classList.remove('is-compact');
            }
        };

        window.addEventListener('scroll', updateHeader, { passive: true });
        updateHeader();
    }

    // 2. Systems Visual Interactive Tracking
    const initSystemsVisual = () => {
        const visual = document.querySelector('.js-systems-visual');
        if (!visual) return;

        visual.addEventListener('pointermove', (event) => {
            const box = visual.getBoundingClientRect();
            if (!box || box.width === 0 || box.height === 0) return;

            const mx = ((event.clientX - box.left) / box.width - 0.5) * 12;
            const my = ((event.clientY - box.top) / box.height - 0.5) * 12;

            visual.style.setProperty('--mx', `${mx.toFixed(2)}px`);
            visual.style.setProperty('--my', `${my.toFixed(2)}px`);
        });

        visual.addEventListener('pointerleave', () => {
            visual.style.setProperty('--mx', '0px');
            visual.style.setProperty('--my', '0px');
        });
    };

    initSystemsVisual();

    // Re-init on Livewire page navigation if active
    document.addEventListener('livewire:navigated', () => {
        initSystemsVisual();
    });
});
