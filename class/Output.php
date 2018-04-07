<?php
/**
 * Created by PhpStorm.
 * User: roy
 * Date: 04.04.2018
 * Time: 13:45
 */

class Output {


    private function randomDrink($decodeJson,$smarty){

        $smarty->assign('name' , $decodeJson['drinks'][0]['strDrink']);
        $smarty->assign('alcoholic' , $decodeJson['drinks'][0]['strAlcoholic']);

        $ingredients='';
        for($i=1;!empty($decodeJson['drinks'][0]['strIngredient'.$i]);$i++){
            $smarty->assign('ingreadient' , $decodeJson['drinks'][0]['strIngredient'.$i]);
            $smarty->assign('Measure', $decodeJson['drinks'][0]['strMeasure'.$i]);
            $ingredients .=$smarty->fetch('tpl/ingredients.tpl');
        }
        $smarty->assign('ingredients',$ingredients);
        $smarty->assign('glas' , $decodeJson['drinks'][0]['strGlass']);
        $smarty->assign('instructions' , $decodeJson['drinks'][0]['strInstructions']);
        $smarty->assign('pic' , $decodeJson['drinks'][0]['strDrinkThumb']);



        return $smarty->fetch('../tpl/randomDrink.tpl');
    }




    public function getHomePage($decodeJson,$smarty){
        /*echo '<pre>';
        print_r($decodeJson);
        echo '</pre>';*/
        $randomDrink = $this->randomDrink($decodeJson,$smarty);
        $smarty->assign('random', $randomDrink);
        //$smarty->assign('random',$decodeJson['drinks'][0]);
        return $smarty->fetch('tpl/index.tpl');
     }

     public function contactPage($smarty){
        return $smarty->fetch('tpl/contact.tpl');
     }

     public function getNavbar($smarty){
        return $smarty->fetch('tpl/navBar.tpl');//todo::navbar
     }

     public function getFooter($smarty){
        return $smarty->fetch('tpl/footer.tpl'); //todo;
     }

     private function SearchBar($smarty){
        return $smarty->fetch('tpl/searchbar');
     }

}