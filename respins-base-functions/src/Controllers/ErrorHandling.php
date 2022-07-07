
<?php
namespace Respins\Controllers\ErrorHandling;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ErrorHandling
{
    public static function errorRouting($statuscode, $errorType = NULL, $message = NULL, $data = NULL)
    {
        //Array with meta
        if($message !== NULL) {
            $message = array(
                'status' => $statuscode,
                'type' => $errorType,
                'message' => $message,
                'data' => []
            );
        } else {
                $message = array(
                'status' => $statuscode,
                'type' => $errorType,
                'message' => $message,
                'data' => $data
                );
        }

        #Aggregator Error Page
        // Aggregator level error page (distributor)
        if($errorType === 'aggregation' || $errorType= 'json') {
            return response()->json(['status' => $statuscode, 'message' => $message])->setStatusCode($statuscode);
        }

        #Operator Error Page
        // Operator level error page (casino)
        if($errorType === 'operator') {
            return view('respins-base-views::error-operator-template')->with('error', $message);
        }

        #Game Provider Error Page
        // Per game provider erroring
        if($errorType ==== 'gameprovider') {
            return view('respins-base-views::error-gameprovider-template')->with('error', $message);
        }

        #Fallback Error Page
        // Error page that is used if nothing is used
        return view('respins-base-views::error-default-template')->with('error', $message);
    }

}