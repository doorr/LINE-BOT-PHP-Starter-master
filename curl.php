function exec-url($fullurl,$channelAccessToken,$message)
{

        $header = array(
            "Content-Type: application/json",
            'Authorization: Bearer '.$channelAccessToken,
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1)
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0)
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0)
        curl_setopt($ch, CURLOPT_POST,           1)
        curl_setopt($ch, CURLOPT_POSTFIELDS,     $message);
        curl_setopt($ch, CURLOPT_FAILONERROR, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_URL, $fullurl);

        $returned =  curl_exec($ch);

        return($returned);
}