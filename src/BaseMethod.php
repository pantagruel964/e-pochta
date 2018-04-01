<?php

declare(strict_types=1);

namespace Pantagruel964\Epochta;

use GuzzleHttp\Client as Guzzle;
use Psr\Http\Message\ResponseInterface;

class BaseMethod
{
    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * BaseMethod constructor.
     */
    public function __construct()
    {
        $this->client = $this->getHttpClient();
    }

    private function getHttpClient()
    {
        return new Guzzle([
            'base_uri' => config('epochta.end_point')
        ]);
    }

    /**
     * @param array $params
     * @param string $method
     *
     * @return mixed
     */
    public function request(array $params, string $method)
    {
        $sum = $this->getControlSum($params, $method);

        $params = array_merge($params, [
            'test_mode' => config('epochta.test_mode'),
            'key'       => config('epochta.public_key'),
            'sum'       => $sum,
        ]);

        $request = $this->client->post($method, [
            'form_params' => $params
        ]);

        return $this->response($request);
    }

    /**
     * @param ResponseInterface $request
     *
     * @return mixed
     */
    private function response(ResponseInterface $request)
    {
        return json_decode((string) $request->getBody(), true);
    }

    private function getControlSum(array $params, $method)
    {
        $params = array_merge($params, [
            'version' => config('epochta.version'),
            'action'  => $method,
            'key'     => config('epochta.public_key'),
        ]);

        ksort($params);

        $sum = '';

        foreach ($params as $param) {
            $sum .= $param;
        }

        return md5($sum . config('epochta.private_key'));
    }
}
