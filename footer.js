class footer extends HTMLElement{
    connectedCallback(){
        this.innerHTML = `
        <footer>

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
            <label>View Our Location</label>
            <p>From the App Store or Google play</p>
            <div class="row">
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7065.175083057745!2d85.2851742305553!3d27.699140141706298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199bd33966a7%3A0x42fe38c4499c44e0!2sRed%20Cross%20International!5e0!3m2!1sen!2snp!4v1708582347752!5m2!1sen!2snp" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p>Secured Payment Gateways</p>
        </div>
      </footer>
      <div class="footer-bottom">
        <p>&copy; 2023 Your Website. All rights reserved.</p>
      </div>`
    }
}

customElements.define('my-footer',footer)