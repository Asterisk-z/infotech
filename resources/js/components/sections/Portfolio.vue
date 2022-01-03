<template>
        <div class="connect-wallet-main">
            <div class="container-fluid">
                <div class="wrapper">
                    <h2 class="heading heading-h3">Recent Projects</h2>
                </div>
                <div class="row row-custom">
                    <div class="col-lg-12 col-box-otr">
                        <div class="col-box-inr">
                            <div class="row row-custom-inr">
                                <div class="col-lg-3 col-wallet-otr" v-for="project in projects">
                                    <a href="#" class="col-wallet-inr box-1">
                                        <div class="icon-otr">
                                            <img class="icon" :src="'assets/img/projects/'+project" alt="icon">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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

                projects : [
                    'AI EDU.svg', 'ARI Svg.svg', 'Coding 2.svg', 'Jawalamukhi Svg.svg', 'Oyodel Svg.svg',  'sicslive svg.svg', 'Siksa SVG.svg', 'SIS LOGO SVG_1.svg', 'Webhosxt.svg'
                ]

            }

        },

        computed: {

            image() {
                return 'assets/img/wallet-img4.svg';
            }


        }


    }
</script>
