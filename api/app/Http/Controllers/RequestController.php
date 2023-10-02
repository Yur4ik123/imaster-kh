<?php

namespace App\Http\Controllers;


use Telegram\Bot\Api;
use App\Models\Request as RequestModel;
use App\Http\Requests\Request;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Laravel\Facades\Telegram;

class RequestController extends Controller
{
    protected Api $telegram;

    public function __construct(Api $telegram)
    {
        $this->telegram = $telegram;
    }

    public function request(Request $request)
    {

//        $keyboard = new Keyboard();
//        $button = Keyboard::inline([
//            'text' => 'Оброблено',
//        ]);
//        $keyboard->setResizeKeyboard(true);
//        $keyboard->setOneTimeKeyboard(true);
//        $keyboard->row([$button]);


        $req = RequestModel::class;
        $data = $request->validated();
        try {
            $req = $req::create($data);
        } catch (\Throwable $exception) {
            return response()->json(['res' => 'err', 'err' => $exception->getMessage()], 422);
        }
        $reqTypeText = $data['request_type'] == 'contact_form' ? 'Контактна форма' : 'Запит на ремонт';
        $tgText = "⚡️<b>НОВЕ ПОВІДОМЛЕННЯ</b>\n" .
            "--------------\n\n".
            "<b>Клієнт:</b> <i>" . $data['name'] .
            "\n</i><b>Телефон:</b><a href='tel:".$data['tel']."'><i>".$data['tel']."</i></a> <i>" .
            "\n</i><b>Email:</b> <i>" . $data['email'] .
            "\n</i><b>Повідомлення:</b><i>\n" . $data['msg'] .
            "\n\n--------------".
            "</i>\n<b>Тип заявки:</b> <i>" . $reqTypeText . "</i>";
        dump($tgText);
        try {
            $response = $this->telegram->sendMessage([
                'chat_id' => env('TG_CHAT_ID'),
                'text' => $tgText,
                'parse_mode' => 'html'
                //  'reply_markup' => $keyboard,
            ]);
            // $messageId = $response->getMessageId();
        } catch (\Throwable $exception) {
            return response()->json(['res' => 'err', 'err' => $exception->getMessage()], 422);
        }
        return $request;
    }
}
