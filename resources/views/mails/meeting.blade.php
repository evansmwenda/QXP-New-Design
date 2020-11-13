<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>QXP Meeting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="background: #E5E8E8">
    <div style="background:#E5E8E8 ; text-align:center; height:300px"> 
    <img src="http://sandbox.qxp-global.com/images/logo/logo.svg" width="100" alt="" style="margin-top: 80px;">
    </div>
    <div class="content" style="background: #fff; width:80%; margin:-100px auto; padding:50px">
        <h2 style="color:#060646">Join QXP Meeting</h2>
        <h4>{{$data['name']}} has invited you to a scheduled QXP Meeting</h4>
    <p>Meeting Link is : <a href="{{$data['link']}}">{{$data['link']}}</a></p>
        <p>Meeting ID : {{$data['ID']}}</p>

        <p>Topic : {{$data['topic']}}</p>
        <i style="text-align: center; margin-top:30px">This mail is send automatically please dont reply to it.</i>
    </div>
    </body>
</html>
