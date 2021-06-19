<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .galery-container{
        display: flex;
        justify-content: center;
    }

    .galery-container img{
        width: 80px;
        margin: 20px 20px 0 0;
    }

    body{
        background-color: #f8f4f1;
    }

    .kiri {
        display: flex;
        justify-content: flex-end;
    }

    #notification {
        /* height: 150px; */
        width: 100%;
        position: relative;
    }

    #notification h1 {
        font-size: 12px;
        background-color: #fdfcee;
        padding: 15px 0;
    }

    header#header{
        background-color: #f8f4f1;
        opacity: 0.8;
        margin-top: -130px;
        /* position: absolute; */
    }

    header#header .header__link a{
        text-transform: uppercase;
        text-decoration: none;
        color: #1c1b1b;
        font-size: 12px;
    }

    .product__description h1{
        font-size: 18px;
        text-transform: uppercase;
        font-weight: 400;
        color: #1c1b1b;
    }

    .product__description h2{
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 400;
        color: #1c1b1b;
    }

    .product__description h3{
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 400;
        color: #6a6a6a;
    }

    .product__size-chart{
        position: relative;
    }

    .product__size-chart p{
        position: absolute;
        right: 50px;
        color: #6a6a6a;
        border-bottom: 1px solid #6a6a6a;
    }

    .product__size{
        font-size: 14px;
        padding: 10px 0;
        margin-bottom: 30px;
    }

    .product__size--table h1{
        font-size: 14px;
        font-weight: 400;
        display: inline;
        margin-right: 16px;
        padding: 10px 12px;
        border: 1px solid #6a6a6a;
        color: #6a6a6a;
    }

    .product__button button, footer button{
        width: 93%;
        font-size: 14px;
        border: 1px solid #d1d1d1;
        margin-bottom: 20px;
        padding: 10px 0;
        background-color: transparent;
        color: #1c1b1b;
    }

    .product__button i{
        color: red;
        font-size: 16px;
    }

    .product__button .product__button--primary, footer button{
        border: 1px solid #cda398;
        position: relative;
        transition: all .35s;
        background-color: #cda398;
    }

    .product__button .product__button--primary span, footer button span{
        position: relative;
        z-index: 2;
    }

    .product__button .product__button--primary:after, footer button:after{
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: #f8f4f1;
        transition: all .35s;
    }

    .product__button .product__button--primary:hover:after, footer button:hover:after{
        width: 100%;
    }

    .product-information p{
        font-size: 16px;
        color: #1c1b1b;
        line-height: 23px;
    }

    .value-proposition{
        margin-top: 60px;
        background-color: #f1e9df;
    }

    .value-proposition h1{
        font-size: 14px;
        line-height: 21px;
        text-align: center;
        color: rgb(75, 74, 74);
    }

    .value-proposition .value-proposition__value{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px 0;
    }

    .value-proposition .value-proposition__value--value2 h1{
        max-width: 90%;
    }

    .value-proposition .value-proposition__value img{
        display: block;
        margin: 0 auto;
        margin-bottom: 20px;
    }

    footer .grid-container{
        display: grid;
        grid-template-columns: 1fr 1.5fr 1fr 1fr 2fr 1fr;
    }

    footer{
        padding: 50px 0;
        margin-left: -70px;
        margin-top: 0px;
    }

    footer input[type=text] {
        width: 100%;
        border: 1px solid rgb(197, 195, 195);
        padding: 8px 10px;
    }

    footer ::placeholder {
        color: rgb(75, 74, 74);
        font-size: 15px;
    }

    footer .grid-container .grid-item p{
        margin: 10px 0;
        font-size: 14px;
    }

    footer .grid-container .grid-item i{
        margin-right: 30px;
    }
</style>

<footer class="footer">
    {{-- <div class="text-center py-5">
        <h2 class="py-3">gloeshoes.leather</h2>
        <div class="mx-auto heading-line"></div>
    </div>
    <div class="container">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <p>Get the latest update on our social media. We offer good price on special day, come and join us!</p>
                    <div class="justify-content-center">
                        <i class="fab fa-facebook fa-2x"></i>
                        <i class="fab fa-twitter fa-2x"></i>
                        <i class="fab fa-instagram fa-2x"></i>
                    </div>
                </div>
            </div>

            <div class="copyright text-center py-3 border-top text-light">
                <p>&copy; Copyright gloeshoes.leather</p>
            </div>

        </div>
    </div> --}}

    
        <div class="container">
            <div class="grid-container">
                <div class="grid-item">
                    <p>Shop All</p>
                    <p>New Arrivals</p>
                    <p>Best Sellers</p>
                    <p>Sale</p>
                </div>
                <div class="grid-item">
                    <p>How to Order</p>
                    <p>Shipping</p>
                    <p>Return & Exchanges</p>
                    <p>Payment Confirmation</p>
                    <p>Terms of Service</p>  
                </div>
                <div class="grid-item">
                    <p>FAQ</p>
                    <p>Size Guide</p>
                    <p>About Us</p>
                    <p>Contact Us</p>
                </div>
                <div class="grid-item">
                    <p>Follow Us</p>
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-instagram"></i>
                </div>
                <div class="grid-item">
                    <p>Join our newsletter to get the latest news</p>
                    <input type="text" placeholder="Enter your email address" class="mt-2">
                    <button type="button" class="button--primary mt-3"> <span> SUBSCRIBE </span> </button>
                </div>
            </div>
        </div>
    
</footer>