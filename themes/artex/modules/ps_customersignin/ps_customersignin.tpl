<div class="user-info row no-gutters">
  {if $logged}
      <div>
    <a class="account" href="{$my_account_url}" title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}" rel="nofollow">
        <span class="menu-account-word">{$customerName}</span>
        <span class="menu-account-icon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
    </a>
      </div>
      <div>
    <a class="logout"  href="{$logout_url}" rel="nofollow" title="{l s='Log me out' d='Shop.Theme.Customeraccount'}">
        <span class="menu-logout-word">{l s='Sign out' d='Shop.Theme.Actions'}</span>
        <span class="menu-logout-icon"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></span>
    </a>
      </div>  
  {else}
      <div>
    <a class="login" href="{$my_account_url}" rel="nofollow" title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}">
        <span class="menu-login-word">{l s='Sign in' d='Shop.Theme.Actions'}</span>
        <span class="menu-login-icon"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i></span>
    </a>
      </div>  
  {/if}
</div>