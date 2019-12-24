<template>
  
          <form id="login_form" method="POST" action="/login" aria-label="Login">
            
            <input type="hidden" name="_token" :value="csrf_token">
            <input type="text" name="email" v-model="email" label="Email">
             
            <input type="password" name="password" v-model="password" label="password">
            <input type="submit"  @click="validate">

          
           
          </form>
        
</template>

<script>
  export default {
    inject: ['$validator'],
    data: () => ({
      email: '',
      password: ''
    }),
    
    methods: {
      validate() {
        this.$validator.validateAll().then((result) => {
          if (result) {
            
            //Manually submit form if not errors
            document.getElementById("login_form").submit()
          }
        })
      }
    }
  }
</script>


<!--
<template lang="pug">
  div#app
    div(
      v-for="user in users"
      :key="users.id"
    )
      h1 {{ user.nom }}
      p {{ user.email }}
    button(@click="fetchUsers") Click me!
</template>

<script>
export default {
  name: 'app',
  data () {
    return {
      users: []
    }
  },
  methods: {
    fetchUsers: function () {
      const baseURI = 'http://127.0.0.1:8000/api/admin'
      this.$http.get(baseURI)
      .then((result) => {
        this.users = result.data
      })
    }
  }
}
</script>
  
<style lang="scss" scoped>

</style>




<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Vue Axios Post - ItSolutionStuff.com</div>
    
                    <div class="card-body">
                        <form @submit="formSubmit" method="POST">
                        <strong>group:</strong>
                        <input type="text" class="form-control" name="grpDest" v-model="grpDest">
    
                        <input type="submit" name = "form1" value="submit" class="btn btn-success">
                        </form>
                        <strong>Output:</strong>
                        <pre>
                        {{output}}
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
     
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
              grpDest: '',
              output: ''
            };
        },
        methods: {
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                this.axios.post('http://127.0.0.1:8000/api/add', {
                    grpDest: this.grpDest,
                })
                .then(function (response) {
                    currentObj.output = response.data;
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }
        }
    }
</script>
-->