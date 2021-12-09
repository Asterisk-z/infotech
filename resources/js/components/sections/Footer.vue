<template>

        
        <div class="footer-main">
            <div class="container-fluid">
                <div class="row row-custom">
                    <div class="col-lg-3 col-md-6 col-logo-otr">
                        <div class="col-logo-inr">
                        <div class="col-subscribe-inr">
                            <h4 class="heading heading-h4">Receive Latest Updates for Free</h4>
                            <div class="email-otr">
                                <input type="Email" class="input heading-SB" placeholder="Email Address">
                            </div>
                            <div class="action">
                                <a href="#" class="btn-primary-1 heading-SB">Subscribe Now</a>
                            </div>
                        </div>
                            <div class="social-icon">
                                <social-section/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-explore-otr">
                        <div class="col-explore-inr">
                            <div class="explore-otr">
                                <h4 class="heading heading-h4">Explore</h4>
                                <ul class="explore-ul">
                                    <li class="explore-li">
                                        <a href="Explore-Artwork.html" class="explore-a heading-S">Explore Artwork</a>
                                    </li>
                                    <li class="explore-li">
                                        <a href="Single-Artwork.html" class="explore-a heading-S">Single Artwork</a>
                                    </li>
                                    <li class="explore-li">
                                        <a href="Explore-Creator.html" class="explore-a heading-S">Explore Creator</a>
                                    </li>
                                    <li class="explore-li">
                                        <a href="Single-Creator.html" class="explore-a heading-S">Single Creator</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="community-otr">
                                <h4 class="heading heading-h4">Community</h4>
                                <ul class="community-ul">
                                    <li class="community-li">
                                        <a href="Blog.html" class="community-a heading-S">Blog</a>
                                    </li>
                                    <li class="community-li">
                                        <a href="Faqs.html" class="community-a heading-S">FAQs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-navigation-otr">
                        <div class="col-navigation-inr">
                            <div class="navigation-otr">
                                <h4 class="heading heading-h4">Navigation</h4>
                                <ul class="navigation-ul">
                                    <li class="navigation-li">
                                        <a href="../index.html" class="navigation-a heading-S">Home</a>
                                    </li>
                                    <li class="navigation-li">
                                        <a href="Explore-Artwork.html" class="navigation-a heading-S">Explore</a>
                                    </li>
                                    <li class="navigation-li">
                                        <a href="Activity.html" class="navigation-a heading-S">Activity</a>
                                    </li>
                                    <li class="navigation-li">
                                        <a href="#" class="navigation-a heading-S">Pages</a>
                                    </li>
                                    <li class="navigation-li">
                                        <a href="#" class="navigation-a heading-S">Community</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-subscribe-otr">
                        <div class="col-subscribe-inr">
                            <h4 class="heading heading-h4">Receive Latest Updates for Free</h4>
                            <div class="email-otr">
                                <input type="Email" class="input heading-SB" placeholder="Email Address">
                            </div>
                            <div class="action">
                                <a href="#" class="btn-primary-1 heading-SB">Subscribe Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-main">
            <div class="container-fluid">
                <div class="wrapper">
                    <p class="copy-right heading-S">Copyright © 2021  All rights reserved.</p>
                    <div class="linkk-otr">
                        <p class="linkk-inr"><a href="#" class="linkk-page heading-S">Privacy Policy </a> • <a href="#" class="linkk-page heading-S"> Terms of Service</a></p>
                    </div>
                </div>
            </div>
        </div>


</template>

<script>

    import FooterLogo from './FooterLogo.vue';
    import SocialSection from './Social.vue';

    export default {

        components: {

            FooterLogo,
            SocialSection,

        },

        setup: () => ({
           

           
        }),

        data() {

            return {

              

            }

        },

        computed: {

            

        }

    }
</script>
