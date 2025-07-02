<?php 
require_once("../Models/Model.php");

class Users extends Model{

    private int $user_id; 
    private string $firstname;
    private string $lastname;
    private string $username;
    private string $email; 
    private string $password;
    private string $phone_number;
    
    protected static string $table = "users";

    public function __construct(array $data){
        $this->users_id = $data["users_id"];
        $this->firstname = $data["firstname"];
        $this->lastname = $data["lastname"];
        $this->username = $data["username"];
        $this->email = $data["email"];
        $this->password = $data["password"];
        $this->phone_number = $data["phone_number"];
    }

    public function getId(): int {
        return $this->users_id;
    }
    
    public function getFirstName(): string {
        return $this->firstname;
    }
    
    public function getLastName(): string {
        return $this->lastname;
    }
    
    public function getUserName(): string {
        return $this->username;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getPhoneNumber(): string {
        return $this->phone_number;
    }

    public function setFirstName(string $firstname){
        $this->firstname = $firstname;
    }

    public function setLastName(string $lastname){
        $this->lastname = $lastname;
    }

    public function setUserName(string $username){
        $this->username = $username;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function setPassword(string $password){
        $this->password = $password;
    }

    public function setPhoneNumber(string $phone_number){
        $this->phone_number = $phone_number;
    }

    public function toArray(){
        return [$this->id, $this->firstname, $this->lastname, $this->username, $this->email, $this->password, $this->phone_number];
    }
    
}