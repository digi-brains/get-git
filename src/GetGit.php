<?php

namespace DigiBrains;

class GetGit {

    private $token;
    private $query;
    private $vars;

    public function __construct( $git_token = '', $git_query = '', $git_vars = '' ) {
        $this->token = $git_token;
        $this->query = $git_query;
        $this->vars = $git_vars;
    }

    public function query_GraphQL() {
        $endpoint = 'https://api.github.com/graphql';
        $request = json_encode(['query' => $this->query, 'variables' => $this->vars]);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'User-Agent: PHP Script',
                'Content-Type: application/json',
                'Authorization: bearer ' . $this->token
            ]
        );
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        $response = curl_exec($ch);

        if ($response === false) {
            return curl_errno($ch);
        } else {
            return $response;
        }
        
    }

}