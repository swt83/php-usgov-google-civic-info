<?php

namespace Travis;

class Civic
{
    /**
     * Magic method to handle API calls.
     *
     * @param   string  $method
     * @param   array   $args
     * @return  array
     */
    public static function __callStatic($method, $args)
    {
        // set payload
        $args = isset($args[0]) ? $args[0] : array();

        // set endpoint
        $endpoint = 'https://www.googleapis.com/civicinfo/v2/'.$method.'?';
        foreach ($args as $key => $value)
        {
            $endpoint .= urlencode($key).'='.urlencode($value).'&';
        }

        // curl request
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        // if errors...
        if (curl_errno($ch))
        {
            // capture
            #$errors = curl_error($ch);

            // close
            curl_close($ch);

            // return
            return false;
        }

        // if NO errors...
        else
        {
            // close
            curl_close($ch);

            // decode
            $result = json_decode($response);

            // catch error...
            if (ex($result, 'error')) trigger_error(ex($result, 'error.message'));

            // decode
            return $result;
        }
    }
}