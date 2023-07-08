<section class="cards-bg position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bg-form" data-aos="fade-right">
                        <div class="inner-form">
                            <form id="validationform" method="post" action="<?=BASE_URL?>presenca/criacao">
                                <h5 class="font-playfair text-center">Confirme sua presença!</h5>
                                <p class="text-center">Por favor confirme sua presença até o dia 30 de agosto de 2023</p>
                                <div class="norm-input">
                                    <input type="text" name="nome" id="nome"  placeholder="Nome Completo">
                                </div>
                                <div class="norm-input">
                                    <input type="text" name="telefone" id="telefone" placeholder="Telefone">
                                </div>
                                <button type="submit" class="w-100 btn-secondary">Confirmar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="card-rsvp-container position-relative" data-aos="fade-left">
                        <div class="card-image-rsvp1">
                            <img class="w-100" src="<?=BASE_URL?>assets/images/rsvp/card1.jpeg" alt="card">
                            <h5>Love</h5>
                        </div>
                        <div class="card-right-design"><img src="<?=BASE_URL?>assets/images/object/rsvp-right.png" alt="flower"></div>
                        <div class="card-image-rsvp2">
                            <img class="w-100" src="<?=BASE_URL?>assets/images/rsvp/card2.jpeg" alt="card">
                            <h5>My Love</h5>
                        </div>
                    </div>
                </div>

                <div class="card-footer bg-white">
                    <p>Deseja voltar? <a href="<?=BASE_URL?>home/" class="text-secondary">Voltar</a></p>
                </div>
            </div>
        </div>
    </section>