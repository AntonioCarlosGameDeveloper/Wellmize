window.onload = () => {
  document.getElementById("main").src = "home.html";
  document.getElementById("footer").src = "./layout/footer.php";
};

window.onscroll = () => {
  const element = document.getElementById("header-page").classList;
  if (window.scrollY > 100) {
    element.add("header-background");
  } else {
    element.remove("header-background");
  }
};

function onOpenPage(page) {
  document.getElementById("main").src = page;
  if(page === "dashboard.html") 
    document.getElementById('header-page').style.display = "none";
  handleOpenMenu();
}

function handleOpenMenu() {
  const element = document.getElementById("navigation-menu").classList;
  const imageElement = document.getElementById("menu-icon");
  if (element.contains("open")) {
    element.remove("open");
    imageElement.src = "./assets/menu.svg";
  } else {
    element.add("open");
    imageElement.src = "./assets/close-menu.svg";
  }
}
