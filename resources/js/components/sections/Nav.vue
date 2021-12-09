<template>


        <div class="overlay-content">
            <div class="modal-content-inr">
                <div class="logo-main">
                    <main-logo/>
                    <div class="close-icon-otr">
                        <i class="ri-close-line close-icon"></i>
                    </div>
                </div>
                <div class="accordion accordion-flush p-5" id="accordionFlushExample">
                    <div class="linkk-otr">
                        <a href="#" class="linkk-home heading-h4">Home</a>
                    </div>
                    <div class="linkk-otr">
                        <a href="#" class="linkk-home heading-h4">About Us</a>
                    </div>
                    <div class="linkk-otr">
                        <a href="#" class="linkk-home heading-h4">Our Portfolio</a>
                    </div>
                    <div class="linkk-otr">
                        <a href="#" class="linkk-home heading-h4">Meet The Team</a>
                    </div>
                    <div class="linkk-otr">
                        <a href="#" class="linkk-home heading-h4">Blog</a>
                    </div>
                    <div class="linkk-otr">
                        <a href="#" class="linkk-home heading-h4">Contact Us</a>
                    </div>
                </div>
                <div class="social-icon">
                    <social-section/>
                </div>
                <p class="copy-right heading-S">Copyright © 2021 . All rights reserved.</p>
            </div>
        </div>

        <div class="navbar-main-2">
            <div class="container-fluid">
                <div class="wrapper">

                    <main-logo/>

                    <div class="navigation-otr">
                        <ul class="navigation-inr">
                            <li class="navigation-li nav-li3">
                                <a href="#" class="nav-a heading-SB">Home</a>
                            </li>
                            <li class="navigation-li nav-li3">
                                <a href="#" class="nav-a heading-SB">About Us</a>
                            </li>
                            <li class="navigation-li nav-li3">
                                <a href="#" class="nav-a heading-SB">Our Portfolio</a>
                            </li>
                            <li class="navigation-li nav-li3">
                                <a href="#" class="nav-a heading-SB">Team</a>
                            </li>
                            <li class="navigation-li nav-li3">
                                <a href="#" class="nav-a heading-SB">Blog</a>
                            </li>
                            <li class="navigation-li nav-li3">
                                <a href="#" class="nav-a heading-SB">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="action-nav">
                        <div class="burger-icon-otr">
                            <i class="ri-menu-4-line burger-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</template>

<script>

    import SocialSection from './Social.vue'
    import MainLogo from './Main-Logo.vue'

    export default {

        components: {

           SocialSection,
           MainLogo,

        },

        setup: () => ({
            greeting: 'Hello World from Vue 3!'
        }),

        data() {

            return {

                socials: [
                    {
                        icon: 'assets/img/social-icon1.svg',
                        name: 'facebook', 
                        link: 'facebook.com'
                    },
                    {
                        icon: 'assets/img/social-icon2.svg',
                        name: 'facebook', 
                        link: 'facebook.com'
                    },
                    {
                        icon: 'assets/img/social-icon3.svg',
                        name: 'facebook', 
                        link: 'facebook.com'
                    },
                    {
                        icon: 'assets/img/social-icon4.svg',
                        name: 'facebook', 
                        link: 'facebook.com'
                    },
                    {
                        icon: 'assets/img/social-icon5.svg',
                        name: 'facebook', 
                        link: 'facebook.com'
                    },
                ]

            }

        },


    }
</script>
