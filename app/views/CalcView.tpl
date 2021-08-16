{extends file=$conf->root_path|cat:"/app/views/templates/main.tpl"}

{block name=footer}<p><a href="https://github.com/kamilponikwia/AI" target="_blank">GitHub</a></p>{/block}

{block name=content}

    <h2 class="content-head is-center">Kalkulator kredytowy</h2>

    <div class="pure-g">
        <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
            <form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
                <fieldset>

                    <label for="x">Kwota</label>
                    <input id="id_amount" type="text" placeholder="zł" name="amount" value="{$form->amount}">

                    <label for="x">Okres</label>
                    <input id="id_period" type="text" placeholder="lat(a)" name="period" value="{$form->period}">

                    <label for="y">Oprocentowanie</label>
                    <input id="id_interest" type="text" placeholder="%" name="interest" value="{$form->interest}">

                    <button type="submit" class="pure-button">Oblicz</button>
                </fieldset>
            </form>
        </div>

        <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

            {if $msgs->isError()}
                <h4>Wystąpiły błędy: </h4>
                <ol class="err">
                    {foreach $msgs->getErrors() as $err}
                        {strip}
                            <li>{$err}</li>
                            {/strip}
                        {/foreach}
                </ol>
            {/if}

            {if isset($res->result)}
                <h4>Miesięczna rata wynosi</h4>
                <p class="res">
                    {$res->result} zł
                </p>
            {/if}

        </div>
    </div>

{/block}