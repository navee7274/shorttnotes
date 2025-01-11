<footer>
  <div class="copyright_socials">
    <div class="copyright_idk">&copy; 2025 THYSICS.ORG. All rights reserved.</div>
  </div>
</footer>

<script type="text/javascript">
  /////////////////// MENU START /////////////////////////

  const menuButton = document.querySelector(".menu-button-wrapper");
  const dropdownMenu = document.querySelector(".dropdown-menu");
  const dropdownMenuWrapper = document.querySelector(".dropdown-menu-wrapper");
  const menuCloseButton = document.querySelector(".menu-close-button");

  dropdownMenu.addEventListener('animationend', () => {
    if (dropdownMenu.classList.contains("closed")) {
      dropdownMenuWrapper.classList.remove("open");
    }
    console.log("Hit!");
  });

  function closeMenu() {
    if (dropdownMenu.classList.contains("open") && dropdownMenuWrapper.classList.contains("open")) {
      dropdownMenu.classList.remove("open");
      dropdownMenu.classList.add("closed");
    }
  }

  menuButton.onclick = function() {
    if (!dropdownMenu.classList.contains("open") && !dropdownMenuWrapper.classList.contains("open")) {
      dropdownMenu.classList.remove("closed")
      dropdownMenu.classList.add("open");
      dropdownMenuWrapper.classList.add("open");
    } else {
      closeMenu();
    }
  };

  document.addEventListener("click", function(e) {
    if (!menuButton.contains(e.target) &&
      !dropdownMenu.contains(e.target) &&
      !dropdownMenuWrapper.contains(e.target) &&
      dropdownMenu.classList.contains("open")) {
      closeMenu();
    }
  });

  menuCloseButton.onclick = function() {
    closeMenu();
  };

  /////////////////// MENU END /////////////////////////

  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    const hero = document.querySelector('#section-hero');
    const heroBottom = hero.offsetTop + hero.offsetHeight - 80;

    if (window.scrollY > 0) {
      navbar.classList.remove('normal');
      navbar.classList.add('sticky');
    } else {
      navbar.classList.remove('sticky');
      navbar.classList.add('normal');
    }
  });
</script>