<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class Chien extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

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
		// $this->session = \Config\Services::session();
        $this->mesSessions = \Config\Services::session();
    }
    
    public function index(){
        echo view('Chien_view');
	}
	
	public function validReponse(){
        if($this->mesSessions->joueur == 1) {

            $gamersmodel= new \App\Models\Gamers();
            $data['profil'] = $gamersmodel->recupProfil($this->mesSessions->username);

            $nom = $_POST['true_immatricu'];
            $labonnereponse = "1432082";

            $idgamer = $data['profil'][0]['gamer_id'];
            $idenigme = $data['profil'][0]['enigme_id'];

            if ($nom == $labonnereponse ){
                $gamersmodel->enigmeResolu($idgamer, $idenigme);
                $data['message']='Bravo, vous avez résolu l\'énigme!';
                $data['bouton']='Suivant';
            }
            else{
                $gamersmodel->enigmeErronee($idgamer, $idenigme);
                $data['message']='Mauvaise réponse! l\'indice est perdu...';
                $data['bouton']='Retour au plan';
            }
            echo view('ReponseChien_view', $data);
        } else {
            return redirect()->to(base_url().'/Accueil');
        }
	}
}

