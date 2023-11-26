const linkSobreNos = document.querySelector("#nav-sobre-nos");
const btnNavLink = document.querySelector("#btn-nav-link");
const containerNavIndex = document.querySelector("#container-nav");

btnNavLink.addEventListener("click", () => {
  if (containerNavIndex.classList.contains("bg-container-nav")) {
    containerNavIndex.classList.remove("bg-container-nav");
  } else {
    containerNavIndex.classList.add("bg-container-nav");
  }
});

linkSobreNos.addEventListener("click", () => {
  if (linkSobreNos.classList.contains("show")) {
    linkSobreNos.classList.add("unshow");
  }
});
