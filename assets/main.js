console.warn("info");

function handleShowCollapsedMenu() {
    const menuList = document.querySelector("#menu-items");
    const menuButton = document.querySelector("#menu-button");

    if (menuList) {
        if (menuList.classList.contains("menu-opened")) {
            menuList.classList.remove("menu-opened");

            if (menuButton) {
                menuButton.classList.remove("open");
            }
        } else {
            menuList.classList.add("menu-opened");

            if (menuButton) {
                menuButton.classList.add("open");
            }
        }
    }
}
