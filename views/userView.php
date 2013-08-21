<?php

class userView {

    public function showHeader($pageTitle = '') {
        include "header.inc";
    }

    public function showFooter() {
        include "footer.inc";
    }

    public function showLocation($rows) {
        include "showLocation.inc";
    }

    public function showLocationDetails($rows) {
        include "showLocationDetails.inc";
    }
}