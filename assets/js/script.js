var showNav=false;var nav_collapsed=document.querySelector("#nav_collapsed");var blindsContainer=document.querySelector("#blinds_container_id");var blindsContainerCollapse=document.querySelector("#blinds_container_collapse_id");if(showNav==true){nav_collapsed.classList.remove("nav-collapsed");nav_collapsed.classList.add("absolute","nav-show")}else{nav_collapsed.classList.remove("nav-show");nav_collapsed.classList.add("hidden","nav-collapsed")}var handleNav=()=>{showNav=!showNav;if(showNav==true){nav_collapsed.classList.remove("hidden","nav-collapsed");nav_collapsed.classList.add("absolute","nav-show")}else{nav_collapsed.classList.remove("nav-show");nav_collapsed.classList.add("nav-collapsed")}};function updateIcon(){if(window.innerWidth>=768){blindsContainer.innerHTML='<div id="blinds_id"></div>';blindsContainerCollapse.innerHTML=""}else{blindsContainer.innerHTML="";blindsContainerCollapse.innerHTML='<div id="blinds_id"></div>'}}updateIcon();window.addEventListener("resize",updateIcon());document.querySelector("#blinds_id").onclick=()=>{blindsToggle()};let darkStyle={".body-bg":{"background-color":"#0a0a0a"},".nav,.tag-line":{"background-color":"#0a0a0a",color:"#c0c0c0"}};setBlindsStyles(darkStyle);blindsInit();