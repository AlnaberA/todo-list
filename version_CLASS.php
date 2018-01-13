<?php
/*
 * Returns the version of this application
 *  */
class version
{
    /**
     * Version Key
     * X.Y.Z
     * X=Major Change - Any UI changes
     * Y=Minor Change - Any major bugs
     * Z=Small bug fixes and patches 
     **/
    public $version = '1.0.0';

    // method declaration
    public function displayVersion() {
        echo $this->version;
    }
}