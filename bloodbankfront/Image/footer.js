class footer extends HTMLElement{
    connectedCallback( ){
        this.innerHTML = `<footer>

        <div class="col1">
            <img src="images/logo.png" alt="logo" width="150px" height="150px">
            <h3>CONTACT</h3>
            <p><strong>Address: </strong> Putalisadak, Kathmandu</p>
            <p><strong>Phone number: </strong> Putalisadak, Kathmandu</p>
            <p><strong>Feedback: </strong>nomailtome@gmail.com</p>
        </div>

        <div class="col2">
            <h3>ABOUT US</h3>
            <a href="#">About</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">Contact us</a>
        </div>

        <div class="col-install">
            <h4>Install App</h4>
            <p>From the App Store or Google play</p>
            <div class="row">
                <img src="images/appStorelogo.jpeg" alt="logo1" width="100px" height="100px">
                <img src="images/googleStorelogo.jpeg" alt="logo2" width="100px" height="100px"> 
            </div>
            <p>Secured Payment Gateways</p>
            <img src="images/visa2.jpeg" alt="paymentlogo" width="250px" height="80px">
        </div>
      </footer>
      <div class="footer-bottom">
        <p>&copy; 2023 Your Website. All rights reserved.</p>
      </div>`
    }
}

customElements.define('my-footer',footer)