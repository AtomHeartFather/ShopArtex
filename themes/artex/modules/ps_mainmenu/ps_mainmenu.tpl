{function name="menu" nodes=[] depth=0}
  {strip}
    {if $nodes|count}
        <ul data-depth="{$depth}" >
        {foreach from=$nodes item=node}
          <li class="{$node.type}{if $node.current} current{/if}">
            {*<p>{$node.children|count}</p>*}
            {*{$node.children}*}
            <a href="{$node.url}" {if $node.open_in_new_window} target="_blank" {/if}>{$node.label}</a>
            <div class="menu-depth">
              {menu nodes=$node.children depth=$node.depth}
              {if $node.image_urls|count}
                <div class="menu-images-container">
                  {foreach from=$node.image_urls item=image_url}
                    <img src="{$image_url}">
                  {/foreach}
                </div>
              {/if}
            </div>
          </li>
        {/foreach}
      </ul>
    {/if}
  {/strip}
{/function}

<div class="menu row">
  {menu nodes=$menu.children}
</div>

{* Проверка существования дочерних элементов
if (!elem.childNodes.length) { ... }
if (!elem.firstChild) { ... }
if (!elem.lastChild) { ... }*}

{*{function name="menu" nodes=[] depth=0}
  {strip}
    {if $nodes|count}
      <ul data-depth="{$depth}">
        {foreach from=$nodes item=node}
          <li class="nav-item dropdown{$node.type}{if $node.current} current{/if}">
            <a href="{$node.url}" class="nav-link dropdown-toggle" {if $node.open_in_new_window} target="_blank" {/if}>{$node.label}</a>
            <ul>
              {menu nodes=$node.children depth=$node.depth}
              {if $node.image_urls|count}
                <li class="menu-images-container nav-item dropdown">
                  {foreach from=$node.image_urls item=image_url}
                    <img src="{$image_url}">
                  {/foreach}
                </li>
              {/if}
            </ul>
          </li>
        {/foreach}
      </ul>
    {/if}
  {/strip}
{/function}*}

{*<div class="no-gutters col">*}
{*  <nav role="navbar navbar-expand-lg navbar-light"> 
        {block name='header_logo'}
            <a class="navbar-brand" href="{$urls.base_url}" title="{$shop.name}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{$shop.logo}" alt="{$shop.name}">
            </a>
        {/block}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
  	</button>
    {menu nodes=$menu.children}
  </nav> *} 
{*</div>*}

{*<nav role='navigation'>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a>
      <ul>
        <li><a href="">Our team</a></li>
        <li><a href="">History</a></li>
      </ul>
    </li>
    <li><a href="#">Clients</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
</nav> *} 

{*<li class="nav-item dropdown">
    a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </li>*}