<?php 
namespace Models;

class Users extends Model{


	protected $table="users";
    protected $table_id="iduser";
    
    function insert( string $nom,string $prenom,string $telephone,int $etat,string $photo,string $username,string $password,string $role):void{
        $query =   $this->pdo->prepare('INSERT INTO users 
        SET nom = :nom, prenom = :prenom, telephone = :telephone,etat = :etat,photo=:photo,username = :username,password= :password, role = :role' );
        $query->execute(compact( 'nom','prenom', 'telephone','etat','photo','username', 'password','role'));
        } 
    function login($username,$password){
        $query =  $this->pdo->prepare("SELECT * FROM users WHERE
         username ='$username'AND password='$password'");
        $query->execute();
        $item = $query->fetch();
        return $item;
    }
}




 ?>