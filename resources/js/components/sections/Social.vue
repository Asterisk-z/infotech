<template>


    <ul class="icon-ul">
        <li class="icon-li" v-for='social in socials'>
            <a href="#" class="icon-a">
                <img class="icon" :src="social.icon" alt="icon">
            </a>
        </li>
    </ul>

</template>

<script>

    

    export default {

        components: {

          

        },

        setup: () => ({
            greeting: 'Navigation'
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
