<template>

        <div class="hero4-main">
            <div class="container-fluid">
                <div class="row row-custom">
                    <div class="col-content-otr">
                        <div class="col-content-inr">
                            <p class="tag heading-L  text-white">Akshiptika Infotech</p>
                            <h1 class="heading heading-h1">For next generation of <br> big business</h1>
                            <!-- <p class="desc heading-L"> <br> </p> -->
                            <div class="action">
                                <a href="#" class="btn-primary-1 btn-hero heading-SB">Explore</a>
                            </div>
                        </div>
                    </div>
                    <img class="lines" :src="mainLightImg" alt="main image">
                </div>
            </div>
        </div>


</template>

<script>


    export default {

        components: {


        },

        setup: () => ({
            greeting: 'Hello World from Vue 3!'
        }),

        data() {

            return {




            }

        },

        computed: {

            mainImg() {

                return 'images/main-hero.svg';

            },

            mainLightImg() {

                return 'images/main-hero-light.svg';

            },

        }


    }
</script>
