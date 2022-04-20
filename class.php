<?php
class Film {

    public $copertina;
    public $titolo;
    public $descrizione;
    public $genere;

    function __construct($_copertina, $_titolo, $_descrizione, $_genere)
    {
        $this->copertina = $_copertina;
        $this->titolo = $_titolo;
        $this->descrizione = $_descrizione;
        $this->genere = $_genere;
    }

    public function filmCompleto() {
        ?>
            <div class="vetrina">
                <figure>
                    <img src="<?php echo $this->copertina ?>" alt="<?php echo $this->titolo ?>">
                </figure>
                <div class="box">
                    <h1><?php echo $this->titolo ?></h1>
                    <h4>Trama
                        <p>
                            <?php echo $this->descrizione ?>
                        </p>
                    </h4>
                    <h4>Genere
                        <p>
                            <?php echo $this->genere ?>
                        </p>
                    </h4>
                </div>
            </div>
        <?php
    }

};

?>