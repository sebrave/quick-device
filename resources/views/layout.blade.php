<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quick Device</title>
    <link href="/css/app.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@yield ('head')

</head>
<body>
    <div id="wrapper">
    	<div id="header-wrapper" style="background-color:#2b73b7;">
    		<div class="d-flex justify-content-around" style="padding-top:20px;">
                <h2 style="color:#eeffff;">Quick Device</h1>
            </div>
    		<div width="100%" style="padding:20px;" class="d-flex">
                <h4><a href="/" style="color:#ddeeff !important; padding:10px;">Users</a></h4>
                <h4><a href="/device" style="color:#ddeeff !important; padding:10px;">Devices</a></h4>
                <h4><a href="/simcard" style="color:#ddeeff !important; padding:10px;">SIM Cards</a></h4>
                <h4><a href="/phonenumber" style="color:#ddeeff !important; padding:10px;">Phone Numbers</a></h4>
    		</div>
    	</div>

        @yield ('header')
    </div>
    <div style="margin:40px;">
    @yield ('content')
    </div>

</body>
</html>
