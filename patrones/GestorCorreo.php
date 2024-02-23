<?php

class GestorCorreo //Adaptador
{
    private $username;

    function __construct($username)
    {
        $this->username = $username;
    }

    public function sendMessage($title, $message, $phoneNumber = '')
    {
        if('' == $phoneNumber) {
            return $this->sendPublic($title, $message);
        } else {
            return $this->sendPrivate($title, $message, $phoneNumber);
        }
    }

    protected function sendPublic($title, $message)
    {

        echo "Publico";
        // El mensaje se publicaría en el tablón de soporte (público)
        // Emplearía una clase especial PublishBoard
    }

    protected function sendPrivate($title, $message, $phoneNumber)
    {
        echo "Privado";
        // El mensaje se enviaría al backend del soporte (privado)
        // Emplearía una clase especial PublishBackend
    }
}

?>