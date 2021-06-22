<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Plan extends Controller
{

    /**
     * Constructor.
     */
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        //--------------------------------------------------------------------
        // Preload any models, libraries, etc, here.
        //--------------------------------------------------------------------
        // E.g.:
        $this->mesSessions = \Config\Services::session();
    }

    public function index()
    {
        if ($this->mesSessions->joueur == 0) {
            echo view('Entete_view');
            echo view('Accueil_view');
            echo view('LoginGamer_view');
            echo view('Pied_view');
        } else {
            $gamersmodel = new \App\Models\Gamers();
            $data['profil'] = $gamersmodel->recupProfil($this->mesSessions->username);

            echo view('Plan_view', $data);

        }
    }

    public function AccueilGamer(){
        if($this->mesSessions->joueur == 0) {
            return redirect()->to(base_url().'/Accueil');
        }else{
            $gamersmodel = new \App\Models\Gamers();
            $data['profil'] = $gamersmodel->recupProfil($this->mesSessions->username);
            $data['connect'] = $this->mesSessions->joueur;

            echo view('EnteteProfil_view', $data);

            //if($data['profil'] == null){
            //	$data['profil'] = $gamersmodel->recupProfilSeul($this->mesSessions->username);
            //	echo view('GamerProfilWin_view', $data);

            //}else{
            echo view('GamerProfil_view', $data);
            //}
            echo view('PiedProfil_view');
        }
    }

}