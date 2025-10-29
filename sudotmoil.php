<?php
ob_start();
$wathq1= $kiindi;

if($message->new_chat_member and $message->new_chat_member->id == $idbot){
$count = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idbot"), true);

$bot = $info['result']['status'];
if($bot == "member"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"",'parse_mode'=>"markdown",
'disable_web_page_preview'=>'true',
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"",'parse_mode'=>"markdown",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' =>"- معلومات عن البوت 🕵",'callback_data' =>"info"]],
]])
]);
bot('sendMessage',[
'chat_id'=>$typee,
'text'=>"*
👨🏻‍💻⁞ اهلا عزيزي المدير. 
🕵⁞ هناك عضو قام باضافة البوت في. 
• ┉ • ┉ • ┉ • ┉ • ┉ •
• اسم المجموعة ⋙ـ $t
• ايدي المجموعة ⋙ـ *`$chat_id`*
• نوع الإضافة ⋙ عضوا فقط
• اعضاء المجموعة ⋙ـ $count $l
• عدد المجموعات المشتركة ⋙ـ $countgroups
• قام بإضافتي ⋙ـ *[$name](tg://user?id=$from_id)*
* 
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
 
if($bot == "administrator"){
$export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
$l = $export->result;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"",'parse_mode' =>"markdown",
'disable_web_page_preview' => true,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
]])
]);
bot('sendMessage',[
'chat_id'=>$typee,
'text'=>"*
👨🏻‍💻⁞ اهلا عزيزي المدير. 
🕵⁞ هناك عضو قام باضافة البوت في. 
• ┉ • ┉ • ┉ • ┉ • ┉ •
• اسم المجموعة ⋙ـ $t
• ايدي المجموعة ⋙ـ *`$chat_id`*
• نوع الإضافة ⋙ عضوا فقط
• اعضاء المجموعة ⋙ـ $count $l
• عدد المجموعات المشتركة ⋙ـ $countgroups
• قام بإضافتي ⋙ـ *[$name](tg://user?id=$from_id)*
*
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
if(!in_array($chat_id,$ex_groups)){
file_put_contents("sudo/groups.txt","$chat_id\n",FILE_APPEND);}
}
  ///۞𝗞𝗜𝗡𝗗𝗜۞///
if($textpost){
if(!in_array($chat_id,$ex_channels)){
$use = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$chat_id"));
$users=$use->result->username;
$u= "@$users";
if($users==null){
$users = json_decode(file_get_contents("http://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id"))->result;
$u = "$users";
}
  /////۞𝗞𝗜𝗡𝗗𝗜۞/////
$count = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
bot('sendMessage',[
'chat_id'=>$typee,
'text'=>"
*
👨🏻‍💻⁞ اهلا عزيزي المدير. 
🕵⁞ هناك عضو قام بالدخول الى بوتك.
• ┉ • ┉ • ┉ • ┉ • ┉ •
- اسم القناة ⋙ـ $t
- ايدي القناة ⋙ـ *`$chat_id`*
- اعضاء القناة ⋙ـ $count $u
- عدد القنوات المشتركة ⋙ـ $countchannels *
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
file_put_contents("sudo/channels.txt","$chat_id\n",FILE_APPEND);
}}
  /////۞𝗞𝗜𝗡𝗗𝗜۞/////
if($data == "memb" and  in_array($from_id,$sudo)){
$userb = strtoupper($userbot);
if($sppedtime == 3  or $sppedtime <3){
$f ="ممتازه";}
if($sppedtime == 9 or $sppedtime >9){
$f ="جيده";}
if($sppedtime == 10 or $sppedtime >10){
$f ="ضعيفه";}
///۞𝗞𝗜𝗡𝗗𝗜۞///
bot('sendmessage',[
"message_id"=>$message_id,
'chat_id'=>$chat_id,
'text'=>"*
✴️ الاحصائيات .

⌯¦ عدد الاعضاء ⋙ $cunte ،
⌯¦ عدد المجموعات ⋙ $countgroups ،
⌯¦ عدد القنوات ⋙ $countchannels ،
⌯¦ سرعة البوت ⋙ $f ،*
",'parse_mode' =>"markdown",
'disable_web_page_preview' => true ,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"🔙 𝙱𝙰𝙲𝙺",'callback_data'=>"home"]],
]])
]);
}
if($text=="الاوامر" or $text=="م" or $text=="مطور"){
if(in_array($from_id,$sudo) or  in_array($from_id,$admins)){
if($type=="private"){
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"🔖⁞ اهلا بك عزيزي 🙋🏽‍♂
🔖⁞ في اوامر البوت الكتابية !
• ┉ • ┉ • ┉ • ┉ • ┉ • 
🔖⁞ الادمنية⇜لعرض قائمة الادمنية .
🔖⁞ ارفعني⇜ارسل رقم الترقية لتصبح ادمن
🔖⁞ ترقية⇜لإنشاء رمز الترقية .
🔖⁞ تنزيل + ايدي⇜لتنزيل ادمن .
🔖⁞ تواقيت⇜لعرض التواقيت .
--
",'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[

[['text'=>'- تعيين الترحيب | start 💬 ','callback_data'=>"welc"]],
[['text'=>"- تعيين كليشة الاشتراك 🗄",'callback_data'=>"klish_sil"],['text'=>'- قنوات الاشتراك 🚫 ','callback_data'=>"viwechannel"]],
[['text'=>'- تعيين التعليمات 📋 ','callback_data'=>"infobot"],['text'=>'- اعدادات الاذاعة ⏺ ','callback_data'=>"ethaa"]],
[['text'=>"-✹ حالة البوت | $kindis ",'callback_data'=>"kindis"]],
[['text'=>"- حذف قنوات 🗑",'callback_data'=>"delchannel"],['text'=>"- اضافة قنوات 📟 ",'callback_data'=>"addchannel"]],
[['text'=>'- مكان استقبال الرسائل ✆','callback_data'=>"11111"]],
[['text'=>'- خاص البوت👤','callback_data'=>"typee"],
['text'=>'- المجموعة 🫂 ','callback_data'=>"supergruope"]],
[['text'=>'- نشر بالتوقيت ⏰ ','callback_data'=>"sendtime"],['text'=>'- الاحصائيات 📶 ','callback_data'=>"memb"]],
[['text'=>"🔄 توجية الاعضاء | $fwrmember ",'callback_data'=>"fwrmember"]],
[['text'=>'- المحظورين 🚷 ','callback_data'=>"ban"],['text'=>"- قسم الادمنية 👨‍💻 ",'callback_data'=>"admins"]],
[['text'=>"- اشعارات الدخول | $tnbih ",'callback_data'=>"tnbih"],['text'=>'- انشاء نسخة 📂','callback_data'=>"nnn"]],
[["text"=>"- اعادة ضبط البوت ⚙ ","callback_data"=>"delbot"]],
[["text"=>"- حظر عضو ⛔️","callback_data"=>"baan"],["text"=>"- الغاء حظر 🚫","callback_data"=>"unban"],["text"=>"- مسح الكل 🗑","callback_data"=>"unbanall"]],
[['text'=>'- خيارات الاشتراك 📦 ','callback_data'=>"nulll"]],
[['text'=>"🆕 الزر انلاين | $silk ",'callback_data'=>"silk"],['text'=>"✉️ الكليشة | $allch ",'callback_data'=>"allch"]],
[['text'=>"- إعدادات بوت التمويل ⚙",'callback_data'=>"stingbot"]],
]])]);
}}}