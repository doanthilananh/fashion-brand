<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use Fideloper\Proxy\TrustProxies as Middleware;
=======
use Illuminate\Http\Middleware\TrustProxies as Middleware;
>>>>>>> d9a8d6e (create api login, order detail)
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
<<<<<<< HEAD
     * @var array|string|null
=======
     * @var array<int, string>|string|null
>>>>>>> d9a8d6e (create api login, order detail)
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
<<<<<<< HEAD
    protected $headers = Request::HEADER_X_FORWARDED_ALL;

    
=======
    protected $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;
>>>>>>> d9a8d6e (create api login, order detail)
}
