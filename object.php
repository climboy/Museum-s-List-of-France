<?php

/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 06/02/2017
 * Time: 09:07
 */
class Musee
{
    private $id;
    private $nomreg;
    private $nomdep;
    private $annexe;
    private $nom_du_musee;
    private $adr;
    private $cp;
    private $ville;
    private $telephone;
    private $fax;
    private $siteweb;
    private $fermeture_annuelle;
    private $periode_ouverture;
    private $jours_nocturnes;

    public function __construct($tabs) {
        $this->id = $tabs['id'];
        $this->nomreg = $tabs['NOMREG'];
        $this->nomdep = $tabs['NOMDEP'];
        $this->annexe = $tabs['ANNEXE'];
        $this->nom_du_musee = $tabs['NOM DU MUSEE'];
        $this->adr = $tabs['ADR'];
        $this->cp = $tabs['CP'];
        $this->ville = $tabs['VILLE'];
        $this->telephone = $tabs['TELEPHONE1'];
        $this->fax = $tabs['FAX'];
        $this->siteweb = $tabs['SITWEB'];
        $this->fermeture_anuelle = $tabs['FERMETURE ANNUELLE'];
        $this->periode_ouverture = $tabs['PERIODE OUVERTURE'];
        $this->jours_nocturnes = $tabs['JOURS NOCTURNES'];
    }

    public function buidItem() {
        echo "<div class='musee'>";
        echo "<h3>$this->nom_du_musee</h3>";
        echo "</div>";
    }

}