<?php

namespace ZanySoft\EmailChecker;

interface EmailCheckerInterface {

    /**
     * To verify an email address exist.
     */
    public function check($email);
}
