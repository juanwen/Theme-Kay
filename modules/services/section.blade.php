<!--news-->
<tr>
    <tr><td bgcolor="#fff" height="20"></td></tr>
    <tr><td bgcolor="#fff" height="40"></td></tr>
        <td bgcolor="#fff">
                <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="mainContent">
                    <tbody>
                        <tr>    
                            <td align="center" mc:edit="title1" class="main-header" style="color: #E6842D; font-size: 2.5em; font-family: 'Century Gothic';">
                                {{ $header }}
                            </td>
                        </tr>
                        <tr>
                            <td height="30"></td>
                        </tr>
                    </tbody>
                </table>
                <!--news-inner-->
                    <table border="0" width="600" align="center" cellpadding="0" cellspacing="0" class="container-middle">
                @foreach($items as $item)
                    <tr>
                        <td>
                        <table bgcolor="f1f1f1" border="0" width="220" height="260" align="left"  class="news-info" cellpadding="0" cellspacing="0">
                            <tr>
                                    <td height="40">
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td style="padding-left: 25px;color: #69B922;font-size: 2.1em;font-family: 'Century Gothic';letter-spacing: 2px;">
                                        {{$item['title'] or ''}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="new-text" style="font-family:Arial; font-size:15px;color:#777;padding-left:1.5em;padding-right:1em;line-height:21px;">
                                        {{$item['description'] or ''}}
                                    </td>
                                </tr>
                                <tr>
                                    <td height="60">
                                    </td>
                                </tr>
                                
                            </table>
                            <table border="0" width="8" height="10" align="left" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="5" height="10" align="left">
                                    </td>
                                </tr>
                            </table>
                            <table border="0" width="370" align="left" class="news-image" cellpadding="0" cellspacing="0">
                            
                                <tr style="background:url(images/n.jpg) no-repeat 0px 0px #E6842D; background-size:cover;" height="260">
                                    <td style="color:#FFFFFF; font-size:1em; text-align:center; font-family:Lucida Sans; line-height:1.8em;">
                                    
                                    </td>
                                </tr>
                                <tr><td height="8"></td></tr>
                                
                            </table>
                        </td>
                    </tr>
                @endforeach
                    <tr><td bgcolor="#fff" height="20"></td></tr>
                    
                </table>
                </td>
    <tr><td bgcolor="#fff" height="60"></td></tr>
</tr>
                <!--//news-->