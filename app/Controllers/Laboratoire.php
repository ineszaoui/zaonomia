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

class Laboratoire extends Controller
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
        if($this->mesSessions->joueur == 1) {
            echo view('Laboratoire_view');
        } else {
            return redirect()->to( base_url().'/Accueil' );
        }
	}
	
	// public function validReponse(){

	// 	//$gamersmodel= new \App\Models\GamersModel();

	// 	$nom = $_POST['true_immatricu'];


	// 	$labonnereponse = "1432082";
		

	// 	if ($nom == $labonnereponse ){
	// 		//$gamersmodel->enigmeResolu();
	// 		$data['message']='Bravo, vous avez résolu l\'énigme!';
	// 		$data['bouton']='Suivant';
	// 	}
	// 	else{
	// 		//$gamersmodel->enigmeErronee();
	// 		$data['message']='Mauvaise réponse! l\'indice est perdu...';
	// 		$data['bouton']='Retour au plan';
	// 	}
	// 	echo view('ReponseChien_view', $data);

	// }
}

