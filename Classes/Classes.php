<?php
namespace Classes\Users{
    class User{
        private $name;
        private $surname;
        private $email;
        private $password;

        public function setName($name){
            $this->name = $name;
        }
        public function setSurname($surname){
            $this->surname = $surname;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setPassword($password){
            $this->password = $password;
        }

        public function save(){
            $conn = mysqli_connect("localhost","root","","user_email");
            mysqli_set_charset($conn,"utf8");
            if(mysqli_connect_errno()){
                echo "error ".mysqli_connect_error();
            }else{
                mysqli_query($conn,"INSERT INTO `user_email` VALUES(NULL,'$this->name','$this->surname','$this->email','$this->password')");
            }
        }

        public function getAll(){
            $conn = mysqli_connect("localhost","root","","user_email");
            mysqli_set_charset($conn,"utf8");
            $result = mysqli_query($conn,"SELECT * FROM `user_email`");
            $storeArray = Array();
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $storeArray[] =  $row;
            }
            if(count($storeArray) == 0){
                echo (json_encode(array('name' => '', 'surname' => '', 'email' => '', 'password' => '')));
            }else{
                foreach ($storeArray as $item){
                    echo '***************'.'<br>';
                    foreach ($item as $key => $val){
                        echo $key.' => '.$val.'<br>';
                    }
                    echo '***************'."<br>";
                }
            }
        }

        public function getByEmail($userEmail){
            $conn = mysqli_connect("localhost","root","","user_email");
            mysqli_set_charset($conn,"utf8");
            $result = mysqli_query($conn,"SELECT * FROM `user_email`");
            $storeArray = Array();
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                if($row['email'] == $userEmail){
                    $storeArray[] =  $row;
                }
            }
            if(count($storeArray) == 0){
                echo (json_encode(array('name' => '', 'surname' => '', 'email' => '', 'password' => '')));
            }else{
                foreach ($storeArray as $item){
                    echo '<pre>';
                    print_r($item);
                    echo '</pre>';
                }
            }
        }

        public function getById($userId){
            $conn = mysqli_connect("localhost","root","","user_email");
            mysqli_set_charset($conn,"utf8");
            $result = mysqli_query($conn,"SELECT * FROM `user_email`");
            $storeArray = Array();
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                if($row['id'] == $userId){
                    $storeArray[] =  $row;
                }
            }
            if(count($storeArray) == 0){
                echo (json_encode(array('name' => '', 'surname' => '', 'email' => '', 'password' => '')));
            }else{
                foreach ($storeArray as $item){
                    echo '<pre>';
                    print_r($item);
                    echo '</pre>';
                }
            }
        }
    }
}
namespace Classes\Mailer{

    class Mail{
        public function send( string $swift_smtpTransport_port,string $swift_smtpTransport_host,
                              string $swift_smtpTransport_encryption, string $username,
                              string $user_password,string $from, string $to, string $message){
            require_once __DIR__. './../vendor/autoload.php';

            // Create the SendMail Transport
            $transport = (new \Swift_SmtpTransport($swift_smtpTransport_host, $swift_smtpTransport_port, $swift_smtpTransport_encryption))
                ->setUsername($username)
                ->setPassword($user_password)
            ;

            // Create the Mailer using your created Transport
            $mailer = new \Swift_Mailer($transport);

            // Create a message
            $mess = (new \Swift_Message('Subject'))
                ->setFrom([$from])->setTo([$to])->setBody($message)
            ;
            // Send the message
            $result = $mailer->send($mess);
            if(!$result){
                echo '<h1 style="color: darkred">Message could not be sent.</h1>';
            }else{
                echo '<h1>Message has been sent</h1>';
            }
        }
    }
}
