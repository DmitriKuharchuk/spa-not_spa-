<?php

namespace App\Services;


use Larva\Whois\Whois;


class WhoIsService{


    public function checkDomain($request){
        $list = $this->getListDomain($request->message);
        $result = array();
        foreach ($list[0] as $item){
            try {
                array_push($result,[$item => Whois::lookupRaw($item)]);
            }catch (\Exception $e){
                array_push($result,[$item => 'not found']);
            }

        }

        return $result;
    }

    public function getListDomain(string $string) : array{
        preg_match_all('/(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z0-9][a-z0-9-]{0,61}[a-z0-9]/',$string,$result);

        return $result;
    }

}
