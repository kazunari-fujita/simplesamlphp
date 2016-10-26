<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */

/*
 * Guest IdP. allows users to sign up and register. Great for testing!
 */
$metadata['https://sts.windows.net/8a758c22-4c26-4d06-97da-f6f43f09d5e0/'] = array (
  'entityid' => 'https://sts.windows.net/8a758c22-4c26-4d06-97da-f6f43f09d5e0/',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://login.windows.net/8a758c22-4c26-4d06-97da-f6f43f09d5e0/saml2',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://login.windows.net/8a758c22-4c26-4d06-97da-f6f43f09d5e0/saml2',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://login.windows.net/8a758c22-4c26-4d06-97da-f6f43f09d5e0/saml2',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIC8DCCAdigAwIBAgIQFn9wb/AwUY5NGLDDDfVzfzANBgkqhkiG9w0BAQsFADA0MTIwMAYDVQQDEylNaWNyb3NvZnQgQXp1cmUgRmVkZXJhdGVkIFNTTyBDZXJ0aWZpY2F0ZTAeFw0xNjEwMTgwNTI3MjVaFw0xODEwMTgwNTI3MjVaMDQxMjAwBgNVBAMTKU1pY3Jvc29mdCBBenVyZSBGZWRlcmF0ZWQgU1NPIENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwYF4PWa+CKXzRRpgE7ngczmlOlOpkVPSUJ9QxR4HfjOr7cgibyKRlNdHUconxxFBztYoKhx0CpQzIaoOvLLNDHipv7jwNUCfePnSr/0Q5SVLzV9/Yuj4WTeVDLrhRyMe3OmZG+bBihaj2LVpJ8yJTGqp0P9VxJN5Ml/kvDzVwuf1Tk53XlGC2+c8C2fe4F9eSetepizDwuSj0iZvGtQkiFbawUfwmIKYfj5P0UdW3YUKxxkaCQectCttj6RR2p1yiFQMUY7kescuoPoK/0GJkN8f4d3hs7OgF9Ne6N3n3swdo25y9jw90W6U5aNsJNkFuff0q7M5Epmso5jj3EB0LwIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQBeXee7HqFrrnaWzuOzk7d9reZt2h9A4YDOJamNAMcRdNS1gy4AnEZJFSlDr96q6L6Kp1aLGSwwzdWv0skn+e7GHZM+vioT6xH18LtvabTy3ZUvmaF/oPp6cMmmbd/I/S0Oakp0YfMIT0GY3JfoUCkiLfBYer5SP20BArlg0QqrVjanxVMuHei2wVeP45Y1yB9Lu1CdHQIFKtFXyf+9pGj49cs6LBvw6k0D+9eO7ci/TmL49IAw6Ua+dthnJQ//Qsin+JJElESo0fel1p5jgA7kz4ihtGmoz3tDZxzYlkEqBIxn1DU4FBQYcu/CGV7DTqCvuLPvXr9Hm+8vX49p7qNV',
    ),
  ),
);
