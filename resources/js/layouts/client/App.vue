<template>
    <div class="main-wrapper">
        <!-- Header Section Start -->
        <div class="header-section">
            <!-- Header Top Start -->
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <!-- Header Top Wrapper Start -->
                    <div class="header-top-wrapper">
                        <!-- Header Top Left Start -->
                        <div class="header-top-left">
                            <p>
                                All course 28% off for
                                <a href="#">new students.</a>
                            </p>
                        </div>
                        <!-- Header Top Left End -->

                        <!-- Header Top Medal Start -->
                        <div class="header-top-medal">
                            <div class="top-info">
                                <p>
                                    <i class="flaticon-phone-call"></i>
                                    <a href="tel:+8801762284311"
                                        >+880 1762-284311</a
                                    >
                                </p>
                                <p>
                                    <i class="flaticon-email"></i>
                                    <a href="mailto:info@ciasbd.com"
                                        >info@ciasbd.com</a
                                    >
                                </p>
                            </div>
                        </div>
                        <!-- Header Top Medal End -->

                        <!-- Header Top Right Start -->
                        <div class="header-top-right">
                            <ul class="social">
                                <li>
                                    <a
                                        target="_blank"
                                        href="https://www.facebook.com/ciasbd"
                                        ><i class="flaticon-facebook"></i
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        target="_blank"
                                        href="https://www.facebook.com/ciasbd"
                                        ><i class="flaticon-twitter"></i
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        target="_blank"
                                        href="https://www.facebook.com/ciasbd"
                                        ><i class="flaticon-skype"></i
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        target="_blank"
                                        href="https://www.facebook.com/ciasbd"
                                        ><i class="flaticon-instagram"></i
                                    ></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Header Top Right End -->
                    </div>
                    <!-- Header Top Wrapper End -->
                </div>
            </div>
            <!-- Header Top End -->

            <!-- Header Main Start -->
            <div class="header-main">
                <div class="container">
                    <!-- Header Main Start -->
                    <div class="header-main-wrapper">
                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <router-link to="/">
                                <img src="assets/images/logo.png" alt="Logo" />
                            </router-link>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="header-menu d-none d-lg-block">
                            <ul class="nav-menu">
                                <li>
                                    <router-link
                                        exact-active-class="active"
                                        to="/"
                                    >
                                        Home
                                    </router-link>
                                </li>
                                <li>
                                    <router-link
                                        exact-active-class="active"
                                        to="/course"
                                    >
                                        Course
                                    </router-link>
                                </li>
                                <li>
                                    <router-link
                                        exact-active-class="active"
                                        to="/about"
                                    >
                                        About
                                    </router-link>
                                </li>
                                <li>
                                    <router-link
                                        exact-active-class="active"
                                        to="/contact"
                                    >
                                        Contact
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Sing In & Up Start -->
                        <div class="header-sign-in-up d-none d-lg-block">
                            <ul>
                                <li>
                                    <router-link
                                        to="/login"
                                        class="sign-in"
                                        exact-active-class="active"
                                    >
                                        Sign In
                                    </router-link>
                                </li>
                                <li>
                                    <router-link
                                        to="/register"
                                        class="sign-up"
                                        exact-active-class="active"
                                    >
                                        Sign Up
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <!-- Header Sing In & Up End -->

                        <!-- Header Mobile Toggle Start -->
                        <div class="header-toggle d-lg-none">
                            <a class="menu-toggle" href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <!-- Header Mobile Toggle End -->
                    </div>
                    <!-- Header Main End -->
                </div>
            </div>
            <!-- Header Main End -->
        </div>
        <!-- Header Section End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu">
            <!-- Menu Close Start -->
            <a class="menu-close" href="javascript:void(0)">
                <i class="icofont-close-line"></i>
            </a>
            <!-- Menu Close End -->

            <!-- Mobile Top Medal Start -->
            <div class="mobile-top">
                <p>
                    <i class="flaticon-phone-call"></i>
                    <a href="tel:9702621413">(970) 262-1413</a>
                </p>
                <p>
                    <i class="flaticon-email"></i>
                    <a href="mailto:address@gmail.com">address@gmail.com</a>
                </p>
            </div>
            <!-- Mobile Top Medal End -->

            <!-- Mobile Sing In & Up Start -->
            <div class="mobile-sign-in-up">
                <ul>
                    <li><a class="sign-in" href="#">Sign In</a></li>
                    <li><a class="sign-up" href="#">Sign Up</a></li>
                </ul>
            </div>
            <!-- Mobile Sing In & Up End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-menu-items">
                <ul class="nav-menu">
                    <li>
                        <router-link to="/">Home</router-link>
                    </li>
                    <li>
                        <a href="#">All Course</a>
                        <ul class="sub-menu">
                            <li><a href="#">Courses</a></li>
                            <li>
                                <a href="#">Courses Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages </a>
                        <ul class="sub-menu">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">404 Error</a></li>
                            <li>
                                <a href="#">After Enroll</a>
                            </li>
                            <li>
                                <a href="#"
                                    >Instructor Dashboard (Course List)</a
                                >
                            </li>
                            <li>
                                <a href="#"
                                    >Instructor Dashboard (Performance)</a
                                >
                            </li>
                            <li><a href="#">Students</a></li>
                            <li><a href="#">Reviews</a></li>
                            <li>
                                <a href="#">Course engagement</a>
                            </li>
                            <li>
                                <a href="#">Traffic & conversion</a>
                            </li>
                            <li><a href="#">Messages</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Blog</a></li>
                                    <li>
                                        <a href="#">Blog Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog Right Sidebar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog Details</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#"
                                            >Blog Details Left Sidebar</a
                                        >
                                    </li>
                                    <li>
                                        <a href="#"
                                            >Blog Details Right Sidebar</a
                                        >
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <router-link exact-active-class="active" to="/about"
                            >About</router-link
                        >
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- Mobile Menu End -->

            <!-- Mobile Menu End -->
            <div class="mobile-social">
                <ul class="social">
                    <li>
                        <a href="#"><i class="flaticon-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-skype"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="flaticon-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <!-- Mobile Menu End -->
        </div>
        <!-- Mobile Menu End -->

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

        <main>
            <router-view></router-view>
        </main>

        <!-- Footer Start  -->
        <div class="section footer-section">
            <!-- Footer Widget Section Start -->
            <div class="footer-widget-section">
                <img
                    class="shape-1 animation-down"
                    src="assets/images/shape/shape-21.png"
                    alt="Shape"
                />

                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <div class="widget-logo">
                                    <a href="#"
                                        ><img
                                            src="assets/images/logo.png"
                                            alt="Logo"
                                    /></a>
                                </div>

                                <div class="widget-address">
                                    <h4 class="footer-widget-title">
                                        Dhaka City
                                    </h4>
                                    <p>Wireless, Mogbazar, Dhaka.</p>
                                </div>

                                <ul class="widget-info">
                                    <li>
                                        <p>
                                            <i class="flaticon-email"></i>
                                            <a href="mailto:info@ciasbd.com"
                                                >info@ciasbd.com</a
                                            >
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="flaticon-phone-call"></i>
                                            <a href="tel:+8801762-284311"
                                                >+880 1762-284311</a
                                            >
                                        </p>
                                    </li>
                                </ul>

                                <ul class="widget-social">
                                    <li>
                                        <a href="#"
                                            ><i class="flaticon-facebook"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="flaticon-twitter"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="flaticon-skype"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="flaticon-instagram"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->
                        </div>
                        <div class="col-lg-6 order-md-3 order-lg-2">
                            <!-- Footer Widget Link Start -->
                            <div class="footer-widget-link">
                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">
                                        Category
                                    </h4>

                                    <ul class="widget-link">
                                        <li>
                                            <a href="#">Creative Writing</a>
                                        </li>
                                        <li><a href="#">Film & Video</a></li>
                                        <li><a href="#">Graphic Design</a></li>
                                        <li><a href="#">UI/UX Design</a></li>
                                        <li>
                                            <a href="#">Business Analytics</a>
                                        </li>
                                        <li><a href="#">Marketing</a></li>
                                    </ul>
                                </div>
                                <!-- Footer Widget End -->

                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">
                                        Quick Links
                                    </h4>

                                    <ul class="widget-link">
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Discussion</a></li>
                                        <li>
                                            <a href="#">Terms & Conditions</a>
                                        </li>
                                        <li>
                                            <a href="#">Customer Support</a>
                                        </li>
                                        <li><a href="#">Course FAQ’s</a></li>
                                    </ul>
                                </div>
                                <!-- Footer Widget End -->
                            </div>
                            <!-- Footer Widget Link End -->
                        </div>
                        <div class="col-lg-3 col-md-6 order-md-2 order-lg-3">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Subscribe</h4>

                                <div class="widget-subscribe">
                                    <p>
                                        Lorem Ipsum has been them an industry
                                        printer took a galley make book.
                                    </p>

                                    <div class="widget-form">
                                        <form action="#">
                                            <input
                                                type="text"
                                                placeholder="Email here"
                                            />
                                            <button
                                                class="btn btn-primary btn-hover-dark"
                                            >
                                                Subscribe Now
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Widget End -->
                        </div>
                    </div>
                </div>

                <img
                    class="shape-2 animation-left"
                    src="assets/images/shape/shape-22.png"
                    alt="Shape"
                />
            </div>
            <!-- Footer Widget Section End -->

            <!-- Footer Copyright Start -->
            <div class="footer-copyright">
                <div class="container">
                    <!-- Footer Copyright Start -->
                    <div class="copyright-wrapper">
                        <div class="copyright-link">
                            <a href="#">Terms of Service</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Sitemap</a>
                            <a href="#">Security</a>
                        </div>
                        <div class="copyright-text">
                            <p>
                                &copy; 2022 <span> CIAS </span> Made with
                                <i class="icofont-heart-alt"></i> by
                                <a href="#">Cias IT Team</a>
                            </p>
                        </div>
                    </div>
                    <!-- Footer Copyright End -->
                </div>
            </div>
            <!-- Footer Copyright End -->
        </div>
        <!-- Footer End -->

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->
    </div>
</template>

<script>
export default {
    components: {},
};
</script>
