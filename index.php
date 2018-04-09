<?php
include ('class/Application.php');
include ('class/Output.php');
include ('class/ApiData.php');
include ('smarty/libs/Smarty.class.php');

$smarty = new Smarty();
$api = new ApiData();
$output = new Output();
$app = new Application();


/*array_key_exists('page', $_GET){ //todo:: use to check which page to go to use for new pages

};*/

if(isset($_POST['data'])){
    $data = $_POST['data'];
} else {
    $data ='';
}

$content = '';
$smarty->assign('title', $smarty->fetch('tpl/title.tpl'));
$smarty->assign('navbar', $output->getNavbar($smarty));

if(!empty($_GET)&& array_key_exists('page', $_GET)){
    $page = $_GET['page'];
    if(!isset($_POST['option'])){
        $option ='default';
    } else {
        $option = $_POST['option'];
    }

    switch ($page){// seiten generieren
        case 'cocktail by name'://todo::'search'
            $option ='';
            break;
        case'Search ingredient by name'://
            $option ='';
            break;
        case 'Lookup full cocktail details by id'://für die ausgabe vom cocktail
            $option ='';
            break;
        case 'Lookup a random cocktail'://cooles mini extra
            $option ='';
            break;
        case 'Search by ingredient':// suchfunktion die wir eigenlich bauen wollem
            $option ='';
            break;
        case 'Filter by alcoholic'://unnötig
            $option ='';
            break;
        case 'Filter by Category'://unnötig
            $option ='';
            break;
        case 'Filter by Glass': //unnötig
            $option ='';
            break;
            //todo:: informations beschaffung...
        case 'list the categories':
            $option ='';
            break;
        case 'list glasses':
            $option ='';
            break;
        case 'ingredients':
            $option ='';
            break;
        case 'list alcoholic filters':
            $option ='';
            break;
        case 'finder':
            $decodeJson = $api->run($page, $data);
            $content = $output->getSearchPage($smarty,$decodeJson['drinks']);
            break;
        case 'drinks':
            foreach ($_POST['ingredients'] as $ingredients){
                $decodeJson = $api->run($page, $ingredients);
                foreach ($decodeJson['drinks'] as $key => $item){
                    $drink = $api->run('drinkInfo', $item['idDrink']);
                    $content .= $output->getDrinkSearchList($smarty,$drink);
                }
            }
            break;
        case 'cocktails':
            $decodeJson = $api->run($page, $data);
            $content = $output->contactPage($smarty);
            break;
        case 'contact':
            $content = $output->contactPage($smarty);
            break;
        default:
            $option ='';
    }

    if(isset($option) && $option != 'default') {
        $decodeJson = $api->run($option, $data);
    }

}else{
    $decodeJson = $api->run('Lookup a random cocktail',$data);
    $content = $output->getHomePage($decodeJson , $smarty);

}

$smarty->assign('footer', $smarty->fetch('tpl/footer.tpl'));

$smarty->assign('content', $content);
$smarty->display('tpl/main.tpl');