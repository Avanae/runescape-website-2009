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
                                    Miscellaneous Guides
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="article_theme_2">
                    <div class="firstborder">
                        <div class="brown_box">
                            <div class="brown_box" style="margin-bottom: 5px; padding-bottom:1px;">
                                <div class="container" style="clear:both;"></div>
                                    <div class="brown_box" style="margin-bottom: 5px;"><div class="inner_brown_box">
                                    
                                    <div class="helptext">
                                        <div class="helptitle"><b>No content</b></div>
                                        
                                        There are currently no uncategorized guides.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br class="clear">
        </div>
    
<?php        
    $system->displayStruct("footer");
?>