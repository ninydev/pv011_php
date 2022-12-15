<?php

namespace App\Controllers\Http;

use App\Http\Requests\Request;
use App\Http\Responses\Interfaces\IResponse;

class FirstFormController
{

    public function get(Request $request, IResponse $response)
    {

        $response->data['htmlBodyMain'] =
            "<form action='" . $_SERVER['PHP_SELF'] . "' method='POST'>"
            . "<div><label> Name: <input type='text' name = 'name' value='keeper'></label></div>"
            . "<div><label> Email: <input type='text' name = 'email' value='keeper@ninydev.com'></label></div>"
            . "<input type='submit'>"
            . "</form>";

    }

    public function post(Request $request, IResponse $response) {
        $response->data['htmlBodyMain'] = "<div> \n\n Все хорошо \n\n </div>";
    }

    public function put(Request $request, IResponse $response) {

        $response->data['data'] = "Все хорошо";
    }

}