to run php -S localhost:8080 -t tuts/hello.php
cd to the repo and  run php -S localhost:8080 hello.php


To debug
install php_xdebug-2.9.6-7.4-vc15-nts-x86_64.dll and paste in ext folder of php
set up following conf in php.ini
[XDebug]
zend_extension = "C:\php7\ext\php_xdebug-2.9.6-7.4-vc15-nts-x86_64.dll"
xdebug.remote_autostart = 1
xdebug.remote_enable = 1

Add following cong in .vscode launch.json file
{
    // Use IntelliSense to learn about possible attributes.
    // Hover to view descriptions of existing attributes.
    // For more information, visit: https://go.microsoft.com/fwlink/?linkid=830387
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for XDebug",
            "type": "php",
            "request": "launch",
            "port": 9000
        },
        {
            "name": "Launch currently open script",
            "type": "php",
            "request": "launch",
            "program": "${file}",
            "cwd": "${fileDirname}",
            "port": 9000
        }
    ]
}
