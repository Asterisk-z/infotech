<template>


        <nav-section/>




        <div class="hero3-main">
            <div class="container-fluid">
                <div class="row row-custom">
                    <div class="col-lg-5 col-carousel-otr">
                        <div class="col-carousel-inr">
                            <div class="row-cover-img owl-carousel owl-theme" id="Hero3">
                                <!-- <div class="col-img-otr" v-for='slider in sliders'>
                                    <img class="img-cover" v-bind:src="slider.image" alt="Art">
                                </div> -->
                                <div class=" col-img-otr">
                                    <img class="img-cover" :src="image" alt="Art">
                                </div>
                                <div class=" col-img-otr">
                                    <img class="img-cover" :src="sliders[2].image" alt="Art">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-content-otr">
                        <div class="col-content-inr">
                            <p class="tag heading-L">NFT MARKETPLACE</p>
                            <h1 class="heading heading-h1">Discover The Largest NFT’s Marketplace</h1>
                            <p class="desc heading-L">Get all your NFT’s in one place and create a <br> customized gallery.</p>
                            <img class="img-cover" :src="image" alt="Art">
                            <div class="action">
                                <a href="Explore-Artwork.html" class="btn-primary-1 btn-hero heading-SB">Explore</a>
                                <a href="Upload.html" class="btn-primary-2 btn-hero heading-SB">Upload</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <footer-section/>



</template>

<script>
    import NavSection from '../../components/sections/Nav.vue';
    import FooterSection from '../../components/sections/Footer.vue'

    export default {

        components: {

            NavSection,
            FooterSection,

        },

        setup: () => ({

            greeting: 'Hello World from Vue 3!'

        }),

        data() {

            return {

                greeting: 'Hello World from Vue 3!',

                sliders: [
                    {image:  '../../assets/img/hero-cover-img8.png'},
                    {image:  '../../assets/img/hero-cover-img2.png'},
                    {image:  '../../assets/img/hero-cover-img3.png'},
                    {image:  '../../assets/img/hero-cover-img1.png'},
                    {image:  '../../assets/img/hero-cover-img5.png'},
                    {image:  '../../assets/img/hero-cover-img7.png'},
                    {image:  '../../assets/img/hero-cover-img4.png'}
                ],

                image: require("../../assets/img/hero-cover-img8.png")

            }

        },

        computed: {

            logo() {
                return 'images/logo-light.svg'
            },

        }

    }
</script>
