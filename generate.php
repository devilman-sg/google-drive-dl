<?php

error_reporting(0);


function get_web_page($url,$header='',$type='GET',$data=''){

        if($header==''){
            $header=array('user-agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36)');
        }

        $options = array(
            CURLOPT_RETURNTRANSFER => true,     // return web page
            CURLOPT_HEADER         => true,     //return headers in addition to content
            CURLOPT_FOLLOWLOCATION => true,     // follow redirects
            CURLOPT_ENCODING       => "",       // handle all encodings
            CURLOPT_AUTOREFERER    => true,     // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 30,      // timeout on connect
            CURLOPT_TIMEOUT        => 20,      // timeout on response
            CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
            CURLINFO_HEADER_OUT    => true,

            CURLOPT_CUSTOMREQUEST => "$type",
            CURLOPT_POSTFIELDS => "$data",

            CURLOPT_SSL_VERIFYPEER => true,     // Validate SSL Cert

            CURLOPT_HTTPHEADER => $header
        );

        $ch      = curl_init( $url );
        curl_setopt_array( $ch, $options );
        $rough_content = curl_exec( $ch );
        $err     = curl_errno( $ch );
        $errmsg  = curl_error( $ch );
        $header  = curl_getinfo( $ch );
        curl_close( $ch );

        $header_content = substr($rough_content, 0, $header['header_size']);
        $body_content = trim(str_replace($header_content, '', $rough_content));
        $pattern = "#Set-Cookie:\\s+(?<cookie>[^=]+=[^;]+)#m";
        preg_match_all($pattern, $header_content, $matches);
        $cookiesOut = implode("; ", $matches['cookie']);
        $header['errno']   = $err;
        $header['errmsg']  = $errmsg;
        $header['headers']  = $header_content;
        $header['content'] = $body_content;
        $header['cookies'] = $cookiesOut;
        $header['code'] = $header['http_code'];

    return $header;
}



function get_web_page2($url,$header='',$type='GET',$data=''){

        if($header==''){
            $header=array('user-agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36)');
        }

        $options = array(
            CURLOPT_RETURNTRANSFER => true,     // return web page
            CURLOPT_HEADER         => true,     //return headers in addition to content
            CURLOPT_FOLLOWLOCATION => false,     // follow redirects
            CURLOPT_ENCODING       => "",       // handle all encodings
            CURLOPT_AUTOREFERER    => true,     // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 30,      // timeout on connect
            CURLOPT_TIMEOUT        => 20,      // timeout on response
            CURLOPT_MAXREDIRS      => 0,       // stop after 10 redirects
            CURLINFO_HEADER_OUT    => true,

            CURLOPT_CUSTOMREQUEST => "$type",
            CURLOPT_POSTFIELDS => "$data",

            CURLOPT_SSL_VERIFYPEER => true,     // Validate SSL Cert

            CURLOPT_HTTPHEADER => $header
        );

        $ch      = curl_init( $url );
        curl_setopt_array( $ch, $options );
        $rough_content = curl_exec( $ch );
        $err     = curl_errno( $ch );
        $errmsg  = curl_error( $ch );
        $header  = curl_getinfo( $ch );
        curl_close( $ch );

        $header_content = substr($rough_content, 0, $header['header_size']);
        $body_content = trim(str_replace($header_content, '', $rough_content));
        $pattern = "#Set-Cookie:\\s+(?<cookie>[^=]+=[^;]+)#m";
        preg_match_all($pattern, $header_content, $matches);
        $cookiesOut = implode("; ", $matches['cookie']);
        $header['errno']   = $err;
        $header['errmsg']  = $errmsg;
        $header['headers']  = $header_content;
        $header['content'] = $body_content;
        $header['cookies'] = $cookiesOut;
        $header['code'] = $header['http_code'];

    return $header;
}





function get_drive_dlink($link){

$page = get_web_page($link);
$url = $page['url'];
$v_id = explode( "/", $url);
$v_id = $v_id[5];
$url_2 = "https://drive.google.com/uc?id=$v_id&export=download";
$page = get_web_page($url_2);
$page_content = $page['content'];


$page_cookies = $page['cookies'];

$header=array("cookie:$page_cookies");


preg_match('@confirm=([^"]+)&@mi',$page_content,$match);


$confirm_id = $match[1];


$url_3 = "https://drive.google.com/uc?export=download&confirm=$confirm_id&id=$v_id";
$page = get_web_page2($url_3,$header);

    return $page['redirect_url'];

}


