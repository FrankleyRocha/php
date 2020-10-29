<?php
if( isset($_POST['actionEdit']) ):

    query(
        'update pessoa set nome = :nome, telefone = :telefone, email = :email where id = :id',
        [
            id => filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT),
            nome => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING),
            telefone => filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING),
            email => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING)                               
        ]
    );

elseif( isset($_POST['actionNew']) ):

    query(
        'insert into pessoa (nome,telefone,email) values (:nome,:telefone,:email)',
        [
            nome => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING),
            telefone => filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING),
            email => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING) 
        ]
    );

elseif( isset($_POST['actionDelete']) ):

    query(
        'delete from pessoa where id = :id',
        [
            id => filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT)
        ]
    );
                            
endif;
?>

<table>
    <thead>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-Mail</th>
        <th style='width:50px'>
            <form action="#" method="post">
                <input name='op' type='hidden' value='new' />
                <button 
                    type="submit"
                    name="bt_add"
                    class="btn-floating btn-small waves-effect waves-light green">
                    <i class="material-icons">add</i>
                </button>
            </form>
        </th>
        <th style='width:50px'>
        </th>
    </thead>
    <tbody>
        <?php    
            foreach(
                query(
                    'select * from pessoa'
                ) as $obj
            ){
        ?>
            <tr>
                <td>
                    <?php echo $obj->nome ?>
                </td>
                <td>
                    <?php echo $obj->telefone ?>
                </td>
                <td>
                    <?php echo $obj->email ?>
                </td>
                <td>
                    <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
                        <input name='op' type='hidden' value='edit' />
                        <input name='id' type='hidden' value='<?php echo $obj->id ?>' />

                        <button 
                            type="submit"
                            name="bt_edit"
                            class="btn-floating btn-small waves-effect waves-light blue">
                            <i class="material-icons">edit</i>
                        </button>                            
                    </form>
                </td>
                <td>

                    <!-- Modal Trigger -->
                    <a class="btn-floating btn-small waves-effect waves-light red modal-trigger" href="#modal<?php echo $obj->id ?>">
                        <i class="material-icons">delete</i>
                    </a>

                    <!-- Modal Structure -->
                    <div id="modal<?php echo $obj->id ?>" class="modal" class="modal">
                        <div class="modal-content">
                            <h4>Excluir</h4>
                            <p>Está certo que deseja excluir este registro?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
                                <input name='op' type='hidden' value='list' />
                                <input name='id' type='hidden' value='<?php echo $obj->id ?>' />
                                
                                <a href="<?php echo $_SERVER['REQUEST_URI'] ?>" class="modal-action modal-close waves-effect waves-light red btn green">Cancelar</a>
                                
                                <button 
                                    type="submit"
                                    name="actionDelete"
                                    class="modal-action modal-close btn waves-effect waves-light red">
                                    Sim
                                </button> 
                            </form>
                        </div>
                    </div>

                </td>
            </tr>            
        <?php
            }    
        ?>
    </tbody>
</table>