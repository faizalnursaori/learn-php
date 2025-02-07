<?php

//final class adalah kelas yang tidak dapat diwarisi oleh kelas lain
//final function juga sama, jadi ga bisa dioverride function lain

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    public final function login(string $name, string $password): bool
    {
        return true;
    }
}

class FakeFacebook extends Facebook
{
    public function login(string $name, string $password): bool
    {
        return true;
    }
}
