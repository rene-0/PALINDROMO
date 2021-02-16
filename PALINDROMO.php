<?php
    function Palindromo($str, $case_sensitive = false)
    {
        $str_len = strlen($str);
        if(!$case_sensitive)//Se NÃO for sensível a letras maiúsculas
        {
            $str = strtolower($str);
        }

        if($str === '')
        {
            throw new Exception("Erro, \$str não pode ser vazio!");
        }
        elseif($str_len === 1)
        {
            return true;
        }
        elseif(is_float( ($str_len / 2) ))//Se for impar
        {
            $meio = floor( ($str_len / 2) );
            $pmetade = substr($str, 0, $meio);
            $smetade = strrev( substr($str, ($meio+1), $str_len) );
            if($pmetade === $smetade)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        elseif(is_int( ($str_len / 2) ))//Se for par
        {
            $metade = ($str_len / 2);
            $pmetade = substr($str, 0, ($metade));
            $smetade = strrev( substr($str, $metade, ($str_len-1)) );
            if($pmetade === $smetade)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    $str = $_GET['pali'];
    $ret = Palindromo($str);
    if($ret)
    {
        echo "A string '{$str}' é um Palíndromo";
    }
    else
    {
        echo "A string '{$str}' NÃO é um Palíndromo";
    }
?>