<?php
class Mail {
	
	//sender
	protected $nom;
	protected $prenom ;
	protected $email;
	protected $telephone;
	protected $entreprise;
	protected $object;
	protected $message;
	
	public function __construct($valeurs = array()){
		if(!empty($valeurs)){
			$this->hydrate($valeurs);
		}
	}

	public function hydrate($donnees)
	{
		foreach ($donnees as $attribut => $valeur)
		{
			$methode = 'set'.ucfirst($attribut);
			if (is_callable(array($this, $methode)))
			{
				$this->$methode($valeur);
			}
		}
	}

	public function isValid()
	{
		return !(empty($this->email) ||empty($this->telephone));
	}
	//setter
	
	public function setNom($nom){
		if(! empty($nom)){
			$this->nom =$nom;
		}else {
			
		}
	}
	
	public function setPrenom($prenom){
		if(!empty($prenom)){
			$this->prenom =$prenom;
		}else {
			
		}
	}
	
	public function setEmail($email){
		if(!empty($email)){
			$this->email =$email;
		}else{
			
		}
	}
	
	public function setTelephone($tel){
		if(!empty($tel)){
			$this->telephone =$tel;
		}else{
			
		}
	}
	
	public function setEntreprise($entreprise){
		if(!empty($entreprise)){
			$this->entreprise =$entreprise;
		}else{
				
		}
	}
	public function setObject($object){
		if(!empty($object)){
			$this->object = $object;
		}else {
			
		}
		
	}
	
	public function setmessage($message){
		if(!empty($message)){
			$this->message =$message;
		}else{
			
		}
	}
	
	
	//getter
	
	public function nom(){
		return $this->nom;
	}
	
	
	public function prenom(){
		return $this->prenom;
	}
	
	public function object(){
		return $this->object;
	}
	
	public function message(){
		return $this->message;
	}
	
	public function telephone(){
		return $this->telephone;
	}
	
	public function entreprise(){
		return  $this->entreprise;
	}
	public function email(){
		return $this->email;
	}
}

?>