<div class="row">
    <form class="col s12" action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
        <input type="hidden" name="op" value="list" />
        <div class="row">
            <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input id="nome" name="nome" type="text" class="validate">
            <label for="nome">Nome</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <i class="material-icons prefix">phone</i>
            <input id="telefone" name="telefone" type="tel" class="validate">
            <label for="telefone">Telefone</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input id="email" name="email"  type="tel" class="validate">
            <label for="email">E-Mail</label>
            </div>
        </div>
        <div class="row">
            <div class="col s3"></div>
                        
            <a class="btn waves-effect waves-light red col s4" href="<?php echo $_SERVER['REQUEST_URI'] ?>">Cancelar
                <i class="material-icons left">cancel</i>
            </a>

            <div class="col s1"></div>

            <button class="btn waves-effect waves-light green col s4" type="submit" name="actionNew">Salvar
                <i class="material-icons left">save</i>
            </button>
        </div>
    </form>
</div>