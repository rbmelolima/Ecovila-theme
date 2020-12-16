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


function tree() {
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

tree();