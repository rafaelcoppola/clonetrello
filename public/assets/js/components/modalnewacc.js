const modalForm = {
    template: `
        <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998"  data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fab fa-facebook-f me-2"></i>Create Account
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{tittle}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">                        
                        <div class="row">
                            <form action="#" method="post" @submit.prevent="saveData">
                                <div class="col-md-12">
                                    <label class="form-label">Usuário:</label>
                                    <input class="form-control" v-model="username" type="text" name="username" placeholder="Usuário">
                                </div>
                                <div v-if="errors.username">{{errors.username}}</div>                                
                                <div class="col-md12 mt-3">
                                    <label class="form-label">Senha:</label>
                                    <input class="form-control" v-model="password" type="password" name="password" placeholder="Senha">
                                </div>
                                <div v-if="errors.password">{{errors.password}}</div>                                
                                
                                <label></label>                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    `,
    data() {
        return {
            tittle: 'Create Account',
            username: '',

            errors: {
                username: ''
            }
        }
    },
    methods: {
        saveData() {
            this.reset()
            if (this.username === '') {
                this.errors.username = 'Por favor informe um nome de usuário!'

                return
            }
            console.log(this.username)
            
        },
        reset() {
            this.errors = {
                name: ''
            }
        }
    }
}

app.component('modal-form', modalForm)