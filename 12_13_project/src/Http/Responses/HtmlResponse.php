<?php

namespace App\Http\Responses;

class HtmlResponse extends AbstractResponse
{
    private function renderHead(): string
    {
        return "
        <head>
            <title> " .$_ENV['APP_NAME']. "</title>
        </head>";
    }

    private function renderHeader(): string
    {
        return "
        <header>
            <h1>" .$_ENV['APP_NAME']. "</h1>
        </header>
        ";
    }

    private  function renderMain(): string
    {
        return "<body><main>"
            . $this->data['htmlBodyMain']
            . "</main></body>";
    }


    public function render(): string
    {
        return
            "<html lang='uk'>"
            . $this->renderHead()
            . $this->renderHeader()
            . $this->renderMain()
            . "</html>";
    }
}