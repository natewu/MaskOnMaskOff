<template>
  <div>
      <form @submit.prevent="sendComment">
        <div style="display: flex;align-items: center;">
            <input v-model="text" style="width: 300px;" type="text" placeholder="be nice! actually... i dont give a shit">
            <button type="submit"><p style="margin: 0 0 0 12px;">send</p></button>
        </div>
      </form>
      
      
      <div style="margin-top: 18px;">
          <div class="comment" :key="counter" v-for="(comment,counter) in comments">
              <p>{{comment.comment}}</p> <p>{{comment.date}}</p>
          </div>
      </div>
  </div>
</template>

<script>
export default {
    props: ['code'],
    name: "Comments",
    data() {
        return {
            text: '',
            comments: []
        }
    },
    mounted() {
        this.getComments();
    },
    methods: {
        getComments() {
            axios.get('/getComments/'+this.code)
            .then(response => {
              this.comments = response.data.data
            })
        },
        formatTime() {
            return moment().format('dddd MMM Do, h:mm a')          
        },
        sendComment() {
            axios.post('sendcomment', {
                comment: this.text,
                comment_profile: this.code
            })
            .then(response => {
                const newComment = {
                    comment: this.text
                }
                this.comments.unshift(newComment)
                this.text = ''
            })
        }
    }
}
</script>

<style scoped>
    button {
        background: white;
        border: none;
        padding: 0;
        margin: 0;
    }
</style>