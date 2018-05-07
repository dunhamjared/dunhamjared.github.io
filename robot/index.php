<?php
require ('header.php');
?>

<div class="container text-center">
    <div class="robot">
        <div class="eyes">
            <div class="eye-container left">
                <div class="eye"></div>
            </div>
            <div class="eye-container right">
                <div class="eye"></div>
            </div>
        </div>
    </div>
</div>
<div class="container text-center">
    <div>
        <button class="btn btn-default robot-mod" data-robot-mod="emotion" data-robot-value="happy">happy</button>
        <button class="btn btn-default robot-mod" data-robot-mod="emotion" data-robot-value="sad">sad</button>
        <button class="btn btn-default robot-mod" data-robot-mod="emotion" data-robot-value="sad_very">very sad</button>
        <button class="btn btn-default robot-mod" data-robot-mod="emotion" data-robot-value="bored">bored</button>
        <button class="btn btn-default robot-mod" data-robot-mod="emotion" data-robot-value="mad">mad</button>
        <button class="btn btn-default robot-mod" data-robot-mod="emotion" data-robot-value="mad_very">very mad</button>
        <button class="btn btn-default robot-mod" data-robot-mod="action" data-robot-value="blink">blink</button>
        <button class="btn btn-default robot-mod" data-robot-mod="action" data-robot-value="sleep">sleep</button>
    </div>
    <div style="margin-top: 15px">
        <button class="btn btn-default robot-mod" data-robot-mod="action" data-robot-value="reset">reset</button>
    </div>
</div>

<?php
require ('footer.php');
?>