const UIManager = {
  init() {
    this.showAccountModal();
    this.highlightNavLink();
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
      modalIcons[1].style.display = isOpen ? "block" : "none" ;
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
        modalIcons[1].style.display = "none" ;
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

    console.log(exploreLink, postLink);

    const url = window.location.href;

    if (url.includes("explore"))
      exploreLink.classList.add("highlitght-nav-link");
    if (url.includes("post")) postLink.classList.add("highlitght-nav-link");
  },
};

document.addEventListener("DOMContentLoaded", () => {
  UIManager.init();
});
