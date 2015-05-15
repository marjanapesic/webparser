<?php 

namespace Webparser\View;

class Index {
    
    public function output()
    {
        echo "<html>";
        echo "<head>";
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/main.css\">";
        echo "<script src=\"http://code.jquery.com/jquery-1.10.0.min.js\"></script>";
        echo "<script src=\"js/main.js\"></script>";
        echo "This is test</head>";
        
        echo "<body>
            <form id=\"mainForm\" action=\'#\'>
                <table id=\"mainTable\">
                    <tr>
                        <td>URL: </td>
                        <td><input type=\"text\" class=\"input\" id=\"urltext\"></td>
                    </tr>
                    <tr>
                        <td>Items: </td>
                        <td><input type=\"text\" class=\"input\" id=\"items\"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button id=\"mainsubmit\" class=\"btn\" type=\"submit\">Submit</button></td>
                    </tr>
                </table>
            </form>
            <div id=\"response\"/>
        </body>
        </html>";
    }
}

?>