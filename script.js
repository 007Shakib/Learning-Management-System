const links = document.querySelectorAll(".nav a");

links.forEach(link => {
  try {
    if (link.href === window.location.href) {
      link.classList.add("active");
    }
  } catch (e) {}
});

// Determine base URL from the script file's location so pages in subfolders
// resolve assets (particles config, navigation targets) correctly.
const _currentScript = document.querySelector('script[src$="script.js"]');
const _base = _currentScript ? new URL('.', _currentScript.src).href : (window.location.origin + '/');

const particlesConfig = new URL('particles.js-master/particles.json', _base).href;
if (window.particlesJS && typeof window.particlesJS.load === 'function') {
  window.particlesJS.load('particles-js', particlesConfig);
}

function goToPage() {
  window.location.href = new URL('practice/practice.html', _base).href;
}
function goTocss() {
  window.location.href = new URL('practice/practicecss.html', _base).href;
}
function goTojs() {
  window.location.href = new URL('practice/practicejs.html', _base).href;
}
function goToRegister() {
    window.location.href = new URL('logreg/register.html', _base).href;
}
function goToLogin() {
    window.location.href = new URL('logreg/log-in.html', _base).href;
}