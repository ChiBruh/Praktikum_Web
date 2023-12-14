<?php
class User {
    private $username;

    public function __construct($username) {
        $this->username = $username;
    }

    public function getName() {
        return $this->username;
    }
}
?>
