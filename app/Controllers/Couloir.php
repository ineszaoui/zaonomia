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

class Couloir extends Controller
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

        if ($this->mesSessions->joueur == 0) {
            echo view('Entete_view');
            echo view('Accueil_view');
            echo view('LoginGamer_view');
            echo view('Pied_view');
        } else {
            $gamersmodel= new \App\Models\Gamers();
            $data['profil'] = $gamersmodel->recupProfil($this->mesSessions->username);
            $data['connect'] = $this->mesSessions->joueur;
            echo view('Couloir_view');
        }
	}
	

}