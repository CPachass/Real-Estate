document.addEventListener("DOMContentLoaded", function() {
    load_app();
});

function load_app() {
    display_menu();
    change_color_mode();
}

function change_color_mode() {
    let mode = localStorage.getItem("mode");
    if (mode === "dark") {
        document.body.classList.add("dark_mode");
    }
    const button_darkmode = document.querySelector(".dark-mode_logo img");
    // Add or delete the class if it exist or not
    button_darkmode.addEventListener("click", () => {
        document.body.classList.toggle("dark_mode");
        mode = document.body.classList.contains("dark_mode") ? "dark" : "light";
        localStorage.setItem("mode", mode);
    });

}

function display_menu() {
    const nav = document.querySelector(".nav-bar nav");
    const button_menu = document.querySelector("div.menu_expand img");

    if(window.innerWidth <= 768) {
        button_menu.parentNode.classList.remove("hidden");
        nav.classList.add("hidden");
    } else {
        button_menu.parentNode.classList.add("hidden");
        nav.classList.remove("hidden");
    }
    
    button_menu.addEventListener("click", function() {
        nav.classList.toggle("hidden");
    });

    window.addEventListener("resize", function() {
        if(window.innerWidth <= 768) {
            button_menu.parentNode.classList.remove("hidden");
        } else {
            button_menu.parentNode.classList.add("hidden");
            nav.classList.remove("hidden");
        }
    });

}