<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Confirmar Presença</h5>
                                <span>
                                    <?php
                                    if(!empty($aviso)){
                                            echo $aviso;
                                        }
                                    ?>
                                    </span>
                                <div class="card-body">
                                    <form id="validationform" method="post" action="<?=BASE_URL?>convidado/criacao">
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Nome</label>
                                                <input id="inputText3" type="text" name="nome" required="Favor preencher o nome." placeholder="Nome Completo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Telefone</label>
                                                <input id="inputText3" type="phone" name="telefone" required="Favor preencher o telefone." placeholder="Telefone" class="form-control">
                                        </div>
                                        <div class="form-group">
                                                <label for="input-select">Presentes</label>
                                                <select class="form-control" id="input-select" name="presente">
                                                <?php foreach($presentesArray as $presenteEntity):?>
                                                    <option value="<?=$presenteEntity['id']?>"><?=$presenteEntity['descricao']?></option>
                                                <?php endforeach;?>
                                                </select>
                                                <br>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Cadastrar</button> </div>
                                        </div>
                                    </form>
                                    <div class="card-footer bg-white">
                                        <p>Deseja voltar? <a href="<?=BASE_URL?>home/" class="text-secondary">Voltar</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>