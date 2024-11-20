

const loadingParentDiv = document.querySelector(".loading");
const allLoadingChild = loadingParentDiv.children;


// creating pre loading page 
document.addEventListener("DOMContentLoaded", () => {
    animate(
        allLoadingChild[0],
        {
            y: -100,
        },
        { duration: 0.4 }
    );
    animate(
        allLoadingChild[1],
        {
            y: -100,
        },
        { duration: 0.4 }
    );
});
