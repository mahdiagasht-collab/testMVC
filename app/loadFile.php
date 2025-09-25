<?php
class loadFile
{
    public static function loadFile(string $fileName , array $result)
    {
        $addres = 'app/' . $fileName . '.php';
        if (file_exists($addres)){
            include $addres;
            return true;
        }else{
            $addres = 'controler/' . $fileName . '.php';
            if (file_exists($addres)){
                include $addres;
                return true;
            } else{
                $addres = 'model/' . $fileName . '.php';
                if (file_exists($addres)){
                    include $addres;
                    return true;
                } else{
                    $addres = 'view/' . $fileName . '.php';
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
