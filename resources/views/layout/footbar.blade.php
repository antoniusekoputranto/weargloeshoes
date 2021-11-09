<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body{
        font-family: 'Roboto-Light', sans-serif;
        font-size: 16px;
    }

    #whatsapp img{
        /* position: sticky; */
        margin-left: 98%;
        margin-bottom: 1%;
        transform: translateX(-100%);
        /* width: auto; */
        /* top: 100px; */
    }

    footer .grid-container{
        display: grid;
        grid-template-columns: 1fr 1.5fr 1fr 1fr 2fr 1fr;
    }

    footer{
        padding: 50px 0;
        margin-left: -70px;
        margin-top: 0px;
        background-color: white;
        color: black;
}
    }

    /* footer input[type=text] {
        width: 100%;
        border: 1px solid rgb(197, 195, 195);
        padding: 8px 10px;
    } */

    /* footer ::placeholder {
        color: rgb(75, 74, 74);
        font-size: 15px;
    } */

    footer .grid-container .grid-item p{
        margin: 10px 0;
        font-size: 16px;
    }

    footer .grid-container .grid-item i{
        margin-right: 30px;
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
    .product__button .product__button--primary, footer button{
        border: 1px solid #d1d1d1;
        position: relative;
        transition: all .35s;
        background-color: white;
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

</style>
<div id="whatsapp" class="fixed-bottom">
    <a href="https://api.whatsapp.com/send?phone=62{{$akunperusahaan->link_whatsapp}}"><img src="https://empirefitclub.com/wp-content/uploads/2018/07/whatsapp.svg" width="50px"></a>
    {{-- <i class="fab fa-whatsapp fa-4x" style="color: green"></i> --}}
</div>
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
                    <a href="/shoes" style="text-decoration: none; color: black"><p>Shop All</p></a>
                    <a href="/new_arrival" style="text-decoration: none; color: black"><p>New Arrivals</p></a>
                    <a href="/aboutus" style="text-decoration: none; color: black"><p>About Us</p></a>
                    {{-- <p>Best Sellers</p>
                    <p>Sale</p> --}}
                </div>
                <div class="grid-item">
                    <p>Follow Us</p>
                    <a href="{{$akunperusahaan->link_facebook}}" style="text-decoration: none; color: black"><i class="bi bi-facebook"></i></a>
                    <a href="{{$akunperusahaan->link_instagram}}" style="text-decoration: none; color: black"><i class="bi bi-instagram"></i></a>
                    <a href="{{$akunperusahaan->link_shopee}}"><img src="{{asset('/images/logo/shopee.png') }}" style="width: 24px" alt=""></a>
                    {{-- <a href="{{$akunperusahaan->link_tokopedia}}"><img src="{{asset('/images/logo/tokopedia.png') }}" style="width: 24px" alt=""></a> --}}
                    {{-- <p>How to Order</p>
                    <p>Shipping</p>
                    <p>Return & Exchanges</p>
                    <p>Payment Confirmation</p>
                    <p>Terms of Service</p>   --}}
                </div>
                {{-- <div class="grid-item">
                    <p>FAQ</p>
                    <p>Size Guide</p>
                    <p>Contact Us</p>
                </div> --}}
                {{-- <div class="grid-item">
                </div> --}}
                {{-- <div class="grid-item">
                    <p>Join our newsletter to get the latest news</p>
                    <input type="text" placeholder="Enter your email address" class="mt-2">
                    <button type="button" class="button--primary mt-3"> <span> SUBSCRIBE </span> </button>
                </div> --}}
            </div>
        </div>
        <div class="container">

            <a href="/" style="text-decoration: none; color: black"><p>Copyright © 2021 Weargloeshoes All Rights Reserved</p></a>
        </div>

     
    
</footer>