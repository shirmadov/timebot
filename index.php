<?php

class Stime{

    CONST API_URL_TG = "https://api.telegram.org/bot";
    CONST API_URL_TIME = "https://www.timeapi.io/api/Time/current/";
    private $user_id;
    const TOKEN_TG = "6148502487:AAH2eFDiUKhiO_LkdSHLM9nIYZ6H8N0FDQY";
    public $all_continents = array('Africa','America','Antarctica','Australia','Europe','Arctic','Asia','Atlantic');

    function __construct(){
        $this->getUserId();
        $this->getContents();
    }

    public function getUserId(){
        $data = file_get_contents('php://input');
        $data = json_decode($data,true);
        $this->user_id = isset($data['message']['from']['id'])?$data['message']['from']['id']:$data['callback_query']['from']['id'];
    }

    protected function sendRequest($method, $path, $params=null){
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL,$path );

        switch ($method){
            case 'GET':
                curl_setopt($curl, CURLOPT_HTTPGET, true);
                break;
            case 'POST':
                curl_setopt($curl, CURLOPT_POST, true);
                break;
            case 'PUT':
                if(emppty($params)){
                    $headerData[] = 'Content-Length: 0';
                }
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
                break;
            default:
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        }

        if (!empty($params) && $method != 'GET')
        {
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
        }

        curl_setopt($curl, CURLOPT_ENCODING, 'gzip,deflate');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HEADER, false);

        $response = curl_exec($curl);
        return json_decode($response);

    }

    public function setWebhook(){
        $test = $this->sendRequest('GET',self::API_URL_TG.self::TOKEN_TG."/setWebhook?url=https://wagt.space/");
        var_dump($test);
    }


    public function getContents(){

        $data = file_get_contents('php://input');
        $data = json_decode($data,true);

        if(isset($data['message']['text']) && $data['message']['text'] =='/timezones'){
            $getQuery = array(
                "chat_id"=>$this->user_id,
                "text"=>'ss',
                "parse_mode"=>"html",
                "reply_markup"=>json_encode(
                    array(
                        'inline_keyboard'=>array(
                            array(
                                array(
                                    'text'=>'Africa',
                                    'callback_data'=>'Africa',
                                ),
                                array(
                                    'text'=>'America',
                                    'callback_data'=>'America',
                                ),
                                array(
                                    'text'=>'Antarctica',
                                    'callback_data'=>'Antarctica',
                                )
                            ),
                            array(
                                array(
                                    'text'=>'Arctic',
                                    'callback_data'=>'Arctic',
                                ),
                                array(
                                    'text'=>'Asia',
                                    'callback_data'=>'Asia',
                                ),
                                array(
                                    'text'=>'Atlantic',
                                    'callback_data'=>'Atlantic',
                                ),
                            ),
                            array(
                                array(
                                    'text'=>'Europe',
                                    'callback_data'=>'Europe',
                                ),
                                array(
                                    'text'=>'Australia',
                                    'callback_data'=>'Australia',
                                )


                            )
                        ),
                        "one_time_keyboard"=>true,
                    )
                )
            );

           $this->sendRequest('GET',self::API_URL_TG.self::TOKEN_TG."/sendMessage?".http_build_query($getQuery));

        }else if(isset($data['callback_query']['data']) && in_array($data['callback_query']['data'],$this->all_continents)){
            $all_cities = (array) json_decode(file_get_contents('cities.json'));
            $getQuery = array(
                "chat_id"=>$this->user_id,
                "text"=>'ghf',
                "parse_mode"=>"html",
                "reply_markup"=>json_encode(
                    array(
                        'inline_keyboard'=>$all_cities[$data['callback_query']['data']],
                        "one_time_keyboard"=>true,
                    )
                )
            );

            $this->sendRequest('GET',self::API_URL_TG.self::TOKEN_TG."/sendMessage?".http_build_query($getQuery));

        }else if(isset($data['callback_query']['data']) && in_array(explode("/",$data['callback_query']['data'])[0],$this->all_continents)){

            $all = $this->sendRequest('GET',self::API_URL_TIME."/zone?timeZone=".$data['callback_query']['data']);
            $getQuery = array(
                "chat_id"=>$this->user_id,
                "text"=>$all->dateTime,
                "parse_mode"=>"html",
            );
            $this->sendRequest('GET',self::API_URL_TG.self::TOKEN_TG."/sendMessage?".http_build_query($getQuery));
        }
    }

    public function saveToFile($string, $clear = false){
        $log_file_name = __DIR__."/message.txt";
        $now = date("Y-m-d H:i:s");

        echo $now;
        if($clear == false){

            file_put_contents($log_file_name,print_r($string, true)."\r\n", FILE_APPEND);
        }else{
            file_put_contents($log_file_name, '');
            file_put_contents($log_file_name,print_r($string, true)."\r\n", FILE_APPEND);
        }
    }

}

$time = new Stime();

?>