<div>
    <a class="go-top">
        <i class="icon-ctrl"></i>
    </a>
    <!-- Modal-login -->
    <div class="modal fade modal-login" id="exampleModalToggle" aria-hidden="true" aria-label="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="tfre_login-form">
                    <h2>Login:</h2>
                    <div class="error_message tfre_message"></div>
                    <form class="tfre_login" method="post" enctype="multipart/form-data" id="tfre_custom-login-form">
                        <div class="container">
                            <div class="form-group">
                                <label for="username">User Name:</label>
                                <input type="text" name="username" id="username" placeholder="Email or user name"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" placeholder="Your password"
                                    required="">
                            </div>
                            <div>
                                <a href="#" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"
                                    data-bs-dismiss="modal" class="tfre-reset-password" id="tfre-reset-password">Forgot
                                    password?</a>
                            </div>
                            <input type="hidden" name="action" value="tfre_login_ajax">
                            <button type="submit" class="flat-button">Login</button>
                        </div>
                    </form>
                </div>
                <div class="container tfre_register" id="tfre_register_redirect">
                    <p>Don't you have an account? <a href="#" data-bs-target="#exampleModalToggle2"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Register.</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-login" id="exampleModalToggle2" aria-hidden="true"
        aria-label="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="tfre_registration-form">
                    <h2>Register:</h2>
                    <div class="error_message tfre_message"></div>
                    <form class="tfre_register" method="post" enctype="multipart/form-data"
                        id="tfre_custom-register-form">
                        <div class="container">
                            <div class="form-group">
                                <label for="username">User Name:</label>
                                <input type="text" name="username" id="usernames" placeholder="User name" required="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email-modal" placeholder="Email " required="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="passwords" placeholder="Your passsword"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password:</label>
                                <input type="password" name="confirm_password" id="confirm_password"
                                    placeholder="Confirm password" required="">
                            </div>
                            <input type="hidden" name="action" value="tfre_register_ajax">
                            <button type="submit" class="flat-button">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="container tfre_signin tfre_login_redirect" id="tfre_login_redirect">
                    <p>Already have an account? <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Sign in.</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-login" id="exampleModalToggle3" aria-hidden="true"
        aria-label="exampleModalToggleLabel3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="tfre-resset-password container">
                    <div class="tfre_messages message tfre_messages_reset_password"></div>
                    <form method="post" enctype="multipart/form-data">
                        <h4>Forgot your password?</h4>
                        <div class="form-group control-username">
                            <input name="user_login" class="form-control control-icon reset_password_user_login"
                                placeholder="Enter your username or email">
                            <input type="hidden" name="tfre_security_reset_password" value="667584e015">
                            <input type="hidden" name="action" value="tfre_reset_password_ajax">
                            <button type="submit" class="btn flat-button btn-block tfre_forgetpass">Get new
                                password</button>
                        </div>
                    </form>
                </div>
                <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal"
                    class="tfre_login_redirect">Back to Login</a>
            </div>
        </div>
    </div>
    <!-- Modal-login -->

       <!-- modal find_size -->
       <div class="modal fade modalDemo tf-product-modal" id="find_size">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="">
                    <h3>Size chart</h3>
                    <span class="icon-cross icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-rte">
                    <div class="tf-table-res-df">
                        <h4>Size guide</h4>
                        <table class="tf-sizeguide-table">
                            <thead>
                                <tr>
                                    <th>Size</th>
                                    <th>US</th>
                                    <th>Bust</th>
                                    <th>Waist</th>
                                    <th>Low Hip</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>XS</td>
                                    <td>2</td>
                                    <td>32</td>
                                    <td>24 - 25</td>
                                    <td>33 - 34</td>
                                </tr>
                                <tr>
                                    <td>S</td>
                                    <td>4</td>
                                    <td>34 - 35</td>
                                    <td>26 - 27</td>
                                    <td>35 - 26</td>
                                </tr>
                                <tr>
                                    <td>M</td>
                                    <td>6</td>
                                    <td>36 - 37</td>
                                    <td>28 - 29</td>
                                    <td>38 - 40</td>
                                </tr>
                                <tr>
                                    <td>L</td>
                                    <td>8</td>
                                    <td>38 - 29</td>
                                    <td>30 - 31</td>
                                    <td>42 - 44</td>
                                </tr>
                                <tr>
                                    <td>XL</td>
                                    <td>10</td>
                                    <td>40 - 41</td>
                                    <td>32 - 33</td>
                                    <td>45 - 47</td>
                                </tr>
                                <tr>
                                    <td>XXL</td>
                                    <td>12</td>
                                    <td>42 - 43</td>
                                    <td>34 - 35</td>
                                    <td>48 - 50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tf-page-size-chart-content">
                        <div>
                            <h4>Measuring Tips</h4>
                            <h6>Bust</h6>
                            <p>Measure around the fullest part of your bust.</p>
                            <h6>Waist</h6>
                            <p>Measure around the narrowest part of your torso.</p>
                            <h6>Low Hip</h6>
                            <p class="mb-0">With your feet together measure around the fullest part of your hips/rear.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal find_size -->
    <!-- modal quick_view -->
    <div class="modal fade modalDemo" id="quick_view">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="">
                    <span class="icon-cross icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="wrap">
                    <div class="tf-product-media-wrap">
                        <div class="swiper tf-single-slide">
                            <div class="swiper-wrapper" >
                                <div class="swiper-slide">
                                    <div class="item">
                                        <img src="images/product/product-detail-1.jpg" alt="img-product">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <img src="images/product/product-detail-2.jpg" alt="img-product">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next button-style-arrow single-slide-prev"></div>
                            <div class="swiper-button-prev button-style-arrow single-slide-next"></div>
                        </div>
                    </div>
                    <div class="tf-product-info-wrap">
                        <div class="tf-product-info-list">
                            <div class="tf-product-info-heading">
                                <div class="tf-product-info-name">
                                    <div class="text text-sub-heading">SHOES</div>
                                    <h3 class="name">Ribbed long-sleeved t-shirt</h3>
                                    <div class="tf-product-info-rate">
                                        <div class="list-star d-flex">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.99229 8.16559L1.87977 6.41682C1.48105 6.09796 1.65593 5.45674 2.16191 5.38446L5.15814 5.25097L6.43766 2.04313C6.52684 1.86534 6.70813 1.75342 6.90691 1.75342C7.10569 1.75342 7.28698 1.86592 7.37617 2.04313L8.65568 5.25097L11.6519 5.38446C12.1579 5.45674 12.3328 6.09796 11.9341 6.41682L9.82153 8.16559L10.398 11.5798C10.4645 12.0455 9.98067 12.3941 9.56038 12.1837L6.90691 10.4973L4.25344 12.1831C3.83257 12.3935 3.34933 12.045 3.41578 11.5792L3.99229 8.16559Z" fill="#ECB018"/>
                                            </svg>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.99229 8.16559L1.87977 6.41682C1.48105 6.09796 1.65593 5.45674 2.16191 5.38446L5.15814 5.25097L6.43766 2.04313C6.52684 1.86534 6.70813 1.75342 6.90691 1.75342C7.10569 1.75342 7.28698 1.86592 7.37617 2.04313L8.65568 5.25097L11.6519 5.38446C12.1579 5.45674 12.3328 6.09796 11.9341 6.41682L9.82153 8.16559L10.398 11.5798C10.4645 12.0455 9.98067 12.3941 9.56038 12.1837L6.90691 10.4973L4.25344 12.1831C3.83257 12.3935 3.34933 12.045 3.41578 11.5792L3.99229 8.16559Z" fill="#ECB018"/>
                                            </svg>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.99229 8.16559L1.87977 6.41682C1.48105 6.09796 1.65593 5.45674 2.16191 5.38446L5.15814 5.25097L6.43766 2.04313C6.52684 1.86534 6.70813 1.75342 6.90691 1.75342C7.10569 1.75342 7.28698 1.86592 7.37617 2.04313L8.65568 5.25097L11.6519 5.38446C12.1579 5.45674 12.3328 6.09796 11.9341 6.41682L9.82153 8.16559L10.398 11.5798C10.4645 12.0455 9.98067 12.3941 9.56038 12.1837L6.90691 10.4973L4.25344 12.1831C3.83257 12.3935 3.34933 12.045 3.41578 11.5792L3.99229 8.16559Z" fill="#ECB018"/>
                                            </svg>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.99229 8.16559L1.87977 6.41682C1.48105 6.09796 1.65593 5.45674 2.16191 5.38446L5.15814 5.25097L6.43766 2.04313C6.52684 1.86534 6.70813 1.75342 6.90691 1.75342C7.10569 1.75342 7.28698 1.86592 7.37617 2.04313L8.65568 5.25097L11.6519 5.38446C12.1579 5.45674 12.3328 6.09796 11.9341 6.41682L9.82153 8.16559L10.398 11.5798C10.4645 12.0455 9.98067 12.3941 9.56038 12.1837L6.90691 10.4973L4.25344 12.1831C3.83257 12.3935 3.34933 12.045 3.41578 11.5792L3.99229 8.16559Z" fill="#ECB018"/>
                                            </svg>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.1085 8.16559L1.99598 6.41682C1.59726 6.09796 1.77214 5.45674 2.27812 5.38446L5.27435 5.25097L6.55387 2.04313C6.64306 1.86534 6.82435 1.75342 7.02312 1.75342C7.2219 1.75342 7.40319 1.86592 7.49238 2.04313L8.7719 5.25097L11.7681 5.38446C12.2741 5.45674 12.449 6.09796 12.0503 6.41682L9.93774 8.16559L10.5143 11.5798C10.5807 12.0455 10.0969 12.3941 9.67659 12.1837L7.02312 10.4973L4.36965 12.1831C3.94878 12.3935 3.46554 12.045 3.53199 11.5792L4.1085 8.16559Z" fill="#E9E9E9"/>
                                            </svg>
                                        </div>
                                        <div class="number-rate text-caption-1">(1.234 reviews)</div>
                                    </div>
                                </div>
                                <div class="tf-product-info-desc">
                                    <div class="tf-product-info-price">
                                        <div class="price-on-sale">$68.00</div>
                                        <div class="line"></div>
                                        <div class="compare-at-price">$98.00</div>
                                        <div class="badges-on-sale text-sub-heading">
                                            -25%
                                        </div>
                                    </div>
                                    <p>The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                </div>
                            </div>
                            <div class="tf-product-info-choose-option">
                                <div class="variant-picker-item">
                                    <div class="variant-picker-label text-title">
                                        Colors: <span class="variant-picker-label-value value-currentColor">Gray</span>
                                    </div>
                                    <div class="variant-picker-values">
                                        <input id="values-beige1" type="radio" name="color2">
                                        <label class="style-text rectangle-color radius-60" for="values-beige1" data-value="Beige" data-price="68.00">
                                            <span class="btn-checkbox bg-beige"></span>
                                            Beige
                                        </label>
                                        <input id="values-black2" type="radio" name="color2" checked="">
                                        <label class="style-text rectangle-color radius-60" for="values-black2" data-value="Black" data-price="79.99">
                                            <span class="btn-checkbox bg-black"></span>
                                            Black
                                        </label>
                                    </div>
                                </div>
                                <div class="variant-picker-item">
                                    <div class="d-flex justify-content-between">
                                        <div class="text-title variant-picker-label">
                                            Size: <span class="variant-picker-label-value">L</span>
                                        </div>
                                    </div>
                                    <div class="variant-picker-values gap12">
                                        <input type="radio" name="size2" id="values-s1">
                                        <label class="text-button style-text size-btn" for="values-s1" data-value="S" data-price="68.00">
                                            S
                                        </label>
                                        <input type="radio" name="size2" id="values-m1">
                                        <label class="text-button style-text size-btn" for="values-m1" data-value="M" data-price="68.00">
                                            M
                                        </label>
                                        <input type="radio" name="size2" id="values-l1" checked="">
                                        <label class="text-button style-text size-btn" for="values-l1" data-value="L" data-price="89.99">
                                            L
                                        </label>
                                        <input type="radio" name="size2" id="values-xl1">
                                        <label class="text-button style-text size-btn" for="values-xl1" data-value="XL" data-price="89.99">
                                            XL
                                        </label>
                                    </div>
                                </div>
                                <div class="tf-product-info-btn-buy">
                                    <div class="text-title mb_12">Quantity:</div>
                                    <div class="tf-product-info-quantity">
                                        <div class="wg-quantity">
                                            <span class="btn-quantity minus-btn">-</span>
                                            <input class="quantity-input" type="text" name="number" value="1">
                                            <span class="btn-quantity plus-btn">+</span>
                                        </div>
                                        <a href="#" class="text-button-uppercase2 btn-add-cart">ADD TO CART</a>
                                    </div>
                                    <a class="tf-product-info-by-now text-button-uppercase2 mb-0" href="#">Buy It Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal quick_view -->
    <!-- compare -->
    <div class="modal fullBottom fade modal-compare" id="compare">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="header">
                    <span class="icon-cross icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tf-compare-list list-file-delete">
                                    <div class="tf-compare-head">
                                        <h5 class="title mb-0">Compare Products</h5>
                                    </div>
                                    <div class="tf-compare-wrap">
                                        <div class="tf-compare-item file-delete-item">
                                            <span class="icon icon-cross remove-item"></span>
                                            <a href="shop-detail.html" class="image">
                                                <img src="images/product/5.png" alt="">
                                            </a>
                                            <div class="content">
                                                <div class="text-title">
                                                    <a class="link text-line-clamp-2" href="shop-detail.html">V-neck cotton T-shirt</a>
                                                </div>
                                                <div class="text-button">$59.99</div>
                                            </div>
                                        </div>
                                        <div class="tf-compare-item file-delete-item">
                                            <span class="icon icon-cross remove-item"></span>
                                            <a href="shop-detail.html" class="image">
                                                <img src="images/product/6.png" alt="">
                                            </a>
                                            <div class="content">
                                                <div class="text-title">
                                                    <a class="link text-line-clamp-2" href="shop-detail.html">V-neck cotton T-shirt</a>
                                                </div>
                                                <div class="text-button">$59.99</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-compare-buttons">
                                        <div class="tf-compare-buttons-wrap">
                                            <div class="tf-compapre-button-clear-all clear-list-file tf-btn w-100 btn-white radius-4 has-border">
                                                <span class="text text-btn-uppercase">Clear All Products</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /compare -->
</div>
