<template>
  <div>
   <p @click="toast" style="margin: 0; cursor: pointer;">
        maskonmaskoff.me/${{code}}
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
            <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
        </svg>
    </p>   
  </div>
</template>

<script>
export default {
    props: ['code'],
    name: "CopyUsername",
    data() {
        return {

        }
    },
    methods: {
        toast() {
            const el = document.createElement('textarea');
            el.value = 'maskonmaskoff.me/$'+this.code; 
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);

            this.$toasted.show('copied link', {
                theme: 'toasted-primary',
                position: 'top-center',
                duration: 3000
            })
        },
    }

}
</script>

<style>

</style>