<div id="header">
    <div class="header container">
        <img src="../assets/dc-logo.png" alt="DC-Logo" />
        <nav>
            <ul>
                <li><a href="#">CHARACTERS</a></li>
                <li><a href="#">COMICS</a></li>
                <li><a href="#">MOVIES</a></li>
                <li><a href="#">TV</a></li>
                <li><a href="#">GAMES</a></li>
                <li><a href="#">COLLECTIBLES</a></li>
                <li><a href="#">VIDEOS</a></li>
                <li><a href="#">FANS</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">SHOP</a></li>
            </ul>
        </nav>
    </div>
</div>

<div id="Main">
    <div id="jumbo"></div>
    <div class="Main container">
        <div class="currentLabel">
            <h2>CURRENT SERIES</h2>
        </div>
        @foreach($comics as $comic)
        <div class="card">
            <img src="{{ $comic['thumb']}}" />
            <h2>{{ $comic['title']}}</h2>
            <p>{{ $comic['price'] }}</p>
            <p>{{ $comic['type']}}</p>
        </div>
        @endforeach
    </div>

    <div id="Footer">
        <div class="Footer">
            <!--TOP FOOTER-->

            <div id="TopFooter">
                <div class="smallcard">
                    <img class="imgcard" src="../assets/buy-comics-digital-comics.png" alt="buy-comics-digital-comics" />
                    <h4>DIGITAL COMICS</h4>
                </div>
                <div class="smallcard">
                    <img class="imgcard" src="../assets/buy-comics-merchandise.png" alt="buy-comics-merchandise" />
                    <h4>COMICS MERCHANDISE</h4>
                </div>
                <div class="smallcard">
                    <img class="imgcard" src="../assets/buy-comics-shop-locator.png" alt="buy-comics-shop-locator" />
                    <h4>COMICS SHOP LOCATOR</h4>
                </div>
                <div class="smallcard">
                    <img class="imgcard" src="../assets/buy-comics-subscriptions.png" alt="buy-comics-subscriptions" />
                    <h4>COMICS SUBSCRIPTIONS</h4>
                </div>
                <div class="smallcard">
                    <img class="imgcard" src="../assets/buy-dc-power-visa.svg" alt="buy-dc-power-visa" />
                    <h4>COMICS POWER VISA</h4>
                </div>
            </div>

            <!--MID FOOTER-->

            <div id="MidFooter">
                <div id="sitemap" class="container">
                    <div class="flex">
                        <div class="col">
                            <div>
                                <ul>
                                    <li>
                                        <h3>DC COMICS</h3>
                                    </li>
                                    <li><a href="#">Characters</a></li>
                                    <li><a href="#">Comics</a></li>
                                    <li><a href="#">Movies</a></li>
                                    <li><a href="#">TV</a></li>
                                    <li><a href="#">Games</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">News</a></li>
                                </ul>
                                <ul class="m-tp">
                                    <li>
                                        <h3>SHOP</h3>
                                    </li>
                                    <li><a href="#">Shop DC</a></li>
                                    <li><a href="#">Shop DC Collectibles</a></li>
                                </ul>
                            </div>
                            <div class="collist">
                                <ul>
                                    <li>
                                        <h3>DC</h3>
                                    </li>
                                    <li><a href="#">Terms Of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Ad Choices</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Subscriptions</a></li>
                                    <li><a href="#">Talent Workshops</a></li>
                                    <li><a href="#">CPSC Certificates</a></li>
                                    <li><a href="#">Ratings</a></li>
                                    <li><a href="#">Shop Help</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                                <ul>
                                    <li>
                                        <h3>SITES</h3>
                                    </li>
                                    <li><a href="#">Characters</a></li>
                                    <li><a href="#">Comics</a></li>
                                    <li><a href="#">Movies</a></li>
                                    <li><a href="#">TV</a></li>
                                    <li><a href="#">Games</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="dclogo">
                            <img src="../assets/dc-logo-bg.png" alt="dc-logo-bg" />
                        </div>
                    </div>
                </div>
            </div>

            <!--BOTTOM FOOTER-->

            <div id="BottomFooter">
                <div id="bottombar" class="container">
                    <div class="flex adjust">
                        <a class="button" href="#">SIGN UP NOW!</a>
                        <div class="socialbottom">
                            <a class="follow" href="#">FOLLOW US!</a>
                            <a href="#"><img src="../assets/footer-facebook.png" alt="facebook" /></a>
                            <a href="#"><img src="../assets/footer-periscope.png" alt="periscope" /></a>
                            <a href="#"><img src="../assets/footer-pinterest.png" alt="pinterest" /></a>
                            <a href="#"><img src="../assets/footer-twitter.png" alt="twitter" /></a>
                            <a href="#"><img src="../assets/footer-youtube.png" alt="youtube" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @dump($comics)