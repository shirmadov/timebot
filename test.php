<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define("TG_TOKEN","6148502487:AAH2eFDiUKhiO_LkdSHLM9nIYZ6H8N0FDQY");
define("TG_USER_ID",1054621606);

//echo $_SERVER['REMOTE_ADDR'];

/* Example 1 */
//$textMessage = "Тестовое сообщение";
//$textMessage = urlencode($textMessage);
//
//$urlQuery = "https://api.telegram.org/bot". TG_TOKEN ."/sendMessage?chat_id=". TG_USER_ID ."&text=" . $textMessage;
//
//$result = file_get_contents($urlQuery);


/* Example 2 */
//$getQuery = array(
//    "chat_id"=>TG_USER_ID,
//    "text"=>$_SERVER['REMOTE_ADDR'],
//    "parse_mode"=>"html"
//);
//
//$ch = curl_init("https://api.telegram.org/bot".TG_TOKEN."/sendMessage?".http_build_query($getQuery));
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_HEADER, false);
//
//$resultQuery = curl_exec($ch);
//curl_close($ch);
//
//echo $resultQuery;


/*Example 3*/

//$getQuery = array(
//    "chat_id"=>TG_USER_ID,
//    "text"=>$_SERVER['REMOTE_ADDR'],
////    "parse_mode"=>"html",
////    "reply_to_message_id"=>133
//    "reply_markup"=>json_encode(
//        array(
//        'keyboard'=>array(
//            array(
//                array(
//                    'text'=>'Button 1',
//                    'callback_data'=>'test_2',
//                ),
//                array(
//                    'text'=>'Button 2',
//                    'callback_data'=>'test_2',
//                )
//            )
//        ),
//       "one_time_keyboard"=>true,
//    )
//    )
//);
//$ch = curl_init("https://api.telegram.org/bot".TG_TOKEN."/sendMessage?".http_build_query($getQuery));
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_HEADER, false);
//
//$resultQuery = curl_exec($ch);
//curl_close($ch);



/** sendPhoto and sendDocument */
//$arrayQuery = array(
//    "chat_id"=>TG_USER_ID,
//    "caption"=>"Man United",
////    "photo"=>curl_file_create(__DIR__.'/img/ronaldo.jpg'),
//    "document"=>curl_file_create(__DIR__.'/img/ronaldo.jpg')
//    );
////$ch = curl_init("https://api.telegram.org/bot".TG_TOKEN."/sendPhoto");
//$ch = curl_init("https://api.telegram.org/bot".TG_TOKEN."/sendDocument");
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayQuery);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_HEADER, false);
//
//$resultQuery = curl_exec($ch);
//curl_close($ch);



/** sendMediaGroup **/
//$arrayQuery = array(
//    "chat_id"=>TG_USER_ID,
//    "media"=>json_encode([
//       ['type'=>'photo','media'=>'attach://cr7'],
//       ['type'=>'photo','media'=>'attach://cr7_2'],
//    ]),
//    "cr7"=>new CURLFile(__DIR__.'/img/ronaldo.jpg'),
//    "cr7_2"=>new CURLFile(__DIR__.'/img/ronaldo.jpg')
//);
//$ch = curl_init("https://api.telegram.org/bot".TG_TOKEN."/sendMediaGroup");
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayQuery);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_HEADER, false);
//
//$resultQuery = curl_exec($ch);
//curl_close($ch);


/** setWebHook */
$getQuery = array(
    'url'=>'https://wagt.space/index.php',

);

$ch = curl_init("https://api.telegram.org/bot".TG_TOKEN."/setWebhook?url=https://wagt.space/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$resultQuery = curl_exec($ch);
curl_close($ch);

var_dump($resultQuery);
echo '<br>';



/** Example 4 **/
function writeLogFile($string, $clear = false){
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


//$data = file_get_contents('php://input');
//$data = json_decode($data,true);
//
////var_dump(gettype($data));
//
//writeLogFile($data['message']['text'],true);
//
//echo file_get_contents(__DIR__."/message.txt");




$ch = curl_init("https://www.timeapi.io/api/Time/current/zone?timeZone=Europe/Moscow");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);

$resultQuery = curl_exec($ch);


$all = json_decode($resultQuery);
echo "time:".$all->dateTime;
//var_dump(gettype($all));
echo '<br>';
echo '<pre>' . var_export($all, true).'</pre>';
//writeLogFile($all,true);

//var_dump(array(file_get_contents(__DIR__."/message.txt")));

$all_cities = array (
    'Africa' =>
        array (
            0 =>
                array (
                    0 =>
                        array (
                            'text' => 'Abidjan',
                            'callback_data' => 'Africa/Abidjan',
                        ),
                    1 =>
                        array (
                            'text' => 'Accra',
                            'callback_data' => 'Africa/Accra',
                        ),
                    2 =>
                        array (
                            'text' => 'Addis_Ababa',
                            'callback_data' => 'Africa/Addis_Ababa',
                        ),
                ),
            1 =>
                array (
                    0 =>
                        array (
                            'text' => 'Algiers',
                            'callback_data' => 'Africa/Algiers',
                        ),
                    1 =>
                        array (
                            'text' => 'Asmara',
                            'callback_data' => 'Africa/Asmara',
                        ),
                    2 =>
                        array (
                            'text' => 'Asmera',
                            'callback_data' => 'Africa/Asmera',
                        ),
                ),
            2 =>
                array (
                    0 =>
                        array (
                            'text' => 'Bamako',
                            'callback_data' => 'Africa/Bamako',
                        ),
                    1 =>
                        array (
                            'text' => 'Bangui',
                            'callback_data' => 'Africa/Bangui',
                        ),
                    2 =>
                        array (
                            'text' => 'Banjul',
                            'callback_data' => 'Africa/Banjul',
                        ),
                ),
            3 =>
                array (
                    0 =>
                        array (
                            'text' => 'Bissau',
                            'callback_data' => 'Africa/Bissau',
                        ),
                    1 =>
                        array (
                            'text' => 'Blantyre',
                            'callback_data' => 'Africa/Blantyre',
                        ),
                    2 =>
                        array (
                            'text' => 'Brazzaville',
                            'callback_data' => 'Africa/Brazzaville',
                        ),
                ),
            4 =>
                array (
                    0 =>
                        array (
                            'text' => 'Bujumbura',
                            'callback_data' => 'Africa/Bujumbura',
                        ),
                    1 =>
                        array (
                            'text' => 'Cairo',
                            'callback_data' => 'Africa/Cairo',
                        ),
                    2 =>
                        array (
                            'text' => 'Casablanca',
                            'callback_data' => 'Africa/Casablanca',
                        ),
                ),
            5 =>
                array (
                    0 =>
                        array (
                            'text' => 'Ceuta',
                            'callback_data' => 'Africa/Ceuta',
                        ),
                    1 =>
                        array (
                            'text' => 'Conakry',
                            'callback_data' => 'Africa/Conakry',
                        ),
                    2 =>
                        array (
                            'text' => 'Dakar',
                            'callback_data' => 'Africa/Dakar',
                        ),
                ),
            6 =>
                array (
                    0 =>
                        array (
                            'text' => 'Dar_es_Salaam',
                            'callback_data' => 'Africa/Dar_es_Salaam',
                        ),
                    1 =>
                        array (
                            'text' => 'Djibouti',
                            'callback_data' => 'Africa/Djibouti',
                        ),
                    2 =>
                        array (
                            'text' => 'Douala',
                            'callback_data' => 'Africa/Douala',
                        ),
                ),
            7 =>
                array (
                    0 =>
                        array (
                            'text' => 'El_Aaiun',
                            'callback_data' => 'Africa/El_Aaiun',
                        ),
                    1 =>
                        array (
                            'text' => 'Freetown',
                            'callback_data' => 'Africa/Freetown',
                        ),
                    2 =>
                        array (
                            'text' => 'Gaborone',
                            'callback_data' => 'Africa/Gaborone',
                        ),
                ),
            8 =>
                array (
                    0 =>
                        array (
                            'text' => 'Harare',
                            'callback_data' => 'Africa/Harare',
                        ),
                    1 =>
                        array (
                            'text' => 'Johannesburg',
                            'callback_data' => 'Africa/Johannesburg',
                        ),
                    2 =>
                        array (
                            'text' => 'Juba',
                            'callback_data' => 'Africa/Juba',
                        ),
                ),
            9 =>
                array (
                    0 =>
                        array (
                            'text' => 'Kampala',
                            'callback_data' => 'Africa/Kampala',
                        ),
                    1 =>
                        array (
                            'text' => 'Khartoum',
                            'callback_data' => 'Africa/Khartoum',
                        ),
                    2 =>
                        array (
                            'text' => 'Kigali',
                            'callback_data' => 'Africa/Kigali',
                        ),
                ),
            10 =>
                array (
                    0 =>
                        array (
                            'text' => 'Kinshasa',
                            'callback_data' => 'Africa/Kinshasa',
                        ),
                    1 =>
                        array (
                            'text' => 'Lagos',
                            'callback_data' => 'Africa/Lagos',
                        ),
                    2 =>
                        array (
                            'text' => 'Libreville',
                            'callback_data' => 'Africa/Libreville',
                        ),
                ),
            11 =>
                array (
                    0 =>
                        array (
                            'text' => 'Lome',
                            'callback_data' => 'Africa/Lome',
                        ),
                    1 =>
                        array (
                            'text' => 'Luanda',
                            'callback_data' => 'Africa/Luanda',
                        ),
                    2 =>
                        array (
                            'text' => 'Lubumbashi',
                            'callback_data' => 'Africa/Lubumbashi',
                        ),
                ),
            12 =>
                array (
                    0 =>
                        array (
                            'text' => 'Lusaka',
                            'callback_data' => 'Africa/Lusaka',
                        ),
                    1 =>
                        array (
                            'text' => 'Malabo',
                            'callback_data' => 'Africa/Malabo',
                        ),
                    2 =>
                        array (
                            'text' => 'Maputo',
                            'callback_data' => 'Africa/Maputo',
                        ),
                ),
            13 =>
                array (
                    0 =>
                        array (
                            'text' => 'Maseru',
                            'callback_data' => 'Africa/Maseru',
                        ),
                    1 =>
                        array (
                            'text' => 'Mbabane',
                            'callback_data' => 'Africa/Mbabane',
                        ),
                    2 =>
                        array (
                            'text' => 'Mogadishu',
                            'callback_data' => 'Africa/Mogadishu',
                        ),
                ),
            14 =>
                array (
                    0 =>
                        array (
                            'text' => 'Monrovia',
                            'callback_data' => 'Africa/Monrovia',
                        ),
                    1 =>
                        array (
                            'text' => 'Nairobi',
                            'callback_data' => 'Africa/Nairobi',
                        ),
                    2 =>
                        array (
                            'text' => 'Ndjamena',
                            'callback_data' => 'Africa/Ndjamena',
                        ),
                ),
            15 =>
                array (
                    0 =>
                        array (
                            'text' => 'Niamey',
                            'callback_data' => 'Africa/Niamey',
                        ),
                    1 =>
                        array (
                            'text' => 'Nouakchott',
                            'callback_data' => 'Africa/Nouakchott',
                        ),
                    2 =>
                        array (
                            'text' => 'Ouagadougou',
                            'callback_data' => 'Africa/Ouagadougou',
                        ),
                ),
            16 =>
                array (
                    0 =>
                        array (
                            'text' => 'Porto-Novo',
                            'callback_data' => 'Africa/Porto-Novo',
                        ),
                    1 =>
                        array (
                            'text' => 'Sao_Tome',
                            'callback_data' => 'Africa/Sao_Tome',
                        ),
                    2 =>
                        array (
                            'text' => 'Timbuktu',
                            'callback_data' => 'Africa/Timbuktu',
                        ),
                ),
            17 =>
                array (
                    0 =>
                        array (
                            'text' => 'Tripoli',
                            'callback_data' => 'Africa/Tripoli',
                        ),
                    1 =>
                        array (
                            'text' => 'Tunis',
                            'callback_data' => 'Africa/Tunis',
                        ),
                    2 =>
                        array (
                            'text' => 'Windhoek',
                            'callback_data' => 'Africa/Windhoek',
                        ),
                ),
        ),
    'America' =>
        array (
            0 =>
                array (
                    0 =>
                        array (
                            'text' => 'Adak',
                            'callback_data' => 'America/Adak',
                        ),
                    1 =>
                        array (
                            'text' => 'Anchorage',
                            'callback_data' => 'America/Anchorage',
                        ),
                    2 =>
                        array (
                            'text' => 'Anguilla',
                            'callback_data' => 'America/Anguilla',
                        ),
                ),
            1 =>
                array (
                    0 =>
                        array (
                            'text' => 'Antigua',
                            'callback_data' => 'America/Antigua',
                        ),
                    1 =>
                        array (
                            'text' => 'Araguaina',
                            'callback_data' => 'America/Araguaina',
                        ),
                    2 =>
                        array (
                            'text' => 'Argentina',
                            'callback_data' => 'America/Argentina',
                        ),
                ),
            2 =>
                array (
                    0 =>
                        array (
                            'text' => 'Argentina',
                            'callback_data' => 'America/Argentina',
                        ),
                    1 =>
                        array (
                            'text' => 'Argentina',
                            'callback_data' => 'America/Argentina',
                        ),
                    2 =>
                        array (
                            'text' => 'Argentina',
                            'callback_data' => 'America/Argentina',
                        ),
                ),
            3 =>
                array (
                    0 =>
                        array (
                            'text' => 'Argentina',
                            'callback_data' => 'America/Argentina',
                        ),
                    1 =>
                        array (
                            'text' => 'Argentina',
                            'callback_data' => 'America/Argentina',
                        ),
                    2 =>
                        array (
                            'text' => 'Argentina',
                            'callback_data' => 'America/Argentina',
                        ),
                ),
            4 =>
                array (
                    0 =>
                        array (
                            'text' => 'Argentina',
                            'callback_data' => 'America/Argentina',
                        ),
                    1 =>
                        array (
                            'text' => 'Argentina',
                            'callback_data' => 'America/Argentina',
                        ),
                    2 =>
                        array (
                            'text' => 'Argentina',
                            'callback_data' => 'America/Argentina',
                        ),
                ),
            5 =>
                array (
                    0 =>
                        array (
                            'text' => 'Argentina',
                            'callback_data' => 'America/Argentina',
                        ),
                    1 =>
                        array (
                            'text' => 'Argentina',
                            'callback_data' => 'America/Argentina',
                        ),
                    2 =>
                        array (
                            'text' => 'Argentina',
                            'callback_data' => 'America/Argentina',
                        ),
                ),
            6 =>
                array (
                    0 =>
                        array (
                            'text' => 'Aruba',
                            'callback_data' => 'America/Aruba',
                        ),
                    1 =>
                        array (
                            'text' => 'Asuncion',
                            'callback_data' => 'America/Asuncion',
                        ),
                    2 =>
                        array (
                            'text' => 'Atikokan',
                            'callback_data' => 'America/Atikokan',
                        ),
                ),
            7 =>
                array (
                    0 =>
                        array (
                            'text' => 'Atka',
                            'callback_data' => 'America/Atka',
                        ),
                    1 =>
                        array (
                            'text' => 'Bahia',
                            'callback_data' => 'America/Bahia',
                        ),
                    2 =>
                        array (
                            'text' => 'Bahia_Banderas',
                            'callback_data' => 'America/Bahia_Banderas',
                        ),
                ),
            8 =>
                array (
                    0 =>
                        array (
                            'text' => 'Barbados',
                            'callback_data' => 'America/Barbados',
                        ),
                    1 =>
                        array (
                            'text' => 'Belem',
                            'callback_data' => 'America/Belem',
                        ),
                    2 =>
                        array (
                            'text' => 'Belize',
                            'callback_data' => 'America/Belize',
                        ),
                ),
            9 =>
                array (
                    0 =>
                        array (
                            'text' => 'Blanc-Sablon',
                            'callback_data' => 'America/Blanc-Sablon',
                        ),
                    1 =>
                        array (
                            'text' => 'Boa_Vista',
                            'callback_data' => 'America/Boa_Vista',
                        ),
                    2 =>
                        array (
                            'text' => 'Bogota',
                            'callback_data' => 'America/Bogota',
                        ),
                ),
            10 =>
                array (
                    0 =>
                        array (
                            'text' => 'Boise',
                            'callback_data' => 'America/Boise',
                        ),
                    1 =>
                        array (
                            'text' => 'Buenos_Aires',
                            'callback_data' => 'America/Buenos_Aires',
                        ),
                    2 =>
                        array (
                            'text' => 'Cambridge_Bay',
                            'callback_data' => 'America/Cambridge_Bay',
                        ),
                ),
            11 =>
                array (
                    0 =>
                        array (
                            'text' => 'Campo_Grande',
                            'callback_data' => 'America/Campo_Grande',
                        ),
                    1 =>
                        array (
                            'text' => 'Cancun',
                            'callback_data' => 'America/Cancun',
                        ),
                    2 =>
                        array (
                            'text' => 'Caracas',
                            'callback_data' => 'America/Caracas',
                        ),
                ),
            12 =>
                array (
                    0 =>
                        array (
                            'text' => 'Catamarca',
                            'callback_data' => 'America/Catamarca',
                        ),
                    1 =>
                        array (
                            'text' => 'Cayenne',
                            'callback_data' => 'America/Cayenne',
                        ),
                    2 =>
                        array (
                            'text' => 'Cayman',
                            'callback_data' => 'America/Cayman',
                        ),
                ),
            13 =>
                array (
                    0 =>
                        array (
                            'text' => 'Chicago',
                            'callback_data' => 'America/Chicago',
                        ),
                    1 =>
                        array (
                            'text' => 'Chihuahua',
                            'callback_data' => 'America/Chihuahua',
                        ),
                    2 =>
                        array (
                            'text' => 'Coral_Harbour',
                            'callback_data' => 'America/Coral_Harbour',
                        ),
                ),
            14 =>
                array (
                    0 =>
                        array (
                            'text' => 'Cordoba',
                            'callback_data' => 'America/Cordoba',
                        ),
                    1 =>
                        array (
                            'text' => 'Costa_Rica',
                            'callback_data' => 'America/Costa_Rica',
                        ),
                    2 =>
                        array (
                            'text' => 'Creston',
                            'callback_data' => 'America/Creston',
                        ),
                ),
            15 =>
                array (
                    0 =>
                        array (
                            'text' => 'Cuiaba',
                            'callback_data' => 'America/Cuiaba',
                        ),
                    1 =>
                        array (
                            'text' => 'Curacao',
                            'callback_data' => 'America/Curacao',
                        ),
                    2 =>
                        array (
                            'text' => 'Danmarkshavn',
                            'callback_data' => 'America/Danmarkshavn',
                        ),
                ),
            16 =>
                array (
                    0 =>
                        array (
                            'text' => 'Dawson',
                            'callback_data' => 'America/Dawson',
                        ),
                    1 =>
                        array (
                            'text' => 'Dawson_Creek',
                            'callback_data' => 'America/Dawson_Creek',
                        ),
                    2 =>
                        array (
                            'text' => 'Denver',
                            'callback_data' => 'America/Denver',
                        ),
                ),
            17 =>
                array (
                    0 =>
                        array (
                            'text' => 'Detroit',
                            'callback_data' => 'America/Detroit',
                        ),
                    1 =>
                        array (
                            'text' => 'Dominica',
                            'callback_data' => 'America/Dominica',
                        ),
                    2 =>
                        array (
                            'text' => 'Edmonton',
                            'callback_data' => 'America/Edmonton',
                        ),
                ),
            18 =>
                array (
                    0 =>
                        array (
                            'text' => 'Eirunepe',
                            'callback_data' => 'America/Eirunepe',
                        ),
                    1 =>
                        array (
                            'text' => 'El_Salvador',
                            'callback_data' => 'America/El_Salvador',
                        ),
                    2 =>
                        array (
                            'text' => 'Ensenada',
                            'callback_data' => 'America/Ensenada',
                        ),
                ),
            19 =>
                array (
                    0 =>
                        array (
                            'text' => 'Fort_Nelson',
                            'callback_data' => 'America/Fort_Nelson',
                        ),
                    1 =>
                        array (
                            'text' => 'Fort_Wayne',
                            'callback_data' => 'America/Fort_Wayne',
                        ),
                    2 =>
                        array (
                            'text' => 'Fortaleza',
                            'callback_data' => 'America/Fortaleza',
                        ),
                ),
            20 =>
                array (
                    0 =>
                        array (
                            'text' => 'Glace_Bay',
                            'callback_data' => 'America/Glace_Bay',
                        ),
                    1 =>
                        array (
                            'text' => 'Godthab',
                            'callback_data' => 'America/Godthab',
                        ),
                    2 =>
                        array (
                            'text' => 'Goose_Bay',
                            'callback_data' => 'America/Goose_Bay',
                        ),
                ),
            21 =>
                array (
                    0 =>
                        array (
                            'text' => 'Grand_Turk',
                            'callback_data' => 'America/Grand_Turk',
                        ),
                    1 =>
                        array (
                            'text' => 'Grenada',
                            'callback_data' => 'America/Grenada',
                        ),
                    2 =>
                        array (
                            'text' => 'Guadeloupe',
                            'callback_data' => 'America/Guadeloupe',
                        ),
                ),
            22 =>
                array (
                    0 =>
                        array (
                            'text' => 'Guatemala',
                            'callback_data' => 'America/Guatemala',
                        ),
                    1 =>
                        array (
                            'text' => 'Guayaquil',
                            'callback_data' => 'America/Guayaquil',
                        ),
                    2 =>
                        array (
                            'text' => 'Guyana',
                            'callback_data' => 'America/Guyana',
                        ),
                ),
            23 =>
                array (
                    0 =>
                        array (
                            'text' => 'Halifax',
                            'callback_data' => 'America/Halifax',
                        ),
                    1 =>
                        array (
                            'text' => 'Havana',
                            'callback_data' => 'America/Havana',
                        ),
                    2 =>
                        array (
                            'text' => 'Hermosillo',
                            'callback_data' => 'America/Hermosillo',
                        ),
                ),
            24 =>
                array (
                    0 =>
                        array (
                            'text' => 'Indiana',
                            'callback_data' => 'America/Indiana',
                        ),
                    1 =>
                        array (
                            'text' => 'Indiana',
                            'callback_data' => 'America/Indiana',
                        ),
                    2 =>
                        array (
                            'text' => 'Indiana',
                            'callback_data' => 'America/Indiana',
                        ),
                ),
            25 =>
                array (
                    0 =>
                        array (
                            'text' => 'Indiana',
                            'callback_data' => 'America/Indiana',
                        ),
                    1 =>
                        array (
                            'text' => 'Indiana',
                            'callback_data' => 'America/Indiana',
                        ),
                    2 =>
                        array (
                            'text' => 'Indiana',
                            'callback_data' => 'America/Indiana',
                        ),
                ),
            26 =>
                array (
                    0 =>
                        array (
                            'text' => 'Indiana',
                            'callback_data' => 'America/Indiana',
                        ),
                    1 =>
                        array (
                            'text' => 'Indiana',
                            'callback_data' => 'America/Indiana',
                        ),
                    2 =>
                        array (
                            'text' => 'Indianapolis',
                            'callback_data' => 'America/Indianapolis',
                        ),
                ),
            27 =>
                array (
                    0 =>
                        array (
                            'text' => 'Inuvik',
                            'callback_data' => 'America/Inuvik',
                        ),
                    1 =>
                        array (
                            'text' => 'Iqaluit',
                            'callback_data' => 'America/Iqaluit',
                        ),
                    2 =>
                        array (
                            'text' => 'Jamaica',
                            'callback_data' => 'America/Jamaica',
                        ),
                ),
            28 =>
                array (
                    0 =>
                        array (
                            'text' => 'Jujuy',
                            'callback_data' => 'America/Jujuy',
                        ),
                    1 =>
                        array (
                            'text' => 'Juneau',
                            'callback_data' => 'America/Juneau',
                        ),
                    2 =>
                        array (
                            'text' => 'Kentucky',
                            'callback_data' => 'America/Kentucky',
                        ),
                ),
            29 =>
                array (
                    0 =>
                        array (
                            'text' => 'Kentucky',
                            'callback_data' => 'America/Kentucky',
                        ),
                    1 =>
                        array (
                            'text' => 'Knox_IN',
                            'callback_data' => 'America/Knox_IN',
                        ),
                    2 =>
                        array (
                            'text' => 'Kralendijk',
                            'callback_data' => 'America/Kralendijk',
                        ),
                ),
            30 =>
                array (
                    0 =>
                        array (
                            'text' => 'La_Paz',
                            'callback_data' => 'America/La_Paz',
                        ),
                    1 =>
                        array (
                            'text' => 'Lima',
                            'callback_data' => 'America/Lima',
                        ),
                    2 =>
                        array (
                            'text' => 'Los_Angeles',
                            'callback_data' => 'America/Los_Angeles',
                        ),
                ),
            31 =>
                array (
                    0 =>
                        array (
                            'text' => 'Louisville',
                            'callback_data' => 'America/Louisville',
                        ),
                    1 =>
                        array (
                            'text' => 'Lower_Princes',
                            'callback_data' => 'America/Lower_Princes',
                        ),
                    2 =>
                        array (
                            'text' => 'Maceio',
                            'callback_data' => 'America/Maceio',
                        ),
                ),
            32 =>
                array (
                    0 =>
                        array (
                            'text' => 'Managua',
                            'callback_data' => 'America/Managua',
                        ),
                    1 =>
                        array (
                            'text' => 'Manaus',
                            'callback_data' => 'America/Manaus',
                        ),
                    2 =>
                        array (
                            'text' => 'Marigot',
                            'callback_data' => 'America/Marigot',
                        ),
                ),
            33 =>
                array (
                    0 =>
                        array (
                            'text' => 'Martinique',
                            'callback_data' => 'America/Martinique',
                        ),
                    1 =>
                        array (
                            'text' => 'Matamoros',
                            'callback_data' => 'America/Matamoros',
                        ),
                    2 =>
                        array (
                            'text' => 'Mazatlan',
                            'callback_data' => 'America/Mazatlan',
                        ),
                ),
            34 =>
                array (
                    0 =>
                        array (
                            'text' => 'Mendoza',
                            'callback_data' => 'America/Mendoza',
                        ),
                    1 =>
                        array (
                            'text' => 'Menominee',
                            'callback_data' => 'America/Menominee',
                        ),
                    2 =>
                        array (
                            'text' => 'Merida',
                            'callback_data' => 'America/Merida',
                        ),
                ),
            35 =>
                array (
                    0 =>
                        array (
                            'text' => 'Metlakatla',
                            'callback_data' => 'America/Metlakatla',
                        ),
                    1 =>
                        array (
                            'text' => 'Mexico_City',
                            'callback_data' => 'America/Mexico_City',
                        ),
                    2 =>
                        array (
                            'text' => 'Miquelon',
                            'callback_data' => 'America/Miquelon',
                        ),
                ),
            36 =>
                array (
                    0 =>
                        array (
                            'text' => 'Moncton',
                            'callback_data' => 'America/Moncton',
                        ),
                    1 =>
                        array (
                            'text' => 'Monterrey',
                            'callback_data' => 'America/Monterrey',
                        ),
                    2 =>
                        array (
                            'text' => 'Montevideo',
                            'callback_data' => 'America/Montevideo',
                        ),
                ),
            37 =>
                array (
                    0 =>
                        array (
                            'text' => 'Montreal',
                            'callback_data' => 'America/Montreal',
                        ),
                    1 =>
                        array (
                            'text' => 'Montserrat',
                            'callback_data' => 'America/Montserrat',
                        ),
                    2 =>
                        array (
                            'text' => 'Nassau',
                            'callback_data' => 'America/Nassau',
                        ),
                ),
            38 =>
                array (
                    0 =>
                        array (
                            'text' => 'New_York',
                            'callback_data' => 'America/New_York',
                        ),
                    1 =>
                        array (
                            'text' => 'Nipigon',
                            'callback_data' => 'America/Nipigon',
                        ),
                    2 =>
                        array (
                            'text' => 'Nome',
                            'callback_data' => 'America/Nome',
                        ),
                ),
            39 =>
                array (
                    0 =>
                        array (
                            'text' => 'Noronha',
                            'callback_data' => 'America/Noronha',
                        ),
                    1 =>
                        array (
                            'text' => 'North_Dakota',
                            'callback_data' => 'America/North_Dakota',
                        ),
                    2 =>
                        array (
                            'text' => 'North_Dakota',
                            'callback_data' => 'America/North_Dakota',
                        ),
                ),
            40 =>
                array (
                    0 =>
                        array (
                            'text' => 'North_Dakota',
                            'callback_data' => 'America/North_Dakota',
                        ),
                    1 =>
                        array (
                            'text' => 'Nuuk',
                            'callback_data' => 'America/Nuuk',
                        ),
                    2 =>
                        array (
                            'text' => 'Ojinaga',
                            'callback_data' => 'America/Ojinaga',
                        ),
                ),
            41 =>
                array (
                    0 =>
                        array (
                            'text' => 'Panama',
                            'callback_data' => 'America/Panama',
                        ),
                    1 =>
                        array (
                            'text' => 'Pangnirtung',
                            'callback_data' => 'America/Pangnirtung',
                        ),
                    2 =>
                        array (
                            'text' => 'Paramaribo',
                            'callback_data' => 'America/Paramaribo',
                        ),
                ),
            42 =>
                array (
                    0 =>
                        array (
                            'text' => 'Phoenix',
                            'callback_data' => 'America/Phoenix',
                        ),
                    1 =>
                        array (
                            'text' => 'Port_of_Spain',
                            'callback_data' => 'America/Port_of_Spain',
                        ),
                    2 =>
                        array (
                            'text' => 'Port-au-Prince',
                            'callback_data' => 'America/Port-au-Prince',
                        ),
                ),
            43 =>
                array (
                    0 =>
                        array (
                            'text' => 'Porto_Acre',
                            'callback_data' => 'America/Porto_Acre',
                        ),
                    1 =>
                        array (
                            'text' => 'Porto_Velho',
                            'callback_data' => 'America/Porto_Velho',
                        ),
                    2 =>
                        array (
                            'text' => 'Puerto_Rico',
                            'callback_data' => 'America/Puerto_Rico',
                        ),
                ),
            44 =>
                array (
                    0 =>
                        array (
                            'text' => 'Punta_Arenas',
                            'callback_data' => 'America/Punta_Arenas',
                        ),
                    1 =>
                        array (
                            'text' => 'Rainy_River',
                            'callback_data' => 'America/Rainy_River',
                        ),
                    2 =>
                        array (
                            'text' => 'Rankin_Inlet',
                            'callback_data' => 'America/Rankin_Inlet',
                        ),
                ),
            45 =>
                array (
                    0 =>
                        array (
                            'text' => 'Recife',
                            'callback_data' => 'America/Recife',
                        ),
                    1 =>
                        array (
                            'text' => 'Regina',
                            'callback_data' => 'America/Regina',
                        ),
                    2 =>
                        array (
                            'text' => 'Resolute',
                            'callback_data' => 'America/Resolute',
                        ),
                ),
            46 =>
                array (
                    0 =>
                        array (
                            'text' => 'Rio_Branco',
                            'callback_data' => 'America/Rio_Branco',
                        ),
                    1 =>
                        array (
                            'text' => 'Rosario',
                            'callback_data' => 'America/Rosario',
                        ),
                    2 =>
                        array (
                            'text' => 'Santa_Isabel',
                            'callback_data' => 'America/Santa_Isabel',
                        ),
                ),
            47 =>
                array (
                    0 =>
                        array (
                            'text' => 'Santarem',
                            'callback_data' => 'America/Santarem',
                        ),
                    1 =>
                        array (
                            'text' => 'Santiago',
                            'callback_data' => 'America/Santiago',
                        ),
                    2 =>
                        array (
                            'text' => 'Santo_Domingo',
                            'callback_data' => 'America/Santo_Domingo',
                        ),
                ),
            48 =>
                array (
                    0 =>
                        array (
                            'text' => 'Sao_Paulo',
                            'callback_data' => 'America/Sao_Paulo',
                        ),
                    1 =>
                        array (
                            'text' => 'Scoresbysund',
                            'callback_data' => 'America/Scoresbysund',
                        ),
                    2 =>
                        array (
                            'text' => 'Shiprock',
                            'callback_data' => 'America/Shiprock',
                        ),
                ),
            49 =>
                array (
                    0 =>
                        array (
                            'text' => 'Sitka',
                            'callback_data' => 'America/Sitka',
                        ),
                    1 =>
                        array (
                            'text' => 'St_Barthelemy',
                            'callback_data' => 'America/St_Barthelemy',
                        ),
                    2 =>
                        array (
                            'text' => 'St_Johns',
                            'callback_data' => 'America/St_Johns',
                        ),
                ),
            50 =>
                array (
                    0 =>
                        array (
                            'text' => 'St_Kitts',
                            'callback_data' => 'America/St_Kitts',
                        ),
                    1 =>
                        array (
                            'text' => 'St_Lucia',
                            'callback_data' => 'America/St_Lucia',
                        ),
                    2 =>
                        array (
                            'text' => 'St_Thomas',
                            'callback_data' => 'America/St_Thomas',
                        ),
                ),
            51 =>
                array (
                    0 =>
                        array (
                            'text' => 'St_Vincent',
                            'callback_data' => 'America/St_Vincent',
                        ),
                    1 =>
                        array (
                            'text' => 'Swift_Current',
                            'callback_data' => 'America/Swift_Current',
                        ),
                    2 =>
                        array (
                            'text' => 'Tegucigalpa',
                            'callback_data' => 'America/Tegucigalpa',
                        ),
                ),
            52 =>
                array (
                    0 =>
                        array (
                            'text' => 'Thule',
                            'callback_data' => 'America/Thule',
                        ),
                    1 =>
                        array (
                            'text' => 'Thunder_Bay',
                            'callback_data' => 'America/Thunder_Bay',
                        ),
                    2 =>
                        array (
                            'text' => 'Tijuana',
                            'callback_data' => 'America/Tijuana',
                        ),
                ),
            53 =>
                array (
                    0 =>
                        array (
                            'text' => 'Toronto',
                            'callback_data' => 'America/Toronto',
                        ),
                    1 =>
                        array (
                            'text' => 'Tortola',
                            'callback_data' => 'America/Tortola',
                        ),
                    2 =>
                        array (
                            'text' => 'Vancouver',
                            'callback_data' => 'America/Vancouver',
                        ),
                ),
            54 =>
                array (
                    0 =>
                        array (
                            'text' => 'Virgin',
                            'callback_data' => 'America/Virgin',
                        ),
                    1 =>
                        array (
                            'text' => 'Whitehorse',
                            'callback_data' => 'America/Whitehorse',
                        ),
                    2 =>
                        array (
                            'text' => 'Winnipeg',
                            'callback_data' => 'America/Winnipeg',
                        ),
                ),
            55=>array(
                0 =>
                    array (
                        'text' => 'Yakutat',
                        'callback_data' => 'America/Yakutat',
                    ),
                1 =>
                    array (
                        'text' => 'Yellowknife',
                        'callback_data' => 'America/Yellowknife',
                    ),
            )
        ),
    'Antarctica' =>
        array (
            0 =>
                array (
                    0 =>
                        array (
                            'text' => 'Casey',
                            'callback_data' => 'Antarctica/Casey',
                        ),
                    1 =>
                        array (
                            'text' => 'Davis',
                            'callback_data' => 'Antarctica/Davis',
                        ),
                    2 =>
                        array (
                            'text' => 'DumontDUrville',
                            'callback_data' => 'Antarctica/DumontDUrville',
                        ),
                ),
            1 =>
                array (

                    0 =>
                        array (
                            'text' => 'Macquarie',
                            'callback_data' => 'Antarctica/Macquarie',
                        ),
                    1 =>
                        array (
                            'text' => 'Mawson',
                            'callback_data' => 'Antarctica/Mawson',
                        ),
                    2 =>
                        array (
                            'text' => 'McMurdo',
                            'callback_data' => 'Antarctica/McMurdo',
                        ),
                ),
            2 =>
                array (
                    0 =>
                        array (
                            'text' => 'Palmer',
                            'callback_data' => 'Antarctica/Palmer',
                        ),
                    1 =>
                        array (
                            'text' => 'Rothera',
                            'callback_data' => 'Antarctica/Rothera',
                        ),
                    2 =>
                        array (
                            'text' => 'South_Pole',
                            'callback_data' => 'Antarctica/South_Pole',
                        ),
                ),
            3 =>
                array (
                    0 =>
                        array (
                            'text' => 'Syowa',
                            'callback_data' => 'Antarctica/Syowa',
                        ),
                    1 =>
                        array (
                            'text' => 'Troll',
                            'callback_data' => 'Antarctica/Troll',
                        ),
                    2 =>
                        array (
                            'text' => 'Vostok',
                            'callback_data' => 'Antarctica/Vostok',
                        ),
                ),
        ),
    'Arctic' =>
        array (
            0 =>
                array (
                    0 =>
                        array (
                            'text' => 'Longyearbyen',
                            'callback_data' => 'Arctic/Longyearbyen',
                        ),
                ),
        ),
    'Asia' =>
        array (
            0 =>
                array (
                    0 =>
                        array (
                            'text' => 'Aden',
                            'callback_data' => 'Asia/Aden',
                        ),
                    1 =>
                        array (
                            'text' => 'Almaty',
                            'callback_data' => 'Asia/Almaty',
                        ),
                    2 =>
                        array (
                            'text' => 'Amman',
                            'callback_data' => 'Asia/Amman',
                        ),
                ),
            1 =>
                array (
                    0 =>
                        array (
                            'text' => 'Anadyr',
                            'callback_data' => 'Asia/Anadyr',
                        ),
                    1 =>
                        array (
                            'text' => 'Aqtau',
                            'callback_data' => 'Asia/Aqtau',
                        ),
                    2 =>
                        array (
                            'text' => 'Aqtobe',
                            'callback_data' => 'Asia/Aqtobe',
                        ),
                ),
            2 =>
                array (
                    0 =>
                        array (
                            'text' => 'Ashgabat',
                            'callback_data' => 'Asia/Ashgabat',
                        ),
                    1 =>
                        array (
                            'text' => 'Ashkhabad',
                            'callback_data' => 'Asia/Ashkhabad',
                        ),
                    2 =>
                        array (
                            'text' => 'Atyrau',
                            'callback_data' => 'Asia/Atyrau',
                        ),
                ),
            3 =>
                array (
                    0 =>
                        array (
                            'text' => 'Baghdad',
                            'callback_data' => 'Asia/Baghdad',
                        ),
                    1 =>
                        array (
                            'text' => 'Bahrain',
                            'callback_data' => 'Asia/Bahrain',
                        ),
                    2 =>
                        array (
                            'text' => 'Baku',
                            'callback_data' => 'Asia/Baku',
                        ),
                ),
            4 =>
                array (
                    0 =>
                        array (
                            'text' => 'Bangkok',
                            'callback_data' => 'Asia/Bangkok',
                        ),
                    1 =>
                        array (
                            'text' => 'Barnaul',
                            'callback_data' => 'Asia/Barnaul',
                        ),
                    2 =>
                        array (
                            'text' => 'Beirut',
                            'callback_data' => 'Asia/Beirut',
                        ),
                ),
            5 =>
                array (
                    0 =>
                        array (
                            'text' => 'Bishkek',
                            'callback_data' => 'Asia/Bishkek',
                        ),
                    1 =>
                        array (
                            'text' => 'Brunei',
                            'callback_data' => 'Asia/Brunei',
                        ),
                    2 =>
                        array (
                            'text' => 'Calcutta',
                            'callback_data' => 'Asia/Calcutta',
                        ),
                ),
            6 =>
                array (
                    0 =>
                        array (
                            'text' => 'Chita',
                            'callback_data' => 'Asia/Chita',
                        ),
                    1 =>
                        array (
                            'text' => 'Choibalsan',
                            'callback_data' => 'Asia/Choibalsan',
                        ),
                    2 =>
                        array (
                            'text' => 'Chongqing',
                            'callback_data' => 'Asia/Chongqing',
                        ),
                ),
            7 =>
                array (
                    0 =>
                        array (
                            'text' => 'Chungking',
                            'callback_data' => 'Asia/Chungking',
                        ),
                    1 =>
                        array (
                            'text' => 'Colombo',
                            'callback_data' => 'Asia/Colombo',
                        ),
                    2 =>
                        array (
                            'text' => 'Dacca',
                            'callback_data' => 'Asia/Dacca',
                        ),
                ),
            8 =>
                array (
                    0 =>
                        array (
                            'text' => 'Damascus',
                            'callback_data' => 'Asia/Damascus',
                        ),
                    1 =>
                        array (
                            'text' => 'Dhaka',
                            'callback_data' => 'Asia/Dhaka',
                        ),
                    2 =>
                        array (
                            'text' => 'Dili',
                            'callback_data' => 'Asia/Dili',
                        ),
                ),
            9 =>
                array (
                    0 =>
                        array (
                            'text' => 'Dubai',
                            'callback_data' => 'Asia/Dubai',
                        ),
                    1 =>
                        array (
                            'text' => 'Dushanbe',
                            'callback_data' => 'Asia/Dushanbe',
                        ),
                    2 =>
                        array (
                            'text' => 'Famagusta',
                            'callback_data' => 'Asia/Famagusta',
                        ),
                ),
            10 =>
                array (
                    0 =>
                        array (
                            'text' => 'Gaza',
                            'callback_data' => 'Asia/Gaza',
                        ),
                    1 =>
                        array (
                            'text' => 'Harbin',
                            'callback_data' => 'Asia/Harbin',
                        ),
                    2 =>
                        array (
                            'text' => 'Hebron',
                            'callback_data' => 'Asia/Hebron',
                        ),
                ),
            11 =>
                array (
                    0 =>
                        array (
                            'text' => 'Ho_Chi_Minh',
                            'callback_data' => 'Asia/Ho_Chi_Minh',
                        ),
                    1 =>
                        array (
                            'text' => 'Hong_Kong',
                            'callback_data' => 'Asia/Hong_Kong',
                        ),
                    2 =>
                        array (
                            'text' => 'Hovd',
                            'callback_data' => 'Asia/Hovd',
                        ),
                ),
            12 =>
                array (
                    0 =>
                        array (
                            'text' => 'Irkutsk',
                            'callback_data' => 'Asia/Irkutsk',
                        ),
                    1 =>
                        array (
                            'text' => 'Istanbul',
                            'callback_data' => 'Asia/Istanbul',
                        ),
                    2 =>
                        array (
                            'text' => 'Jakarta',
                            'callback_data' => 'Asia/Jakarta',
                        ),
                ),
            13 =>
                array (
                    0 =>
                        array (
                            'text' => 'Jayapura',
                            'callback_data' => 'Asia/Jayapura',
                        ),
                    1 =>
                        array (
                            'text' => 'Jerusalem',
                            'callback_data' => 'Asia/Jerusalem',
                        ),
                    2 =>
                        array (
                            'text' => 'Kabul',
                            'callback_data' => 'Asia/Kabul',
                        ),
                ),
            14 =>
                array (
                    0 =>
                        array (
                            'text' => 'Kamchatka',
                            'callback_data' => 'Asia/Kamchatka',
                        ),
                    1 =>
                        array (
                            'text' => 'Karachi',
                            'callback_data' => 'Asia/Karachi',
                        ),
                    2 =>
                        array (
                            'text' => 'Kashgar',
                            'callback_data' => 'Asia/Kashgar',
                        ),
                ),
            15 =>
                array (
                    0 =>
                        array (
                            'text' => 'Kathmandu',
                            'callback_data' => 'Asia/Kathmandu',
                        ),
                    1 =>
                        array (
                            'text' => 'Katmandu',
                            'callback_data' => 'Asia/Katmandu',
                        ),
                    2 =>
                        array (
                            'text' => 'Khandyga',
                            'callback_data' => 'Asia/Khandyga',
                        ),
                ),
            16 =>
                array (
                    0 =>
                        array (
                            'text' => 'Kolkata',
                            'callback_data' => 'Asia/Kolkata',
                        ),
                    1 =>
                        array (
                            'text' => 'Krasnoyarsk',
                            'callback_data' => 'Asia/Krasnoyarsk',
                        ),
                    2 =>
                        array (
                            'text' => 'Kuala_Lumpur',
                            'callback_data' => 'Asia/Kuala_Lumpur',
                        ),
                ),
            17 =>
                array (
                    0 =>
                        array (
                            'text' => 'Kuching',
                            'callback_data' => 'Asia/Kuching',
                        ),
                    1 =>
                        array (
                            'text' => 'Kuwait',
                            'callback_data' => 'Asia/Kuwait',
                        ),
                    2 =>
                        array (
                            'text' => 'Macao',
                            'callback_data' => 'Asia/Macao',
                        ),
                ),
            18 =>
                array (
                    0 =>
                        array (
                            'text' => 'Macau',
                            'callback_data' => 'Asia/Macau',
                        ),
                    1 =>
                        array (
                            'text' => 'Magadan',
                            'callback_data' => 'Asia/Magadan',
                        ),
                    2 =>
                        array (
                            'text' => 'Makassar',
                            'callback_data' => 'Asia/Makassar',
                        ),
                ),
            19 =>
                array (
                    0 =>
                        array (
                            'text' => 'Manila',
                            'callback_data' => 'Asia/Manila',
                        ),
                    1 =>
                        array (
                            'text' => 'Muscat',
                            'callback_data' => 'Asia/Muscat',
                        ),
                    2 =>
                        array (
                            'text' => 'Nicosia',
                            'callback_data' => 'Asia/Nicosia',
                        ),
                ),
            20 =>
                array (
                    0 =>
                        array (
                            'text' => 'Novokuznetsk',
                            'callback_data' => 'Asia/Novokuznetsk',
                        ),
                    1 =>
                        array (
                            'text' => 'Novosibirsk',
                            'callback_data' => 'Asia/Novosibirsk',
                        ),
                    2 =>
                        array (
                            'text' => 'Omsk',
                            'callback_data' => 'Asia/Omsk',
                        ),
                ),
            21 =>
                array (
                    0 =>
                        array (
                            'text' => 'Oral',
                            'callback_data' => 'Asia/Oral',
                        ),
                    1 =>
                        array (
                            'text' => 'Phnom_Penh',
                            'callback_data' => 'Asia/Phnom_Penh',
                        ),
                    2 =>
                        array (
                            'text' => 'Pontianak',
                            'callback_data' => 'Asia/Pontianak',
                        ),
                ),
            22 =>
                array (
                    0 =>
                        array (
                            'text' => 'Pyongyang',
                            'callback_data' => 'Asia/Pyongyang',
                        ),
                    1 =>
                        array (
                            'text' => 'Qatar',
                            'callback_data' => 'Asia/Qatar',
                        ),
                    2 =>
                        array (
                            'text' => 'Qostanay',
                            'callback_data' => 'Asia/Qostanay',
                        ),
                ),
            23 =>
                array (
                    0 =>
                        array (
                            'text' => 'Qyzylorda',
                            'callback_data' => 'Asia/Qyzylorda',
                        ),
                    1 =>
                        array (
                            'text' => 'Rangoon',
                            'callback_data' => 'Asia/Rangoon',
                        ),
                    2 =>
                        array (
                            'text' => 'Riyadh',
                            'callback_data' => 'Asia/Riyadh',
                        ),
                ),
            24 =>
                array (
                    0 =>
                        array (
                            'text' => 'Saigon',
                            'callback_data' => 'Asia/Saigon',
                        ),
                    1 =>
                        array (
                            'text' => 'Sakhalin',
                            'callback_data' => 'Asia/Sakhalin',
                        ),
                    2 =>
                        array (
                            'text' => 'Samarkand',
                            'callback_data' => 'Asia/Samarkand',
                        ),
                ),
            25 =>
                array (
                    0 =>
                        array (
                            'text' => 'Seoul',
                            'callback_data' => 'Asia/Seoul',
                        ),
                    1 =>
                        array (
                            'text' => 'Shanghai',
                            'callback_data' => 'Asia/Shanghai',
                        ),
                    2 =>
                        array (
                            'text' => 'Singapore',
                            'callback_data' => 'Asia/Singapore',
                        ),
                ),
            26 =>
                array (
                    0 =>
                        array (
                            'text' => 'Srednekolymsk',
                            'callback_data' => 'Asia/Srednekolymsk',
                        ),
                    1 =>
                        array (
                            'text' => 'Taipei',
                            'callback_data' => 'Asia/Taipei',
                        ),
                    2 =>
                        array (
                            'text' => 'Tashkent',
                            'callback_data' => 'Asia/Tashkent',
                        ),
                ),
            27 =>
                array (
                    0 =>
                        array (
                            'text' => 'Tbilisi',
                            'callback_data' => 'Asia/Tbilisi',
                        ),
                    1 =>
                        array (
                            'text' => 'Tehran',
                            'callback_data' => 'Asia/Tehran',
                        ),
                    2 =>
                        array (
                            'text' => 'Tel_Aviv',
                            'callback_data' => 'Asia/Tel_Aviv',
                        ),
                ),
            28 =>
                array (
                    0 =>
                        array (
                            'text' => 'Thimbu',
                            'callback_data' => 'Asia/Thimbu',
                        ),
                    1 =>
                        array (
                            'text' => 'Thimphu',
                            'callback_data' => 'Asia/Thimphu',
                        ),
                    2 =>
                        array (
                            'text' => 'Tokyo',
                            'callback_data' => 'Asia/Tokyo',
                        ),
                ),
            29 =>
                array (
                    0 =>
                        array (
                            'text' => 'Tomsk',
                            'callback_data' => 'Asia/Tomsk',
                        ),
                    1 =>
                        array (
                            'text' => 'Ujung_Pandang',
                            'callback_data' => 'Asia/Ujung_Pandang',
                        ),
                    2 =>
                        array (
                            'text' => 'Ulaanbaatar',
                            'callback_data' => 'Asia/Ulaanbaatar',
                        ),
                ),
            30 =>
                array (
                    0 =>
                        array (
                            'text' => 'Ulan_Bator',
                            'callback_data' => 'Asia/Ulan_Bator',
                        ),
                    1 =>
                        array (
                            'text' => 'Urumqi',
                            'callback_data' => 'Asia/Urumqi',
                        ),
                    2 =>
                        array (
                            'text' => 'Ust-Nera',
                            'callback_data' => 'Asia/Ust-Nera',
                        ),
                ),
            31 =>
                array (
                    0 =>
                        array (
                            'text' => 'Vientiane',
                            'callback_data' => 'Asia/Vientiane',
                        ),
                    1 =>
                        array (
                            'text' => 'Vladivostok',
                            'callback_data' => 'Asia/Vladivostok',
                        ),
                    2 =>
                        array (
                            'text' => 'Yakutsk',
                            'callback_data' => 'Asia/Yakutsk',
                        ),
                ),
            32 =>
                array (
                    0 =>
                        array (
                            'text' => 'Yangon',
                            'callback_data' => 'Asia/Yangon',
                        ),
                    1 =>
                        array (
                            'text' => 'Yekaterinburg',
                            'callback_data' => 'Asia/Yekaterinburg',
                        ),
                    2 =>
                        array (
                            'text' => 'Yerevan',
                            'callback_data' => 'Asia/Yerevan',
                        ),
                ),
        ),
    'Atlantic' =>
        array (
            0 =>
                array (
                    0 =>
                        array (
                            'text' => 'Azores',
                            'callback_data' => 'Atlantic/Azores',
                        ),
                    1 =>
                        array (
                            'text' => 'Bermuda',
                            'callback_data' => 'Atlantic/Bermuda',
                        ),
                    2 =>
                        array (
                            'text' => 'Canary',
                            'callback_data' => 'Atlantic/Canary',
                        ),
                ),
            1 =>
                array (
                    0 =>
                        array (
                            'text' => 'Cape_Verde',
                            'callback_data' => 'Atlantic/Cape_Verde',
                        ),
                    1 =>
                        array (
                            'text' => 'Faeroe',
                            'callback_data' => 'Atlantic/Faeroe',
                        ),
                    2 =>
                        array (
                            'text' => 'Faroe',
                            'callback_data' => 'Atlantic/Faroe',
                        ),
                ),
            2 =>
                array (
                    0 =>
                        array (
                            'text' => 'Jan_Mayen',
                            'callback_data' => 'Atlantic/Jan_Mayen',
                        ),
                    1 =>
                        array (
                            'text' => 'Madeira',
                            'callback_data' => 'Atlantic/Madeira',
                        ),
                    2 =>
                        array (
                            'text' => 'Reykjavik',
                            'callback_data' => 'Atlantic/Reykjavik',
                        ),
                ),
            3 =>
                array (
                    0 =>
                        array (
                            'text' => 'South_Georgia',
                            'callback_data' => 'Atlantic/South_Georgia',
                        ),
                    1 =>
                        array (
                            'text' => 'St_Helena',
                            'callback_data' => 'Atlantic/St_Helena',
                        ),
                    2 =>
                        array (
                            'text' => 'Stanley',
                            'callback_data' => 'Atlantic/Stanley',
                        ),
                ),
        ),
    'Australia' =>
        array (
            0 =>
                array (
                    0 =>
                        array (
                            'text' => 'ACT',
                            'callback_data' => 'Australia/ACT',
                        ),
                    1 =>
                        array (
                            'text' => 'Adelaide',
                            'callback_data' => 'Australia/Adelaide',
                        ),
                    2 =>
                        array (
                            'text' => 'Brisbane',
                            'callback_data' => 'Australia/Brisbane',
                        ),
                ),
            1 =>
                array (
                    0 =>
                        array (
                            'text' => 'Broken_Hill',
                            'callback_data' => 'Australia/Broken_Hill',
                        ),
                    1 =>
                        array (
                            'text' => 'Canberra',
                            'callback_data' => 'Australia/Canberra',
                        ),
                    2 =>
                        array (
                            'text' => 'Currie',
                            'callback_data' => 'Australia/Currie',
                        ),
                ),
            2 =>
                array (
                    0 =>
                        array (
                            'text' => 'Darwin',
                            'callback_data' => 'Australia/Darwin',
                        ),
                    1 =>
                        array (
                            'text' => 'Eucla',
                            'callback_data' => 'Australia/Eucla',
                        ),
                    2 =>
                        array (
                            'text' => 'Hobart',
                            'callback_data' => 'Australia/Hobart',
                        ),
                ),
            3 =>
                array (
                    0 =>
                        array (
                            'text' => 'LHI',
                            'callback_data' => 'Australia/LHI',
                        ),
                    1 =>
                        array (
                            'text' => 'Lindeman',
                            'callback_data' => 'Australia/Lindeman',
                        ),
                    2 =>
                        array (
                            'text' => 'Lord_Howe',
                            'callback_data' => 'Australia/Lord_Howe',
                        ),
                ),
            4 =>
                array (
                    0 =>
                        array (
                            'text' => 'Melbourne',
                            'callback_data' => 'Australia/Melbourne',
                        ),
                    1 =>
                        array (
                            'text' => 'North',
                            'callback_data' => 'Australia/North',
                        ),
                    2 =>
                        array (
                            'text' => 'NSW',
                            'callback_data' => 'Australia/NSW',
                        ),
                ),
            5 =>
                array (
                    0 =>
                        array (
                            'text' => 'Perth',
                            'callback_data' => 'Australia/Perth',
                        ),
                    1 =>
                        array (
                            'text' => 'Queensland',
                            'callback_data' => 'Australia/Queensland',
                        ),
                    2 =>
                        array (
                            'text' => 'South',
                            'callback_data' => 'Australia/South',
                        ),
                ),
            6 =>
                array (
                    0 =>
                        array (
                            'text' => 'Sydney',
                            'callback_data' => 'Australia/Sydney',
                        ),
                    1 =>
                        array (
                            'text' => 'Tasmania',
                            'callback_data' => 'Australia/Tasmania',
                        ),
                    2 =>
                        array (
                            'text' => 'Victoria',
                            'callback_data' => 'Australia/Victoria',
                        ),
                ),
            7=>array(
                0 =>
                    array (
                        'text' => 'West',
                        'callback_data' => 'Australia/West',
                    ),
                1 =>
                    array (
                        'text' => 'Yancowinna',
                        'callback_data' => 'Australia/Yancowinna',
                    ),
            )
        ),
    'Europe' =>
        array (
            0 =>
                array (
                    0 =>
                        array (
                            'text' => 'Amsterdam',
                            'callback_data' => 'Europe/Amsterdam',
                        ),
                    1 =>
                        array (
                            'text' => 'Andorra',
                            'callback_data' => 'Europe/Andorra',
                        ),
                    2 =>
                        array (
                            'text' => 'Astrakhan',
                            'callback_data' => 'Europe/Astrakhan',
                        ),
                ),
            1 =>
                array (
                    0 =>
                        array (
                            'text' => 'Athens',
                            'callback_data' => 'Europe/Athens',
                        ),
                    1 =>
                        array (
                            'text' => 'Belfast',
                            'callback_data' => 'Europe/Belfast',
                        ),
                    2 =>
                        array (
                            'text' => 'Belgrade',
                            'callback_data' => 'Europe/Belgrade',
                        ),
                ),
            2 =>
                array (

                    0 =>
                        array (
                            'text' => 'Berlin',
                            'callback_data' => 'Europe/Berlin',
                        ),
                    1 =>
                        array (
                            'text' => 'Bratislava',
                            'callback_data' => 'Europe/Bratislava',
                        ),
                    2 =>
                        array (
                            'text' => 'Brussels',
                            'callback_data' => 'Europe/Brussels',
                        ),
                ),
            3 =>
                array (

                    0 =>
                        array (
                            'text' => 'Bucharest',
                            'callback_data' => 'Europe/Bucharest',
                        ),
                    1 =>
                        array (
                            'text' => 'Budapest',
                            'callback_data' => 'Europe/Budapest',
                        ),
                    2 =>
                        array (
                            'text' => 'Busingen',
                            'callback_data' => 'Europe/Busingen',
                        ),
                ),
            4 =>
                array (

                    0 =>
                        array (
                            'text' => 'Chisinau',
                            'callback_data' => 'Europe/Chisinau',
                        ),
                    1 =>
                        array (
                            'text' => 'Copenhagen',
                            'callback_data' => 'Europe/Copenhagen',
                        ),
                    2 =>
                        array (
                            'text' => 'Dublin',
                            'callback_data' => 'Europe/Dublin',
                        ),
                ),
            5 =>
                array (

                    0 =>
                        array (
                            'text' => 'Gibraltar',
                            'callback_data' => 'Europe/Gibraltar',
                        ),
                    1 =>
                        array (
                            'text' => 'Guernsey',
                            'callback_data' => 'Europe/Guernsey',
                        ),
                    2 =>
                        array (
                            'text' => 'Helsinki',
                            'callback_data' => 'Europe/Helsinki',
                        ),
                ),
            6 =>
                array (

                    0 =>
                        array (
                            'text' => 'Isle_of_Man',
                            'callback_data' => 'Europe/Isle_of_Man',
                        ),
                    1 =>
                        array (
                            'text' => 'Istanbul',
                            'callback_data' => 'Europe/Istanbul',
                        ),
                    2 =>
                        array (
                            'text' => 'Jersey',
                            'callback_data' => 'Europe/Jersey',
                        ),
                ),
            7 =>
                array (

                    0 =>
                        array (
                            'text' => 'Kaliningrad',
                            'callback_data' => 'Europe/Kaliningrad',
                        ),
                    1 =>
                        array (
                            'text' => 'Kiev',
                            'callback_data' => 'Europe/Kiev',
                        ),
                    2 =>
                        array (
                            'text' => 'Kirov',
                            'callback_data' => 'Europe/Kirov',
                        ),
                ),
            8 =>
                array (

                    0 =>
                        array (
                            'text' => 'Kyiv',
                            'callback_data' => 'Europe/Kyiv',
                        ),
                    1 =>
                        array (
                            'text' => 'Lisbon',
                            'callback_data' => 'Europe/Lisbon',
                        ),
                    2 =>
                        array (
                            'text' => 'Ljubljana',
                            'callback_data' => 'Europe/Ljubljana',
                        ),
                ),
            9 =>
                array (

                    0 =>
                        array (
                            'text' => 'London',
                            'callback_data' => 'Europe/London',
                        ),
                    2 =>
                        array (
                            'text' => 'Luxembourg',
                            'callback_data' => 'Europe/Luxembourg',
                        ),
                    3 =>
                        array (
                            'text' => 'Madrid',
                            'callback_data' => 'Europe/Madrid',
                        ),
                ),
            10 =>
                array (

                    0 =>
                        array (
                            'text' => 'Malta',
                            'callback_data' => 'Europe/Malta',
                        ),
                    1 =>
                        array (
                            'text' => 'Mariehamn',
                            'callback_data' => 'Europe/Mariehamn',
                        ),
                    2 =>
                        array (
                            'text' => 'Minsk',
                            'callback_data' => 'Europe/Minsk',
                        ),
                ),
            11 =>
                array (

                    0 =>
                        array (
                            'text' => 'Monaco',
                            'callback_data' => 'Europe/Monaco',
                        ),
                    1 =>
                        array (
                            'text' => 'Moscow',
                            'callback_data' => 'Europe/Moscow',
                        ),
                    2 =>
                        array (
                            'text' => 'Nicosia',
                            'callback_data' => 'Europe/Nicosia',
                        ),
                ),
            12 =>
                array (

                    0=>
                        array (
                            'text' => 'Oslo',
                            'callback_data' => 'Europe/Oslo',
                        ),
                    1 =>
                        array (
                            'text' => 'Paris',
                            'callback_data' => 'Europe/Paris',
                        ),
                    2 =>
                        array (
                            'text' => 'Podgorica',
                            'callback_data' => 'Europe/Podgorica',
                        ),
                ),
            13 =>
                array (

                    0 =>
                        array (
                            'text' => 'Prague',
                            'callback_data' => 'Europe/Prague',
                        ),
                    1 =>
                        array (
                            'text' => 'Riga',
                            'callback_data' => 'Europe/Riga',
                        ),
                    2 =>
                        array (
                            'text' => 'Rome',
                            'callback_data' => 'Europe/Rome',
                        ),
                ),
            14 =>
                array (

                    0 =>
                        array (
                            'text' => 'Samara',
                            'callback_data' => 'Europe/Samara',
                        ),
                    1 =>
                        array (
                            'text' => 'San_Marino',
                            'callback_data' => 'Europe/San_Marino',
                        ),
                    2 =>
                        array (
                            'text' => 'Sarajevo',
                            'callback_data' => 'Europe/Sarajevo',
                        ),
                ),
            15 =>
                array (
                    0 =>
                        array (
                            'text' => 'Saratov',
                            'callback_data' => 'Europe/Saratov',
                        ),
                    1 =>
                        array (
                            'text' => 'Simferopol',
                            'callback_data' => 'Europe/Simferopol',
                        ),
                    2 =>
                        array (
                            'text' => 'Skopje',
                            'callback_data' => 'Europe/Skopje',
                        ),
                ),
            16 =>
                array (
                    0 =>
                        array (
                            'text' => 'Sofia',
                            'callback_data' => 'Europe/Sofia',
                        ),
                    1 =>
                        array (
                            'text' => 'Stockholm',
                            'callback_data' => 'Europe/Stockholm',
                        ),
                    2 =>
                        array (
                            'text' => 'Tallinn',
                            'callback_data' => 'Europe/Tallinn',
                        ),
                ),
            17 =>
                array (
                    0 =>
                        array (
                            'text' => 'Tirane',
                            'callback_data' => 'Europe/Tirane',
                        ),
                    1 =>
                        array (
                            'text' => 'Tiraspol',
                            'callback_data' => 'Europe/Tiraspol',
                        ),
                    2 =>
                        array (
                            'text' => 'Ulyanovsk',
                            'callback_data' => 'Europe/Ulyanovsk',
                        ),
                ),
            18 =>
                array (

                    0 =>
                        array (
                            'text' => 'Uzhgorod',
                            'callback_data' => 'Europe/Uzhgorod',
                        ),
                    1 =>
                        array (
                            'text' => 'Vaduz',
                            'callback_data' => 'Europe/Vaduz',
                        ),
                    2 =>
                        array (
                            'text' => 'Vatican',
                            'callback_data' => 'Europe/Vatican',
                        ),
                ),
            19 =>
                array (

                    0 =>
                        array (
                            'text' => 'Vienna',
                            'callback_data' => 'Europe/Vienna',
                        ),
                    1 =>
                        array (
                            'text' => 'Vilnius',
                            'callback_data' => 'Europe/Vilnius',
                        ),
                    2 =>
                        array (
                            'text' => 'Volgograd',
                            'callback_data' => 'Europe/Volgograd',
                        ),
                ),
            20 =>
                array (

                    0 =>
                        array (
                            'text' => 'Warsaw',
                            'callback_data' => 'Europe/Warsaw',
                        ),
                    1 =>
                        array (
                            'text' => 'Zagreb',
                            'callback_data' => 'Europe/Zagreb',
                        ),
                    2 =>
                        array (
                            'text' => 'Zaporozhye',
                            'callback_data' => 'Europe/Zaporozhye',
                        ),
                ),
            21 =>
                array (

                    0 =>
                        array (
                            'text' => 'Zurich',
                            'callback_data' => 'Europe/Zurich',
                        ),
                ),
        ),
);




$all_continents = array(
    'Africa'=>array(),
    'America'=>array(),
    'Antarctica'=>array(),
    'Arctic'=>array(),
    'Asia'=>array(),
    'Atlantic'=>array(),
    'Australia'=>array(),
    'Europe'=>array(),
);

$new_one = [];

$name_con = 'Africa';

$count = 0;
$numeric = 1;

//foreach ( $all as $key=>$result ){
//    $result = explode("/",$result);
//
//    if(isset($result[1]) && array_key_exists($result[0],$all_continents)){
//
//        array_push($new_one,array(
//            'text'=>$result[1],
//            'callback_data'=>$result[0].'/'.$result[1],
//        ));
//        $count++;
//        if($count === 3){
//            array_push($all_continents[$result[0]],$new_one);
//            $count = 0;
//            $new_one = array();
//            $name_con = $result[0];
//
//        }
//    }
//
////    echo $numeric.'='.$result[0].'/'.$result[1];
////    echo '<br>';
////    $numeric++;
//
//}

//writeLogFile($all_continents,true);

//echo '<pre>' . var_export($all_continents, true).'</pre>';

try {
    $data = file_get_contents('php://input');
    $data = json_decode($data,true);



    if(isset($data['message']['text']) && $data['message']['text'] =='/timezones'){
        $getQuery = array(
            "chat_id"=>TG_USER_ID,
            "text"=>'as',
            "parse_mode"=>"html",
            "reply_markup"=>json_encode(
                array(
                    'inline_keyboard'=>array(
                        array(
                            0=>array(
                                'text'=>'Africa',
                                'callback_data'=>'Africa',
                            ),
                            1=>array(
                                'text'=>'America',
                                'callback_data'=>'America',
                            ),
                            2=>array(
                                'text'=>'Antarctica',
                                'callback_data'=>'Antarctica',
                            )
                        ),
                        array(
                            array(
                                'text'=>'Australia',
                                'callback_data'=>'Australia',
                            ),
                            array(
                                'text'=>'Europe',
                                'callback_data'=>'Europe',
                            ),
                            array(
                                'text'=>'Atlantic',
                                'callback_data'=>'Atlantic',
                            ),
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

                        )
                    ),
                    "one_time_keyboard"=>true,
                )
            )
        );

        $ch = curl_init("https://api.telegram.org/bot".TG_TOKEN."/sendMessage?".http_build_query($getQuery));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);

        $resultQuery = curl_exec($ch);
        curl_close($ch);

//        echo $resultQuery;
    }else if(isset($data['message']['text']) && $data['message']['text'] =='/help'){

    }else{
        $continents = array('Africa','America','Antarctica','Australia','Europe','Arctic','Asia','Atlantic');

        if(isset($data['callback_query']['data']) && in_array($data['callback_query']['data'],$continents)){
//        writeLogFile("Came",true);
            $getQuery = array(
                "chat_id"=>TG_USER_ID,
                "text"=>'as',
                "parse_mode"=>"html",
                "reply_markup"=>json_encode(
                    array(
                        'inline_keyboard'=>$all_cities[$data['callback_query']['data']],
                        "one_time_keyboard"=>true,
                    )
                )
            );

            $ch = curl_init("https://api.telegram.org/bot".TG_TOKEN."/sendMessage?".http_build_query($getQuery));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HEADER, false);

            $resultQuery = curl_exec($ch);
            curl_close($ch);

        }else if(isset($data['callback_query']['data'])){
            writeLogFile(explode("/",$data['callback_query']['data'])[0],true);
        }

    }



    if(isset($data['callback_query']['data']) && in_array(explode("/",$data['callback_query']['data'])[0],$continents)) {

        $ch = curl_init("https://www.timeapi.io/api/Time/current/zone?timeZone=".$data['callback_query']['data']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);

        $resultQuery = curl_exec($ch);
        $all = json_decode($resultQuery);
//        echo "time:".$all->dateTime;


        $getQuery = array(
            "chat_id"=>TG_USER_ID,
            "text"=>$all->dateTime,
            "parse_mode"=>"html",
        );

        $ch = curl_init("https://api.telegram.org/bot".TG_TOKEN."/sendMessage?".http_build_query($getQuery));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);

        $resultQuery = curl_exec($ch);
        curl_close($ch);

    }

}catch(\Exception $e){
    return $e->getMessage();
}




?>