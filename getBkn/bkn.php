class getBkn{
 
    public function bkn($skey) {
        $hash = 5381;
        for ($i = 0, $len = strlen($skey); $i < $len; ++$i){
            $hash +=($hash << 5) + $this->charCodeAt($skey, $i);
        }
        return $hash & 2147483647;
    }
     
    public function charCodeAt($str, $index){
        $char = mb_substr($str, $index, 1, 'UTF-8');
        $value = null;
        if (mb_check_encoding($char, 'UTF-8')){
            $ret = mb_convert_encoding($char, 'UTF-32BE', 'UTF-8');
            $value = hexdec(bin2hex($ret));
        }
        return $value;
        }  
        
    }