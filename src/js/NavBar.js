document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.getElementById("main-navbar");
  const adminBar = document.getElementById("wpadminbar");

  if (!navbar) return;

  let ticking = false;

  function handleScroll() {
    const triggerPoint = document.body.scrollHeight * 0.2;
    const adminBarHeight = adminBar ? adminBar.offsetHeight : 0;

    if (window.scrollY > triggerPoint) {
      navbar.classList.add("nav-sticky");
      navbar.style.top = adminBarHeight + "px";
    } else {
      navbar.classList.remove("nav-sticky");
      navbar.style.top = "";
    }

    ticking = false;
  }

  window.addEventListener("scroll", () => {
    if (!ticking) {
      requestAnimationFrame(handleScroll);
      ticking = true;
    }
  });
});
