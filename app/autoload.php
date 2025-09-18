<?php
final class autoload
{
    public static function autoload($address)
    {
        $addres = 'app/' . $address . '.php';
        if (file_exists($addres)){
            include $addres;
            return true;
        }else{
            $addres = 'controler/' . $address . '.php';
            if (file_exists($addres)){
                include $addres;
                return true;
            } else{
                $addres = 'model/' . $address . '.php';
                if (file_exists($addres)){
                    include $addres;
                    return true;
                } else{
                    $addres = 'view/' . $address . '.php';
                    if (file_exists($addres)){
                        include $addres;
                        return true;
                    } else{
                        include 'view/404.php';
                    }
                }
            }
        }
    }
}
spl_autoload_register([autoload::class, 'autoload']);