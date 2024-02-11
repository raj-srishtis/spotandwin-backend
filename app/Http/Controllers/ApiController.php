<?php

namespace App\Http\Controllers;

use App\Models\ChallengeParticipant;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request) {
        if ($request->exists('id')) {
            try {
                $entry = ChallengeParticipant::findOrFail(self::encryptOrDecrypt($request->id, false));
                $data = self::generateModal($request);
                return response()->json([
                    'status' => $entry->update($data),
                    'message' => 'updated successfully',
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid ID',
                ]);
            }
        } else {
            try {
                $data = self::generateModal($request);
                $entry = ChallengeParticipant::create($data);
                return response()->json([
                    'status' => true,
                    'data' => [
                        'id' => self::encryptOrDecrypt($entry->id),
                    ],
                    'message' => 'saved successfully',
                ]);
            } catch (\Throwable $th) {
                dd($th);
                return response()->json([
                    'status' => false,
                    'message' => 'fSomething went wrong...',
                ]);
            }
        }
    }

    protected function generateModal($request) {
        try {
            $data = [];
            if ($request->exists('uid')) $data['uid'] = $request->uid;
            if ($request->exists('device')) $data['device'] = $request->device;
            if ($request->exists('browser')) $data['browser'] = $request->browser;
            if ($request->exists('os')) $data['os'] = $request->os;
            if ($request->exists('user_ip')) $data['user_ip'] = $request->user_ip;
            if ($request->exists('created_date')) $data['created_date'] = $request->created_date;
            if ($request->exists('source')) $data['source'] = $request->source;
            if ($request->exists('gameTry')) $data['gameTry'] = $request->gameTry;
            if ($request->exists('encryptkey')) $data['encryptkey'] = $request->encryptkey;
            if ($request->exists('nextClick')) $data['nextClick'] = $request->nextClick;
            if ($request->exists('beginChallengeClick')) $data['beginChallengeClick'] = $request->beginChallengeClick;
            if ($request->exists('sheikhFound')) $data['sheikhFound'] = $request->sheikhFound;
            if ($request->exists('locationConfirmed')) $data['locationConfirmed'] = $request->locationConfirmed;
            if ($request->exists('name')) $data['name'] = $request->name;
            if ($request->exists('email')) $data['email'] = $request->email;
            if ($request->exists('age')) $data['age'] = $request->age;
            if ($request->exists('mobile')) $data['mobile'] = $request->mobile;
            if ($request->exists('fbshare')) $data['fbshare'] = $request->fbshare;
            if ($request->exists('wtshare')) $data['wtshare'] = $request->wtshare;
            if ($request->exists('twshare')) $data['twshare'] = $request->twshare;
            if ($request->exists('timeInSeconds')) $data['timeInSeconds'] = $request->timeInSeconds;
            if ($request->exists('language')) $data['language'] = $request->language;
            return $data;
        } catch (\Throwable $th) {
            // dd($th);
            return [];
        }
    }

    protected function encryptOrDecrypt($data = '', $encrypt = true) {
        if ($data == '') return '';
        $ciphering = "AES-128-CTR";
        $options = 0;
        $encryption_iv = '1134457891015229';
        $encryption_key = env('JWT_SECRET');
        return ($encrypt) ? 
            openssl_encrypt($data, $ciphering, $encryption_key, $options, $encryption_iv):
            openssl_decrypt($data, $ciphering, $encryption_key, $options, $encryption_iv);
    }
}
