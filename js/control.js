window.onload = () => {
  document.getElementById("main").src = "home.html";
};

function onOpenPage(page) {
  document.getElementById("main").src = page;
}