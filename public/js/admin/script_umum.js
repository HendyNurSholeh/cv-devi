// Navbar > Mengatur warna navigasi ketika diclick
const navbar = document.getElementsByClassName("navbar-nav")[0];
const navlink = document.querySelectorAll(".nav-link");
navbar.addEventListener("click", function (e) {
  clickOren(e, navlink);
});
// Navbar > Mengatur warna navigasi ketika mouse berada diatas element tersebut
navbar.addEventListener("mouseover", function (e) {
  for (let i = 0; i < navlink.length; i++) {
    if (!navlink[i].classList.contains("aktif")) {
      navlink[i].style.color = "#6c757d";
    }
  }
  if (!e.target.classList.contains("aktif")) {
    if (e.target.classList.contains("click-oren")) {
      e.target.classList.add("ubahUkuran");
      e.target.addEventListener("mouseleave", function (e) {
        e.target.classList.remove("ubahUkuran");
        if (!e.target.classList.contains("aktif")) {
          e.target.style.color = "#6c757d";
        }
      });
      e.target.style.color = "black";
    }
  }
});

// Tanggal
const today = new Date().toLocaleDateString("en-US", { timeZone: "Asia/Makassar" });
const [month, day, year] = today.split("/");
const todayFormat = `${year}-${month.padStart(2, "0")}-${day.padStart(2, "0")}`;
const tanggal = document.querySelectorAll(".tanggal");
for (let i = 0; i < tanggal.length; i++) {
  // set default tanggal menjadi hari ini
  tanggal[i].defaultValue = todayFormat;
  // Set tanggal agar tidak melebihi hari ini
  tanggal[i].setAttribute("max", todayFormat);
}
