import { animate } from "https://cdn.jsdelivr.net/npm/motion@11.11.13/+esm";

const loadingParentDiv = document.querySelector(".loading");
const allLoadingChild = loadingParentDiv.children;

// creating pre loading page
document.addEventListener("DOMContentLoaded", () => {
    animate(
        allLoadingChild[0],
        {
            y: " -100%",
        },
        { duration: 0.5, ease: "easeInOut", delay: 0.1 }
    );
    animate(
        allLoadingChild[1],
        {
            y: " -100%",
        },
        { duration: 0.5, ease: "easeInOut" }
    );
});
