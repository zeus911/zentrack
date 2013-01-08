<?php


/*
V4.62 2 Apr 2005  (c) 2000-2005 John Lim (jlim@natsoft.com.my). All rights reserved.
         Contributed by Ross Smith (adodb@netebb.com). 
  Released under both BSD license and Lesser GPL library license.
  Whenever there is any discrepancy between the two licenses,
  the BSD license will take precedence.
	  Set tabs to 4 for best viewing.
*/

/*

This file is provided for backwards compatibility purposes

*/

require_once dirname(__FILE__) . '/adodb-session.php';
require_once  ADODB_SESSION . '/adodb-encrypt-md5.php';

ADODB_Session::filter(new ADODB_Encrypt_MD5());

?>