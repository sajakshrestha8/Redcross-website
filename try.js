class sajak extends HTMLElement{
    connectedCallback( ){
        this.innerHTML = `<header>
        <nav class="hover" id="SearchForm" onsubmit="return validateSearch()">
            <ul>
              <img src="image/logo.png" alt="logo" height="150" class="image">
                <li><a href="home.html"><b>Home</b></a></li>
                <li><a href="blood.html"><b>Give Blood</b></a></li>
                <li><a href="News.html"><b>News and Updates</b></a></li>
                <li><a href="Training.html"><b>Training</b></a></li>
                <li><a href="Member.html"><b>Get involved?</b></a></li>
                <li><a href="About.html"><b>About Us</b></a></li>
                <li><a href="Contact.html"><b>Contact Us</b></a></li>
                
            </ul>
            <button type="submit" class="searchbtn"><img src="Image/1024px-Search_Icon.svg.png" alt="seach" class="search"></button>
        </nav>
        </header>`
        
    }
}

customElements.define('my-header',sajak)


// // When the user scrolls the page, execute myFunction
// window.onscroll = function() {myFunction()};

// // Get the navbar
// var navbar = document.getElementById("SearchForm");

// // Get the offset position of the navbar
// var sticky = navbar.offsetTop;

// // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
// function myFunction() {
// if (window.pageYOffset >= sticky) {
// navbar.classList.add("sticky")
// } else {
// navbar.classList.remove("sticky");
// }
// }
