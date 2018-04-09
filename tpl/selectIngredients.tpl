<div>
    <form method="post" action="index.php?page=drinks">
        {foreach key=key item=item from=$ingredients}
            <input type="checkbox" id="iid_{$item.strIngredient1}" name="ingredients[]" value="{$item.strIngredient1}">
            <label for="iid_{$item.strIngredient1}">{$item.strIngredient1}</label>
        {/foreach}
        <input type="submit">
    </form>
</div>