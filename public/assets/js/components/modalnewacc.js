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
                            <form method="post" @submit.prevent="saveData">
                                <div class="col-md-12">
                                    <label class="form-label">Usuário:</label>
                                    <input class="form-control" v-model="create_username" type="text" name="create_username" placeholder="Usuário">
                                </div>
                                <div v-if="errors.create_username">{{errors.create_username}}</div>                                
                                <div class="col-md12 mt-3">
                                    <label class="form-label">Senha:</label>
                                    <input class="form-control" v-model="create_password" type="password" name="create_password" placeholder="Senha">
                                </div>
                                <div v-if="errors.create_password">{{errors.create_password}}</div>                    
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
            create_username: '',
            create_password: '',

            errors: {
                create_username: '',
                create_password: '',
            }
        }
    },
    methods: {
        saveData() {
            this.reset()

            if(this.create_username && this.create_password) {
                console.log(this.create_username)
                return true;
            }

            if (this.create_username === '') {
                this.errors.create_username = 'Por favor informe um nome de usuário!';

                return;
            }

            if(this.create_password === '') {
                this.errors.create_password = 'Por favor informe uma senha!';

                return;
            }
             
        },
        
        reset() {
            this.errors = {
                create_username: '',
                create_password: ''
            }
        }
    }
}

app.component('modal-form', modalForm)