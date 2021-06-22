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


class Gamer extends Controller
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
		$this->mesSessions->joueur = 0;
		echo view('Entete_view');
	    echo view('Accueil_view');
	    echo view('LoginGamer_view');
	    echo view('Pied_view');
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

	public function Verification(){
		if(!isset($_POST['email'])||!isset($_POST['password'])) return; //sécurisation mdp
		
		$gamersmodel = new \App\Models\Gamers();
		$reponse = $gamersmodel->verif($_POST['email'], $_POST['password']);
		if($reponse == 1){
			$this->mesSessions->joueur = 1;
			$this->mesSessions->username = $_POST['email'];
			return redirect()->to(base_url().'/Plan');
		}else{
			return redirect()->to(base_url().'/Accueil');
		}
	}

	/*public function ValidReponse(){
		if($this->mesSessions->joueur == 0) {
			return redirect()->to(base_url().'/Gamer');
		}else{
			$gamersmodel = new \App\Models\Gamers();
			$data['profil'] = $gamersmodel->recupProfil($this->mesSessions->username);
			$data['connect'] = $this->mesSessions->joueur;

			$reponse = $_POST['cle'];
			$bonnereponse = $data['profil'][0]['enigme_mot_magique'];
			$idgamer = $data['profil'][0]['gamer_id'];
			$idenigme = $data['profil'][0]['enigme_ordre'];

			if($reponse == $bonnereponse){
				$gamersmodel->enigmeResolue($idgamer, $idenigme);
				$data['message']="Bravo ! Vous pouvez passer à l'énigme suivante.";
				$data['message2']="Énigme Suivante";

			}else{
				$gamersmodel->enigmeErronee($idgamer, $idenigme);
				$data['message']="Dommage ! Vous pouvez recommencer l'énigme.";
				$data['message2']="Retour à l'énigme";
			}

			echo view('Entete_view', $data);
			echo view('ReponseEnigme_view', $data);
			echo view('Pied_view');
		}
	}*/

	public function NewGamer(){
		$this->mesSessions->joueur = 0;
		echo view('NewGamer_view');
	}

	public function Enregistrement(){
		if(!isset($_POST['email'])||!isset($_POST['password'])) return; //sécurisation mdp
        $gamersmodel = new \App\Models\Gamers();
        if ($_POST['code'] == 9781234567897){
            $reponse = $gamersmodel->enregistrer($_POST['name'], $_POST['fname'], $_POST['email'], $_POST['password']/*, $nomPhoto*/);
            echo view('NewGamerValid_view');
        } else {
            $data['message']='Le code barre est incorrect.';
            echo view('ErreurCodeBarre_view', $data);
            return;
        }


		if ( $gamersmodel->recupProfil( $_POST['email'] ) !=null ){
	
			$data['message']='Ce compte existe déjà.';
			echo view('ErreurFormat_view', $data);
			return;
			}

		// // $image = $this->request->getFile("photo");
		// // $nomPhoto = $image->getRandomName();

		// // if($image->getMimeType() != "image/jpg" && $image->getMimeType() != "image/png"){
		// // 	$data['message']='Format de fichier invalide.';
		// // 	echo view('ErreurFormat_view'), $data;
		// // 	return;
		// }

		// $image->move("./assets/photos/gamers/", $nomPhoto);


	}
}
