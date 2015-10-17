<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 8/23/15
 * Time: 10:42 PM
 */

/*
 * Defining the Google API constants
 */
define('APPLICATION_NAME', 'Drive API Quickstart');
define('CREDENTIALS_PATH', '~/.credentials/drive-api-quickstart.json');
define('CLIENT_SECRET_PATH', 'client_secret.json');
define('SCOPES', implode(' ', array(
        Google_Service_Drive::DRIVE_METADATA_READONLY)
));
