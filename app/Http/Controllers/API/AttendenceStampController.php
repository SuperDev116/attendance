<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\ApiSth;
use App\Models\Attends;
use App\Models\StaffLogo;

class AttendenceStampController extends BaseController
{
    public function attendance(Request $request): JsonResponse
    {
        $user = User::where('idm', $request->idm)->first();
        
        if (isset($user))
        {
            $nl = new StaffLogo;
            $nl->user_id = $user->id;
            $nl->card_id = $request->idm;
            $nl->save(); 

            $attend = Attends::where('user_id', $user->id)->first();
            $current_date = "a" . date("d");
            $currentTime = date('H:i');
            
            if ($request->stampType == 1)
            {
                $schedule_date = "s" . date("d");
                if ($attend[$current_date] == "")
                {
                    $attend[$current_date] = json_decode($attend[$schedule_date]);
                }
                else
                {
                    $attend[$current_date] = json_decode($attend[$current_date]);
                }
                $attend[$current_date]->ot = $currentTime;
                $attend[$current_date] = json_encode($attend[$current_date]);
                $attend->save();

                $success['staff_id'] = $user->idm;
                $success['staff_name'] = $user->user_name;
                $success['current_day'] = date("Y-m-d");
                $success['current_time'] = $currentTime;

                $status = '出勤';
            }
            elseif ($request->stampType == 2)
            {
                $attend[$current_date] = json_decode($attend[$current_date]);
                $attend[$current_date]->ct = $currentTime;
                $attend[$current_date] = json_encode($attend[$current_date]);
                $attend->save();

                $success['staff_id'] = $user->idm;
                $success['staff_name'] = $user->user_name;
                $success['current_day'] = date("Y-m-d");
                $success['current_time'] = $currentTime;
                
                $status = '退勤';
            }
            elseif ($request->stampType == 3)
            {
                $attend[$current_date] = json_decode($attend[$current_date]);
                $attend[$current_date]->rs = $currentTime;
                $attend[$current_date] = json_encode($attend[$current_date]);
                $attend->save();
                
                $success['staff_id'] = $user->idm;
                $success['staff_name'] = $user->user_name;
                $success['current_day'] = date("Y-m-d");
                $success['current_time'] = $currentTime;
                
                $status = '休憩開始';
            }
            else
            {
                $attend[$current_date] = json_decode($attend[$current_date]);
                $attend[$current_date]->re = $currentTime;
                $attend[$current_date] = json_encode($attend[$current_date]);
                $attend->save();
                
                $success['staff_id'] = $user->idm;
                $success['staff_name'] = $user->user_name;
                $success['current_day'] = date("Y-m-d");
                $success['current_time'] = $currentTime;
                
                $status = '休憩終了';
            }
            
            $user['cd'] = json_encode($request->all());
            $user->save();

            return $this->sendResponse($success, $status);
        }
        
        return $this->sendError('登録された会社の従業員ではありません。', ['error'=>'NO staff']);
    }

    public function sth(Request $request)
    {
        $platform = $request->platform;

        $api_sth = ApiSth::where([
            'user_id' => $request->user_id,
            'platform' => $request->platform
        ])->first();

        if (!isset($api_sth))
        {
            $api_sth = new ApiSth;
            $api_sth->user_id = $request->user_id;
            $api_sth->platform = $request->platform;
        }
        $api_sth->sth = $api_sth->sth . ' ' . $request->sth;
        $api_sth->save();
    }
}

?>