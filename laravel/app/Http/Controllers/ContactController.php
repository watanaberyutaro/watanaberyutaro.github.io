<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EntryMail;
use App\Mail\ConfirmationMail;


class ContactController extends Controller {
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function entry(Request $request) {
        if(!$request->name) {
            $message = "名前は必ず入力してください";
            return response()->view('HP/entry', compact('message'));
        }
        if(!$request->kana) {
            $message = "カナは必ず入力してください";
            return response()->view('HP/entry', compact('message'));
        }
        if(!$request->company) {
            $message = "貴社は必ず入力してください";
            return response()->view('HP/entry', compact('message'));
        }
        if(!$request->tel0 || !$request->tel1 || !$request->tel2) {
            $message = "電話番号は必ず入力してください";
            return response()->view('HP/entry', compact('message'));
        }
        if(!$request->email) {
            $message = "メールアドレスは必ず入力してください";
            return response()->view('HP/entry', compact('message'));
        }
        if(!$request->contents) {
            $message = "お問い合わせ内容は必ず入力してください";
            return response()->view('HP/entry', compact('message'));
        }
        try {
            $entry_data = [
                'name' => $request->name,
                'kana' => $request->kana,
                'company' => $request->company,
                'tel' => $request->tel0."-".$request->tel1."-".$request->tel2,
                'email' => $request->email,
                'contents' => $request->contents,

            ];
            Mail::send(new EntryMail($entry_data));
            Mail::send(new ConfirmationMail($entry_data));
            $message = "ご応募ありがとうございました。メールを送信致しましたのでご確認よろしくお願いいたします。";
            return response()->view('HP/index', compact('message'));
        } catch (\Exception $e) {
            $message = "無効なメールアドレスです";
            return response()->view('HP/entry', compact('message'));
        }
    }
}
