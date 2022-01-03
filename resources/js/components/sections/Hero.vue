<template>

        <div class="inner-header-main">
            <div class="container-fluid">
                <div class="wrapper" id="heros">
                    <h2 class="heading heading-h2">{{ text }}</h2>
                </div>
            </div>
        </div>


</template>

<script>


    export default {

        props:{
            text: String
        },

        components: {


        },

        mounted() {



        },


        data() {

            return {


            }

        },

        methods: {


        },

        computed: {

            hero() {
                return 'assets/img/hero.jpg';
            }

        }

    }
</script>

<style scoped>



</style>
