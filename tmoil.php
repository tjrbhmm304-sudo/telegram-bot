<?php
ob_start();
###الملف تم برمجته من قبل المطور واثق وتم سرقة الملف من اشخاص والان يبيعو نسخ الملف مجاني 
##للجميع طبعآ الملف مو اخر اصدار اذا تريد تشتري اخر اصدار راسلني خاص @PFPFF ###$
$token = "1267156281:AAG6ZQZNQW7ZaQlzin0tOJbD96AW-dziooU";
$kindi = "1267156281:AAG6ZQZNQW7ZaQlzin0tOJbD96AW-dziooU";
define('API_KEY',$token);
echo "setWebhook ~> <a href=\"https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."\">https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."</a>";
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}}
####
#Short
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$txt = $message->caption;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$new = $message->new_chat_members;
$message_id = $message->message_id;
$type = $message->chat->type;
$name = $message->from->first_name;
$typen = $message->chat->type;
$from_id = $message->from->id;
$forward =$message->forward_from_chat;
$forwardid = $message->forward_from_chat->id;
$text = $message->text;
$sudo = $admin;//ايديك هنا بدل الاصفار
$id = $message->from->id;
$caption = $update->message->caption;
$message_id = $message->message_id;
$t =$message->chat->title; 
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
}
//===۞𝗞𝗜𝗡𝗗𝗜۞===//
if(isset($update->channel_post)){
 $chat_id = $update->channel_post->chat->id;
 $message_id = $update->channel_post->message_id;
 $message = $update->channel_post;
 $text = $update->channel_post->text;
 $textpost = $update->channel_post->text;
 if
($update->channel_post->message->caption) {
$caption = $update->channel_post->message->caption;
}}

  #===۞𝗞𝗜𝗡𝗗𝗜۞===#
#$id = $update->inline_query->from->id; 
$kiindi = "1424446472";
$sudo = array("1886594289","1424446472");
$wathq1= $kiindi;
$kingZip14 = "nnbgr.ml/الملصقات";
$idbot = "8220139621";
$userbot = "kdbxfhbbot";
$kindibot = "@$userbot";

mkdir("sudo");
mkdir("data");

######
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban);
//===۞𝗞𝗜𝗡𝗗𝗜۞===//
$admins=explode("\n",file_get_contents("sudo/admin.txt"));#الادمنية
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$members = file_get_contents("sudo/member.txt");#تخزين الاعضاء
$groups = file_get_contents("sudo/groups.txt");#تخزين القروبات
$ex_groups = explode("\n",$groups);
$countgroups = count($ex_groups)-1;
$channels = file_get_contents("sudo/channels.txt");#تخزين القنوات
$ex_channels = explode("\n",$channels);
$countchannels = count($ex_channels)-1;

//===۞𝗞𝗜𝗡𝗗𝗜۞===//
$amr = file_get_contents("sudo/amrs.txt");
$ch2 = file_get_contents("sudo/ch2.txt");
$amr = file_get_contents("sudo/amr.txt");
$kh = file_get_contents("sudo/ch.txt");
$ch2= file_get_contents("sudo/ch2.txt");
$taf3il = file_get_contents("sudo/tanbih.txt");
$estgbal = file_get_contents("sudo/estgbal.txt");

//===۞𝗞𝗜𝗡𝗗𝗜۞===//
$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 
$textpost = $update->channel_post->text;
$rec = $update->channel_post->reply_to_message->text;
$typee=file_get_contents("sudo/typee1.txt");
if($typee==null){
$typee=$kiindi;
}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
$t =$message->chat->title; 
$sstop=null;
### kindi3 #
function getChatstats($chat_id,$kindi){
$url =
'https://api.telegram.org/bot'.$kindi.'/getChatAdministrators?chat_id='.$chat_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->ok;
  return $result;
}
function getadmin($id,$from_id,$kindi){
$url = 'https://api.telegram.org/bot'.$kindi.'/getChatAdministrators?chat_id='.$id.'&user_id='.$from_id;
  $get = file_get_contents($url);
if(strpos($get,"$from_id") === false){
$ok="no";
}else{
$ok="yes";
}
return $ok;
}
function getmember($kindi,$idchannel,$from_id){
$join = file_get_contents("https://api.telegram.org/bot".$kindi."/getChatMember?chat_id=$idchannel&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"Bad Request: user not found"') or strpos($join,'"ok": false') or strpos($join,'"status":"kicked"')) !== false){
$wataw="no";}else{$wataw="yes";}
return $wataw;
}
function getmembergroup($kindi,$id,$from_id){
 $info2 = json_decode(file_get_contents("https://api.telegram.org/bot".$kindi."/getChatMember?chat_id=$id&user_id=$from_id"), true);
$info = $info2['result']['status'];
if($info=="left"){
$wataw="no";}else{$wataw="yes";}
return $wataw;
}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
@$infosudo = json_decode(file_get_contents("sudo.json"),true);
if(!file_exists("sudo.json")){
#	$put = [];
$infosudo["info"]["stbot"]="مفعل";
$infosudo["info"]["admins"][]="$admin";
$infosudo["info"]["fwrmember"]="معطل";
$infosudo["info"]["tnbih"]="مفعل";
$infosudo["info"]["silk"]="مفعل";
$infosudo["info"]["kindis"]="مفعل";
$infosudo["info"]["allch"]="مفردة";
$infosudo["info"]["start"]="non";
$infosudo["info"]["klish_info"]="non";

file_put_contents("sudo.json", json_encode($infosudo));
}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$st_bot=$infosudo["info"]["stbot"];
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$kindis=$infosudo["info"]["kindis"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$start=$infosudo["info"]["start"];
$klish_sil=$infosudo["info"]["klish_sil"];
$klish_info=$infosudo["info"]["klish_info"];

$coin=$infosudo["info"]["النقاط"];
$adna=$coin["الادنى"];if($adna==null){$adna=30;}
$coinday=$coin["يومية"];
if($coinday==null){$coinday=3;}
$adna=$coin["الادنى"];if($adna==null){$adna=30;}
$refl=$coin["الاحالة"];
if($refl==null){$refl=2;}
$thoil=$coin["التحويل"];
if($thoil==null){$thoil=0;}

/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$chsudo=$infosudo["info"]["الرئيسية"];
$na_chsu=$chsudo["name"];
$id_chsu=$chsudo["id"];
$us_chsu=$chsudo["user"];
$st_chsu=$chsudo["st"];
$co_chsu=$chsudo["coin"];

$sudoamr= $infosudo["info"]["amr"];
$infosudo["info"]["amr"]="start";

function member($from_id,$p){
$memberjson = json_decode(file_get_contents("members.json"),true);
if($p!="null"){
if($p=="add"){
$memberjson["info"]["members"][]="$from_id";
}
if($p=="ban"){
$memberjson["info"]["ban"][]="$from_id";
}
file_put_contents("members.json", json_encode($memberjson));
}}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
if($text=="$text" or $text=="/start" or $data=="back" or preg_match('/^\/([Ss]tart) (.*)/',$text)){
if(preg_match('/^\/([Ss]tart) (.*)/',$text)){
preg_match('/^\/([Ss]tart) (.*)/',$text,$match);
$idmem=$match[2];
if($idmem!=null){
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$refjson = json_decode(file_get_contents("ref.json"),true);
$refjson["info"][$from_id]["st"]="yes";
$refjson["info"][$from_id]["text"]="$text";
file_put_contents("ref.json", json_encode($refjson));
}}
$false="";
if($allch!="مفردة"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$keyboard["inline_keyboard"]=[];
foreach($orothe as $co=>$s ){
$namechannel= $s["name"];
$st= $s["st"];
$userchannel=str_replace('@','', $s["user"]);
if($namechannel!=null){
$stuts = getmember($token,$co,$from_id);
if($stuts=="no"){
if($st=="عامة"){
$url="t.me/$userchannel";
$tt=$s["user"];
}else{
$url =$s["user"];
$tt=$s["user"];
}
if($silk=="مفعل"){
$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'url'=>$url]];
}else{
$txt=$txt."\n".$tt;
}$false="yes";
}}}
$reply_markup=json_encode($keyboard);
if($false=="yes"){
	bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"$klish_sil
$txt
",'parse_mode'=>"markdown", 
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$reply_markup,
]);
return $false;}
}else{
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
foreach($orothe as $co=>$s ){
$keyboard["inline_keyboard"]=[];
$namechannel= $s["name"];
$st= $s["st"];
$userchannel=str_replace('@','', $s["user"]);
if($namechannel!=null){
$stuts = getmember($kindi,$co,$from_id);
if($stuts=="no"){
if($st=="عامة"){
$url="t.me/$userchannel";
$tt=$s["user"];
}else{
$url =$s["user"];
$tt=$s["user"];
}
if($silk=="مفعل"){
	$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'url'=>$url]];
}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
if($klish_sil == null and $type=="private"){
$klish_sil="
👨🏻‍💻 | مرحبا بڪك عزيزي👲،
🚫 | لا يمڪنـك استخدام البوت ،
📡 | عليك الإشتراڪك في قناهہ‌‏ البوت ،
🔘 | *[اضغط هنا للإشتراڪك في القناهہ‌‏](t.me/$userchannel)* ،
• ┉ • ┉ • ┉ • ┉ • ┉ •
⏺ | بعـد الاشتراڪك ارسل { /start } ،
";}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$reply_markup=json_encode($keyboard);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*$klish_sil*
",'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode($keyboard),
]);
return $false;
}}}}}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
$refjson = json_decode(file_get_contents("ref.json"),true);
if($refjson["info"][$from_id]["st"]=="yes"){
$text=$refjson["info"][$from_id]["text"];
unset($refjson["info"][$from_id]);
file_put_contents("ref.json", json_encode($refjson));
}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
if($message and $kindis=="معطل" and !in_array($from_id,$sudo) and $type =="private" and $chat_id !=$channeladmin){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🕵 | مرحبا بك عزيزي ،
⚠ | #ناسف عن توقف البوت ،
⚙ | فقط تحت الصيانة والتحديث ،
🔘 | سيتم اعادته للخدمة الساعات القادمة ،*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
]);return false;
}
///۞𝗞𝗜𝗡𝗗𝗜۞///
if(preg_match('/^\/([Ss]tart) (.*)/',$text)){
preg_match('/^\/([Ss]tart) (.*)/',$text,$match);
$idmem=$match[2];
$stn = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmem"))->result;
$nn= $stn->first_name." ".$stn->last_name;
$coins=coins($idmem,"z",$refl);

if($idmem!=null and $nn!=null){
if($idmem!=$from_id){
if(!in_array($from_id,$member)){
if(in_array($idmem,$member)){
if(!in_array($idmem,$ban)){
$coins=coins($idmem,"z",$refl);
bot("sendmessage",[
"chat_id"=>$idmem,
"text"=>"-🔰 قام  🚶‍♂
$name 
بالدخول من الرابط الخاص بك وحصلت على $refl نقطة  
💰 نقاطك الحالية : $coins
",
]);
bot("sendmessage",[
"chat_id"=>$from_id,
"text"=>"-✅ لقد قمت بالدخول من رابط الإحالة الخاص ب : $nn  وتم اضافة $refl نقطة الى نقاط العضو .
",
]);
}else{
bot("sendmessage",[
"chat_id"=>$from_id,
"text"=>"🚫 لايمكن احتساب نقاط الاحالة من رابط خاص بعضو محظور من البوت .
",
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$from_id,
"text"=>"🚫 لايمكن احتساب نقاط الاحالة من رابط خاص بعضو ليس متواجد في البوت .",
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$from_id,
"text"=>"🚫 لايمكن احتساب النقاط انت مشترك في البوت من قبل .",
]);
}

}else{
bot("sendmessage",[
"chat_id"=>$from_id,
"text"=>"🚫 لايمكن احتساب نقاط الاحالة 
عبر دخولك من رابطك .",
]);

}
}else{
bot("sendmessage",[
"chat_id"=>$from_id,
"text"=>"🚫 لايوجد شخص في تليقرام يحمل هذا الايدي $idmem ",
]);
}
}
////////////////
$t=time()+(3600  - 180);
for($i=0;$i<3;$i++){    
$t=$t+60;
$todaydate = date('Y-m-d',$t);
$now_date=date('H:i:s',$t);
if(file_exists("time/day/$todaydate.txt")){
$timeout=file_get_contents("time/day/$todaydate.txt");
$timeout1=explode("\n",$timeout);
}
if(is_file("time/".$now_date.".json") && !in_array($now_date,$timeout1)){
file_put_contents("time/day/$todaydate.txt",$now_date ."\n" , FILE_APPEND); 
file_put_contents("data/timeon.txt","$now_date");
$texttime="run_watawtime";
break;
}}
/////۞𝗞𝗜𝗡𝗗𝗜۞/////
if($text == "الوقت" and  in_array($from_id,$sudo)){
$t=time()+(3600* +1);
$todaydate = date('Y/m/d',$t);
$now_date=date('H:i:s',$t);
unlink("sudo/amr.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"الوقت الان 
$now_date
التاريخ
$todaydate
",'message_id'=>$message_id,
]);
}
///////////////
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$amrjson=$fromjson["info"][$from_id]["amr"];
$coins=$fromjson["info"][$from_id]["coins"];
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$username = $message->from->username;
$user = $update->message->from->username;
//////Ali kindi //////
if($update and !in_array($from_id,$member) and $type=="private" and ! $data){
file_put_contents("sudo/member.txt","$from_id\n",FILE_APPEND);
if($tnbih=="مفعل"){
 if(!@$username){
$user="لايوجد معرف";
}elseif(@$username){
$user="@$username";
}
bot("sendmessage",[
"chat_id"=>$kiindi,
"text"=>"*
🎭 ¦ أهلاً بك عزيزي المطور.
⚙ ¦ انت المطور الاساسي للبوت. 
👤 ¦ هناك عضو قام بالدخول الى بوتك.
• ┉ • ┉ • ┉ • ┉ • ┉ •
👨🏻‍💻 ¦ الاسم ⋙ *[$name](tg://user?id=$id)* .
🎟 ¦ الايدي ⋙ *`$from_id`*.
🌀 ¦ المعرف ⋙ $user .
📊 ¦ عدد المشترڪين ⋙ $cunte .
🫂 ¦ عدد المجموعات المفعله ⋙ $countgroups .
📡 ¦ عدد القنوات المستخدمة ⋙ $countchannels .
• ┉ • ┉ • ┉ • ┉ • ┉ •
⏰ ¦ وقت الدخول ⋙ $now_date .
📆 ¦ التاريخ ⋙ $todaydate .
*
",'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}}
///۞𝗞𝗜𝗡𝗗𝗜۞///
function coins($from_id,$p,$coin){
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$coins=$fromjson["info"][$from_id]["coins"];
if($p!="null"){
if($p=="z"){
$co=$coins+$coin;
}
if($p=="n"){
$co=$coins-$coin;
}
$fromjson["info"][$from_id]["coins"]=$co;
file_put_contents("from_id.json", json_encode($fromjson));
return $co;
}else{
return $coins;
}}
$fromjson = json_decode(file_get_contents("from_id.json"),true);

if($text=="/start"){
$coins=coins($from_id,"null",$c);
$start = str_replace('الاسم',$name,$start);
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
$start

💰 نقاطك : $coins نقطة
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- تجميع نقاط 🔥','callback_data'=>"تجميع"],['text'=>'- هدية يومية 🎁','callback_data'=>"يومية"]],
[['text'=>'- رابطك الخاص 🖇','callback_data'=>"رابطي"],['text'=>'- تحويل نقاط 🔁','callback_data'=>"تحويل"]],
[['text'=>'- تمويل الان 💰','callback_data'=>"تمويل"],['text'=>'- تمويلاتي 💲','callback_data'=>"تمويلاتي"]],

[['text'=>'- قناة تحديثات البوت ♻️','url'=>"https://t.me/LSLHB"]],
   ] 
   ])
]);
}

if($data=="يومية"){
$timeuoto=time()+(3600 * 1);
$day = date('Y-m-d',$timeuoto);
$datatime = json_decode(file_get_contents("time.json"),true);
$arrayday=$datatime["info"][$day]["member"];

if(!in_array($from_id,$arrayday)){
$datatime["info"][$day]["member"][]=$from_id;
file_put_contents("time.json", json_encode($datatime));
$coins=coins($from_id,"z","$coinday");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

🎁 حصلت على هدية يومية ( $coinday ) نقطة.

💰 نقاطك: $coins
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العودة ','callback_data'=>"hooome"]],
   ] 
   ])
]);
}else{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id,'text'=>"🚫 لايمكنك الحصول على الهدية اليومية مرتين في اليوم حاول الحصول عليها بعد منتصف الليل  
",'show_alert'=>true
]);
}
}
if($data=="hooome"){
$coins=coins($from_id,"null",$coo);
$start = str_replace('الاسم',$name,$start);
$fromjson["info"][$from_id]["amr"]="non";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"  
$start

💰 نقاطك : $coins نقطة
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[

[['text'=>'- تجميع نقاط 🔥','callback_data'=>"تجميع"],['text'=>'- هدية يومية 🎁','callback_data'=>"يومية"]],
[['text'=>'- رابطك الخاص 🖇','callback_data'=>"رابطي"],['text'=>'- تحويل نقاط 🔁','callback_data'=>"تحويل"]],
[['text'=>'- تمويل الان 💰','callback_data'=>"تمويل"],['text'=>'- تمويلاتي 💲','callback_data'=>"تمويلاتي"]],

[['text'=>'- قناة تحديثات البوت ♻️','url'=>"https://t.me/LSLHB"]],
]])
]);
}
if($data=="رابطي"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" 
📌 من خلال رابطك الخاص قم بدعوة اصدقائك لدخول البوت من رابطك واحصل على: $refl نقطة عن كل شخص  .

• رابطك الخاص : 
🖇 *https://t.me/$userbot?start=$from_id*
",'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"hooome"]],
] 
])
]);
} 

$stmemberch=$fromjson["info"][$from_id]["channelssudo"];
if($data=="تجميع"){
if($st_chsu=="yes"){
 $checkadmin = getChatstats($id_chsu,$token);
if($checkadmin == true){
$stuts = getmember($token,$id_chsu,$from_id);
if($stuts=="no"){
if($stmemberch!="yes"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
💰 انضم في قناة ( $us_chsu ) الان 

لتحصل على: $co_chsu نقطة

",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'✅ تحقق من الانضمام  ' ,'callback_data'=>"yeschannelsudo"]],
] 
])
]);
}else{
$fromjson["info"][$from_id]["channelssudo"]="no";
file_put_contents("from_id.json", json_encode($fromjson));
$coins=coins($from_id,"n",$co_chsu);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
🚫 لقد غادرت من قناة ( $us_chsu )
وتم خصم: $co_chsu من نقاطك .

💰 نقاطك الان: $coins

",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'✅ تحقق من الانضمام ','callback_data'=>"yeschannelsudo"]],
   ] 
   ])
]);
}
return false;
}
}
}
}
if($data=="yeschannelsudo" and  $stmemberch!="yes"){
$stuts = getmember($token,$id_chsu,$from_id);
if($stuts=="yes"){

$fromjson["info"][$from_id]["channelssudo"]="yes";
file_put_contents("from_id.json", json_encode($fromjson));
$coins=coins($from_id,"z",$co_chsu);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
✅ لقد انضممت الى قناة ( $us_chsu ) 
وتم إضافة: $co_chsu الى نقاطك .

💰 نقاطك الان: $coins
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'التالي ' ,'callback_data'=>"تجميع"]],
   ] 
   ])
]);
}else{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id,'text'=>"🚫 لم تقم بالانضمام في القناة 
",'show_alert'=>true
]);
}
}
if($data=="تمويل"){
$fromjson["info"][$from_id]["amr"]="null";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"مرحبا『 [$name](tg://user?id=$from_id) 』

- اختار احد الاقسام لانشاء التمويل .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'📺 تمويل قنوات   ' ,'callback_data'=>"t_channels"]],
[['text'=>'👥 تمويل جروبات  ','callback_data'=>"t_groups"],['text'=>'🤖 تمويل بوتات','callback_data'=>"t_bots"]],

[['text'=>'عودة ' ,'callback_data'=>"hooome"]],
]])
]);
}
#انشاء تمويل قنوات 
if($data=="t_channels"){
$fromjson["info"][$from_id]["amr"]="t_channels";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"• مرحبا『 [$name](tg://user?id=$from_id) 』.

• قم بإرسال معرف قناتك التي تود اضافة التمويل لها.
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العودة 🔙','callback_data'=>"تمويل"]],
   ] 
   ])
]);
}

$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$arraych=$tmoil["info"]["channels"];
$arraychpro=$tmoil["info"]["channelspro"];
if($text   and !$date and $text !="/start" and $amrjson=="t_channels"  and !$message->forward_from_chat ){

$ch_id = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->id;
$idchan=$ch_id;
if($ch_id != null){

$checkadmin = getChatstats($text,$token);
if($checkadmin == true){
if(!in_array($ch_id,$arraych) and !in_array($ch_id, $arraychpro)){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->title;

$fromjson["info"][$from_id]["انشاء"]["id_channel"]="$idchan";
$fromjson["info"][$from_id]["انشاء"]["name_channel"]="$namechannel";
$fromjson["info"][$from_id]["انشاء"]["user_channel"]="$text";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة بنجاح عزيز 
info channel 
user : $text 
name : $namechannel
id : $ch_id
 
",'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- متابعة الإنشاء ",'callback_data'=>"tt_channels"]],
  [['text'=>"- الغاء ",'callback_data'=>"t_channels"]],
 ]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ لا يمكن تمويل هذه القناة في الوقت الحالي القناة جاري تمويلها حالياً 
حاول في وقت اخر .
",'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- الغاء   ",'callback_data'=>"t_channels"]],
 ]])
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ البوت ليس ادمن في القناة 
- قم برفع البوت اولا لكي تتمكن من إضافتها 
",'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- الغاء   ",'callback_data'=>"t_channels"]],
 ]])
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ لم تتم إضافة القناة لا توجد قناة تمتلك هذا المعرف 
$text 
",'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- الغاء   ",'callback_data'=>"t_channels"]],
 ]])
]);
}

file_put_contents("from_id.json", json_encode($fromjson));
return $false;
}

if($data=="tt_channels"){
$fromjson["info"][$from_id]["amr"]="tt_channels";
file_put_contents("from_id.json", json_encode($fromjson));

bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"• مرحبا『 [$name](tg://user?id=$from_id) 』

- حسناً عزيزي قم الان بإرسال عدد الاعضاء الذين تريد تمويل قناتك بهم .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة  ','callback_data'=>"t_channels"]],
   ] 
   ])
]);
}

#عدد الاعضاآ
if($text and !$date and $amrjson=="tt_channels" and is_numeric($text)){
$fromjson["info"][$from_id]["amr"]="c_m_ch";
$fromjson["info"][$from_id]["انشاء"]["الاعضاء"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

- قم الان بإرسال عدد النقاط التي سيحصل عليها العضو للاشتراك في قناتك .

يجب ان يكون العدد اكبر من 1 واصغر من 6.

",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة  ','callback_data'=>"t_channels"]],
]])
]);
}

#عدد النقاط
$coins=$fromjson["info"][$from_id]["coins"];
$id_channel=$fromjson["info"][$from_id]["انشاء"]["id_channel"];
$user_channel=$fromjson["info"][$from_id]["انشاء"]["user_channel"];
$countmember=$fromjson["info"][$from_id]["انشاء"]["الاعضاء"];
$coinsmember=$fromjson["info"][$from_id]["انشاء"]["النقاط"];
if($text and !$date and $amrjson=="c_m_ch" and is_numeric($text)){

if($text > 1 and $text < 6 ){
$co=$text * $countmember;
if($coins >= $co){

$fromjson["info"][$from_id]["amr"]="non";
$fromjson["info"][$from_id]["انشاء"]["النقاط"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

ℹ معلومات التمويل 
- قناة التمويل : $user_channel
- عدد الاعضاء المطلوب : $countmember
- نقاط الاشتراك : $text


✅ قم بالضغط على زر حفظ لحفظ التمويل 
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>' 💾 حفظ ','callback_data'=>"savech"]],
[['text'=>'الغاء ','callback_data'=>"t_channels"]],
]])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"🚫 عدد نقاطك غير كافي يجب ان تكون نقاطك ( $co ) .

- نقاطك الحالية : $coins نقطة 
- قم بتقليل عدد الاعضاء او قم بتغيير نقاط الاشتراك
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"t_channels"]],

]])
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

- 🚫 يجب ان يكون العدد اكبر من 1 واصغر من 6. 

- قم بإرسال عدد اخر 
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة  ','callback_data'=>"t_channels"]],
]])
]);
}
}

#حفظ
$tmoil = json_decode(file_get_contents("tmoil.json"),true);

if($data=="savech"){
$fromjson["info"][$from_id]["amr"]="non";
$fromjson["info"][$from_id]["تمويل"]["قنوات"][]=$id_channel;
file_put_contents("from_id.json", json_encode($fromjson));
$coo=$coinsmember * $countmember;
$coins=coins($from_id,"n",$coo);

bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

✅ تم حفظ تمويل قناتك بنجاج
تم خصم: $coo من نقاطك لتصبح نقاطك: $coins نقطة 
- ⏳ جار التمويل ...
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة  ' ,'callback_data'=>"t_channels"]],
]])
]);
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$tmoil["info"]["channels"][]=$id_channel;

$tmoil["info"]["info_channels"][$id_channel]["admin"]=$from_id;
$tmoil["info"]["info_channels"][$id_channel]["user"]=$user_channel;
$tmoil["info"]["info_channels"][$id_channel]["الاعضاء"]=$countmember;
$tmoil["info"]["info_channels"][$id_channel]["النقاط"]=$coinsmember;
$tmoil["info"]["info_channels"][$id_channel]["تمت"]="0";

file_put_contents("tmoil.json", json_encode($tmoil));
}
#كسب نقاط 
if($data=="تجميع"){
$fromjson["info"][$from_id]["amr"]="null";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

- يمكنك تجميع النقاط من خلال الاقسام التالية .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'📺 قنوات ','callback_data'=>"tg_channels"]],
[['text'=>'📺 قنوات x 10 ','callback_data'=>"tg_channelsx10"]],
[['text'=>'👥 جروبات  ' ,'callback_data'=>"tg_groups"],['text'=>'🤖  بوتات ','callback_data'=>"tg_bots"]],
[['text'=>'👥 جروبات x 10 ','callback_data'=>"tg_groupsx10"],['text'=>'🤖  بوتات  x10 ','callback_data'=>"tg_botsx10"]],

[['text'=>'عودة ','callback_data'=>"hooome"]],
]])
]);
}
function testchannelno($from_id,$id,$co,$ar,$n){
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$arraych_yes=$fromjson["info"][$from_id]["$ar"];
$id_ch=$id;
$index = array_search($id_ch, $arraych_yes);
unset($fromjson["info"][$from_id]["$ar"][$index]);
$fromjson["info"][$from_id]["$ar"]=array_values($fromjson["info"][$from_id]["$ar"]);
$fromjson["info"][$from_id]["تحقق"]["$n"][]="$id=$co";
file_put_contents("from_id.json", json_encode($fromjson));
}

function testchannelyes($from_id,$id,$co,$ar,$n) {
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$arraych_yes=$fromjson["info"][$from_id]["تحقق"]["$n"];
$id_ch="$id=$co";
$index = array_search($id_ch, $arraych_yes);
unset($fromjson["info"][$from_id]["تحقق"]["$n"][$index]);
$fromjson["info"][$from_id]["تحقق"]["$n"]=array_values($fromjson["info"][$from_id]["تحقق"]["$n"]);
$fromjson["info"][$from_id]["$ar"][]="$id";
file_put_contents("from_id.json", json_encode($fromjson));
}
$fromjson = json_decode(file_get_contents("from_id.json"),true);

if($data=="tg_channels" or $data=="تمويل"){
if($data=="tg_channels"){
$upda="updateyesch";
}
if($data=="تمويل"){
$upda="updateyeschtmoil";
}
$st=null;
$arraych=$tmoil["info"]["channels"];
$arraychmemb=$fromjson["info"][$from_id]["تمويل"]["قنوات"];
$arraych_yes=$fromjson["info"][$from_id]["channels"];
for($i=0;$i<count($arraych_yes);$i++){
$id_ch=$arraych_yes[$i];
$checkadmin = getChatstats($id_ch,$token);
if($checkadmin == true){
$stuts = getmember($token,$id_ch,$from_id);
if($stuts=="no"){
$st=true;
$ch_id=$id_ch;
$user_id=$tmoil["info"]["info_channels"][$id_ch]["user"];
if(in_array($id_ch,$arraych)){
$co=$tmoil["info"]["info_channels"][$id_ch]["النقاط"];
}else{
$co=3;
}
$t="$t\n❌ $user_id";
#$id="$id\n❌$id_ch=$co";
$con=$con+$co;
testchannelno($from_id,$id_ch,$co,"channels","قنوات");
if($i==5){break;}
}
}
}

if($st==true){
$coins=coins($from_id,"n",$con);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"🚫 لقد قمت بمغادرة هذة القنوات 
$t

وتم خصم ( $con ) نقطة من نقاطك اصحبت نقاطك: $coins نقطة .
قم بالاشتراك في القنوات ثم قم بالضغط على زر تحديث .
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'♻ تحديث ','callback_data'=>"$upda"]],
]])
]);
$st=null;
return $false;
}
}

if($data=="updateyesch"){
$st=null;
$l=0;
$ll=0;
$arraych=$tmoil["info"]["channels"];
$arraychmemb=$fromjson["info"][$from_id]["تحقق"]["قنوات"];
$arraych_yes=$fromjson["info"][$from_id]["channels"];
for($i=0;$i<count($arraychmemb);$i++){
$txt=$arraychmemb[$i];
$ex=explode("=",$txt);
$id_ch=$ex[0];
$co=$ex[1];
if(!in_array($id_ch,$arraych_yes)){
$checkadmin = getChatstats($id_ch,$token);
if($checkadmin == true){
$stuts = getmember($token,$id_ch,$from_id);
$user_id=$tmoil["info"]["info_channels"][$id_ch]["user"];
if($stuts=="yes"){
$st=true;
$l=1;

$t="$t\n✅ $user_id";
$con=$con+$co;
testchannelyes($from_id,$id_ch,$co,"channels","قنوات");
}else{
$ll=1;
$tt="$tt\n❌ $user_id";
}
}
}
}

#if($st==true){
if($l!=0){
$coins=coins($from_id,"z",$con);
$tm="تم الاشتراك في 
$t
وحصلت على $con نقطة.
";
}

if($ll!=0){
$tmm="اشترك في هذة القنوات لكي تتمكن من استعادة نقاطك 
$tt
";
$upd="updateyesch";
}else{
$upd="tg_channels";
}
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"✅ تم التحديث 
$tm
$tmm
💰 نقاطك : $coins نقطة 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'♻ تحديث ','callback_data'=>"$upd"]],
] 
])
]);
$st=null;
}

if($data=="updateyeschtmoil"){
#$st=null;
$l=0;
$ll=0;
$arraych=$tmoil["info"]["channels"];
$arraychmemb=$fromjson["info"][$from_id]["تحقق"]["قنوات"];
$arraych_yes=$fromjson["info"][$from_id]["channels"];
for($i=0;$i<count($arraychmemb);$i++){
$txt=$arraychmemb[$i];
$ex=explode("=",$txt);
$id_ch=$ex[0];
$co=$ex[1];
if(!in_array($id_ch,$arraych_yes)){
 $checkadmin = getChatstats($id_ch,$token);

if($checkadmin == true){
$stuts = getmember($token,$id_ch,$from_id);
$user_id=$tmoil["info"]["info_channels"][$id_ch]["user"];

if($stuts=="yes"){
#$st=true;
$l=1;

$t="$t\n✅ $user_id";
$con=$con+$co;

testchannelyes($from_id,$id_ch,$co,"channels","قنوات");
}else{
$ll=1;
$tt="$tt\n❌ $user_id";
}
}
}
}

#if($st==true)
if($l!=0){
$coins=coins($from_id,"z",$con);
$tm="تم الاشتراك في 
$t
وحصلت على: $con نقطة.
";
}
if($ll!=0){
$tmm="اشترك في هذة القنوات لكي تتمكن من استعادة نقاطك 
$tt
";
$upd="updateyeschtmoil";
}else{
$upd="تمويل";
}
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"✅ تم التحديث 
$tm
$tmm
💰 نقاطك : $coins نقطة 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'♻ تحديث ','callback_data'=>"$upd"]],
]])
]);
$st=null;
}
///////
if($data=="tg_channels"){
$st=null;
$arraych=$tmoil["info"]["channels"];
$arraychmemb=$fromjson["info"][$from_id]["تمويل"]["قنوات"];
$arraych_yes=$fromjson["info"][$from_id]["channels"];
for($i=0;$i<count($arraych);$i++){
$id_ch=$arraych[$i];
if(!in_array($id_ch,$arraych_yes)){
 $checkadmin = getChatstats($id_ch,$token);

if($checkadmin == true){
$stuts = getmember($token,$id_ch,$from_id);
if($stuts=="no"){
$st=true;
$ch_id=$id_ch;
break;
}
}
}
}
if($st==true){
$user_id=$tmoil["info"]["info_channels"][$ch_id]["user"];
$co=$tmoil["info"]["info_channels"][$ch_id]["النقاط"];

bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"📯 انضم في قناة ( $user_id ) لتحصل على: $co نقطة
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'✅ تحقق من الانضمام  ' ,'callback_data'=>"yeschannel $ch_id"]],
[['text'=>'التالي ','callback_data'=>"tg_channels"]],
]])
]);
$st=null;
}else{
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"انتهت القنوات قم بالضغط على زر العودة 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"تجميع"]],
]])
]);
}
}

function testnox10($from_id,$id,$n) {
$fromjson = json_decode(file_get_contents("from_id.json"),true);

$fromjson["info"][$from_id]["x10"]["$n"][]="$id";
file_put_contents("from_id.json", json_encode($fromjson));
}
function unsetx10($from_id){
$fromjson = json_decode(file_get_contents("from_id.json"),true);

unset($fromjson["info"][$from_id]["x10"]);
file_put_contents("from_id.json", json_encode($fromjson));
}
function testyesx10($from_id,$id,$ar,$n){
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$arraych_yes=$fromjson["info"][$from_id]["x10"]["$n"];

$index = array_search($id, $arraych_yes);
unset($fromjson["info"][$from_id]["x10"]["$n"][$index]);
$fromjson["info"][$from_id]["x10"]["$n"]=array_values($fromjson["info"][$from_id]["x10"]["$n"]);
$fromjson["info"][$from_id]["$ar"][]="$id";
file_put_contents("from_id.json", json_encode($fromjson));
}

if($data=="tg_channelsx10"){
$st=null;
$l=null;
$coi=null;
$arraych=$tmoil["info"]["channels"];
$arraychmemb=$fromjson["info"][$from_id]["تمويل"]["قنوات"];
$arraych_yes=$fromjson["info"][$from_id]["channels"];
for($i=0;$i<count($arraych);$i++){
$id_ch=$arraych[$i];
if(!in_array($id_ch,$arraych_yes)){
 $checkadmin = getChatstats($id_ch,$token);

if($checkadmin == true){
$stuts = getmember($token,$id_ch,$from_id);
if($stuts=="no"){
$l++;
$st=true;
$ch_id=$id_ch;
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$ch_id"))->result->title;
$user_id=str_replace('@','',$tmoil["info"]["info_channels"][$ch_id]["user"]);
$co=$tmoil["info"]["info_channels"][$ch_id]["النقاط"];
$coi=$coi+$co;
$keyboard["inline_keyboard"][] =[['text'=>"📡  $namechannel",'url'=>"t.me/$user_id"]];
testnox10($from_id,$id_ch,"قنوات");
if($l>=3){
break;
}
}
}
}
}
if($st==true){
$keyboard["inline_keyboard"][] =[['text'=>'✅ تحقق من الانضمام  ' ,'callback_data'=>"yeschannelx10"]];
$keyboard["inline_keyboard"][] =[['text'=>'التالي ','callback_data'=>"nextchx10 $id_ch"]];
$reply_markup=json_encode($keyboard);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"📯 انضم في القنوات لتحصل على :$coi نقطة.
",'disable_web_page_preview'=>true,
'reply_markup'=>$reply_markup
]);
$st=null;
}else{
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"انتهت القنوات قم بالضغط على زر العودة 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"تجميع"]],
]])
]);
}
}

$fromjson = json_decode(file_get_contents("from_id.json"),true);
if($data=="yeschannelx10"){
$st=null;
$coooo=null;
$cooooi=null;
$arraychmemb=$fromjson["info"][$from_id]["x10"]["قنوات"];
$arraych_yes=$fromjson["info"][$from_id]["channels"];
for($i=0;$i<count($arraychmemb);$i++){
$id_ch=$arraych[$i];
if(!in_array($id_ch,$arraych_yes)){
$tmoil = json_decode(file_get_contents("tmoil.json"),true);

$stuts = getmember($token,$id_ch,$from_id);
$coo=$tmoil["info"]["info_channels"][$id_ch]["النقاط"];


if($stuts=="yes"){
$coins=coins($from_id,"z",$coo);
$coooo=$coooo+$coo;
testyesx10($from_id,$id_ch,'channels','قنوات');
$mm=$tmoil["info"]["info_channels"][$id_ch]["الاعضاء"];
$adminch=$tmoil["info"]["info_channels"][$id_ch]["admin"];
$user_id=$tmoil["info"]["info_channels"][$id_ch]["user"];
$cc=$tmoil["info"]["info_channels"][$id_ch]["تمت"];
$ccc=$cc+1;
$tmoil["info"]["info_channels"][$id_ch]["تمت"]=$ccc;

if($mm <= $ccc){
bot('sendmessage',[
'chat_id'=>$adminch,
'message_id'=>$message_id,
"text"=>"✅ لقد تم الانتهاء من تمويل قناتك .
القناة : $user_id تم تمويلها بـ ( $ccc ) عضواً
",'disable_web_page_preview'=>true,
]);

$arraych=$tmoil["info"]["channels"];
$index = array_search($id_ch, $arraych);
unset($tmoil["info"]["channels"][$index]);
$tmoil["info"]["channels"]=array_values($tmoil["info"]["channels"]);
}

file_put_contents("tmoil.json", json_encode($tmoil));
}else{
$st=true;
$cooooi=$cooooi+$coo;
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$id_ch"))->result->title;
$user_id=str_replace('@','',$tmoil["info"]["info_channels"][$id_ch]["user"]);
$keyboard["inline_keyboard"][] =[['text'=>"📡  $namechannel",'url'=>"t.me/$user_id"]];
}
}}
if($st==true){
$keyboard["inline_keyboard"][] =[['text'=>'✅ تحقق من الانضمام  ' ,'callback_data'=>"yeschannelx10"]];
$keyboard["inline_keyboard"][] =[['text'=>'التالي ','callback_data'=>"nextchx10 $id_ch"]];
$reply_markup=json_encode($keyboard);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
💰 لقد حصلت على: $coooo نقطة .

📯 انضم في باقي القنوات لتحصل على: $cooooi نقطة
",'disable_web_page_preview'=>true,
'reply_markup'=>$reply_markup
]);
}else{
$keyboard["inline_keyboard"][]=[['text'=>'✅ تحقق من الانضمام ','callback_data'=>"yeschannelx10"]];
$keyboard["inline_keyboard"][] =[['text'=>'التالي ','callback_data'=>"nextchx10 $id_ch"]];
$reply_markup=json_encode($keyboard);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
📯 انضم اولا في القنوات لتحصل على: $cooooi نقطة
",'disable_web_page_preview'=>true,
'reply_markup'=>$reply_markup
]);
}
}
if(preg_match('/^(nextchx10) (.*)/s', $data)){
$id_chh = str_replace('nextchx10 ',"",$data);
$st=null;
unsetx10($from_id);
$fromjson = json_decode(file_get_contents("from_id.json"),true);

$arraych=$tmoil["info"]["channels"];
$arraychmemb=$fromjson["info"][$from_id]["تمويل"]["قنوات"];
$arraych_yes=$fromjson["info"][$from_id]["channels"];
$index = array_search($id_chh, $arraych);
for($i=$index; $i<count($arraych);$i++){
$id_ch=$arraych[$i];
if(!in_array($id_ch,$arraych_yes)){
 $checkadmin = getChatstats($id_ch,$token);

if($checkadmin == true){
$stuts = getmember($token,$id_ch,$from_id);
if($stuts=="no"){
$l++;
$st=true;
$ch_id=$id_ch;
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$ch_id"))->result->title;
$user_id=str_replace('@','',$tmoil["info"]["info_channels"][$ch_id]["user"]);
$co=$tmoil["info"]["info_channels"][$ch_id]["النقاط"];
$coi=$coi+$co;
$keyboard["inline_keyboard"][] =[['text'=>"📡  $namechannel",'url'=>"t.me/$user_id"]];
testnox10($from_id,$id_ch,"قنوات");
if($l>=3){
break;
}
}
}
}
}
if($st==true){
$keyboard["inline_keyboard"][]=[['text'=>'✅ تحقق من الانضمام ','callback_data'=>"yeschannelx10"]];
$keyboard["inline_keyboard"][] =[['text'=>'التالي ','callback_data'=>"nextchx10 $id_ch"]];
$reply_markup=json_encode($keyboard);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
📯 انضم في القنوات لتحصل على: $coi نقطة
",'disable_web_page_preview'=>true,
'reply_markup'=>$reply_markup
]);
$st=null;
}else{
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"انتهت القنوات قم بالضغط على زر العودة 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"تجميع"]],
]])
]);
}
}

$fromjson = json_decode(file_get_contents("from_id.json"),true);

if(preg_match('/^(yeschannel) (.*)/s', $data)){
$id_ch = str_replace('yeschannel ',"",$data);
$stuts = getmember($token,$id_ch,$from_id);
$arraych_yes=$fromjson["info"][$from_id]["channels"];
if(!in_array($id_ch,$arraych_yes)){
if($stuts=="yes"){

$coo=$tmoil["info"]["info_channels"][$id_ch]["النقاط"];
$fromjson["info"][$from_id]["channels"][]=$id_ch;
file_put_contents("from_id.json", json_encode($fromjson));
$coins=coins($from_id,"z",$coo);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"✅ لقد انضممت الى القناة 
وتم إضافة : $coo الى نقاطك .

💰 نقاطك الان : $coins
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'التالي ','callback_data'=>"nextch $id_ch"]],
]])
]);

$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$mm=$tmoil["info"]["info_channels"][$id_ch]["الاعضاء"];
$adminch=$tmoil["info"]["info_channels"][$id_ch]["admin"];
$user_id=$tmoil["info"]["info_channels"][$id_ch]["user"];
$cc=$tmoil["info"]["info_channels"][$id_ch]["تمت"];
$ccc=$cc+1;
$tmoil["info"]["info_channels"][$id_ch]["تمت"]=$ccc;

if($mm <= $ccc){
bot('sendmessage',[
'chat_id'=>$adminch,
'message_id'=>$message_id,
"text"=>"
✅ لقد تم الانتهاء من تمويل قناتك .
القناة : $user_id تم تمويلها بـ ( $ccc ) عضواً
",'disable_web_page_preview'=>true,
]);

$arraych=$tmoil["info"]["channels"];
$index = array_search($id_ch, $arraych);
unset($tmoil["info"]["channels"][$index]);
$tmoil["info"]["channels"]=array_values($tmoil["info"]["channels"]);
}

file_put_contents("tmoil.json", json_encode($tmoil));
}else{
bot('answerCallbackQuery',[
            'callback_query_id'=>$update->callback_query->id,'text'=>"🚫 لم تقم بالانظمام في القناة  ",
'show_alert'=>true
]);
}
}
}

$coins=$fromjson["info"][$from_id]["coins"];
if(preg_match('/^(nextch) (.*)/s', $data)){
$id_chh = str_replace('nextch ',"",$data);
$st=null;

$arraych=$tmoil["info"]["channels"];
$arraychmemb=$fromjson["info"][$from_id]["تمويل"]["قنوات"];
$arraych_yes=$fromjson["info"][$from_id]["channels"];
$index = array_search($id_chh, $arraych);
for($i=$index; $i<count($arraych);$i++){
$id_ch=$arraych[$i];
if(!in_array($id_ch,$arraych_yes)){
 $checkadmin = getChatstats($id_ch,$token);

if($checkadmin == true){
$stuts = getmember($token,$id_ch,$from_id);
if($stuts=="no"){
$st=true;
$ch_id=$id_ch;
$user_id=$tmoil["info"]["info_channels"][$id_ch]["user"];
$co=$tmoil["info"]["info_channels"][$id_ch]["النقاط"];
break;
}
}
}
}

if($st==true){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
📯 انضم في قناة ( $user_id ) وحصل على 💰 $co نقطة
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'✅ تحقق من الانضمام  ','callback_data'=>"yeschannel $id_ch"]],
[['text'=>'التالي','callback_data'=>"tg_channels"]],]])
]);
$st=null;
}else{
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"انتهت القنوات قم بالضغط على زر العودة 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"تجميع"]],
]])
]);
}
}

$fromjson = json_decode(file_get_contents("from_id.json"),true);
if($data=="تمويلاتي"){
$g=null;
$c=null;
$b=null;
$arraychmembb=$fromjson["info"][$from_id]["تمويل"]["قنوات"];
$arraygrmembb=$fromjson["info"][$from_id]["تمويل"]["قرربات"];
$arraybomembb=$fromjson["info"][$from_id]["تمويل"]["بوتات"];
$keyboard["inline_keyboard"]=[];
for($i=0;$i<count($arraychmembb);$i++){
$id_ch=$arraychmembb[$i];
if($id_ch!=null){
$user_id=$tmoil["info"]["info_channels"][$id_ch]["user"];
$c="$c\n-$user_id";
$keyboard["inline_keyboard"][] =[['text'=>"📡 $user_id",'callback_data'=>"vio $id_ch"]];
}
}
for($l=0;$l<count($arraygrmembb);$l++){
$id_gr=$arraygrmembb[$i];
if($id_gr!=null){
$user_id=$tmoil["info"]["info_channels"][$id_gr]["user"];
$g="$g\n-@$user_id";
$keyboard["inline_keyboard"][]=[['text'=>"📣 @$user_id",'callback_data'=>"viogr $id_gr"]];
}
}
for($o=0;$o<count($arraybomembb);$o++){
$id_bo=$arraybomembb[$i];
if($id_bo!=null){
$user_id=$tmoil["info"]["info_bots"][$id_bo]["user"];
$b="$b\n-@$user_id";
$keyboard["inline_keyboard"][]=[['text'=>"🎭 @ $user_id",'callback_data'=>"viobo $id_bo"]];
}
}
if($c==null){$c="❌ لا يوجد ";}
if($g==null){$g="❌ لا يوجد ";}
if($b==null){$b="❌ لا يوجد ";}

$keyboard["inline_keyboard"][] =[['text'=>'رجوع','callback_data'=>"hooome"]];
$reply_markup=json_encode($keyboard);
$coins=coins($from_id,"null",$coo);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا $name

- هذة هي قائمة قنواتك الممولة .
🎁 - القنوات :\n$c
🎁 - الجروبات :\n$g
🎁 - البوتات :\n$b

قم بالضغط فوق المعرف لرؤية تفاصيل التمويل الخاص .

💰 نقاطك : $coins نقطة
",'disable_web_page_preview'=>true,
'reply_markup'=>$reply_markup
]);
}

if(preg_match('/^(vio) (.*)/s', $data)){
$id_chh = str_replace('vio ',"",$data);
$arraych=$tmoil["info"]["channels"];
$arraychmemb=$fromjson["info"][$from_id]["تمويل"]["قنوات"];
$arraych_yes=$fromjson["info"][$from_id]["channels"];
$user_id=$tmoil["info"]["info_channels"][$id_chh]["user"];
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$id_chh"))->result->title;
 $checkadmin = getChatstats($id_chh,$token);
if($checkadmin == true){
if(in_array($id_chh,$arraych)){
$t="♻ قيد التمويل ";
}else{
$t="✅ تم التمويل ";
}
}else{
if(in_array($id_chh,$arraych)){
$t="🚫 التمويل متوقف البوت ليس ادمن في القناة ";
}else{
$t="🚫 التمويل متوقف البوت ليس ادمن في القناة ";
}
}
$mm=$tmoil["info"]["info_channels"][$id_chh]["الاعضاء"];
$cc=$tmoil["info"]["info_channels"][$id_chh]["النقاط"];
$tm=$tmoil["info"]["info_channels"][$id_chh]["تمت"];
$txt="🔔 قناة : $user_id
- name : $namechannel
- id : $id_chh

💳 حالة التمويل : $t
ℹ معلومات التمويل : 
- عدد الاعضاء المطلوب : $mm عضوا
- عدد نقاط الاشتراك لكل عضو : $cc نقطة لكل مشترك
- تم تمويل عدد : $tm عضوا 
";

$keyboard["inline_keyboard"][] =[['text'=>'رجوع','callback_data'=>"hooome"]];
$reply_markup=json_encode($keyboard);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

$txt
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>$reply_markup
]);
}
if(preg_match('/^(viogr) (.*)/s', $data)){
$id_chh = str_replace('viogr ',"",$data);
$arraygr=$tmoil["info"]["groups"];
$arraygrmemb=$fromjson["info"][$from_id]["تمويل"]["قروبات"];
$arraych_yes=$fromjson["info"][$from_id]["channels"];
$user_id=$tmoil["info"]["info_groups"][$id_chh]["user"];
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$id_chh"))->result->title;
 $checkadmin = getChatstats($id_chh,$token);

if($checkadmin == true){
if(in_array($id_chh,$arraygr)){
$t="♻ قيد التمويل ";
}else{
$t="✅ تم التمويل ";
}
}else{
if(in_array($id_chh,$arraygr)){
$t="🚫 التمويل متوقف البوت ليس ادمن في القروب ";
}else{
$t="🚫 التمويل متوقف البوت ليس ادمن في القروب ";
}
}
$mm=$tmoil["info"]["info_groups"][$id_chh]["الاعضاء"];
$cc=$tmoil["info"]["info_groups"][$id_chh]["النقاط"];
$tm=$tmoil["info"]["info_groups"][$id_chh]["تمت"];
$txt="🫂 جروب : @$user_id
- name : $namechannel
- id : $id_chh

💳 حالة التمويل : $t
ℹ معلومات التمويل : 
- عدد الاعضاء المطلوب : $mm عضوا
- عدد نقاط الاشتراك لكل عضو : $cc نقطة لكل مشترك
- تم تمويل عدد : $tm عضوا 
";

$keyboard["inline_keyboard"][] =[['text'=>'رجوع','callback_data'=>"hooome"]];
$reply_markup=json_encode($keyboard);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

$txt
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>$reply_markup
]);
}
if(preg_match('/^(viobo) (.*)/s', $data)){
$id_chh = str_replace('viobo ',"",$data);
$arraybo=$tmoil["info"]["bots"];
$arraybomemb=$fromjson["info"][$from_id]["تمويل"]["بوتات"];
$arraych_yes=$fromjson["info"][$from_id]["channels"];
$user_id=$tmoil["info"]["info_bots"][$id_chh]["user"];
$name_id=$tmoil["info"]["info_bots"][$id_chh]["name"];
if(in_array($id_chh,$arraybo)){
$t="♻ قيد التمويل ";
}else{
$t="✅ تم التمويل ";
}
$mm=$tmoil["info"]["info_bots"][$id_chh]["الاعضاء"];
$cc=$tmoil["info"]["info_bots"][$id_chh]["النقاط"];
$tm=$tmoil["info"]["info_bots"][$id_chh]["تمت"];
$txt="🎭 بوت : @$user_id
- name : $namechannel
- id : $id_chh

💳 حالة التمويل : $t
ℹ معلومات التمويل : 
- عدد الاعضاء المطلوب : $mm عضوا
- عدد نقاط الاشتراك لكل عضو : $cc نقطة لكل مشترك
- تم تمويل عدد : $tm عضوا 
";

$keyboard["inline_keyboard"][] =[['text'=>'رجوع','callback_data'=>"hooome"]];
$reply_markup=json_encode($keyboard);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

$txt
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>$reply_markup
]);
}
#تمويل بوتات

if($data=="t_bots"){
$fromjson["info"][$from_id]["amr"]="t_bots";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

- قم بإعادة توجية منشور من البوت الذي تود عمل التمويل له .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العودة  ' ,'callback_data'=>"تمويل"]],
]])
]);
}
$arraybo=$tmoil["info"]["bots"];
$arraybopro=$tmoil["info"]["botspro"];

if(!$date and $text !="/start" and $amrjson=="t_bots"  and $message->forward_from){
$st=$message->forward_from->is_bot;
if($st==true){
 
$nabot=$message->forward_from->first_name;
$usbot=$message->forward_from->username;
$idbot=$message->forward_from->id;
if(!in_array($ch_id,$idbot) and !in_array($ch_id, $idbot)){
$fromjson["info"][$from_id]["انشاء"]["id_bot"]="$idbot";
$fromjson["info"][$from_id]["انشاء"]["name_bot"]="$nabot";
$fromjson["info"][$from_id]["انشاء"]["user_bot"]="$usbot";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"✅ تم إضافة البوت بنجاح
info bot 
user : $usbot 
name : $nabot
id : $idbot

",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- متابعة الإنشاء ",'callback_data'=>"tt_bots"]],
[['text'=>"- الغاء ",'callback_data'=>"t_bots"]],
]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ لا يمكن تمويل هذا البوت في الوقت الحالي البوت جاري تمويلة حالياً 
حاول في وقت اخر . 
",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- الغاء ",'callback_data'=>"t_bots"]],
]])
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
❌ قم بإعادة توجية منشور من البوت الذي تريد عمل التمويل له
",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- الغاء ",'callback_data'=>"t_bots"]],
]])
]);
}
file_put_contents("from_id.json", json_encode($fromjson));
}

if($data=="tt_bots"){
$fromjson["info"][$from_id]["amr"]="tt_bots";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

- حسناً عزيزي قم الان بإرسال عدد الاعضاء الذين تريد تمويل بوتك بهم .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"t_bots"]],
]])
]);
}
#عدد الاعضاآ
if($text and !$date and $amrjson=="tt_bots" and is_numeric($text)){

$fromjson["info"][$from_id]["amr"]="c_m_bo";
$fromjson["info"][$from_id]["انشاء"]["الاعضاء"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

- قم الان بإرسال عدد النقاط التي سيحصل عليها العضو للاشتراك في بوتك .
يجب ان يكون العدد اكبر من 1 واصغر من 6.
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"t_bots"]],
]])
]);
}
#عدد النقاط
$coins=$fromjson["info"][$from_id]["coins"];
$id_bot=$fromjson["info"][$from_id]["انشاء"]["id_bot"];
$name_bot=$fromjson["info"][$from_id]["انشاء"]["name_bot"];
$user_bot=$fromjson["info"][$from_id]["انشاء"]["user_bot"];
$countmember=$fromjson["info"][$from_id]["انشاء"]["الاعضاء"];
$coinsmember=$fromjson["info"][$from_id]["انشاء"]["النقاط"];
if($text and !$date and $amrjson=="c_m_bo" and is_numeric($text)){

if($text > 1 and $text < 6 ){
$co=$text * $countmember;
if($coins >= $co){

$fromjson["info"][$from_id]["amr"]="non";
$fromjson["info"][$from_id]["انشاء"]["النقاط"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

ℹ معلومات التمويل 
- البوت الممول : $user_bot
- عدد الاعضاء المطلوب : $countmember
- نقاط الاشتراك : $text

✅ قم بالضغط على زر حفظ لحفظ التمويل 
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>' 💾 حفظ ','callback_data'=>"savebot"]],
[['text'=>'الغاء ','callback_data'=>"t_bots"]],
]])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
🚫 عدد نقاطك غير كافي يجب ان تكون نقاطك ( $co ) .

- نقاطك الحالية : $coins نقطة 
- قم بتقليل عدد الاعضاء او قم بتغيير نقاط الاشتراك
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"t_bots"]],
]])
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

- 🚫 يجب ان يكون العدد اكبر من 1 واصغر من 6. 

- قم بإرسال عدد اخر 
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"t_bots"]],
]])
]);
}
}
#حفظ
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
if($data=="savebot"){
$fromjson["info"][$from_id]["amr"]="non";
$fromjson["info"][$from_id]["تمويل"]["بوتات"][]=$id_bot;
file_put_contents("from_id.json", json_encode($fromjson));
$coo=$coinsmember * $countmember;
$coins=coins($from_id,"n",$coo);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

✅ تم حفظ تمويل بوتك بنجاج
تم خصم: $coo من نقاطك لتصبح نقاطك: $coins نقطة 
- ⏳ جار التمويل ...
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"t_bots"]],
]])
]);
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$tmoil["info"]["bots"][]=$id_bot;
$tmoil["info"]["info_bots"][$id_bot]["admin"]=$from_id;
$tmoil["info"]["info_bots"][$id_bot]["user"]=$user_bot;
$tmoil["info"]["info_bots"][$id_bot]["name"]=$name_bot;

$tmoil["info"]["info_bots"][$id_bot]["الاعضاء"]=$countmember;
$tmoil["info"]["info_bots"][$id_bot]["النقاط"]=$coinsmember;
$tmoil["info"]["info_bots"][$id_bot]["تمت"]="0";
file_put_contents("tmoil.json", json_encode($tmoil));
}

if($data=="tg_bots"){
$st=null;
$arraybo=$tmoil["info"]["bots"];
$arraybomemb=$fromjson["info"][$from_id]["تمويل"]["بوتات"];
$arraybo_yes=$fromjson["info"][$from_id]["bots"];
for($i=0;$i<count($arraybo);$i++){
$id_bo=$arraybo[$i];
if(!in_array($id_bo,$arraybo_yes)){
$user_bo=$tmoil["info"]["info_bots"][$id_bo]["user"];
$co=$tmoil["info"]["info_bots"][$id_bo]["النقاط"];
$st=true;
break;
}}
if($st==true){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
📯 قم بالدخول الى بوت ( @$user_bo ) وقم بإعادة توجية منشور من البوت الى هنا وحصل على 💰 $co نقطة
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الدخول للبوت ','url'=>"https://telegram.me/$user_bo?start"]],
[['text'=>'التالي ','callback_data'=>"tg_bots"]],
]])
]);
$fromjson["info"][$from_id]["amr"]="tg_botsyes";
$fromjson["info"][$from_id]["idbots"]="$id_bo";
file_put_contents("from_id.json", json_encode($fromjson));
$st=null;
}else{
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"انتهت البوتات الممولة قم بالعوده للقائمة الرئيسية
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"تجميع"]],
]])
]);
}
}

if(!$date and $text !="/start" and $amrjson=="tg_botsyes" and $message->forward_from ){
$st=$message->forward_from->is_bot;
$user_bo=$tmoil["info"]["info_bots"][$id_bot]["user"];

if($st==true){
$id_bot=$fromjson["info"][$from_id]["idbots"];
$nabot=$message->forward_from->first_name;
$usbot=$message->forward_from->username;
$idbot=$message->forward_from->id;

if($idbot==$id_bot){
$coo=$tmoil["info"]["info_bots"][$idbot]["النقاط"];
$fromjson["info"][$from_id]["bots"][]=$idbot;
$fromjson["info"][$from_id]["amr"]="non";
$fromjson["info"][$from_id]["idbots"]="$non";
file_put_contents("from_id.json", json_encode($fromjson));
$coins=coins($from_id,"z",$coo);
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
✅ لقد انضممت الى بوت: @$usbot
وتم إضافة : $coo الى نقاطك .

💰نقاطك الان : $coins
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'التالي ','callback_data'=>"nextbot $idbot"]],
]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ قم بإعادة توجية منشور من بوت  @$user_bo 
",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- الغاء ",'callback_data'=>"t_bots"]],
]])
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ قم بإعادة توجية منشور من بوت  @$user_bo 
",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- الغاء ",'callback_data'=>"t_bots"]],
]])
]);
}
}

if(preg_match('/^(nextbot) (.*)/s', $data)){
$id_bots = str_replace('nextbot ',"",$data);
$st=null;
$arraybo=$tmoil["info"]["bots"];
$arraybomemb=$fromjson["info"][$from_id]["تمويل"]["بوتات"];
$arraybo_yes=$fromjson["info"][$from_id]["bots"];
$index = array_search($id_bots, $arraybo);
for($i=$index; $i<count($arraybo);$i++){
$id_bo=$arraybo[$i];
if(!in_array($id_bo,$arraybo_yes)){
$user_bo=$tmoil["info"]["info_bots"][$id_bo]["user"];
$co=$tmoil["info"]["info_bots"][$id_bo]["النقاط"];
$st=true;
break;
}
}
if($st==true){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
📯 قم بالدخول الى بوت ( @$user_bo ) وقم بإعادة توجية منشور من البوت الى هنا وحصل على 💰 $co نقطة.
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- الدخول الى البوت ','url'=>"https://telegram.me/$user_bo?start"]],
[['text'=>'التالي ','callback_data'=>"tg_bots"]],
]])
]);
$st=null;
}else{
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
انتهت البوتات الممولة قم بالعوده للقائمة الرئيسية
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"تجميع"]],
]])
]);
}
}

#تمويل قروبات
if($data=="t_groups"){
$fromjson["info"][$from_id]["amr"]="t_groups";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
 مرحبا『 [$name](tg://user?id=$from_id) 』

- قم برفع البوت مشرف في قروبك وارسل امر ( تمويل ) في القروب سيقوم البوت بالرد عليك في خاص البوت .
⚠ تنوية : يجيب ان يكون قروبك عام ولدية معرف .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العودة ','callback_data'=>"تمويل"]],
]])
]);
}

$arraygr=$tmoil["info"]["groups"];
$arraygrpro=$tmoil["info"]["groupspro"];
if($text =="تمويل" and  !$date and $text !="/start" and $amrjson=="t_groups"){
if($type=="supergroup" or $type=="group"){
$title=$message->chat->title;
$user=$message->chat->username;
if($user!=null){
if(!in_array($chat_id,$arraygr) and !in_array($chat_id, $arraygrpro)){
 
$fromjson["info"][$from_id]["انشاء"]["id_group"]="$chat_id";
$fromjson["info"][$from_id]["انشاء"]["name_group"]="$title";
$fromjson["info"][$from_id]["انشاء"]["user_group"]="$user";
bot('sendMessage',[
'chat_id'=>$from_id, 
'text'=>"
✅ تم إضافة قروب للتمويل بنجاح
info group 
user : $user 
name : $title
id : $chat_id

",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- متابعة الإنشاء ",'callback_data'=>"tt_groups"]],
[['text'=>"- الغاء ",'callback_data'=>"t_groups"]],
]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$from_id, 
'text'=>"
❌ لا يمكن تمويل الجروب: @$user في الوقت الحالي الجروب جاري تمويله حالياً حاول في وقت اخر . ",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- الغاء ",'callback_data'=>"t_groups"]],
]])
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
❌ لايمكنك اضافة الجروبات الخاصة او التي ليس لديها معرف . 
",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- الغاء ",'callback_data'=>"t_groups"]],
]])
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
❌ قم بإرسال الرسالة من الجروب بعد رفع البوت كمشرف في الجروب . 
",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- الغاء ",'callback_data'=>"t_groups"]],
]])
]);
}
file_put_contents("from_id.json", json_encode($fromjson));
}

if($data=="tt_groups"){
$fromjson["info"][$from_id]["amr"]="tt_groups";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

- حسناً عزيزي قم الان بإرسال عدد الاعضاء الذين تريد تمويل قروبك بهم .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"t_groups"]],
]])
]);
}
#عدد الاعضاآ
if($text and !$date and $amrjson=="tt_groups" and is_numeric($text)){

$fromjson["info"][$from_id]["amr"]="c_m_gr";
$fromjson["info"][$from_id]["انشاء"]["الاعضاء"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

- قم الان بإرسال عدد النقاط التي سيحصل عليها العضو للاشتراك في قروبك .
يجب ان يكون العدد اكبر من 1 واصغر من 6.
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"t_groups"]],
]])
]);
}
#عدد النقاط
$coins=$fromjson["info"][$from_id]["coins"];
$id_group=$fromjson["info"][$from_id]["انشاء"]["id_group"];
$name_group=$fromjson["info"][$from_id]["انشاء"]["name_group"];
$user_group=$fromjson["info"][$from_id]["انشاء"]["user_group"];
$countmember=$fromjson["info"][$from_id]["انشاء"]["الاعضاء"];
$coinsmember=$fromjson["info"][$from_id]["انشاء"]["النقاط"];
$msg_group=$fromjson["info"][$from_id]["انشاء"]["الرسائل"];
if($text and !$date and $amrjson=="c_m_gr" and is_numeric($text)){

if($text > 1 and $text < 6 ){
$co=$text * $countmember;
if($coins >= $co){
$fromjson["info"][$from_id]["amr"]="mesg_gr";
$fromjson["info"][$from_id]["انشاء"]["النقاط"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

- قم الان بإرسال عدد الرسائل الي سيرسلها العضو في قروبك قبل ان يحصل على النقاط . اختار عدد الرسائل مابين 0 - 100 رسالة .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"t_groups"]],
]])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
🚫 عدد نقاطك غير كافي يجب ان تكون نقاطك ( $co ) .

- نقاطك الحالية : $coins نقطة 
- قم بتقليل عدد الاعضاء او قم بتغيير نقاط الاشتراك
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"t_groups"]],
]])
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

- 🚫 يجب ان يكون العدد اكبر من 1 واصغر من 6. 

- قم بإرسال عدد اخر 
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"t_groups"]],
]])
]);
}
}

if($text and !$date and $amrjson=="mesg_gr" and is_numeric($text)){
if($text <= 100 ){

$fromjson["info"][$from_id]["amr"]="non";
$fromjson["info"][$from_id]["انشاء"]["الرسائل"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

ℹ معلومات التمويل 
- قروب التمويل : @$user_group
- عدد الاعضاء المطلوب : $countmember
- نقاط الاشتراك : $coinsmember
- الرسائل المطلوبة : $text

✅ قم بالضغط على زر حفظ لحفظ التمويل 
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>' 💾 حفظ ','callback_data'=>"savegroup"]],
[['text'=>'الغاء ','callback_data'=>"t_groups"]],
]])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

- 🚫 يجب ان يكون العدد اصغر من 100 رسالة .
- قم بإرسال عدد اخر 
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"t_groups"]],
]])
]);
}
}
#حفظ
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
if($data=="savegroup"){
$fromjson["info"][$from_id]["amr"]="non";
$fromjson["info"][$from_id]["تمويل"]["قروبات"][]=$id_group;
file_put_contents("from_id.json", json_encode($fromjson));
$coo=$coinsmember * $countmember;
$coins=coins($from_id,"n",$coo);

bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا『 [$name](tg://user?id=$from_id) 』

✅ تم حفظ تمويل جروبك بنجاح
تم خصم: $coo من نقاطك لتصبح نقاطك: $coins نقطة 
- ⏳ جار التمويل ...
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"t_groups"]],
]])
]);
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$tmoil["info"]["groups"][]=$id_group;
$tmoil["info"]["info_groups"][$id_group]["admin"]=$from_id;
$tmoil["info"]["info_groups"][$id_group]["user"]=$user_group;
$tmoil["info"]["info_groups"][$id_group]["name"]=$name_group;

$tmoil["info"]["info_groups"][$id_group]["الاعضاء"]=$countmember;
$tmoil["info"]["info_groups"][$id_group]["النقاط"]=$coinsmember;
$tmoil["info"]["info_groups"][$id_group]["الرسائل"]=$msg_group;
$tmoil["info"]["info_groups"][$id_group]["تمت"]="0";

if($msg_group > 0 ){
$msg_ch["info"]["الرسائل"]="$msg_group";
file_put_contents("data/$id_group.json", json_encode($msg_ch));
$tmoil["info"]["info_groups"][$id_group]["stmsg"]="yes";
}
file_put_contents("tmoil.json", json_encode($tmoil));
}

if($data=="tg_groups"){
$st=null;
$arraych=$tmoil["info"]["groups"];
$arraychmemb=$fromjson["info"][$from_id]["تمويل"]["قروبات"];
$arraych_yes=$fromjson["info"][$from_id]["groups"];
for($i=0;$i<count($arraych);$i++){
$id_gr=$arraych[$i];
if(!in_array($id_gr,$arraych_yes) and !in_array($id_gr,$arraychmemb) ){
 $checkadmin = getChatstats($id_gr,$token);
 
if($checkadmin == true){
$stuts = getmembergroup($token,$id_gr,$from_id);
if($stuts=="no"){
$st=true;
$ch_id=$id_ch;
break;
}
}
}
}
if($st==true){
$user_id=$tmoil["info"]["info_groups"][$id_gr]["user"];
$co=$tmoil["info"]["info_groups"][$id_gr]["النقاط"];
$msg_group=$tmoil["info"]["info_groups"][$id_gr]["الرسائل"];
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
📯 انضم في جروب ( @$user_id ) وحصل على 💰 $co نقطة
- عدد الرسائل المطلوبة للحصول على النقاط : $msg_group رسالة.
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'✅ تحقق من الانضمام  ','callback_data'=>"yesgroup $id_gr"]],
[['text'=>'التالي ','callback_data'=>"nextgr $id_gr"]],
]])
]);
$st=null;
}else{
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"انتهت القروبات قم بالضغط على زر العودة 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"تجميع"]],
]])
]);
}
}

if(preg_match('/^(yesgroup) (.*)/s', $data)){
$id = str_replace('yesgroup ',"",$data);
$stuts = getmembergroup($token,$id,$from_id);

if($stuts=="yes"){
$stmsg=$tmoil["info"]["info_groups"][$id]["stmsg"];
$coo=$tmoil["info"]["info_groups"][$id]["النقاط"];
$fromjson["info"][$from_id]["groups"][]=$id;
file_put_contents("from_id.json", json_encode($fromjson));
if($stmsg!="yes"){

$coins=coins($from_id,"z",$coo);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
✅ لقد انضممت الى الجروب 
وتم إضافة: $coo الى نقاطك .

💰 نقاطك الان : $coins
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'التالي ','callback_data'=>"nextgr $id_ch"]],
]])
]);
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$mm=$tmoil["info"]["info_groups"][$id]["الاعضاء"];
$adminch=$tmoil["info"]["info_groups"][$id]["admin"];
$user_id=$tmoil["info"]["info_groups"][$id]["user"];
$cc=$tmoil["info"]["info_groups"][$id]["تمت"];
$ccc=$cc+1;
$tmoil["info"]["info_groups"][$id]["تمت"]=$ccc;

if($mm <= $ccc){
bot('sendmessage',[
'chat_id'=>$adminch,
'message_id'=>$message_id,
"text"=>"
✅ لقد تم الانتهاء من تمويل قناتك .
القناة : $user_id تم تمويلها بـ( $ccc ) عضواً
",'disable_web_page_preview'=>true,
]);
$arraych=$tmoil["info"]["groups"];
$index = array_search($id, $arraych);
unset($tmoil["info"]["groups"][$index]);
$tmoil["info"]["groups"]=array_values($tmoil["info"]["groups"]);
}

file_put_contents("tmoil.json", json_encode($tmoil));
}else{
$coms=$tmoil["info"]["info_groups"][$id]["الرسائل"];
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id,'text'=>"
🚫 يتوجب عليك ارسال: $coms رسالة في الجروب اولا لكي تتمكن من الحصول على النقاط . سيتم اضافة النقاط تلقائيا عند اتمام ارسال الرسائل 
",'show_alert'=>true
]);
}
}else{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id,'text'=>"🚫 لم تقم بالانظمام في القروب  
",'show_alert'=>true
]);
}
}

$coins=$fromjson["info"][$from_id]["coins"];
if(preg_match('/^(nextgr) (.*)/s', $data)){
$id_chh = str_replace('nextgr ',"",$data);
$st=null;

$arraych=$tmoil["info"]["groups"];
$arraychmemb=$fromjson["info"][$from_id]["تمويل"]["قروبات"];
$arraych_yes=$fromjson["info"][$from_id]["groups"];
$index = array_search($id_chh, $arraych);
for($i=$index; $i<count($arraych);$i++){
$id_ch=$arraych[$i];
if(!in_array($id_ch,$arraych_yes) and !in_array($id_ch,$arraychmemb) ){
 $checkadmin = getChatstats($id_ch,$token);

if($checkadmin == true){
$stuts = getmembergroup($token,$id_ch,$from_id);
if($stuts=="no"){
$st=true;
$ch_id=$id_ch;
$user_id=$tmoil["info"]["info_channels"][$id_ch]["user"];
$co=$tmoil["info"]["info_channels"][$id_ch]["النقاط"];
$msg_group=$tmoil["info"]["info_groups"][$id_gr]["الرسائل"];
break;
}
}
}
}
if($st==true){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
📯 انضم في جروب  ( @$user_id ) وحصل على 💰 $co نقطة
- عدد الرسائل المطلوبة للحصول على النقاط : $msg_group رسالة.
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'✅ تحقق من الانضمام  ' ,'callback_data'=>"yesgroup $id_gr"]],
[['text'=>'التالي' ,
'callback_data'=>"nextgr $id_gr"]],
]])
]);
$st=null;
}else{
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"انتهت القروبات قم بالضغط على زر العودة 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"تجميع"]],
]])
]);
}
}
$user=$message->chat->username;
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$arraych_yes=$fromjson["info"][$from_id]["groups"];
$idjson = json_decode(file_get_contents("data/$chat_id.json"),true);
$msco=$idjson["info"]["الرسائل"];
$arraycyes=$idjson["info"]["arrayyes"];

if($message and in_array($chat_id,$arraych_yes) and $msco!=null and !in_array($from_id,$arraycyes)){
if($type=="supergroup" or $type=="group"){
$idjson = json_decode(file_get_contents("data/$chat_id.json"),true);
$msco=$idjson["info"]["الرسائل"];
$comb=$idjson["info"]["الاعضاء"][$from_id];
$co=$comb+1;
if($msco > $comb ){
$co=$comb+1;
$idjson["info"]["الاعضاء"][$from_id]=$co;
}
if($msco <= $co ){
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$coo=$tmoil["info"]["info_groups"][$chat_id]["النقاط"];
$coins=coins($from_id,"z",$coo);
$idjson["info"]["arrayyes"][]=$from_id;
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"
✅ لقد انضممت الى جروب @$user 
وبلغت في تفاعلك عدد الرسائل المطلوب : $msco
وتم إضافة $coo الى نقاطك .

💰 نقاطك الان : $coins
",'disable_web_page_preview'=>true,
]);
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$mm=$tmoil["info"]["info_groups"][$chat_id]["الاعضاء"];
$adminch=$tmoil["info"]["info_groups"][$chat_id]["admin"];
$user_id=$tmoil["info"]["info_groups"][$chat_id]["user"];
$cc=$tmoil["info"]["info_groups"][$chat_id]["تمت"];
$ccc=$cc+1;
$tmoil["info"]["info_groups"][$chat_id]["تمت"]=$ccc;

if($mm <= $ccc){
bot('sendmessage',[
'chat_id'=>$adminch,
'message_id'=>$message_id,
"text"=>"
✅ لقد تم الانتهاء من تمويل جروبك .
الجروب : @$user_id تم تمويلها بـ( $ccc ) عضواً
",'disable_web_page_preview'=>true,
]);
$arraych=$tmoil["info"]["groups"];
$index = array_search($chat_id, $arraych);
unset($tmoil["info"]["groups"][$index]);
$tmoil["info"]["groups"]=array_values($tmoil["info"]["groups"]);
}
file_put_contents("tmoil.json", json_encode($tmoil));
}
file_put_contents("data/$chat_id.json", json_encode($idjson));
}}
$left = $message->left_chat_member;
$left_id = $message->left_chat_member->id;
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$arraych_yes=$fromjson["info"][$left_id]["groups"];
$arraycyes=$idjson["info"]["arrayyes"];
if($left and in_array($chat_id,$arraych_yes) and in_array($from_id,$arraycyes)){
if($type=="supergroup" or $type=="group"){
$idjson = json_decode(file_get_contents("data/$chat_id.json"),true);
unset($idjson["info"]["الاعضاء"][$left_id]);
$con=$tmoil["info"]["info_groups"][$chat_id]["النقاط"];
$msco=$idjson["info"]["الرسائل"];
$arraycyes=$idjson["info"]["arrayyes"];

if(in_array($from_id,$arraycyes)){
$coins=coins($from_id,"n",$con);
$user=$message->chat->username;
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"🚫 لقد قمت بمغادرة 
القروب : @$user وتم خصم $con من نقاطك .

-تستطيع استعادة نقاطك عبر الدخول الى القروب وارسال $msco رسائل داخل القروب .


💰 نقاطك الحالية : $coins 
-
",'disable_web_page_preview'=>true,
]);
$arraycyes=$idjson["info"]["arrayyes"];
$index = array_search($from_id, $arraycyes);
unset($idjson["info"]["arrayyes"][$index]);
$idjson["info"]["arrayyes"]=array_values($idjson["info"]["arrayyes"]);
}
file_put_contents("data/$chat_id.json", json_encode($idjson));
}}



///////////////////////////
include("sudotmoil.php");
include("sitingbot.php");
/////////////////////////



$adna=$coin["الادنى"];if($adna==null){$adna=30;}
$refl=$coin["الاحالة"];
if($refl==null){$refl=2;}
$thoil=$coin["التحويل"];
if($thoil==null){$thoil=0;}
#اضافة نقاط #
if($data=="تحويل"){
$coins=coins($from_id,"null",$c);
if($coins > 0 and $coins > $adna ){
$fromjson["info"][$from_id]["amr"]="تحويل";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).
- نقاطك : $coins نقطة 
- عمولة التحويل : $thoil نقطة
- الحد الادنى للتحويل : $adna نقطة

✏
- قم بإرسال ايدي العضو الذي تريد تحويل النقاط له .
او قم بإعادة توجية رسالة من حسابة الى هنا .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء ','callback_data'=>"hooome"]],
]])
]);
}else{
bot('answercallbackquery',[ 
'callback_query_id'=>$update->callback_query->id,'text'=>"🚫 عدد نقاطك غير كافي للتحويل .
- نقاطك : $coins نقطة
- الحد الادنى للتحويل : $adna نقطة
- عمولة التحويل : $thoil نقطة.
",'show_alert'=>true
]);
}
}

$member = explode("\n",file_get_contents("sudo/member.txt"));
$ban = explode("\n",file_get_contents("sudo/ban.txt"));

if($text and !$date and !$message->forward_date and $amrjson=="تحويل"){

$stn = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result;
$nn= $stn->first_name." ".$stn->last_name;

if($nn!=null){
if(in_array($text,$member)){
if(!in_array($text,$ban)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"اسم العضو : $nn
ايدي العضو : $text 
قم بارسال عدد التي تريد تحويلها.  
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء ','callback_data'=>"hooome"]],
]])
]);
$fromjson["info"][$from_id]["amr"]="تحويل النقاط";
$fromjson["info"][$from_id]["fromcoins"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"🚫 لايمكن تحويل النقاط لعضو محظور 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء','callback_data'=>"hooome"]],
]])
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"🚫 لايمكن تحويل النقاط لعضو غير متواجد في البوت قم بدعوته اولا.
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء','callback_data'=>"hooome"]],
]])
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"🚫 لا يوجد شخص يحمل هذا الايدي $text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء ','callback_data'=>"hooome"]],
]])
]);
}
}

if($message->forward_date and $amrjson=="تحويل"){
$id=$message->forward_from->id;
if($message->forward_from->id){
$stn = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$id"))->result;
$nn= $stn->first_name." ".$stn->last_name;
if(in_array($id,$member)){
if(!in_array($id,$ban)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"اسم العضو : $nn
ايدي العضو : $id 
قم بارسال النقاط لكي يتم $t 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء ','callback_data'=>"hooome"]],
]])
]);
$fromjson["info"][$from_id]["amr"]="تحويل النقاط";
$fromjson["info"][$from_id]["fromcoins"]="$id";
file_put_contents("from_id.json", json_encode($fromjson));
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"🚫 لايمكنك تحويل النقاط لعضو محظور من البوت .
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء ','callback_data'=>"hooome"]],
]])
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"🚫 لايمكن تحويل النقاط لعضو غير متواجد في البوت قم بدعوته اولا.
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء','callback_data'=>"hooome"]],
]])
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"🚫 التوجية من العضو مقفل 

 لم يتم الحصول على ايدي العضو من خلال رسالة التوجية 
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء','callback_data'=>"hooome"]],
]])
]);
}
}

$idmecoinsmeb= $fromjson["info"][$from_id]["fromcoins"];
if($text and !$date and $amrjson=="تحويل النقاط" and is_numeric($text) and $idmecoinsmeb!=null){
$coins=coins($from_id,"null",$c);
if($coins < $text){$s="نقاطك غير كافية";}
if($text < $adna){$s="عدد النقاط المحولة اقل من الحد الادنى";}

if($coins >= $text and $text >= $adna ){
$om=$text-$thoil;
$coinsmy=coins($from_id,"n",$text);
$coinsyou=coins($idmecoinsmeb,"z",$om);
$stn = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmecoinsmeb"))->result;
$nn= $stn->first_name." ".$stn->last_name;
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تم تحويل : $text نقطة الى
$nn

- عمولة التحويل : $thoil نقطة.

💰 نقاطك الحالية : $coinsmy
",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"hooome"]],
]])
]);
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$fromjson["info"][$from_id]["amr"]="non";
unset($fromjson["info"][$from_id]["fromcoins"]);
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$idmecoinsmeb,
'message_id'=>$message_id,
"text"=>"✅ تم تحويل: $text نقطة الى نقاطك .
من : $name

- عمولة التحويل : $thoil نقطة.

💰 نقاطك الحالية : $coinsyou
",
]);
}else{
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"🚫 خطاء : $s
- الحد الادنى للتحويل : $adna نقطة
- عمولة التحويل : $thoil نقطة.
- نقاطك : $coins نقطة.
",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"hooome"]],
]])
]);
}
}
