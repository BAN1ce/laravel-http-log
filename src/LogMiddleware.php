<?php
/**
 * Created by PhpStorm.
 * User: ice
 * Date: 2019/5/6
 * Time: 下午8:59
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LogMiddleware
{

    private static $log = [];


    public function handle($request, Closure $next)
    {
        static::$log['start_time'] = microtime(true);

        return $next($request);

    }

    public function terminate(Request $request, Response $response)
    {
        static::$log['path'] = $request->getPathInfo();

        static::$log['client_ip'] = $request->getClientIp();

        static::$log['end_time'] = microtime(true);

        static::$log['response_time'] = (int)((static::$log['end_time'] - static::$log['start_time']) * 1000);

        static::$log['start_time'] = date('Y-m-d H:i:s',(int)static::$log['start_time']);

        static::$log['end_time'] = date('Y-m-d H:i:s',(int)static::$log['end_time']);

        static::$log['request'] = json_encode($request->all());

        static::$log['response'] = $response->getContent();

        static::$log['http_response_code'] = $response->getStatusCode();

    }

    /**
     * @return array
     */
    public static function getLog(): array
    {
        return self::$log;
    }

    /**
     * @param array $log
     */
    public static function setLog(array $log): void
    {
        self::$log = $log;
    }


    public static function addLog($key,$value)
    {
        self::$log[$key] = $value;

    }



}