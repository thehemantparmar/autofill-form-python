REM replace "http://localhost:81/autoform/form.htm" with your form url where you want to fill data
start chrome "http://localhost:81/autoform/form.htm" --remote-debugging-port=9222
timeout 1