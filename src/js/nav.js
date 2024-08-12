var showNav = false;
// var label_nav_collapsed = document.querySelector('#label_nav_collapsed');
var nav_collapsed = document.querySelector('#nav_collapsed');
var blindsContainer = document.querySelector('#blinds_container_id');
var blindsContainerCollapse = document.querySelector('#blinds_container_collapse_id');

if (showNav == true) {
    // label_nav_collapsed.classList.remove("opacity-0", "hidden");
    // label_nav_collapsed.classList.add("fixed", "opacity-70");
    nav_collapsed.classList.remove("nav-collapsed") ;
    nav_collapsed.classList.add("absolute", "nav-show") ;
} else {
    // label_nav_collapsed.classList.remove("opacity-70");
    // label_nav_collapsed.classList.add("opacity-0", "hidden");
    nav_collapsed.classList.remove("nav-show");
    nav_collapsed.classList.add("hidden", "nav-collapsed");
}

var handleNav = () => {
    showNav = !showNav;
    if (showNav == true) {
        // label_nav_collapsed.classList.remove("opacity-0", "hidden");
        // label_nav_collapsed.classList.add("fixed", "opacity-70");
        nav_collapsed.classList.remove("hidden", "nav-collapsed");
        nav_collapsed.classList.add("absolute", "nav-show");
    } else {
        // label_nav_collapsed.classList.remove("opacity-70");
        // label_nav_collapsed.classList.add("opacity-0", "hidden");
        nav_collapsed.classList.remove("nav-show");
        nav_collapsed.classList.add("nav-collapsed");
    }
}

function updateIcon()
{
    if (window.innerWidth >= 768) {
        blindsContainer.innerHTML = '<div id="blinds_id"></div>';
        blindsContainerCollapse.innerHTML = '';
    } else {
        blindsContainer.innerHTML = '';
        blindsContainerCollapse.innerHTML = '<div id="blinds_id"></div>';
    }
}

updateIcon();

window.addEventListener('resize', updateIcon());

document.querySelector('#blinds_id').onclick = () => {
    blindsToggle();
};
let darkStyle = {
    ".body-bg": {
        "background-color": "#0a0a0a"
    },
    ".nav,.mob-menu,.mob-menu-site-name,.tag-line,.post-details,.post-card-desc,.newsletter-input,main article,main article h1,main article h3": {
        "background-color": "#0f0f0f",
        "color": "#c0c0c0"
    },
    ".newsletter-input": {
        "border-color": "#c0c0c0"
    },
    "main article blockquote": {
        "color": "#909090",
        "border-color": "#909090",
        "background-color": "#1f1f1f"
    }
};
setBlindsStyles(darkStyle);
blindsInit();
