const menu = document.getElementsByClassName("menu")[0];
const navbar = document.getElementsByTagName("nav")[0];
const menuClass = menu.classList;

menu.addEventListener("click", menuClick);

function menuClick() {
  if (menuClass.contains("menu-clicked")) {
    menuClass.remove("menu-clicked");
    navbar.classList.remove("display");
  } else {
    menuClass.add("menu-clicked");
    navbar.classList.add("display");
  }
}
