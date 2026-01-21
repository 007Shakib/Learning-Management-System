const links = document.querySelectorAll(".nav a");

links.forEach(link => {
  if (link.href === window.location.href) {
    link.classList.add("active");
  }
});

particlesJS.load(
  'particles-js',
  'particles.js-master/particles.json'
);
function goToPage() {
  window.location.href = "/practice/practice.html";
}
function goTocss() {
  window.location.href = "/practice/practicecss.html";
}
function goTojs() {
  window.location.href = "/practice/practicejs.html";
}
function goToRegister() {
    window.location.href = '/logreg/register.html';
}
function goToLogin() {
    window.location.href = '/logreg/log-in.html';
}