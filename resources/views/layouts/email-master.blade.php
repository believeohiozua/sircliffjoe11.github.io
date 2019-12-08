<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', config('settings.site_title') )</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
 
<body>

  <div style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;">
    <table style="width: 100%;">
      <tr>
        <td></td>
        <td bgcolor="#FFFFFF">
          <div style="padding: 15px; max-width: 600px;margin: 0 auto;display: block; border-radius: 0px;padding: 0px; border: 1px solid lightseagreen;">
            <table style="width: 100%;background: #003679 ;">
              <tr>
                <td></td>
                <td>
                  <div>
                    <table width="100%">
                      <tr>
                        <td rowspan="2" style="text-align:center;padding:10px;">              
              <span style="color:white;float:center;font-size: 13px;font-style: italic;margin-top: 10px; padding:10px;font-weight:normal;">
                <h1>{!! config('settings.site_name') !!}</h1></span>
                        </td>
                      </tr>
                    </table>
                  </div>
                </td>
                <td></td>
              </tr>
            </table>
            <table style="padding: 10px;font-size:14px; width:100%;">

              @yield('content')
              
            <tr>
              <td>
                <div align="center" style="font-size:12px; margin-top:20px; padding:5px; width:100%; color: #fff; background:#003679;"> &copy; {{ date('Y') }} 
                  <a href="{!! route('welcome') !!}" target="_blank" style="color:#fff; text-decoration: none;">{{ Setting::get('site_name') }}
                  </a>
                </div>
              </td>
            </tr>
            </table>
          </div>
</body>
 
</html>




