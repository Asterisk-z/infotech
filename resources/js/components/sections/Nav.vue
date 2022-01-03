<template>


        <div class="overlay-content">
            <div class="modal-content-inr">
                <div class="logo-main">
                    <main-logo :contrast="contrast"/>
                    <div class="close-icon-otr">
                        <i class="ri-close-line close-icon"></i>
                    </div>
                </div>
                <div class="accordion accordion-flush p-5" id="accordionFlushExample">
                    <div class="linkk-otr">
                        <a href="/" class="linkk-home heading-h4">Home</a>
                    </div>
                    <div class="linkk-otr">
                        <a href="/about-us" class="linkk-home heading-h4">About Us</a>
                    </div>
                    <div class="linkk-otr">
                        <a href="/portfolio" class="linkk-home heading-h4">Our Portfolio</a>
                    </div>
                    <div class="linkk-otr">
                        <a href="/team" class="linkk-home heading-h4">Meet The Team</a>
                    </div>
                    <div class="linkk-otr">
                        <a href="/blog" class="linkk-home heading-h4">Blog</a>
                    </div>
                    <div class="linkk-otr">
                        <a href="#contactus" class="linkk-home heading-h4">Contact Us</a>
                    </div>
                </div>
                <div class="social-icon">
                    <social-section/>
                </div>
                <p class="copy-right heading-S">Copyright © 2021 . All rights reserved.</p>
            </div>
        </div>

        <div class="navbar-main-2 sticky-top " id="navigation"  :class="contrast == 'light' ? 'light-nav' : 'dark-nav' ">
            <div class="container-fluid">
                <div class="wrapper">

                    <main-logo  :contrast="contrast"/>

                    <div class="navigation-otr">
                        <ul class="navigation-inr">
                            <li class="navigation-li nav-li3">
                                <a href="/" class="nav-a heading-SB">Home</a>
                            </li>
                            <li class="navigation-li nav-li3">
                                <a href="/about-us" class="nav-a heading-SB">About Us</a>
                            </li>
                            <li class="navigation-li nav-li3">
                                <a href="/portfolio" class="nav-a heading-SB">Our Portfolio</a>
                            </li>
                            <li class="navigation-li nav-li3">
                                <a href="/team" class="nav-a heading-SB">Team</a>
                            </li>
                            <li class="navigation-li nav-li3">
                                <a href="/blog" class="nav-a heading-SB">Blog</a>
                            </li>
                            <li class="navigation-li nav-li3">
                                <a href="#contactus" class="nav-a heading-SB">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="action-nav">
                        <div class="burger-icon-otrr" @click="toggleContrast(contrast)">
                            <i class="burger-icon" :class="contrast == 'light' ? 'ri-contrast-fill' : 'ri-sun-line' "></i>
                        </div>

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

        mounted() {

            this.contrast = localStorage.getItem('DarkMode') ? localStorage.getItem('DarkMode') : this.contrast;
            document.querySelector('#body').classList.add(this.contrast);


        },


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
                ],

                contrast : 'light',

            }

        },

        methods: {
            toggleContrast(mode) {


                switch (mode) {
                    case 'light':

                        this.contrast = 'dark';
                        document.querySelector('#navigation').classList.replace('dark-nav', 'light-nav');
                        document.querySelector('#body').classList.replace('light', 'dark');

                        break;

                    default:

                        this.contrast = 'light';
                        document.querySelector('#navigation').classList.replace('light-nav', 'dark-nav');
                        document.querySelector('#body').classList.replace('dark', 'light');

                        break;
                }


                this.$emit('changeContrast', this.contrast)
                localStorage.setItem('DarkMode',  this.contrast);


            },

        },

        computed: {

            // isDark() {

            //     return localStorage.getItem('DarkMode') ?  localStorage.getItem('DarkMode') :

            // }

        }

    }
</script>

<style scoped>


</style>
