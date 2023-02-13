<?php 
namespace Controllers;
class User extends Controller{
	protected $modelName= \Models\Users::class;

	public function index(){

		 \Renderer::renderone("user/index");
    
         
    }
    public function liste(){

$user=$this->model->selectAll();
$pagetitle="liste utilisateur";
\Renderer::renderone('user/liste',compact('pagetitle','user'));

    }
    public function new(){

        $pageTitle ='nouvel utilisateur';
        \Renderer::renderone('user/new',compact('pageTitle'));
     
            }

            
public function insert(){
//     $nom=htmlspecialchars($_POST['nom']);
//     $prenom=htmlspecialchars($_POST['prenom']);
//     $telephone=htmlspecialchars($_POST['telephone']);
//     $username=htmlspecialchars($_POST['username']);
//     $role=htmlspecialchars($_POST['role']);
//     $etat=htmlspecialchars($_POST['etat']);
//     $password=$_POST['password'];



//     $filename = $_FILES['photo']['name'];
//     if(!empty($_FILES['photo']['name'])){

//     move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$filename);
//      }

// // 3. Insertion du user
// $this->model->insert($nom,$prenom,$telephone,$filename,$username,$password,$etat,$role);
// \Http::redirect('index.php?controller=user&task=new');
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$telephone=$_POST['telephone'];
$etat=$_POST['etat'];



$photo=$_FILES['photo']['name'];
$photo_tmp=$_FILES['photo']['tmp_name'];
move_uploaded_file($photo_tmp,'images/'.$photo);



$username=$_POST['username'];
$password=$_POST['password'];

$role=$_POST['role'];

$this->model->insert($nom,$prenom,$telephone,$etat,$photo,$username,$password,$role);


\Http::redirect('index.php?controller=user&task=liste');

  

}
    public function login(){
    session_start();
        $username=null;
        $password=null;
    
        if (!empty($_POST['username'])){
    $username=$_POST['username'] ;
    }
    if (!empty($_POST['password'])) {
    $password=$_POST['password'];
    }
    if (!$username || !$password) {
        die("Votre formulaire est vide!");
    }
    $user =$this->model->login($username,$password);
    if($user){

        $_SESSION['profile']=$user;
        \Http::redirect('index.php?controller=membres&task=index');
    }
    else{
    $_SESSION['message']='Account not found';
    \Http::redirect('index.php?controller=user&task=index');
    
    }
    
    
    
    }


    public function logout(){
        $pageTitle ='AUTHENTIFICATION';
       // session_start();
        session_destroy();
        \Http::redirect('index.php');   


}


public function delete(){
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $this->model->delete($id);
\Http::redirect('index.php?controller=user&task=index');
    }
}

	   

	
 

	}


