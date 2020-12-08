function toggleMenu() {
  const menuOverlay = document.getElementById("menu-container-overlay");
  const menuIcon = document.getElementById("menu-button-icon");
  menuOverlay.classList.toggle("open");

  if(menuIcon.classList.contains('fa-bars')) {
    menuIcon.classList.remove('fa-bars');
    menuIcon.classList.add('fa-times');
  }

  else {
    menuIcon.classList.remove('fa-times');
    menuIcon.classList.add('fa-bars');
  }

  document.querySelector("body").classList.toggle('no-scroll');
}

