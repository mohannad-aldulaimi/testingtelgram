<?php 

define("TOKEN",'5115892498:AAEM70EgcD2P4kQRAMPTR1d4l8swMprd7D8'); 

function bot($method,$datas=[]){
    $iBadlz = http_build_query($datas);
        $url = "https://api.telegram.org/bot".TOKEN."/".$method."?$iBadlz";
        $iBadlz = file_get_contents($url);
        return json_decode($iBadlz);
}
function Add($path,$content){
	$file = fopen("$path","a") or die("Unable to open file!");
	fwrite($file,"$content");
	fclose($file);
}
function GetUpdates($offset=null,$limit=100,$timeout=null,$allowed_updates=[]){
    return bot('getUpdates',[
    'offset'=>$offset,
    'limit'=>$limit,
    'timeout'=>$timeout,
    'allowed_updates'=>$allowed_updates
    ]);
}
function SetWebhook($url,$certificate=null,$max_connections=100,$allowed_updates=[]){
	return bot('setWebhook',[
	'url'=>$url,
	'certificate'=>$certificate,
	'max_connections'=>$max_connections,
	'allowed_updates'=>$allowed_updates,
	]);
}
function DeleteWebhook(){
	return bot('deleteWebhook');
}
function GetWebhookInfo(){
	return bot('getWebhookInfo');
}
function SendChatAction($chat_id,$action){
	bot('sendChatAction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
}
function SendMessage($chat_id,$text,$parse_mode="MARKDOWN",$disable_web_page_preview=true,$reply_to_message_id=null,$reply_markup=null){
    return bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$parse_mode,
	'disable_web_page_preview'=>$disable_web_page_preview,
	'disable_notification'=>false,
	'reply_to_message_id'=>$reply_to_message_id,
	'reply_markup'=>$reply_markup
	]);
}
function ForwardMessage($chat_id,$from_chat_id,$message_id){
	return bot('forwardMessage',[
	'chat_id'=>$chat_id,
	'from_chat_id'=>$from_chat_id,
	'disable_notification'=>false,
	'message_id'=>$message_id
	]);
}
function SendPhoto($chat_id,$photo,$caption=null,$parse_mode="MARKDOWN",$reply_to_message_id=null,$reply_markup=null){
	return bot('sendPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'caption'=>$caption,
	'parse_mode'=>$parse_mode,
	'disable_notification'=>false,
	'reply_to_message_id'=>$reply_to_message_id,
	'reply_markup'=>$reply_markup
	]);
}
function SendAudio($chat_id,$audio,$caption=null,$parse_mode="MARKDOWN",$duration=null,$performer=null,$title=null,$thumb=null,$reply_to_message_id=null,$reply_markup=null){
	return bot('sendAudio',[
	'chat_id'=>$chat_id,
	'audio'=>$audio,
	'caption'=>$caption,
	'parse_mode'=>$parse_mode,
	'duration'=>$duration,
	'performer'=>$performer,
	'title'=>$title,
	'thumb'=>$thumb,
	'disable_notification'=>false,
	'reply_to_message_id'=>$reply_to_message_id,
	'reply_markup'=>$reply_markup
	]);
}
function SendDocument($chat_id,$document,$thumb=null,$caption=null,$parse_mode="MARKDOWN",$reply_to_message_id=null,$reply_markup=null){
	return bot('sendDocument',[
	'chat_id'=>$chat_id,
	'document'=>$document,
	'thumb'=>$thumb,
	'caption'=>$caption,
	'parse_mode'=>$parse_mode,
	'disable_notification'=>false,
	'reply_to_message_id'=>$reply_to_message_id,
	'reply_markup'=>$reply_markup
	]);
}
function SendVideo($chat_id,$video,$duration=null,$width=null,$height=null,$thumb=null,$caption=null,$parse_mode="MARKDOWN",$reply_to_message_id=null,$reply_markup=null,$supports_streaming=null){
	return bot('sendVideo',[
	'chat_id'=>$chat_id,
	'video'=>$video,
	'duration'=>$duration,
	'width'=>$width,
	'height'=>$height,
	'thumb'=>$thumb,
    'caption'=>$caption,
	'parse_mode'=>$parse_mode,
	'supports_streaming'=>$supports_streaming,
	'disable_notification'=>false,
	'reply_to_message_id'=>$reply_to_message_id,
	'reply_markup'=>$reply_markup
	]);
}
function SendAnimation($chat_id,$animation,$duration=null,$width=null,$height=null,$thumb=null,$caption=null,$parse_mode="MARKDOWN",$reply_to_message_id=null,$reply_markup=null){
	return bot('sendAnimation',[
	'chat_id'=>$chat_id,
	'animation'=>$animation,
	'duration'=>$duration,
	'width'=>$width,
	'height'=>$height,
	'thumb'=>$thumb,
    'caption'=>$caption,
	'parse_mode'=>$parse_mode,
	'disable_notification'=>false,
	'reply_to_message_id'=>$reply_to_message_id,
	'reply_markup'=>$reply_markup
	]);
}
function SendVoice($chat_id,$voice,$caption=null,$parse_mode="MARKDOWN",$duration=null,$reply_to_message_id=null,$reply_markup=null){
	return bot('sendVoice',[
	'chat_id'=>$chat_id,
	'voice'=>$voice,
	'caption'=>$caption,
	'parse_mode'=>$parse_mode,
	'duration'=>$duration,
	'disable_notification'=>false,
	'reply_to_message_id'=>$reply_to_message_id,
	'reply_markup'=>$reply_markup
	]);
}
function SendVideoNote($chat_id,$video_note,$duration=null,$length=null,$width=null,$height=null,$thumb=null,$caption=null,$parse_mode="MARKDOWN",$reply_to_message_id=null,$reply_markup=null){
	return bot('sendVideoNote',[
	'chat_id'=>$chat_id,
	'video_note'=>$video_note,
	'duration'=>$duration,
	'length'=>$length,
	'thumb'=>$thumb,
	'disable_notification'=>false,
	'reply_to_message_id'=>$reply_to_message_id,
	'reply_markup'=>$reply_markup
	]);
}
function SendMediaGroup($chat_id,$media,$reply_to_message_id=null){
	return bot('sendMediaGroup',[
	'chat_id'=>$chat_id,
	'media'=>$media,
	'disable_notification'=>false,
	'reply_to_message_id'=>$reply_to_message_id
	]);
}
function SendLocation($chat_id,$latitude,$longitude,$live_period=null,$reply_to_message_id=null,$reply_markup=null){
	return bot('sendLocation',[
	'chat_id'=>$chat_id,
	'latitude'=>$latitude,
	'longitude'=>$longitude,
	'live_period'=>$live_period,
	'disable_notification'=>false,
	'reply_to_message_id'=>$reply_to_message_id,
	'reply_markup'=>$reply_markup
	]);
}
function SendContact($chat_id,$phone_number,$first_name,$last_name=null,$reply_to_message_id=null,$reply_markup=null,$vcard=null){
	return bot('sendContact',[
	'chat_id'=>$chat_id,
	'phone_number'=>$phone_number,
	'first_name'=>$first_name,
	'last_name'=>$last_name,
	'vcard'=>$vcard,
	'disable_notification'=>false,
	'reply_to_message_id'=>$reply_to_message_id,
	'reply_markup'=>$reply_markup
	]);
}
function SendPoll($chat_id,$question,$options,$reply_to_message_id=null,$reply_markup=null){
	return bot('sendPoll',[
	'chat_id'=>$chat_id,
	'question'=>$question,
	'options'=>$options,
	'disable_notification'=>false,
	'reply_to_message_id'=>$reply_to_message_id,
	'reply_markup'=>$reply_markup
	]);
}
function GetUserProfilePhotos($user_id,$offset=null,$limit=null){
    return bot('getUserProfilePhotos',[
	'user_id'=>$user_id,
	'offset'=>$offset,
	'limit'=>$limit
	]);
}
function GetFile($file_id){
    return bot('getFile',[
	'file_id'=>$file_id
	]);
}
function KickChatMember($chat_id,$user_id,$until_date=null){
	return bot('kickChatMember',[
	'chat_id'=>$chat_id,
	'user_id'=>$user_id,
	'until_date'=>$until_date
	]);
}
function PromoteChatMember($chat_id,$user_id){
	return bot('promoteChatMember',[
	'chat_id'=>$chat_id,
	'user_id'=>$user_id,
	'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
	]);
}
function DemoteChatMember($chat_id,$user_id){
	return bot('promoteChatMember',[
	'chat_id'=>$chat_id,
	'user_id'=>$user_id,
	'can_change_info'=>false,
	'can_post_messages'=>false,
	'can_edit_messages'=>false,
	'can_delete_messages'=>false,
	'can_invite_users'=>false,
	'can_restrict_members'=>false,
	'can_pin_messages'=>false,
	'can_promote_members'=>false
	]);
}
function ExportChatInviteLink($chat_id){
    return bot('exportChatInviteLink',[
	'chat_id'=>$chat_id
	]);
}
function SetChatPhoto($chat_id,$photo){
	return bot('setChatPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo
	]);
}
function DeleteChatPhoto($chat_id){
	return bot('deleteChatPhoto',[
	'chat_id'=>$chat_id
	]);
}
function SetChatTitle($chat_id,$title){
	return bot('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$title
    ]);
}
function SetChatDescription($chat_id,$description){
	return bot('setChatDescription',[
    'chat_id'=>$chat_id,
    'description'=>$description
    ]);
}
function PinChatMessage($chat_id,$message_id){
	return bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
	'disable_notification'=>false
    ]);
}
function UnpinChatMessage($chat_id){
	return bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    ]);
}
function LeaveChat($chat_id){
	return bot('LeaveChat',[
	'chat_id'=>$chat_id
	]);
}
function GetChat($chat_id){
    return bot('getChat',[
	'chat_id'=>$chat_id
	]);
}
function GetChatAdministrators($chat_id){
    return bot('getChatAdministrators',[
	'chat_id'=>$chat_id
	]);
}
function GetChatMembersCount($chat_id){
    return bot('getChatMembersCount',[
	'chat_id'=>$chat_id
	]);
}
function GetChatMember($chat_id,$user_id){
    return bot('getChatMember',[
	'chat_id'=>$chat_id,
	'user_id'=>$user_id
	]);
}
function AnswerCallbackQuery($callback_query_id,$text,$show_alert=false,$url=null,$cache_time=0){
	return bot('answerCallbackQuery',[
    'callback_query_id'=>$callback_query_id,
    'text'=>$text,
    'show_alert'=>$show_alert,
    'url'=>$url,
    'cache_time'=>$cache_time
    ]);
}
function EditMessageText($chat_id,$message_id,$text,$inline_message_id=null,$parse_mode="MARKDOWN",$disable_web_page_preview=true,$reply_markup=null){
	return bot('editMessageText',[
    'chat_id'=>$chat_id,
	'message_id'=>$message_id,
	'inline_message_id'=>$inline_message_id,
    'text'=>$text,
    'parse_mode'=>$parse_mode,
	'disable_web_page_preview'=>$disable_web_page_preview,
    'reply_markup'=>$reply_markup
	]);
}
function EditMessageCaption($chat_id,$message_id,$caption,$inline_message_id=null,$parse_mode="MARKDOWN",$reply_markup=null){
	return bot('editMessageCaption',[
    'chat_id'=>$chat_id,
	'message_id'=>$message_id,
	'inline_message_id'=>$inline_message_id,
    'caption'=>$caption,
    'parse_mode'=>$parse_mode,
    'reply_markup'=>$reply_markup
	]);
}
function EditMessageMedia($chat_id,$message_id,$media,$inline_message_id=null,$parse_mode="MARKDOWN",$reply_markup=null){
	return bot('editMessageMedia',[
    'chat_id'=>$chat_id,
	'message_id'=>$message_id,
	'inline_message_id'=>$inline_message_id,
    'media'=>$media,
    'reply_markup'=>$reply_markup
	]);
}
function EditMessageReplyMarkup($chat_id,$message_id,$reply_markup,$inline_message_id=null){
	return bot('editMessageReplyMarkup',[
    'chat_id'=>$chat_id,
	'message_id'=>$message_id,
	'inline_message_id'=>$inline_message_id,
    'reply_markup'=>$reply_markup
	]);
}
function StopPoll($chat_id,$message_id,$reply_markup=null){
	return bot('stopPoll',[
    'chat_id'=>$chat_id,
	'message_id'=>$message_id,
    'reply_markup'=>$reply_markup
	]);
}
function DeleteMessage($chat_id,$message_id){
	return bot('deletemessage',[
	'chat_id'=>$chat_id,
	'message_id'=>$message_id
	]);
}
function SendSticker($chat_id,$sticker,$reply_to_message_id=null,$reply_markup=null){
	return bot('sendSticker',[
	'chat_id'=>$chat_id,
	'sticker'=>$sticker,
	'disable_notification'=>false,
	'reply_to_message_id'=>$reply_to_message_id,
	'reply_markup'=>$reply_markup
	]);
}
function AnswerInlineQuery($inline_query_id,$results,$cache_time=0,$is_personal=false,$next_offset=null,$switch_pm_text=null,$switch_pm_parameter=null){
	return bot('answerInlineQuery',[
    'inline_query_id'=>$inline_query_id,
    'results'=>$results,
    'cache_time'=>$cache_time,
    'is_personal'=>$is_personal,
    'next_offset'=>$next_offset,
    'switch_pm_text'=>$switch_pm_text,
    'switch_pm_parameter'=>$switch_pm_parameter
    ]);
}
function SendGame($chat_id,$game_short_name,$reply_to_message_id=null,$reply_markup=null){
	return bot('sendGame',[
	'chat_id'=>$chat_id,
	'game_short_name'=>$game_short_name,
	'disable_notification'=>false,
	'reply_to_message_id'=>$reply_to_message_id,
	'reply_markup'=>$reply_markup
	]);
}
function GetMe(){
    return bot('getMe');
}

$bot = GetMe()->result;
$botid = $bot->id;
$botname = $bot->first_name;
$botusername = $bot->username;

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


$reply                = $message->reply_to_message;
$reply_id      =     $message->reply_to_message->from->id;
$reply_user    = $message->reply_to_message->from->username;
$reply_message_id   = $message->reply_to_message->message_id;

$forward = $message->forward_from;

$sudoiD      = file_get_contents("sudo.php");
$sudoUser =  file_get_contents("username.php");


$username = $message->from->username;

$type       = $message->chat->type;

$private = $type == "private";
$supergroup = $type == "supergroup";

$group_title    = $message->chat->title;

$name = $message->from->first_name; 
$name_tag = "[$name](tg://user?id=$from_id)";
$name_reply = $message->reply_to_message->from->first_name;
$name_tag_reply =  "[$name_reply](tg://user?id=$reply_id)";

$audio      = $message->audio;
$audio_file_id      = $message->audio->file_id;

$video      = $message->video;
$video_file_id      = $message->video->file_id;

$voice = $message->voice;
$voice_file_id = $message->voice->file_id;

$photo = $message->photo;
$photo_file_id = $message->photo[0]->file_id;

$sticker    = $message->sticker;
$sticker_file_id    = $message->sticker->file_id;

$contact = $message->contact;
$contact_number = $message->contact->phone_number;

$video_note = $message->video_note;
$video_note_file_id = $message->video_note->file_id;

$document = $message->document;
$document_file_id = $message->document->file_id;

$gif = $message->animation;
$gif_file_id = $message->animation->file_id;

$pin = $message->pinned_message;
$pin_id = $message->pinned_message->from->id;
$pin_first_name = $message->pinned_message->from->first_name;
$pin_tag = "[$pin_first_name](tg://user?id=$pin_id)";

$edit = $update->edited_message->text;
$edit_from_id = $update->edited_message->from->id;
$edit_chat = $update->edited_message->chat->id;
$edit_message_id = $update->edited_message->message_id;

$forward = $message->forward_from;
$inline = $message->reply_markup->inline_keyboard;
$entities = $message->entities;


$location   = $message->location;
$location_file_id   = $message->location->file_id;

$new_chat        = $message->new_chat_member;
$left_chat         = $message->left_chat_member;
$new_id            = $new_chat->id; 
$left_id              = $left_chat->id;
$left_name              = $left_chat->first_name;

$getbots = GetChatMember($chat_id,$new_id)->result->user->is_bot;
?>
<?php 

echo json_decode(file_get_contents('php://input'));


?>


