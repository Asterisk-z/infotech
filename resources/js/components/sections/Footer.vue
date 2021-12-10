<template>


        <div class="contact-main" id="contactus">
            <div class="container-fluid">
                <div class="row row-contact">
                    <div class="col-lg-6 col-form-otr">
                        <div class="col-form-inr">
                            <h3 class="heading heading-h3">Send a Message</h3>
                            <p class="desc heading-M"></p>
                            <form class="form-main" method="post">
                                <div class="input-main">
                                    <div class="input-otr mb-3">
                                        <input class="input heading-SB" type="text" name="fname" placeholder="First name" required>
                                    </div>
                                    <div class="input-otr mb-3">
                                        <input class="input heading-SB" type="text" name="lname" placeholder="Last name" required>
                                    </div>
                                </div>
                                <div class="input-main">
                                    <div class="input-otr mb-3">
                                        <input class="input heading-SB" type="text" name="website" placeholder="website" required>
                                    </div>
                                    <div class="input-otr mb-3">
                                        <input class="input heading-SB" type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="input-otr">
                                    <textarea class="textarea input heading-SB" name="message" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="action-otr">
                                    <input class="button heading-SB" type="submit" value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-contact-otr">
                        <div class="col-contact-inr">
                            <div class="social-icon">
                                <social-section/>
                            </div>
                            <div class="contact-icon-otr">
                                <div class="email-otr mb-2">
                                    <div class="icon-otr">
                                        <div class="icon-inr">
                                            <i class="ri-phone-line icon"></i>
                                        </div>
                                        <p class="linkk heading-S">+91 809 152 6192</p>
                                    </div>
                                </div>
                                <div class="email-otr mb-2">
                                    <div class="icon-otr">
                                        <div class="icon-inr">
                                            <i class="ri-mail-line icon"></i>
                                        </div>
                                        <p class="linkk heading-S">info@akshiptikainfotech.com</p>
                                    </div>
                                </div>
                                <div class="email-otr mb-2">
                                    <div class="icon-otr">
                                        <div class="icon-inr">
                                            <i class="ri-map-pin-line icon"></i>
                                        </div>
                                        <p class="linkk heading-S">
                                            Vill Sapralu Tip N P.O Surani <br> Tehsil
                                            Khundian Distt Kangra <br> Himachal
                                            Pradesh India
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-main">
            <div class="container-fluid">
                <div class="wrapper">
                    <p class="copy-right heading-S">© 2021 Akshiptika Infotech  All rights reserved.</p>
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
