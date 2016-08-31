<?php

class Proj_Security_Authenticator extends Object implements IAuthenticator
{
    public function authenticate(array $credentials)
    {
        $login = $credentials[self::USERNAME];
        $row = UserModel::getByEmail($login);

        if (!$row) {
            throw new AuthenticationException("Uživatel s registračním e-mailem '$login' nebyl nalezen!", self::IDENTITY_NOT_FOUND);
        }

        $config = Environment::getConfig('security');
        $password =  sha1($credentials[self::PASSWORD] . $config->salt);
        //$password =  $credentials[self::PASSWORD];

        if ($row->password !== $password) {
            throw new AuthenticationException("Zadali ste nesprávné heslo!", self::INVALID_CREDENTIAL);
        }

        return new Identity($row->name, $row->role);
    }
}
