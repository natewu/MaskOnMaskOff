<template>
    <div>
        <p style= "font-size: 18px;
                text-transform: capitalize;
                font-weight: 900;" 
    v-if="currentprofile.maskon"><b>{{currentprofile.name+" "+"looks hotter with " + pronoun +  "..."}}</b> <label>(click to choose)</label></p>
        <div class="image-grid">
            <div @click="refresh" v-if="currentprofile.maskon" class="uploadbox">
                <img v-bind:src="'storage/maskon/'+currentprofile.maskon" alt="">
                <h4>MASK ON</h4>
            </div>
            <div @click="refresh" v-if="currentprofile.maskon" class="uploadbox">
                <img v-bind:src="'storage/maskoff/'+currentprofile.maskoff" alt="">
                <h4>MASK OFF</h4>
            </div>
        </div>  
        <a v-bind:href="'/$'+currentprofile.code"><p style="margin: 30px 0 6px 0;">See stats</p></a>
    </div>
</template>

<script>
    export default {
        props: [],
        data() {
            return {
                pronoun: '',
                currentprofile: [],
                history: []//appends current user id to history, algorithm searches for all users except for the ones in history
            }
        },
        methods: {
            checkGender() {
                if (this.currentprofile.gender == 'female') {
                    this.pronoun = 'her'
                } else if (this.currentprofile.gender == 'male') {
                    this.pronoun = 'his'
                } else {
                    this.pronoun = 'their'
                }
            },
            refresh() {
                this.history.push(this.currentprofile.code)
                this.getData()
            },
            getData() {
                axios.get('/newprofiledata')
                .then(response => {
                    this.currentprofile = response.data.data;
                    this.$nextTick(() => {
                        this.checkGender();
                    })
                })
                .catch(error => {
                    console.log(error);
                });    
            },
        },
        mounted() {
            this.getData()    
        },
        
    }
</script>

<style>

</style>