var templateUrl = object_name.templateUrl;

function toggleNav(x) {
  x.classList.toggle("change");
  var height = document.getElementById("myNav").style.height;
  if (!!height && height != "0px") {
    document.getElementById("myNav").style.height = 0;
  } else {
    document.getElementById("myNav").style.height = "100%";
  }
}

function toggleDropDownMobileOferta(x) {
  document.getElementById("dropdown-oferta").classList.toggle("show");
}

AOS.init({
  duration: 900,
  once: true,
});
console.log("test");
const navLinkDesktop = document.querySelectorAll(".nav-link--desktop");

Array.from(navLinkDesktop).forEach((link, i) => {
  setTimeout(() => link.classList.add("fade-in"), (i + 0.5) * 400);
});
