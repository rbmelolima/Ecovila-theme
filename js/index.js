function toggleMenu() {
  const menuOverlay = document.getElementById("menu-container-overlay");
  const menuButton = document.getElementById("menu-button-toggle");

  menuOverlay.classList.toggle("open");
  menuButton.classList.toggle("active");

  document.querySelector("body").classList.toggle('no-scroll');
}


function menu_active_submenu() {
  //Pegando todas as 'li' de dentro do menu
  const li = document
    .getElementById('menu-container-overlay')
    .getElementsByTagName('li');

  //Pegando todos os 'ul' 
  for(let index = 0; index < li.length; index++) {
    const ul = li[index].getElementsByTagName('ul');
    if(ul.length === 0) continue;

    //Criando o icone
    const arrowDown = document.createElement("i");
    arrowDown.classList.add('fas');
    arrowDown.classList.add('fa-chevron-down');
    arrowDown.classList.add('size-16');

    const a = li[index].getElementsByTagName('a');

    a[0].addEventListener('click', () => {
      ul[0].classList.toggle('show');
    });

    a[0].appendChild(arrowDown);
  }
}

function active_submenu_with_click(idSubmenu) {
  document.getElementById(idSubmenu).classList.toggle('show');
}


//Call functions
menu_active_submenu();