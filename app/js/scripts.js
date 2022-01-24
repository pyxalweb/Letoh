// **************************************************
//  Prevent href="#" from appending '#' to address bar
// **************************************************
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (event) => {
        event.preventDefault();
    });
});
