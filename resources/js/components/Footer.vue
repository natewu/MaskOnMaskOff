<template>
    <div>
        <footer class="page-footer font-small blue pt-4">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">
                <p v-html="currentquote"></p>
            </div>
            <!-- Copyright -->
        
        </footer>
    </div>
</template>

<script>
export default {
    data() {
        return {
            quotenumber: '',
            currentquote: '',
            quotes: [
                {
                    quote: "mind the mask..."
                },
                {
                    quote: "\"is it just me or do the girls here look 50% better now?\" -aayush"
                },
                {
                    quote: "too close for masks, switching to paper bags!"
                },
                {
                    quote: "\"David, you're the most extraordinary man I've ever met.\" -<b>EX</b> gf"
                },
                {
                    quote: "I think i'll let my actions speak for itself."
                },
                {
                    quote: "\"so who's the father?\" -random guy in the hall"
                },
                {
                    quote: "©gofuckyourself 2021"
                }
            ]
        }
    },
    mounted() {
        this.quotenumber = Math.floor( Math.random() * this.quotes.length )
        this.currentquote = this.quotes[this.quotenumber].quote
    }

}
</script>

<style>

</style>