<?php
namespace DigiBrains;

class GetGit {

    private $token;

    public function __construct( $git_token ) {

        $this->token = $git_token;
    }

    public function get_feed() {
        echo "It's working";
    }
}