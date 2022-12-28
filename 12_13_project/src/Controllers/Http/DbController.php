<?php

namespace App\Controllers\Http;

use App\Http\Requests\Request;
use App\Http\Responses\Interfaces\IResponse;

class DbController
{

    public function get(Request $request, IResponse $response)
    {
        $mySql_instance = mysqli_connect(
            $_ENV['DB_HOST'],
            $_ENV['DB_USERNAME'],
            $_ENV['DB_PASSWORD'],
            $_ENV['DB_DATABASE'],
            $_ENV['DB_PORT'],
        );

        $mySql_result = mysqli_query(
            $mySql_instance,
            'SELECT * FROM users'
        );

        // var_dump($mySql_result);

        $tblUsers = "<table>";

        while($row=mysqli_fetch_array($mySql_result)){
            echo "<pre>";
            var_dump($row);
            echo "</pre>";
            $tblUsers.= "<tr>";
            $tblUsers.= "<td>" . $row['login'] . "</td>";
            $tblUsers.= "</tr>";
        }

        $tblUsers.= "</table>";


        $response->data['htmlBodyMain'] = "<h1> Hello DB </h1>";
        $response->data['htmlBodyMain'].= $tblUsers;

    }
}