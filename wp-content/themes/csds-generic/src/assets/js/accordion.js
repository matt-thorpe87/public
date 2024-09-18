document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".qld__side-nav__content .menu-item-has-children").forEach(e => {
        var t = document.createElement("span");
        t.classList.add("accordion-trigger");
        var link = e.querySelector(".qld__sidenav__link");
        e.insertBefore(t, link.nextSibling);
 
        t.addEventListener("click", function(event) {
            event.preventDefault();
            var parentLi = this.parentElement;
            parentLi.classList.toggle("acc-active");
            var nestedUl = parentLi.querySelector("ul");
            nestedUl.style.display = nestedUl.style.display === "block" ? "none" : "block";
        });
 
        if (e.querySelector("ul .current-menu-item")) {
            e.classList.add("acc-active");
            var nestedUl = e.querySelector("ul");
            nestedUl.style.display = "block";
        }
    });
});