class sajak extends HTMLElement{
    connectedCallback(){
        this.innerHTML = ` <header>
        <nav class="hover" id="SearchForm">
            <ul>
              <a href="index.html"><img src="Image/logo.png" alt="logo" height="150" class="image"></a>
                <li><a href="index.html"><b>Home</b></a></li>
                <li><a href="blood.html"><b>Give Blood</b></a></li>
                <li><a href="News.html"><b>News and Updates</b></a></li>
                <li><a href="Training.html"><b>Training</b></a></li>
                <li><a href="Member.html"><b>Get involved?</b></a></li>
                <li><a href="About.html"><b>About Us</b></a></li>
                <li><a href="Contact.html"><b>Contact Us</b></a></li>
                <li><input type="search" id="search" class="searchbar" placeholder="What are you searching for..?"></li>
            </ul>
            <button type="submit" class="searchbtn" id="search" onclick="Searchdiv()"><img src="Image/1024px-Search_Icon.svg.png" alt="search" class="search"></button><br>
            </nav>

            <form action="" class="search-form" id="search-form">
        <label class="search-head"><b>Want to know about Blood?</b></label><br> 
        <label>Blood Group</label>
        <select name="Bloodgroup" id="Group" class="input-text">
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br><br>

<style>
    .search-form{
        float: right;
        margin-top: 5rem;
        width: 23rem;
        height: 100%;
        background-color: aquamarine;
        padding-top: 1rem;
        padding-left: 2rem;
        margin-right: 2.2rem;
        border-radius: 10px;
        background-color: #d8dfe4;
        opacity: 0.8;
        display: none;
        position: fixed;
    }
    
    .search-head{
        font-size: 20px;
    }

    .Search-input{
        height: 1.5rem;
        width: 13rem;
        border-radius: 5px;
        padding-left: 1rem;
    }


</style>

<script>
function Searchdiv(){
    const search = document.getElementById('search-form');
    search.style.display= "block";
}
</script>
</form>
           
           
        </header>`
         
    }
}

customElements.define('my-header',sajak)

function searchfunction(){
    console.log("1");
}



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
