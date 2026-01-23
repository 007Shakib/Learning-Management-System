const links = document.querySelectorAll(".nav a");

links.forEach(link => {
  if (link.href === window.location.href) {
    link.classList.add("active");
  }
});

particlesJS.load(
  'particles-js',
  '/LMS/particles.js-master/particles.json'
);
function goToPage() {
  window.location.href = "practice/practice.php";
}
function goTocss() {
  window.location.href = "practice/practicecss.php";
}
function goTojs() {
  window.location.href = "practice/practicejs.php";
}
function goToRegister() {
    window.location.href = 'logreg/register.php';
}
function goToLogin() {
    window.location.href = 'logreg/login.php';
}