const UIManager = {
  init() {
    this.showAccountModal();
    this.highlightNavLink();
    this.showPassword();
    this.changeHeaderColorOnScroll();
    /* this.highlightSearchInputOnClick(); */
    this.swipperInit();
  },

  showAccountModal() {
    const showModalButton = document.querySelector(".show-account-modal");
    if (!showModalButton) {
      return;
    }

    const modalIcons = [
      document.querySelector("#open-account-modal-icon"),
      document.querySelector("#close-account-modal-icon"),
    ];
    const accountModal = document.querySelector(".account-modal");
    const body = document.querySelector("body");
    const header = document.querySelector("header");

    accountModal.classList.add("hide-account-modal");
    modalIcons[1].style.display = "none";

    let isOpen = false;
    accountModal.style.display = "none";

    showModalButton.addEventListener("click", () => {
      isOpen = !isOpen;
      body.classList.toggle("compressed-body");
      header.classList.toggle("header-black");
      accountModal.style.display = isOpen ? "block" : "none";
      modalIcons[0].style.display = isOpen ? "none" : "block";
      modalIcons[1].style.display = isOpen ? "block" : "none";
    });

    document.addEventListener("click", function (e) {
      if (
        !showModalButton.contains(e.target) &&
        !accountModal.contains(e.target)
      ) {
        isOpen = false;
        body.classList.remove("compressed-body");
        header.classList.remove("header-black");
        accountModal.style.display = "none";
        modalIcons[0].style.display = "block";
        modalIcons[1].style.display = "none";
      }
    });
  },

  highlightNavLink() {
    const headerNav = document.querySelector(".nav-container");
    if (!headerNav) {
      return;
    }

    const exploreLink = headerNav.querySelector("#explore");
    const postLink = headerNav.querySelector("#post");

    const url = window.location.href;

    if (url.includes("explore"))
      exploreLink.classList.add("highlitght-nav-link");
    if (url.includes("post")) postLink.classList.add("highlitght-nav-link");
  },

  showPassword() {
    const passwordContainers = document.querySelectorAll(".password-container");

    passwordContainers.forEach((e) => {
      const passwordInput = e.querySelector("input");
      const openedEyeIcon = e.querySelector('img[src*="opened-eye.svg"]');
      const closedEyeIcon = e.querySelector('img[src*="closed-eye.svg"]');

      closedEyeIcon.style.display = "none";

      openedEyeIcon.addEventListener("click", () => {
        closedEyeIcon.style.display = "block";
        openedEyeIcon.style.display = "none";
        passwordInput.type = "text";
      });

      closedEyeIcon.addEventListener("click", () => {
        closedEyeIcon.style.display = "none";
        openedEyeIcon.style.display = "block";
        passwordInput.type = "password";
      });
    });
  },

  changeHeaderColorOnScroll() {
    const header = document.querySelector("header");
    if (!header) {
      return;
    }

    const homeHeading = document.querySelector(".home-heading");

    if (homeHeading) {
      window.addEventListener("scroll", () => {
        const scrollPosition = window.scrollY;
        const triggerPoint = window.innerHeight * 0.4;

        if (scrollPosition > triggerPoint) {
          header.style.backgroundColor = "var(--primary-a-color)";
        } else {
          header.style.backgroundColor = "transparent";
        }
      });
    } else {
      header.style.backgroundColor = "var(--primary-a-color)";
    }
  },

  /* highlightSearchInputOnClick() {
    const searchInputContainer = document.querySelector('.search-container div');
    if (!searchInputContainer) {return}

    const searchInput = searchInputContainer.querySelector('input');
    const searchIcon = searchInputContainer.querySelector('img');


    searchInput.addEventListener('click', () => {
      searchInputContainer.style.border = "solid 1px var(--white)";
      searchIcon.style.opacity = '1';
    });



    document.addEventListener("click", function (e) {
      if (
        !searchInputContainer.contains(e.target)
      ) {
        searchInputContainer.style.border = "solid 1px transparent";
        searchIcon.style.opacity = '0.5';
      }
    });





  } */

  swipperInit() {
    const authAside = document.querySelector(".auth-aside");
    if (!authAside) {
      return;
    }

    const swiper = new Swiper(".swiper", {
      /* autoplay */
      autoplay: {
        delay: 4000,
      },

      // Optional parameters
      direction: "horizontal",
      loop: true,

      // If we need pagination
      pagination: {
        el: ".swiper-pagination",
      },

      // Navigation arrows
      /* navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      }, */

      // And if we need scrollbar
      /* scrollbar: {
        el: ".swiper-scrollbar",
      }, */
    });
  },
};

document.addEventListener("DOMContentLoaded", () => {
  UIManager.init();
});
