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
                    
                        <div class="plaque">
                            <img src="/structure/design/images/titles/title-error.png" alt="Woops, Error" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="brown_background">
                <div class="inner_brown_background" >
                    <div class="brown_box" >
                        <div class="default-notification" style="right:20px; width:670px;">
                            <h3>You have reached a page that no longer exists or has been moved. Please return to the <a href="/" style="color: #ffd800;">Homepage.</a></h3>
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