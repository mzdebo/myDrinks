<?php
class ApiData
{
    private function buildURL($option,$data) {
        if (true) {

            //todo::hier die url für die   https://www.thecocktaildb.com/api.php

        $url='';
            switch ($option){
                case 'cocktail by name':
                    $url = 'search.php?s=' . $data; //$cocktailName
                    break;
                case'Search ingredient by name':
                    $url = 'search.php?i='. $data; //$ingredient
                    break;
                case 'Lookup full cocktail details by id':
                    $url ='lookup.php?i=' . $data; //$id
                    break;
                case 'Lookup a random cocktail':
                    $url = 'random.php';
                    break;
                case 'Search by ingredient':
                    $url = 'filter.php?i='. $data; //z.b. Vodka $ingredient
                    break;
                case 'Filter by alcoholic':
                    $url = 'filter.php?a=Alcoholic';//Alcoholic/Non_Alcoholic
                    break;
                case 'Filter by Category':
                    $url = 'filter.php?c=Ordinary_Drink';//Ordinary_Drink/Cocktail...
                    break;
                case 'Filter by Glass'://todo:: brauchen wir das wirklich?
                    $url = 'filter.php?g=Cocktail_glass';//Cocktail_glass,Champagne_flute
                    break;
                case 'list the categories':
                    $url = 'list.php?c=list';
                    break;
                case 'list glasses':
                    $url = 'list.php?g=list';
                    break;
                case 'ingredients':
                    $url = 'list.php?i=list';
                    break;
                case 'list alcoholic filters':
                    $url = 'list.php?a=list';
                    break;
                default:
            }

            $url = 'https://www.thecocktaildb.com/api/json/v1/1/' . $url;
            Return $url;
        }
    }

    private function setCurl($ch) {
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch,CURLOPT_TIMEOUT,1000);
    }


    private function checkBasicCurlFunctions() {
        return (function_exists('curl_init') &&
            function_exists('curl_setopt') &&
            function_exists('curl_exec') &&
            function_exists('curl_close'));
    }

    public function run($option, $data) {
        $this->status = 'UNAVAILABLE: cURL Basic Functions';

        if ($this->checkBasicCurlFunctions()) {
            $ch = curl_init();
            if ($ch) {
                if (curl_setopt($ch, CURLOPT_URL, $this->buildURL($option,$data))) {
                    $this->setCurl($ch);
                    $curlResponse = curl_exec($ch);
                    if ($curlResponse) {
                        return json_decode($curlResponse, true);

                    }
                }
                curl_close($ch);
            }
        }
    }



}