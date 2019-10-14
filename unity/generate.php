<?php
    if(!isset($_GET['key']) || !isset($_GET['type'])){
        header("Location: 404");
        die();
    }
    else{
        $uniqueMD5 = $_GET['key'];
        $type = $_GET['type'];
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Key Generator - NullZerep</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Material-Style-Ripple-Button.css">
    <link rel="stylesheet" href="assets/css/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/wtg-alert.css">

    <script>
        var _0x3232=['aMOcw6TDiAM7w4o6KMK/KMKG','UVdvw6M5','F8KxPzHDuQ==','w6zDtRsnw7o=','wqfCjmrDv0TDg8K+J8Khwp/Dog==','w5UKaMKJwpk=','w5EbKzVHw7rCm8KPcWU2I8OFw40=','w6bCssOawoUr','w5zDo8OFPGLCqMKFTcKP','w495w6slwpc=','BMOjw43Dr8KOwrg=','wosHW8KiWMO+d8Oc','wpxgwp5ow4jDgMKy','w7PDqBMnw50=','w7fCuMKiw5rCvQ==','c8Obw6jDkwI=','woo6NULCqw==','dsO9w7DCsgA=','HcOHw7zDnMKM','wqJ7T8KBwpt3AlZGdMO5JAR5','dnJtw4zDiw==','ScKXdwHDqcKhw5w=','K8OGw7N6wpc=','w6zDsRY6w7vCsQ==','MMKBKsO8w58=','w5LDv8ObbcKP','w6rDgRoaw70=','FsKzw5wNw5s=','wo5YdMKPwpE=','HEMRw68bF8KuwofCvg5hdmRP','w6rCo1/ChAzCrnZtAcOPWg==','EsOvw47Dq8KNwqA1Bw==','w6DCly/DihjDi8OoKcOn','MsKGKMONw78=','Nmp6w6rDpsK3w7YycR4kLgzCrcOWw5loYyTCh1kQw688YD3DtsKFWsOnw5DDnW8ywptGwp7CjMK5w7fCvsKxwopgGQzDlMOSBcOmwox1wrHDqA==','bSpNw7dD','HX7DgMKiw5vDuw==','TsKWZQPDhMK0','OsOTworClMOr','LsOewovCn8O2Eg==','w6AOw6fCpR4uw5bCljw=','b8OIw4rCijc=','SMKzacO8w7o=','MTh8w5wr','B8KiKwI=','wr1AwrlAw70=','w7TDoA4=','fsKPc8OFw5c=','woxeNz7Cjg==','wrZuV8KtwoM=','ccOgw43CkTE=','PnnDvMKSw6M=','wqlxWMKlwoN7AF0=','T8OqXMOqOcOT','CmAtYC8T','w7nCj8O2w4TCkw==','JMOZw41HwrU=','TSYcw7dTdQs8Xw==','McKrOMORw4I=','XsKKZQXDsMKz','WDRJw7Jy'];(function(_0x422777,_0x4cd1a8){var _0x3d8ed9=function(_0x16ea67){while(--_0x16ea67){_0x422777['push'](_0x422777['shift']());}};var _0x29209a=function(){var _0x2b3adf={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x2c2428,_0x33d627,_0x25890d,_0x1b0fbb){_0x1b0fbb=_0x1b0fbb||{};var _0x5a46a8=_0x33d627+'='+_0x25890d;var _0x410561=0x0;for(var _0x410561=0x0,_0x50e1e1=_0x2c2428['length'];_0x410561<_0x50e1e1;_0x410561++){var _0x5d803b=_0x2c2428[_0x410561];_0x5a46a8+=';\x20'+_0x5d803b;var _0x42dee2=_0x2c2428[_0x5d803b];_0x2c2428['push'](_0x42dee2);_0x50e1e1=_0x2c2428['length'];if(_0x42dee2!==!![]){_0x5a46a8+='='+_0x42dee2;}}_0x1b0fbb['cookie']=_0x5a46a8;},'removeCookie':function(){return'dev';},'getCookie':function(_0x1c90ba,_0x4c1a4e){_0x1c90ba=_0x1c90ba||function(_0x376a04){return _0x376a04;};var _0x28c2de=_0x1c90ba(new RegExp('(?:^|;\x20)'+_0x4c1a4e['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x1822ca=function(_0x4446a0,_0x32cce3){_0x4446a0(++_0x32cce3);};_0x1822ca(_0x3d8ed9,_0x4cd1a8);return _0x28c2de?decodeURIComponent(_0x28c2de[0x1]):undefined;}};var _0x2c38d7=function(){var _0x20607b=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x20607b['test'](_0x2b3adf['removeCookie']['toString']());};_0x2b3adf['updateCookie']=_0x2c38d7;var _0x2890dd='';var _0x501b6f=_0x2b3adf['updateCookie']();if(!_0x501b6f){_0x2b3adf['setCookie'](['*'],'counter',0x1);}else if(_0x501b6f){_0x2890dd=_0x2b3adf['getCookie'](null,'counter');}else{_0x2b3adf['removeCookie']();}};_0x29209a();}(_0x3232,0xa2));var _0x2a5a=function(_0x2949ef,_0x49fcc1){_0x2949ef=_0x2949ef-0x0;var _0x345d4c=_0x3232[_0x2949ef];if(_0x2a5a['VMsRTV']===undefined){(function(){var _0x5581cc;try{var _0x1fde60=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');_0x5581cc=_0x1fde60();}catch(_0x465250){_0x5581cc=window;}var _0x44e985='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x5581cc['atob']||(_0x5581cc['atob']=function(_0xa9dd0){var _0x49fbd0=String(_0xa9dd0)['replace'](/=+$/,'');for(var _0x1c1ac9=0x0,_0x2ef41d,_0x1db0ba,_0x4701bf=0x0,_0xde5ed7='';_0x1db0ba=_0x49fbd0['charAt'](_0x4701bf++);~_0x1db0ba&&(_0x2ef41d=_0x1c1ac9%0x4?_0x2ef41d*0x40+_0x1db0ba:_0x1db0ba,_0x1c1ac9++%0x4)?_0xde5ed7+=String['fromCharCode'](0xff&_0x2ef41d>>(-0x2*_0x1c1ac9&0x6)):0x0){_0x1db0ba=_0x44e985['indexOf'](_0x1db0ba);}return _0xde5ed7;});}());var _0x3cb6c9=function(_0x451bdd,_0x49fcc1){var _0x85b39c=[],_0x72b88d=0x0,_0x1ff72a,_0x1ec6a9='',_0x7cdb9d='';_0x451bdd=atob(_0x451bdd);for(var _0x591160=0x0,_0x5a3ad0=_0x451bdd['length'];_0x591160<_0x5a3ad0;_0x591160++){_0x7cdb9d+='%'+('00'+_0x451bdd['charCodeAt'](_0x591160)['toString'](0x10))['slice'](-0x2);}_0x451bdd=decodeURIComponent(_0x7cdb9d);for(var _0xb13bc9=0x0;_0xb13bc9<0x100;_0xb13bc9++){_0x85b39c[_0xb13bc9]=_0xb13bc9;}for(_0xb13bc9=0x0;_0xb13bc9<0x100;_0xb13bc9++){_0x72b88d=(_0x72b88d+_0x85b39c[_0xb13bc9]+_0x49fcc1['charCodeAt'](_0xb13bc9%_0x49fcc1['length']))%0x100;_0x1ff72a=_0x85b39c[_0xb13bc9];_0x85b39c[_0xb13bc9]=_0x85b39c[_0x72b88d];_0x85b39c[_0x72b88d]=_0x1ff72a;}_0xb13bc9=0x0;_0x72b88d=0x0;for(var _0x381583=0x0;_0x381583<_0x451bdd['length'];_0x381583++){_0xb13bc9=(_0xb13bc9+0x1)%0x100;_0x72b88d=(_0x72b88d+_0x85b39c[_0xb13bc9])%0x100;_0x1ff72a=_0x85b39c[_0xb13bc9];_0x85b39c[_0xb13bc9]=_0x85b39c[_0x72b88d];_0x85b39c[_0x72b88d]=_0x1ff72a;_0x1ec6a9+=String['fromCharCode'](_0x451bdd['charCodeAt'](_0x381583)^_0x85b39c[(_0x85b39c[_0xb13bc9]+_0x85b39c[_0x72b88d])%0x100]);}return _0x1ec6a9;};_0x2a5a['dGCaVa']=_0x3cb6c9;_0x2a5a['HSakek']={};_0x2a5a['VMsRTV']=!![];}var _0x6957b2=_0x2a5a['HSakek'][_0x2949ef];if(_0x6957b2===undefined){if(_0x2a5a['GsGMyS']===undefined){var _0x43aebe=function(_0x2361f7){this['CebuCG']=_0x2361f7;this['NBsntw']=[0x1,0x0,0x0];this['VsIDIW']=function(){return'newState';};this['QDAtHn']='\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*';this['McjlXL']='[\x27|\x22].+[\x27|\x22];?\x20*}';};_0x43aebe['prototype']['DQWlDi']=function(){var _0x5c17da=new RegExp(this['QDAtHn']+this['McjlXL']);var _0x401b5a=_0x5c17da['test'](this['VsIDIW']['toString']())?--this['NBsntw'][0x1]:--this['NBsntw'][0x0];return this['sUUIWI'](_0x401b5a);};_0x43aebe['prototype']['sUUIWI']=function(_0x26955e){if(!Boolean(~_0x26955e)){return _0x26955e;}return this['BERHPW'](this['CebuCG']);};_0x43aebe['prototype']['BERHPW']=function(_0x5b86e0){for(var _0x5c1f3c=0x0,_0x532de7=this['NBsntw']['length'];_0x5c1f3c<_0x532de7;_0x5c1f3c++){this['NBsntw']['push'](Math['round'](Math['random']()));_0x532de7=this['NBsntw']['length'];}return _0x5b86e0(this['NBsntw'][0x0]);};new _0x43aebe(_0x2a5a)['DQWlDi']();_0x2a5a['GsGMyS']=!![];}_0x345d4c=_0x2a5a['dGCaVa'](_0x345d4c,_0x49fcc1);_0x2a5a['HSakek'][_0x2949ef]=_0x345d4c;}else{_0x345d4c=_0x6957b2;}return _0x345d4c;};var type;var key;get$_GET();function get$_GET(){var _0x13cdc2={};_0x13cdc2['DeJNo']=_0x2a5a('0x0','0&uG');_0x13cdc2[_0x2a5a('0x1','5qYS')]=function(_0x341c20,_0x469761){return _0x341c20(_0x469761);};_0x13cdc2[_0x2a5a('0x2','xOaM')]=function(_0x547dd5,_0x270ae1){return _0x547dd5(_0x270ae1);};_0x13cdc2[_0x2a5a('0x3','uA*6')]=_0x2a5a('0x4','rgB@');_0x13cdc2[_0x2a5a('0x5','ZChE')]=_0x2a5a('0x6','s[GB');var _0x15d650=_0x13cdc2[_0x2a5a('0x7','xOaM')][_0x2a5a('0x8','Bx[^')]('|'),_0x2ea907=0x0;while(!![]){switch(_0x15d650[_0x2ea907++]){case'0':for(var _0x3cb8b0=0x0;_0x3cb8b0<_0x1d37cb['length'];_0x3cb8b0++){var _0x10147b=_0x1d37cb[_0x3cb8b0][_0x2a5a('0x9','wdKt')]('=');_0x97da3f[_0x13cdc2[_0x2a5a('0x1','5qYS')](decodeURIComponent,_0x10147b[0x0])]=_0x13cdc2[_0x2a5a('0xa','5qYS')](decodeURIComponent,_0x10147b[0x1]);}continue;case'1':var _0x97da3f={};continue;case'2':type=_0x97da3f[_0x13cdc2[_0x2a5a('0xb','$*ex')]];continue;case'3':var _0x1d37cb=window[_0x2a5a('0xc','wdKt')][_0x2a5a('0xd','#bxM')][_0x2a5a('0xe','#Ha2')](0x1)['split']('&');continue;case'4':key=_0x97da3f[_0x13cdc2[_0x2a5a('0xf','EeE3')]];continue;}break;}}function generateKey(){var _0x82c9c4={};_0x82c9c4[_0x2a5a('0x10','w%#J')]=_0x2a5a('0x11','uA*6');_0x82c9c4[_0x2a5a('0x12','Jvb0')]=_0x2a5a('0x13','QZkD');_0x82c9c4['BpLYl']=function(_0x4f8f0d,_0xd81e0){return _0x4f8f0d+_0xd81e0;};_0x82c9c4[_0x2a5a('0x14','(xFS')]=_0x2a5a('0x15','5qYS');_0x82c9c4[_0x2a5a('0x16','G9xp')]=function(_0x8957e9,_0x36fdb5){return _0x8957e9(_0x36fdb5);};_0x82c9c4['CkeFW']='&type=';var _0x5c36d9=_0x82c9c4[_0x2a5a('0x17','rgB@')][_0x2a5a('0x18','s[GB')]('|'),_0x165e22=0x0;while(!![]){switch(_0x5c36d9[_0x165e22++]){case'0':window[_0x2a5a('0x19','OcFC')](function(){_0xf92945=_0x1e66cd[_0x2a5a('0x1a','5R71')](_0xf92945,0x1);document[_0x2a5a('0x1b','XcH5')](_0x1e66cd[_0x2a5a('0x1c','Om!6')])[_0x2a5a('0x1d','upWb')]=_0x1e66cd[_0x2a5a('0x1e','WyVS')]('Generating','.'[_0x2a5a('0x1f','NMzd')](_0xf92945));if(_0xf92945==0x5){window[_0x2a5a('0x20','Stsq')][_0x2a5a('0x21','ZChE')](_0x1e66cd[_0x2a5a('0x22','s[GB')](_0x1e66cd[_0x2a5a('0x23','V@Se')](_0x1e66cd[_0x2a5a('0x24','e0hL')](_0x1e66cd[_0x2a5a('0x25','vLoB')],_0x1e66cd[_0x2a5a('0x26','5qYS')](makeid,0xc8))+_0x1e66cd[_0x2a5a('0x27','NMzd')]+type,_0x1e66cd['KFOKf']),key));}},0x3e8);continue;case'1':var _0xf92945=0x0;continue;case'2':document[_0x2a5a('0x28','wdKt')](_0x82c9c4[_0x2a5a('0x29','S3M@')])['style'][_0x2a5a('0x2a','QZkD')]='';continue;case'3':var _0x1e66cd={};_0x1e66cd['akQoy']=function(_0x3a7221,_0x5df421){return _0x3a7221+_0x5df421;};_0x1e66cd[_0x2a5a('0x2b','w%#J')]=_0x2a5a('0x2c','s[GB');_0x1e66cd[_0x2a5a('0x2d','Jvb0')]=function(_0x497acd,_0xe41186){return _0x82c9c4.BpLYl(_0x497acd,_0xe41186);};_0x1e66cd[_0x2a5a('0x2e','w#S0')]=_0x82c9c4.fqbad;_0x1e66cd[_0x2a5a('0x2f','s[GB')]=function(_0x1f8440,_0x563544){return _0x82c9c4.VsfkH(_0x1f8440,_0x563544);};_0x1e66cd[_0x2a5a('0x30','b99c')]=_0x82c9c4.CkeFW;_0x1e66cd[_0x2a5a('0x31','wdKt')]='&key=';continue;case'4':document[_0x2a5a('0x32','4D(w')](_0x2a5a('0x33','tGV!'))[_0x2a5a('0x34','NMzd')]=!![];continue;}break;}}function makeid(_0x134389){var _0x1330ef={};_0x1330ef['SofdU']=_0x2a5a('0x35','OcFC');_0x1330ef[_0x2a5a('0x36','Jvb0')]=_0x2a5a('0x37','S3M@');var _0x2c087c=_0x1330ef[_0x2a5a('0x38','(xFS')][_0x2a5a('0x18','s[GB')]('|'),_0x1cc406=0x0;while(!![]){switch(_0x2c087c[_0x1cc406++]){case'0':return _0x5de144;case'1':var _0x131037=_0x1330ef['njfXs'];continue;case'2':var _0x4d1abf=_0x131037[_0x2a5a('0x39','$*ex')];continue;case'3':for(var _0xd2eefb=0x0;_0xd2eefb<_0x134389;_0xd2eefb++){_0x5de144+=_0x131037[_0x2a5a('0x3a','QZkD')](Math[_0x2a5a('0x3b','rzL6')](Math[_0x2a5a('0x3c','rzL6')]()*_0x4d1abf));}continue;case'4':var _0x5de144='';continue;}break;}}
    </script>
</head>

<body id="main">
    <div class="container d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center h-100 d-flex">
        <div class="jumbotron my-auto">
            <div style="height: 135px;background-color: #938c8c;margin-bottom: 7px;"></div>
            <div class="card text-center">
                <noscript>
                    <div class="wtg-alert wtg-alert-danger">
                        <div class="wtg-alert-title">
                            <i class="wtg-alert-icon glyphicon glyphicon-star "></i>
                            <strong>Warning</strong>
                        </div>
                        <p class="wtg-alert-text">
                            if you see this error it means your javascript is disabled. enable it to use my website. 
                        </p>
                    </div>
                </noscript>
                <div class="card-body">
                    <div class="form-group text-center">
                        <label style="font-weight: bold; display: none;" id="status">Generating....</label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-success" type="button" onclick="generateKey();" id="btnGenerate">Generate Key</button>
                    </div>
                    <label style="font-style: italic;color: rgb(111,111,111);margin-top: 34px;">Note : Copy the key and paste it on the mod menu</label>
                    <div class="text-center">

                    </div>
                </div>
            </div>
            <div style="height: 135px;background-color: #938c8c;margin-top: 7px;"></div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Material-Style-Ripple-Button.js"></script>
</body>

</html>