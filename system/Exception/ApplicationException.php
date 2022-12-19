<?php

namespace Lynx\System\Exception;

class ApplicationException{

    protected $errorHTML;

    public function __construct($message = "Exception",$path = __DIR__, $code = 500) {
        echo "<style>@import url('https://fonts.googleapis.com/css?family=Montserrat:400,400i,700');body {background-color: #330000;font-family: 'Montserrat', sans-serif;}article {display: flex;justify-content: center;align-items: center;height: 100vh;box-sizing: border-box;}aside {flex: 0 0 75vw;display: flex;flex-direction: column;align-items: center;justify-content: center;padding: 2em;box-sizing: border-box;}h1,p {color: #fff;font-size: 3em;padding: 0;margin: 0;}p {font-size: 1em;}#render_error {fill: none;stroke: #f00;stroke-width: 3;stroke-linecap: round;stroke-linejoin: round;stroke-miterlimit: 10;}svg {height: 300px;}</style><article><aside><p style='color:white;font-size:20px;'>Exception : <span style='font-weight: 900;'> $message </span> </p> <br><p style='color:white;font-size:20px;'>Exception For : <span style='font-weight: 900;'>$path</span> </p><br><br><br><svg onclick='render_error.reset().play();' id='render_error' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 809 375'><path d='M218 49H82l-14 92a192 192 0 0 1 29-2c27 0 55 6 77 19 28 16 51 47 51 92 0 70-55 122-133 122-39 0-72-11-89-22l12-37c15 9 44 20 77 20 45 0 84-30 84-78 0-46-31-79-103-79-20 0-36 2-49 4L47 9h171zM524 183c0 122-45 189-124 189-70 0-117-65-118-184C282 68 333 3 406 3c75 0 118 67 118 180zm-194 6c0 93 29 146 73 146 49 0 73-58 73-149 0-88-23-146-73-146-42 0-73 51-73 149zM806 183c0 122-45 189-124 189-70 0-117-65-118-184C564 68 615 3 688 3c75 0 118 67 118 180zm-194 6c0 93 29 146 73 146 49 0 73-58 73-149 0-88-23-146-73-146-42 0-73 51-73 149z'/></svg><br><br><br><h1>Lynx Application Exception</h1></aside></article><script src='exception.them.js'></script><script>render_error = new Vivus('render_error', {type: 'oneByOne', duration:500});</script>";
    }

}
