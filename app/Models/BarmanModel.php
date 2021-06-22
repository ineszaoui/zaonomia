<?php

namespace App\Models;

use CodeIgniter\Model;

class BarmanModel extends Model
{
    protected $table      = 'barman';
    protected $primaryKey = 'phrase_id';

    public function PhraseAleatoires()
    {
        $mabase = db_connect();

        $query = $mabase->query("SELECT * FROM barman ORDER BY rand()");
        return $query->getResultArray($query);

        
    }
}
