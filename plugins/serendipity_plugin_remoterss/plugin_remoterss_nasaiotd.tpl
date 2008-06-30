{foreach from=$remoterss_items.items item="item"}
<div class="rss_item">
    <div class="nasa_caption"><strong>{$item.title}</strong></div>
    <div class="nasa_image"><a href="{$item.link}"><img width="195" src="{$remoterss_items.nasa_image.url}" /></a></div>
    <div class="nasa_desc"><em>{$item.description}</em></div>
</div>
{/foreach}
