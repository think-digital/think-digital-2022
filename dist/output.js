// Nav Popup
function menuToggle() {
  const toggles = document.querySelectorAll('[data-toggle]');
  toggles.forEach((toggle) => {
    const button = toggle.querySelector('[data-toggle-button]');
    button.addEventListener('click', () => {
      event.preventDefault();
      if (toggle.getAttribute('data-active')) {
        toggle.removeAttribute('data-active');
        button.setAttribute('aria-label', 'Menu (Closed)');
      } else {
        toggle.setAttribute('data-active', true);
        button.setAttribute('aria-label', 'Menu (Open)');
      }
    });
  });
}
menuToggle();

// Scroll to anchor
const anchors = document.querySelectorAll('a[href^="#"]:not(.is-static)');
anchors.forEach((anchor) => {
  anchor.addEventListener('click', () => {
    const target = document.querySelector(anchor.hash);
    event.preventDefault();
    target.scrollIntoView({ block: 'start', behavior: 'smooth' });
    document.addEventListener('touchstart', target, { passive: true });
  });
});
