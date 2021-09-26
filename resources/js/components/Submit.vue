<template>
    <div>
      <!--download jquery-->
      <form class="submitform" @submit.prevent="submit">
        <div class="image-grid">
            <div class="uploadbox" @click="triggerClickOne">
                <div v-if="firsturl">
                  <img v-bind:src="this.firsturl" alt="">
                  <div class="close-img" @click="closeImg">
                    <i class="fas fa-times"></i>
                  </div>
                </div>
                <label for="">Your photo with a mask on</label>
            </div>
            <div class="uploadbox" @click="triggerClickTwo">
                <div v-if="secondurl">
                  <img v-bind:src="this.secondurl" alt="">
                  <div class="close-img" @click="closeImg">
                    <i class="fas fa-times"></i>
                  </div>
                </div> 
                <label for="">Your photo with a mask off</label>
            </div>
            <input type="file" required @change="displaymaskon" accept="image/png, image/gif, image/jpeg" style="display: none;" name="" id="maskon">
            <input type="file" required @change="displaymaskoff" accept="image/png, image/gif, image/jpeg" style="display: none;" name="" id="maskoff">
        </div>

        <div class="form-text">
            <label for="">Your Name:</label>
            <input type="text" v-model="name" placeholder="first name or full name" id="" required>

            <label for="">Preferred Pronouns:</label>
            <select v-model="gender" name="" id="" required>
              <option value="male">He/Him</option>
              <option value="female">She/Her</option>
              <option value="other">They/Them</option>
            </select>

            <label for="">Grade:</label>
            <select v-model="grade" name="" id="" required>
              <option value="10">10th</option>
              <option value="11">11th</option>
              <option value="12">12th</option>
            </select>

            <label for="">Classes</label>
            <div>
              <input style="width: 300px;" v-debounce:300ms="search" type="text" placeholder="add classes you're in" name="" id="">
              <div>add</div>
            </div>

            <label for="">Contact (optional)</label>
            <input v-model="contact" type="text" placeholder="add your snap, number, or other public info you want ppl to see">

            <button style="margin-top: 15px;" id="button" type="submit">Submit</button>
            <caption style=" margni-top: -6px;" class="text=center">Your submission will be added to the queue.</caption>
        </div>
        
      </form>


    </div>
</template>

<script>
  export default {
    data() {
      return {
        firsturl: '',
        firstimg: '',
        secondurl: '',
        secondimg: '',
        classes: [],
        name: '',
        gender: '',
        grade: '',
        contact: ''

      }
    },
    methods: {
      search() {
        /*
        if (this.searchinput == '') {
          this.result = ''
        } else {
          axios
            .post(route('searchforum'), {
              search: this.searchinput
            })
            .then(response => {
              this.result = response.data.data
            })
        }
        */
      },
      closeImg() {

      },
      triggerClickOne() {
        document.querySelector('#maskon').click()
      },
      triggerClickTwo() {
        document.querySelector('#maskoff').click()
      },
      displaymaskon(e) {
        const file = e.target.files[0]
        this.firsturl = URL.createObjectURL(file)

        this.firstimg = file
      },
      displaymaskoff(e) {
        const file = e.target.files[0]
        this.secondurl = URL.createObjectURL(file)

        this.secondimg = file
      },
      submit() {
        document.getElementById('button').disabled = true
        const form = new FormData()
        form.append('name', this.name)
        form.append('maskon', this.firstimg)
        form.append('maskoff', this.secondimg)
        form.append('gender', this.gender)
        form.append('grade', this.grade)

        axios.post('sendsubmission', form)
        .then(response => {
            //id: response.data.id
        })
        .catch(function(error) {
          console.log(error.response.data)
        })
      }
    }
  }
</script>

<style>

</style>