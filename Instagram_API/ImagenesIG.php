<?php
require_once('defines.php');
class instagram_basic_display_api{
    private $_appId = INSTAGRAM_APP_ID;
    private $_appSecret = INSTAGRAM_APP_SECRET;
    private $_redirectUrl = INSTAGRAM_APP_REDIRECT_URL;
    private $_getCode = '';
    private $_apiBaseUrl = 'https://api.instagram.com/'

    public $authorizationUrl = '';

    function __construct ( $params ){
        $this->_getCode = $param['get_code'];


        $this->setAuthorizationUrl();
    }

    private function _setAuthorizationUrl(){
        $getVars = array(
            'app_id' => $this->_appId,
            'redirect_url' => $this->_redirectUrl,
            'scopre' => 'user_profile, user_media',
            'response_type' => 'code'
        );

        $this->authorizacionUrl = $this->_apiBaseUrl . 'oauth/authorize?' . http_build_query($getVars);
    }
}

 