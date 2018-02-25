<?php

namespace Borica;

class Factory
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var Response
     */
    private $response;

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
    }

    /**
     * Make a request to Borica.
     *
     * @return Request
     */
    public function request()
    {
        return $this->request;
    }

    /**
     * Parse a response from Borica.
     *
     * @param string $message
     * @return Response
     */
    public function response($message = null)
    {
        if (!empty($message)) {
            return $this->response->parse($message);
        }

        return $this->response;
    }
}