<?php

/**
 * Built-in IdP discovery service.
 */

echo "Test OK!";
$discoHandler = new \SimpleSAML\XHTML\IdPDisco(['saml20-idp-remote', 'shib13-idp-remote'], 'saml');
$discoHandler->handleRequest();
