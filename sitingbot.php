
<?php

if($data == "stingbot" and in_array($from_id,$sudo)){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"
اهلا بك عزيزي الادمن في

قائمة التحكم الخاصة ببوت التمويل  
","message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ضبط القناة الرئيسية ⚙",'callback_data'=>"home_ch"]],

[['text'=>"- تمويل جروب 🛃",'callback_data'=>"tmoil_gr"],['text'=>"- تمويل بوت 🤖",'callback_data'=>"tmoil_bo"],['text'=>"- تمويل قناة 📡",'callback_data'=>"tmoil_ch"]],

[['text'=>"➖ خصم نقاط",'callback_data'=>"excoins"],['text'=>"➕ اضافة نقاط",'callback_data'=>"addcoins"]],

[['text'=>"- تحديد النقاط 📊",'callback_data'=>"null"]],

[['text'=>"- الهدية اليومية 🎁",'callback_data'=>"نقاطهدية"],['text'=>"- نقاط الاحالة ♻",'callback_data'=>"نقاطريفرل"]],

[['text'=>"- نقاط التحويل ↕",'callback_data'=>"نقاطتحويل"],['text'=>"- الحد الادنى ⬇",'callback_data'=>"الحدالادنى"]],

[['text'=>"- ارسال نقاط للكل 💰 ",'callback_data'=>"sendcoinsall"]],
[['text'=>"- خصم نقاط للكل ✂ ",'callback_data'=>"excoinsall"]],
[['text'=>"- التمويلات ⏰ ",'callback_data'=>"التمويلات"]],
[['text'=>"↩️ العودة الى الخلف ",'callback_data'=>"home"]],
]
])
]);
}

function stingbot($chat_id,$message_id){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"اهلا بك عزيزي الادمن 

في قائمة التحكم الخاصة ببوت التمويل  
","message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ضبط القناة الرئيسية ⚙",'callback_data'=>"home_ch"]],

[['text'=>"- تمويل جروب 🛃",'callback_data'=>"tmoil_gr"],['text'=>"- تمويل بوت 🤖",'callback_data'=>"tmoil_bo"],['text'=>"- تمويل قناة 📡",'callback_data'=>"tmoil_ch"]],

[['text'=>"➖ خصم نقاط",'callback_data'=>"excoins"],['text'=>"➕ اضافة نقاط",'callback_data'=>"addcoins"]],

[['text'=>"- تحديد النقاط 📊",'callback_data'=>"null"]],

[['text'=>"- الهدية اليومية 🎁",'callback_data'=>"نقاطهدية"],['text'=>"- نقاط الاحالة ♻",'callback_data'=>"نقاطريفرل"]],

[['text'=>"- نقاط التحويل ↕",'callback_data'=>"نقاطتحويل"],['text'=>"- الحد الادنى ⬇",'callback_data'=>"الحدالادنى"]],

[['text'=>"- ارسال نقاط للكل 💰 ",'callback_data'=>"sendcoinsall"]],
[['text'=>"- خصم نقاط للكل ✂ ",'callback_data'=>"excoinsall"]],
[['text'=>"- التمويلات ⏰ ",'callback_data'=>"التمويلات"]],
[['text'=>"↩️ العودة الى الخلف ",'callback_data'=>"home"]],
]
])
]);
} 
$fromjson = json_decode(file_get_contents("from_id.json"),true);

#home
if($data == "homesting" and in_array($from_id,$sudo)){
$fromjson["info"][$from_id]["amr"]="null";
file_put_contents("from_id.json", json_encode($fromjson));

$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
stingbot($chat_id,$message_id);
}
#القناة الرئيسية 
@$infosudo = json_decode(file_get_contents("sudo.json"),true);
$sudoamr= $infosudo["info"]["amr"];

if($data == "home_ch"){
$infosudo["info"]["amr"]="home_ch";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بإرسال معرف القناة الرئيسية 
","message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- الغاء ",'callback_data'=>"homesting"]],
]
])
]);
}
if($text  and $text !="/start" and $sudoamr=="home_ch" and in_array($from_id,$sudo) and !$message->forward_from_chat ){

$ch_id = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->id;
$idchan=$ch_id;
if($ch_id != null){

$checkadmin = getChatstats($text,$token);
if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->title;
$infosudo["info"]["الرئيسية"]["st"]="no";
$infosudo["info"]["الرئيسية"]["user"]="$text";
$infosudo["info"]["الرئيسية"]["id"]="$ch_id";
$infosudo["info"]["الرئيسية"]["name"]="$namechannel";
$infosudo["info"]["الرئيسية"]["coin"]="0";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة الرئيسة بنجاح 
info channel 
user : $text 
name : $namechannel
id : $ch_id

قم بإرسال النقاط التي سيحصل عليها العضو عند الاشتراك في القناة الرئيسية .
",'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- الغاء ",'callback_data'=>"homesting"]],
 ]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ البوت ليس ادمن في القناة 
- قم برفع البوت اولا لكي تتمكن من إضافتها 

",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- إعادة المحاولة  ",'callback_data'=>"home_ch"]],
]])
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ لم تتم إضافة القناة لا توجد قناة تمتلك هذا المعرف 
$text 
",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- عودة ",'callback_data'=>"homesting"]],
]])
]);
}
$infosudo["info"]["amr"]="home_ch_coin";
file_put_contents("sudo.json", json_encode($infosudo));
}

$infosudo = json_decode(file_get_contents("sudo.json"),true);

$na_ch=$infosudo["info"]["الرئيسية"]["name"];
$id_ch=$infosudo["info"]["الرئيسية"]["id"];
$us_ch=$infosudo["info"]["الرئيسية"]["user"];
if($text and !$date and $sudoamr=="home_ch_coin" and is_numeric($text)){

$infosudo["info"]["الرئيسية"]["st"]="yes";
$infosudo["info"]["الرئيسية"]["coin"]="$text";
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا $name

ℹ القناة الرئيسة 
- معرف القناة  : $us_ch
- ايدي القناة : $id_ch
- اسم القناة : $na_ch
- نقاط الاشتراك : $text

✅ تم الحفظ 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة  ' ,'callback_data'=>"homesting"]],
] 
])
]);
}
#تمويل قناة :
if($data=="tmoil_ch"){
$fromjson["info"][$from_id]["amr"]="tmoil_ch";
if($coins == null){
$fromjson["info"][$from_id]["coins"]="1000";
}
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا عزيزي الادمن [$name](tg://user?id=$chat_id).

- قم بإرسال معرف القناة التي تود اضافة التمويل لها.
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العودة  ','callback_data'=>"homesting"]],
] 
])
]);
}
if($text and !$date and $text !="/start" and $amrjson=="tmoil_ch"  and !$message->forward_from_chat ){

$ch_id = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->id;
$idchan=$ch_id;
if($ch_id != null){

$checkadmin = getChatstats($text,$token);

if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->title;

$fromjson["info"][$from_id]["انشاء"]["id_channel"]="$idchan";
$fromjson["info"][$from_id]["انشاء"]["name_channel"]="$namechannel";
$fromjson["info"][$from_id]["انشاء"]["user_channel"]="$text";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة بنجاح عزيزي الادمن 
info channel 
user : $text 
name : $namechannel
id : $ch_id

",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- متابعة الإنشاء ",'callback_data'=>"ttmoil_ch"]],
[['text'=>"- الغاء   ",'callback_data'=>"homesting"]],
]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ البوت ليس ادمن في القناة 
- قم برفع البوت اولا لكي تتمكن من إضافتها 
",'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- الغاء   ",'callback_data'=>"homesting"]],
 ]])
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
❌ لم تتم إضافة القناة لا توجد قناة تمتلك هذا المعرف 
$text 
",'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- الغاء ",'callback_data'=>"homesting"]],
 ]])
]);
}

file_put_contents("from_id.json", json_encode($fromjson));
return $false;
}

if($data=="ttmoil_ch"){
$fromjson["info"][$from_id]["amr"]="ttmoil_ch";
file_put_contents("from_id.json", json_encode($fromjson));

bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

- حسناً عزيزي الادمن قم الان بإرسال عدد الاعضاء الذين تريد تمويل القناة بهم .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة  ' ,'callback_data'=>"homesting"]],

   ] 
   ])
]);
}
#عدد الاعضاآ
if($text and !$date and $amrjson=="ttmoil_ch" and is_numeric($text)){

$fromjson["info"][$from_id]["amr"]="c_m_chpro";
$fromjson["info"][$from_id]["انشاء"]["الاعضاء"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

- قم الان بإرسال عدد النقاط التي سيحصل عليها العضو للاشتراك في قناتك .
يجب ان يكون العدد اكبر من 5 واصغر من 20.

",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"homesting"]],
   ] 
   ])
]);
}

#عدد النقاط
$coins=$fromjson["info"][$from_id]["coins"];
$id_channel=$fromjson["info"][$from_id]["انشاء"]["id_channel"];
$user_channel=$fromjson["info"][$from_id]["انشاء"]["user_channel"];
$countmember=$fromjson["info"][$from_id]["انشاء"]["الاعضاء"];
$coinsmember=$fromjson["info"][$from_id]["انشاء"]["النقاط"];
if($text and !$date and $amrjson=="c_m_chpro" and is_numeric($text)){

if($text > 5 and $text < 20 ){
$co=$text * $countmember;

$fromjson["info"][$from_id]["amr"]="non";
$fromjson["info"][$from_id]["انشاء"]["النقاط"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا عزيزي الادمن $name

ℹ معلومات التمويل 
- قناة التمويل : $user_channel
- عدد الاعضاء المطلوب : $countmember
- نقاط الاشتراك : $text
- قيمة التمويل : $co نقطة 

✅ قم بالضغط على زر حفظ لحفظ التمويل 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>' 💾 حفظ ','callback_data'=>"savechpro"]],
[['text'=>'الغاء ','callback_data'=>"homesting"]],
]])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

- 🚫 يجب ان يكون العدد اكبر من 5 واصغر من 20. 

- قم بإرسال عدد اخر 
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة  ','callback_data'=>"homesting"]],
]])
]);
}
}

#حفظ
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
if($data=="savechpro"){
$fromjson["info"][$from_id]["amr"]="non";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

✅ تم حفظ تمويل القناة بنجاح

- ⏳ جاري التمويل ...
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"homesting"]],
]])
]);
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$tmoil["info"]["channels"][]=$id_channel;
$tmoil["info"]["channelspro"][]=$id_channel;
$tmoil["info"]["info_channels"][$id_channel]["admin"]=$from_id;
$tmoil["info"]["info_channels"][$id_channel]["user"]=$user_channel;
$tmoil["info"]["info_channels"][$id_channel]["الاعضاء"]=$countmember;
$tmoil["info"]["info_channels"][$id_channel]["النقاط"]=$coinsmember;
$tmoil["info"]["info_channels"][$id_channel]["تمت"]="0";

file_put_contents("tmoil.json", json_encode($tmoil));
}
#تمويل بوتات 
if($data=="tmoil_bo"){
$fromjson["info"][$from_id]["amr"]="tmoil_bo";
if($coins == null){
$fromjson["info"][$from_id]["coins"]="1000";
}
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
[['text'=>'العودة','callback_data'=>"homesting"]],
]])
]);
}

if(!$date and $text !="/start" and $amrjson=="tmoil_bo"  and $message->forward_from ){
$st=$message->forward_from->is_bot;
if($st==true){
$nabot=$message->forward_from->first_name;
$usbot=$message->forward_from->username;
$idbot=$message->forward_from->id;
$fromjson["info"][$from_id]["انشاء"]["id_bot"]="$idbot";
$fromjson["info"][$from_id]["انشاء"]["name_bot"]="$nabot";
$fromjson["info"][$from_id]["انشاء"]["user_bot"]="$usbot";

bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة البوت بنجاح
info bot 
user : $usbot 
name : $nabot
id : $idbot
 
",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- متابعة الإنشاء ",'callback_data'=>"ttmoil_bo"]],
 [['text'=>"- الغاء   ",'callback_data'=>"homesting"]],
]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ قم بإعادة توجية منشور من البوت الذي تريد عمل التمويل له ة
 
",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- الغاء   ",'callback_data'=>"homesting"]],
]])
]);
}
file_put_contents("from_id.json", json_encode($fromjson));
}

if($data=="ttmoil_bo"){
$fromjson["info"][$from_id]["amr"]="ttmoil_bo";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

- حسناً عزيزي الادمن قم الان بإرسال عدد الاعضاء الذين تريد تمويل بوتك بهم .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"homesting"]],
]])
]);
}
#عدد الاعضاآ
if($text and !$date and $amrjson=="ttmoil_bo" and is_numeric($text)){
$fromjson["info"][$from_id]["amr"]="c_m_bopro";
$fromjson["info"][$from_id]["انشاء"]["الاعضاء"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

- قم الان بإرسال عدد النقاط التي سيحصل عليها العضو للاشتراك في بوتك .
يجب ان يكون العدد اكبر من 5 واصغر من 20.

",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"homesting"]],
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
if($text and !$date and $amrjson=="c_m_bopro" and is_numeric($text)){

if($text > 5 and $text < 20 ){
$co=$text * $countmember;
$fromjson["info"][$from_id]["amr"]="non";
$fromjson["info"][$from_id]["انشاء"]["النقاط"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا $name

ℹ معلومات التمويل 
- البوت الممول : $user_bot
- عدد الاعضاء المطلوب : $countmember
- نقاط الاشتراك : $text
- تم التمويل : $co نقطة

✅ قم بالضغط على زر حفظ لحفظ التمويل 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>' 💾 حفظ   ','callback_data'=>"savebotpro"]],
[['text'=>'الغاء ','callback_data'=>"homesting"]],
]])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

- 🚫 يجب ان يكون العدد اكبر من 5 واصغر من 20. 

- قم بإرسال عدد اخر 
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"homesting"]],
]])
]);
}
}

#حفظ
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
if($data=="savebotpro"){
$fromjson["info"][$from_id]["amr"]="non";
file_put_contents("from_id.json", json_encode($fromjson));
$coo=$coinsmember * $countmember;
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

✅ تم حفظ تمويل بوت مدفوع 
- ⏳ جاري التمويل ...
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"homesting"]],
]])
]);
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$tmoil["info"]["bots"][]=$id_bot;
$tmoil["info"]["botspro"][]=$id_bot;
$tmoil["info"]["info_bots"][$id_bot]["admin"]=$from_id;
$tmoil["info"]["info_bots"][$id_bot]["user"]=$user_bot;
$tmoil["info"]["info_bots"][$id_bot]["name"]=$name_bot;
$tmoil["info"]["info_bots"][$id_bot]["الاعضاء"]=$countmember;
$tmoil["info"]["info_bots"][$id_bot]["النقاط"]=$coinsmember;
$tmoil["info"]["info_bots"][$id_bot]["تمت"]="0";
file_put_contents("tmoil.json", json_encode($tmoil));
}
#تمويل قروبات 
if($data=="tmoil_gr"){
$fromjson["info"][$from_id]["amr"]="tmoil_gr";
if($coins == null){
$fromjson["info"][$from_id]["coins"]="1000";
}
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

- قم برفع البوت مشرف في القروب وارسل امر ( تمويل ) في القروب سيقوم البوت بالرد عليك في خاص البوت .
⚠ تنوية : يجيب ان يكون قروبك عام ولدية معرف .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العودة  ' ,'callback_data'=>"homesting"]],
]])
]);
}

if($text =="تمويل" and  !$date and $text !="/start" and $amrjson=="tmoil_gr" ){
if($type=="supergroup" or $type=="group"){
$title=$message->chat->title;
$user=$message->chat->username;
if($user!=null){
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
[['text'=>"- متابعة الإنشاء ",'callback_data'=>"ttmoil_gr"]],
[['text'=>"- الغاء   ",'callback_data'=>"homesting"]],
]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ لايمكنك اضافة القروبات الخاصة او التي ليس لديها معرف . 
",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- الغاء   ",'callback_data'=>"homesting"]],
]])
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ قم بإرسال الرسالة من القروب بعد رفع البوت كمشرف في القروب . ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- الغاء   ",'callback_data'=>"homesting"]],
]])
]);
}
file_put_contents("from_id.json", json_encode($fromjson));
}

if($data=="ttmoil_gr"){
$fromjson["info"][$from_id]["amr"]="ttmoil_gr";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

- حسناً عزيزي قم الان بإرسال عدد الاعضاء الذين تريد القروب بهم .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة  ' ,'callback_data'=>"homesting"]],
]])
]);
}






#عدد الاعضاآ
if($text and !$date and $amrjson=="ttmoil_gr" and is_numeric($text)){

$fromjson["info"][$from_id]["amr"]="c_m_grpro";
$fromjson["info"][$from_id]["انشاء"]["الاعضاء"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

- قم الان بإرسال عدد النقاط التي سيحصل عليها العضو للاشتراك في القروب .
يجب ان يكون العدد اكبر من 5 واصغر من 20.
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة  ' ,'callback_data'=>"homesting"]],
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
if($text and !$date and $amrjson=="c_m_grpro" and is_numeric($text)){

if($text > 5 and $text < 20 ){
$co=$text * $countmember;

$fromjson["info"][$from_id]["amr"]="mesg_grpto";
$fromjson["info"][$from_id]["انشاء"]["النقاط"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

- قم الان بإرسال عدد الرسائل الي سيرسلها العضو في القروب قبل ان يحصل على النقاط . اختر عدد الرسائل مابين 0 - 100 رسالة .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة  ' ,'callback_data'=>"homesting"]],
]])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

- 🚫 يجب ان يكون العدد اكبر من 5 واصغر من 20. 

- قم بإرسال عدد اخر 
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة  ' ,'callback_data'=>"homesting"]],
]])
]);
}
}

if($text and !$date and $amrjson=="mesg_grpto" and is_numeric($text)){
if($text <= 100 ){
$fromjson["info"][$from_id]["amr"]="non";
$fromjson["info"][$from_id]["انشاء"]["الرسائل"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
$co=$coinsmember * $countmember;
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا $name

ℹ معلومات التمويل 
- قروب التمويل : @$user_group
- عدد الاعضاء المطلوب : $countmember
- نقاط الاشتراك : $coinsmember
- الرسائل المطلوبة : $text
- قيمة التمويل : $co نقطة .

✅ قم بالضغط على زر حفظ لحفظ التمويل 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>' 💾 حفظ   ' ,'callback_data'=>"savegrouppro"]],
[['text'=>'الغاء  ' ,'callback_data'=>"homesting"]],

   ] 
   ])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

- 🚫 يجب ان يكون العدد اصغر من 100 رسالة .
- قم بإرسال عدد اخر 
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء  ' ,'callback_data'=>"homesting"]],

   ] 
   ])
]);
}
}
#حفظ
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
if($data=="savegrouppro"){
$fromjson["info"][$from_id]["amr"]="non";
file_put_contents("from_id.json", json_encode($fromjson));
$coo=$coinsmember * $countmember;
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).

✅ تم حفظ تمويل قروب مدفوع

- ⏳ جاري التمويل ...
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة  ' ,'callback_data'=>"homesting"]],

   ] 
   ])
]);
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$tmoil["info"]["groups"][]=$id_group;
$tmoil["info"]["groupspspro"][]=$id_group;

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
#اضافة نقاط #
if($data=="addcoins"){
$infosudo["info"]["amr"]="addcoins";
file_put_contents("sudo.json", json_encode($infosudo));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).
✏
- قم بإرسال ايدي العضو الذي تريد تحويل النقاط له .
او قم بإعادة توجية رسالة من حسابة الى هنا .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العودة  ' ,'callback_data'=>"homesting"]],

   ] 
   ])
]);
}

if($data=="excoins"){
$infosudo["info"]["amr"]="excoins";
file_put_contents("sudo.json", json_encode($infosudo));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).
✂
- قم بإرسال ايدي العضو الذي تريد الخصم من نقاطة .
او قم بإعادة توجية رسالة من حسابة الى هنا .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العودة  ' ,'callback_data'=>"homesting"]],

   ] 
   ])
]);
}

$member = explode("\n",file_get_contents("sudo/member.txt"));
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
@$infosudo = json_decode(file_get_contents("sudo.json"),true);
$sudoamr= $infosudo["info"]["amr"];

if($text and !$date and  is_numeric($text) and !$message->forward_date and in_array($from_id,$sudo)){
if($sudoamr=="addcoins" or $sudoamr=="excoins" ){
if($sudoamr=="addcoins" ){
$t="اضافتها الى نقاطة ✏";
$st="add";
}
if($sudoamr=="excoins" ){
$t="خصمها من نقاطة ✂";
$st="ex";
}
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
قم بارسال النقاط لكي يتم $t  
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء' ,'callback_data'=>"homesting"]],
   ] 
   ])
]);
$infosudo["info"]["amr"]="$st";
$infosudo["info"]["fromcoins"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"🚫 قم برفع الحظر عن هذا العضو اولا. 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء' ,'callback_data'=>"homesting"]],
   ] 
   ])
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"🚫 هذا العضو غير موجود في البوت 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء' ,'callback_data'=>"homesting"]],
   ] 
   ])
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
[['text'=>'الغاء' ,'callback_data'=>"homesting"]],
   ] 
   ])
]);
}
}
}

if($message->forward_date and in_array($from_id,$sudo)){
if($sudoamr=="addcoins" or $sudoamr=="excoins" ){
$id=$message->forward_from->id;
if($message->forward_from->id){

$stn = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$id"))->result;
$nn= $stn->first_name." ".$stn->last_name;
if($sudoamr=="addcoins" ){
$t="اضافتها الى نقاطة ✏";
$st="add";
}
if($sudoamr=="excoins" ){
$t="خصمها من نقاطة ✂";
$st="ex";
}

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
[['text'=>'الغاء' ,'callback_data'=>"homesting"]],
   ] 
   ])
]);
$infosudo["info"]["amr"]="$st";
$infosudo["info"]["fromcoins"]="$id";
file_put_contents("sudo.json", json_encode($infosudo));
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"🚫 قم برفع الحظر عن هذا العضو اولا. 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء' ,'callback_data'=>"homesting"]],
   ] 
   ])
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"🚫 هذا العضو غير موجود في البوت 
",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء' ,'callback_data'=>"homesting"]],
   ] 
   ])
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"🚫 التوجية من العضو مقفل 

 لم يتم الحصول على ايدي العضو من خلال رسالة التوجية ",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء' ,'callback_data'=>"homesting"]],
   ] 
   ])
]);
}
}
}
@$infosudo = json_decode(file_get_contents("sudo.json"),true);
$idmecoins= $infosudo["info"]["fromcoins"];

if($text and !$date and $sudoamr=="add" and is_numeric($text)  and in_array($from_id,$sudo)){
$coins=coins($idmecoins,"z",$text);

bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تمت اضافة : $text نقطة الى نقاط العضو بنجاح ،
💰 نقاطه الحالية : $coins
",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة' ,'callback_data'=>"homesting"]],
   ] 
   ])
]);
$infosudo["info"]["amr"]="null";
unset($infosudo["info"]["fromcoins"]);
file_put_contents("sudo.json", json_encode($infosudo));
bot('sendmessage',[
'chat_id'=>$idmecoins,
'message_id'=>$message_id,
"text"=>"✅ تمت اضافة : $text نقطة الى نقاطك .

💰 نقاطك الحالية : $coins
",
]);
}
if($text and !$date and $sudoamr=="ex" and is_numeric($text)  and in_array($from_id,$sudo)){
$coins=coins($idmecoins,"n",$text);
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تمت ✂ خصم  : $text نقطة من نقاط العضو بنجاح ،
💰 نقاطه الحالية : $coins
",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة' ,'callback_data'=>"homesting"]],
   ] 
   ])
]);
$infosudo["info"]["amr"]="null";
unset($infosudo["info"]["fromcoins"]);
file_put_contents("sudo.json", json_encode($infosudo));
bot('sendmessage',[
'chat_id'=>$idmecoins,
'message_id'=>$message_id,
"text"=>"🚫 تمت ✂ خصم  : $text نقطة الى نقاطك .

💰 نقاطك الحالية : $coins
",
]);
}
#نقاط الهدية 
if($data=="نقاطهدية"){
$infosudo["info"]["amr"]="نقاطهدية";
file_put_contents("sudo.json", json_encode($infosudo));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).
✏
- قم بإرسال عدد النقاط التي سيحصل عليها الاعضاء كـ  هدية يومية .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العودة  ' ,'callback_data'=>"homesting"]],

   ] 
   ])
]);
}

if($text and !$date and $sudoamr=="نقاطهدية" and is_numeric($text)  and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تمت ضبط : $text نقطة لتكون هدية يومية للمشتركين ،
",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة' ,'callback_data'=>"homesting"]],
   ] 
   ])
]);
$infosudo["info"]["amr"]="null";
$infosudo["info"]["النقاط"]["يومية"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}
#نقاط الاحالة
if($data=="نقاطريفرل"){
$infosudo["info"]["amr"]="نقاطريفرل";
file_put_contents("sudo.json", json_encode($infosudo));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).
✏
- قم بإرسال عدد النقاط التي سيحصل عليها الاعضاء عند دخول الاشخاص من رابط إحالتهم الخاص .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العودة  ' ,'callback_data'=>"homesting"]],

   ] 
   ])
]);
}
#نقاط الاحالة
if($text and !$date and $sudoamr=="نقاطريفرل" and is_numeric($text)  and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تمت ضبط : $text نقطة لكل الاعضاء مكافئه على دخول الاشخاص من رابط الاحالة الخاص بهم 
",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة' ,'callback_data'=>"homesting"]],
   ] 
   ])
]);
$infosudo["info"]["amr"]="null";
$infosudo["info"]["النقاط"]["الاحالة"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}
#نقاط تحويل
if($data=="نقاطتحويل"){
$infosudo["info"]["amr"]="نقاطتحويل";
file_put_contents("sudo.json", json_encode($infosudo));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).
✏
- قم بإرسال عدد النقاط التي سيتم خصمها من النقاط التي يقوم الاعضاء بتحويلها الى بعضهم البعض .
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العودة  ' ,'callback_data'=>"homesting"]],

   ] 
   ])
]);
}
#نقاط التحويل
if($text and !$date and $sudoamr=="نقاطتحويل" and is_numeric($text)  and in_array($from_id,$sudo)){

bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تمت ضبط : $text نقطة سيتم خصمها من نقاط التحويل .

",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة' ,'callback_data'=>"homesting"]],
   ] 
   ])
]);
$infosudo["info"]["amr"]="null";
$infosudo["info"]["النقاط"]["التحويل"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}
#الحدالادنى للتحويل
if($data=="الحدالادنى"){
$infosudo["info"]["amr"]="الحدالادنى";
file_put_contents("sudo.json", json_encode($infosudo));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).
✏
- قم بإرسال عدد النقاط التي ستكون هي الحد الادنى لعدد النقاط المحولة بين الاعضاء

",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العودة  ' ,'callback_data'=>"homesting"]],
]])
]);
}

if($text and !$date and $sudoamr=="الحدالادنى" and is_numeric($text)  and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تمت ضبط : $text نقطة كـ حد ادنى لعمليات التحويل .
",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة' ,'callback_data'=>"homesting"]],
   ] 
   ])
]);
$infosudo["info"]["amr"]="null";
$infosudo["info"]["النقاط"]["الادنى"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}
#اذاعة نقاط
if($data=="sendcoinsall" and in_array($from_id,$sudo)){
$infosudo["info"]["amr"]="sendcoinsall";
file_put_contents("sudo.json", json_encode($infosudo));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).
✏
- قم بإرسال النقاط لكي يتم تحويلها الى جميع الاعضاء
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العودة  ' ,'callback_data'=>"homesting"]],
]])
]);
}

if($text and !$date and $sudoamr=="sendcoinsall" and is_numeric($text)  and in_array($from_id,$sudo)){
unlink('Member.txt');
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تمت ضبط : $text نقطة ليتم تحويلها الى جميع الاعضاء 
- اضغط ارسال النقاط للتاكيد او الغاء لإلغاء العملية .
",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء  ' ,'callback_data'=>"homesting"]],
[['text'=>'ارسال النقاط' ,'callback_data'=>"sendcoins $text"]],
]])
]);
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
#ارسال النقاط 
$members = explode("\n",file_get_contents("sudo/member.txt"));
if(preg_match('/^(sendcoins) (.*)/s', $data) and in_array($from_id,$sudo)){
$co = str_replace('sendcoins ',"",$data);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).
⏳ جاري ارسال $co نقطة لجميع الاعضاء ..
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
foreach($members as $key){
$user = file_get_contents('Member.txt');
$membersyes = explode("\n",$user);

if(!in_array($key,$membersyes)){
$add_user = file_get_contents('Member.txt');
$add_user .= $key."\n";
file_put_contents('Member.txt',$add_user);
$coins=coins($key,"z",$co);
bot('sendmessage',[
'chat_id'=>$key,
'message_id'=>$message_id,
"text"=>"✅ تمت اضافة : $co نقطة الى نقاطك .

💰 نقاطك الحالية : $coins
",
]);
}
}
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تمت اهداء : $co نقطة  لجميع الاعضاء.
",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"homesting"]],
] 
])
]);
}
#اذاعة نقاط
if($data=="excoinsall" and in_array($from_id,$sudo)){

$infosudo["info"]["amr"]="excoinsall";
file_put_contents("sudo.json", json_encode($infosudo));
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).
✂
- قم بإرسال النقاط لكي يتم خصمها الى جميع الاعضاء
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'العودة  ','callback_data'=>"homesting"]],
]])
]);
}

if($text and !$date and $sudoamr=="excoinsall" and is_numeric($text)  and in_array($from_id,$sudo)){
unlink('Member.txt');
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تمت ضبط : $text نقطة ليتم ✂ خصمها من جميع الاعضاء 
- اضغط ارسال النقاط للتاكيد او الغاء لإلغاء العملية .
",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء ','callback_data'=>"homesting"]],
[['text'=>'ارسال النقاط','callback_data'=>"exallcoins $text"]],
]])
]);
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
#ارسال النقاط 
$members = explode("\n",file_get_contents("sudo/member.txt"));
if(preg_match('/^(exallcoins) (.*)/s', $data) and in_array($from_id,$sudo)){
$co = str_replace('exallcoins ',"",$data);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id).
⏳ جار ✂ خصم $co نقطة من جميع الاعضاء ..
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
foreach($members as $key){
$user = file_get_contents('Member.txt');
$membersyes = explode("\n",$user);

if(!in_array($key,$membersyes)){
$add_user = file_get_contents('Member.txt');
$add_user .= $key."\n";
file_put_contents('Member.txt',$add_user);
$coins=coins($key,"n",$co);
bot('sendmessage',[
'chat_id'=>$key,
'message_id'=>$message_id,
"text"=>"✂ تمت خصم : $co نقطة من نقاطك .

💰 نقاطك الحالية : $coins
",
]);
}
}
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تمت ✂ خصم : $co نقطة  من جميع الاعضاء.
",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة ','callback_data'=>"homesting"]],
] 
])
]);
}
#التمويلات
if($data=="التمويلات" and in_array($from_id,$sudo)){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"⏳ انتظر قليلا من فظلك ...
",
]);
$tmoil = json_decode(file_get_contents("tmoil.json"),true);
$arraych=$tmoil["info"]["channels"];
$arraychpro=$tmoil["info"]["channelspro"];
for($i=0;$i<count($arraych);$i++){
$id_ch=$arraych[$i];
if($id_ch!=null){
$user_id=$tmoil["info"]["info_channels"][$id_ch]["user"];
$mm=$tmoil["info"]["info_channels"][$id_ch]["الاعضاء"];
$cc=$tmoil["info"]["info_channels"][$id_ch]["النقاط"];
$tm=$tmoil["info"]["info_channels"][$id_ch]["تمت"];
$mb= $mm - $tm ; 
$t="$t\n🔥 $user_id\n💰 : $cc | ⬆ : $tm  | ⏳ : $mb";
}
}
for($l=0;$l<count($arraychpro);$l++){
$id_ch=$arraychpro[$l];
if($id_ch!=null){
$user_id=$tmoil["info"]["info_channels"][$id_ch]["user"];
$mm=$tmoil["info"]["info_channels"][$id_ch]["الاعضاء"];
$cc=$tmoil["info"]["info_channels"][$id_ch]["النقاط"];
$tm=$tmoil["info"]["info_channels"][$id_ch]["تمت"];
$mb= $mm - $tm ; 
$pro="$pro\n🔥 $user_id\n💰 : $cc | ⬆ : $tm  |  ⏳ : $mb";
}
}
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"💠 قنوات التمويل العادية 
$t 

🌟 قنوات التمويل المميزة 
$pro 
",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عودة','callback_data'=>"homesting"]],
] 
])
]);
}