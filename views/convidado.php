<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
     <div class="card">
        <h5 class="card-header">Lista de presença</h5>
        <div class="card-body">
            <a class="btn btn-space btn-primary" href="<?=BASE_URL?>convidado/criar"><font color="white">Confirmar Presença</font></a>
            <div class="table-responsive ">
                 <table class="table">
                    <thead>
                         <tr>
                             <th scope="col">Nome</th>
                             <th scope="col">Telefone</th>
                             <th scope="col">Presente</th>
                         </tr>
                     </thead>
                    <tbody>

                        <?php foreach($convidadosArray as $convidadoEntity):?>
                        <tr>
                             <th scope="row"><?=$convidadoEntity['nome']?></th>
                             <td><?=$convidadoEntity['telefone']?></td>
                             <td><?=$convidadoEntity['descricao']?></td>
                         </tr>  
                        <?php endforeach;?>
                    </tbody>
                </table>
             </div>
        </div>
     </div>
 </div>