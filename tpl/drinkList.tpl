<div>
    {foreach key=key item=item from=$drinks}
        <h3 id="{$item.idDrink}">{$item.strDrink}</h3>
        <img src="{$item.strDrinkThumb}" style="height: 360px" width="auto">
    {/foreach}
</div>