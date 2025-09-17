<?php
final class autoload
{
    public function autoload($address)
    {
        include $address;
    }
}
