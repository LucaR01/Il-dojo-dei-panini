<section class="food"> 
                <div class="food-card wrapper">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="text-content text-center">
                          <h1><?php echo $templateParams["titolo"]?></h1>
                          <p>Ecco qui la nostra fantastica selezione completa di panini</p>
                        </div>
                      </div>
                    </div>
                    <div class="row pt-5">
                        <?php foreach($templateParams["products"] as $prod):?>
                        <div class="col-lg-4 col-md-8 mb-lg-10 mb-5">
                            <div class="card card-img-top">
                            <img src=<?php echo IMG_DIR.$prod["img"]?> alt="" class="thumbnail img-fluid"/> 
                            <div class="pt-3">
                                <h4><?php echo $prod["nome"]?></h4>
                                <p>Ingredienti : <?php echo $prod["ingredienti"]?></p>
                                <p>Prezzo : <?php echo $prod["prezzo"]?>€</p>
                                <p>Quantità disponibile: <?php echo $prod["quantita_disponibile"]?></p>
                                <a href="aggiunta_al_carrello.php?id=<?php echo $prod["codice_prodotto"]; ?>" class="btn btn-success">Aggiungi al carrello</a>
                            </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                  </div>
                </div>
              </section>