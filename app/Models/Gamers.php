<?php namespace App\Models;

use CodeIgniter\Model;

class Gamers extends Model
{
	protected $table      = 'gamers';
    protected $primaryKey = 'gamer_id';

    public function verif( $e, $p ){
        $mabase = db_connect();
        $query = $mabase->query('SELECT * FROM gamers WHERE gamer_email=? AND gamer_password=?', [$e, $p]);
        $resultat = $query->getResultArray();
        return count($resultat);
    }

    public function recupProfil( $e ){
        $mabase = db_connect();
        $query = $mabase->query('SELECT * FROM gamers
                                    INNER JOIN enigmes ON enigme_id = gamer_enigme_en_cours
                                    WHERE gamer_email=?', [$e]);
        return $query->getResultArray();
    }



    /*public function recupProfilSeul( $e ){
        $mabase = db_connect();
        $query = $mabase->query('SELECT * FROM gamers
                                    WHERE gamer_email=?', [$e]);
        return $query->getResultArray();
    }*/

    public function enigmeResolu( $idgamer, $idenigme ){
        $mabase = db_connect();
        //maj table etudier pour mettre énigme ok
        //$mabase->query('UPDATE etudier SET etat_resolution=1 WHERE gamers_gamer_id=? AND enigmes_enigme_id=?', [$idgamer, $idenigme]);
        $idenigme += 1;
        $mabase->query('UPDATE gamers
                        SET gamer_enigme_en_cours=?, nb_essais_total = nb_essais_total + nb_essais, nb_essais=0
                        WHERE gamer_id=?', [$idenigme, $idgamer]);
        //$mabase->query('INSERT INTO etudier(gamers_gamer_id, enigmes_enigme_id, etat_resolution, nb_essais) VALUE(?,?,0,0)', [$idgamer, $idenigme]);
    }

    public function enigmeErronee( $idgamer, $idenigme ){
        $mabase = db_connect();
        //maj table etudier pour mettre énigme ok
        $mabase->query('UPDATE gamers SET nb_essais=nb_essais+1 WHERE gamer_id=?', [$idgamer]);
    }

    public function enregistrer( $name, $fname, $email, $password/*, $photo*/ ){
        $mabase = db_connect();
        $mabase->query('INSERT INTO gamers(gamer_etat, gamer_enigme_en_cours, nb_essais, gamer_nom, gamer_prenom, gamer_email, gamer_password/*, gamer_photo*/) VALUE(1,1,0,?,?,?,?)', [$name, $fname, $email, $password/*,$photo*/]);
    }
}