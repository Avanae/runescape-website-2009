<?php
    define("_VALID_PHP", true);
    define("TITLE", "Home");

    require_once($_SERVER ['DOCUMENT_ROOT'] . "/structure/init.php");
?>

<style>
    .ui-effects-transfer {
        border: 2px solid black;
    }
</style>

<div class='main-body'>
    <div class='inner-body'>
        <div id="content">
            <div id="centered-content">
                <div id="single-content">
                    <div class="sectionHeader" style="text-align: center;">
                        <div class="left-content">
                        <div class="right-content">
                            <h1 class="plaque">
                                Create Account
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="brown_background">
                <div class="inner_brown_background" >
                    <div class="brown_box" >
                        <div class="default-notification" style="right:20px; width:670px;">
                            <h3>You cannot create another account while your current session has not ended. Please sign out of your account in order to create a new one.</h3>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php        
    $system->displayStruct("footer");
?>