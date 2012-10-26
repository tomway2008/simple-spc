<?php
/*
 * This should be included after the configuration and before any content
 */

// create a user object if empty
if( empty($user) ) $user = new User;

// check to see if user is authenticated
if( !$user->isAdmin() && !$user->authenticated(ACL_OPERATOR_MASK | ACL_ENGINEER_MASK) ) {
  // redirect to user login
  header('Location:' . LOGIN_URL);
  exit();
}

?>