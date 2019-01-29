<?php
namespace GetGit;

class GitFeed {

    private $url;
    private $token;
    private $user;

    public function __construct( $git_url, $git_token, $git_user ) {

        $this->url = $git_url;
        $this->token = $git_token;
        $this->user = $git_user;
    }

    public function get_feed {
        '/repos?access_token='

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, '3');
        curl_setopt($ch, CURLOPT_PROTOCOLS, CURLPROTO_HTTPS);
        curl_setopt($ch, CURLOPT_USERAGENT, $user);
    }