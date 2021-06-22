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

use App\Libraries\GroceryCrud;


class Gestion extends Controller
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

		$this->mesSessions = \Config\Services::session();
	}

    public function index(){
		$this->mesSessions->admin = 0;
	    echo view('Login_view');
	}

	public function AccueilAdmin(){
		if($this->mesSessions->admin == 0) {
			return redirect()->to(base_url().'/Gestion');
		}else{
			echo view('AccueilAdmin_view');
		}
	}
	
	public function Verification(){

		if(!isset($_POST['username'])||!isset($_POST['password'])) return; //sécurisation mdp

		if($_POST['username'] == "admin" && $_POST['password'] == "12345"){
			$this->mesSessions->admin = 1;
			return redirect()->to(base_url().'/Gestion/AccueilAdmin');
		}else{
			return redirect()->to(base_url().'/Gestion');
		}
	}
	
	public function JoueursAdmin(){
		if($this->mesSessions->admin == 0) {
			return redirect()->to(base_url().'/Gestion');
		}else{
			$crud = new GroceryCrud();
			$crud->setTheme('datatables');
			$crud->displayAs('gamer_nom','Nom du joueur');
			$crud->displayAs('gamer_prenom','Prénom du joueur');
			$crud->displayAs('gamer_email','Email du joueur');
			$crud->displayAs('gamer_etat','Joueur actif ou pas');
			$crud->displayAs('gamer_enigme_en_cours','Nombre d\'énigmes en cours par joueur');
			$crud->displayAs('gamer_photo','Photo du joueur');
			$crud->setTable('gamers');
			$crud->callbackColumn('gamer_photo',array($this,'showImageGamer'));
            $crud->callbackAddField('gamer_photo',function(){
                return '<input id="gamer_photo" type="hidden" name="gamer_photo"><input type="file" name="file_photo" id="file_photo"><img id="miniature" src="" width="100px">';
            });
	    	$output = $crud->render();
        	return view('JoueursAdmin_view', (array)$output);
		}
	}

	public function showImageGamer($value){
		return "<img src='".base_url()."/assets/photos/gamers/".$value."' width=100>";
	}

	/*public function EnigmesAdmin(){
		if($this->mesSessions->admin == 0) {
			return redirect()->to(base_url().'/Gestion');
		}else{
			$crud = new GroceryCrud();
			$crud->setTheme('datatables');
			$crud->displayAs('enigme_titre','Titre de l\'énigme');
			$crud->displayAs('enigme_photo','Photo de l\'énigme');
			$crud->displayAs('enigme_lien','Lien de l\'énigme');
			$crud->displayAs('enigme_etat','Etat de l\'énigme');
			$crud->displayAs('enigme_texte','Texte de l\'énigme');
			$crud->displayAs('enigme_ordre','Ordre de l\'énigme');
			$crud->displayAs('enigme_mot_magique','Mot magique de l\'énigme');
			$crud->setTable('enigmes');
			$crud->callbackColumn('enigme_photo',array($this,'showImageRiddle'));
			$crud->callbackAddField('enigme_photo',function(){
				return '<input id="enigme_photo" type="hidden" name="enigme_photo"><input type="file" name="file_photo" id="file_photo"><img id="miniature" src="" width="100px">';
			});
	    	$output = $crud->render();
        	return view('EnigmesAdmin_view', (array)$output);
		}
	}

	public function showImageRiddle($value){
		return "<img src='".base_url()."/assets/photos/enigmes/".$value."' width=100>";
	}*/

	public function Telechargement(){
		if($this->mesSessions->admin == 0) {
			return redirect()->to(base_url().'/Gestion');
		}else{
			$image = $this->request->getFile('fichierphoto');
			$nomPhoto = $image->getRandomName();

			if($image->getMimeType() != "image/jpeg" && $image->getMimeType() != "image/jpg" && $image->getMimeType() != "image/png"){
				//echo "erreur de format";
                echo $image->getMimeType();
				return;
			}
			echo $nomPhoto;
			$image->move("./assets/photos/gamers/", $nomPhoto);
		}
	}
}