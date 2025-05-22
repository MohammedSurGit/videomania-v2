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

    const accountModal = document.querySelector(".account-modal");
    accountModal.classList.add("hide-account-modal");

    let isOpen = false;
    accountModal.style.display = "none";


    showModalButton.addEventListener("click", () => {
      isOpen = !isOpen;
      accountModal.style.display = isOpen ? "block" : "none";
    });

    document.addEventListener("click", function (e) {
      if (
        !showModalButton.contains(e.target) &&
        !accountModal.contains(e.target)
      ) {
        isOpen = false;
        accountModal.style.display = "none";
      }
    });
  },

  highlightNavLink() {
    const headerNav = document.querySelector(".nav-container");
    if (!headerNav) {
      return;
    }

    const homeLink = headerNav.querySelector("#home");
    const exploreLink = headerNav.querySelector("#explore");
    const postLink = headerNav.querySelector("#post");

    console.log(homeLink, exploreLink, postLink);

    const url = window.location.href;

    if (url.includes("home")) homeLink.classList.add("highlitght-nav-link");
    if (url.includes("explore"))
      exploreLink.classList.add("highlitght-nav-link");
    if (url.includes("post")) postLink.classList.add("highlitght-nav-link");
  },
};

document.addEventListener("DOMContentLoaded", () => {
  UIManager.init();
});
