<?php

class Proj_Security_Acl extends Permission
{
    public function __construct()
    {
        // roles
        $this->addRole('guest');
        $this->addRole('registered', 'guest');
        $this->addRole('editor', 'registered');
        $this->addRole('admin');

        // resources
        $this->addResource('Admin_DefaultPresenter');
        $this->addResource('Admin_PagePresenter');
        $this->addResource('Admin_UserPresenter');
        $this->addResource('Admin_FotoPresenter');
        $this->addResource('Admin_MenuPresenter');
        $this->addresource('Admin_DocsPresenter');

        // privileges
        $this->allow('registered', 'Admin_DefaultPresenter', Permission::ALL);
        $this->allow('editor', 'Admin_PagePresenter', Permission::ALL);
        $this->allow('editor', 'Admin_FotoPresenter', Permission::ALL);
        $this->allow('editor', 'Admin_DocsPresenter');
        $this->allow('admin', Permission::ALL, Permission::ALL);
    }
}
