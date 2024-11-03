console.log("hello world");
const passwordInput = document.getElementById("password");
document.addEventListener("DOMContentLoaded", function () {
    gsap.to(".loading", {
        opacity : 0,
        stagger : 1,
    });
});
