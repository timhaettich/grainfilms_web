<?php

/**
* Constant definitions
*/
define("COOKIE_CONSENT_DESCRIPTION", "Grain-Films.com uses cookies to personalise content and analyse the traffic You can read more about it in our Impressum.");
define("COOKIE_CONSENT_ACCEPT", "Accept");
/**
 * Check value with HTMLSPECIAL CHAR
 */
function makeSafe(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
}

/**
 * Displays Cookie Consent Banner when not accepted yet
 */
function CookieConsentBanner()
{
    if(!isset($_COOKIE["CookieConsent"]))
    {
        echo "<div style='height = 20%; background-color: black; position: fixed; left: 0; bottom: 0; width: 100%;'><p style='color: white; padding-left: 20px; padding-top: 20px; text-align: left; z-index:10000000;'>" . COOKIE_CONSENT_DESCRIPTION . "<input id='cookieConsentBtn' type='button' value='" . COOKIE_CONSENT_ACCEPT . "' onclick='doFunction();' style='; margin-left: 20px; background-color: white; color: black; border: none;'/></p></div>";
        echo "<script>document.getElementById('cookieConsentBtn').onclick = function (){ var endDate = new Date(); endDate.setMonth( endDate.getMonth() + 6 ); document.cookie='CookieConsent=true;expires=' + endDate.toUTCString() + ';'; location.reload();};</script>";
    }
}

/**
 * Checks if Consent is given
 */
function CookieConsent()
{
    if($_COOKIE["CookieConsent"] == true)
    {
        return true;
    }
    else {
      return false;
    }
}


function yourlsExpand($url)
{
    // Init the CURL session
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, 'https://r.grain-films.com/yourls-api.php' );
    curl_setopt( $ch, CURLOPT_HEADER, 0 );            // No header in the result
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true ); // Return, do not echo result
    curl_setopt( $ch, CURLOPT_POST, 1 );              // This is a POST request
    curl_setopt( $ch, CURLOPT_POSTFIELDS, array(      // Data to POST
    		'shorturl'   => $url,
    		'format'   => 'simple',
    		'action'   => 'expand',
    		'signature' => '5d78057a0a',
    	) );

    // Fetch and return content
    $data = curl_exec($ch);
    curl_close($ch);

    // Do something with the result. Here, we just echo it.
    return $data;
}
