document.addEventListener("DOMContentLoaded", function() {
    // Select all menu items that have children
    const menuItems = document.querySelectorAll(".qld__side-nav__content .menu-item-has-children");

    menuItems.forEach(item => {
        // Create a span element for the indicator
        const trigger = document.createElement('span');
        trigger.classList.add('accordion-trigger');
        
        // Append the span element after the link
        const link = item.querySelector('.qld__sidenav__link');
        link.parentNode.insertBefore(trigger, link.nextSibling);

        // Add click event listener to the trigger
        trigger.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent any default behavior

            const parentItem = this.parentElement;

            // Toggle the acc-active class on the clicked item
            parentItem.classList.toggle("acc-active");

            // Get the nested list
            const subMenu = parentItem.querySelector("ul");

            // Toggle the display of the nested list
            if (subMenu.style.display === "block") {
                subMenu.style.display = "none";
            } else {
                subMenu.style.display = "block";
            }
        });
    });
});


