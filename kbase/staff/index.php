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
                                    Game Guide
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
                                <div class="itemborder" style="margin-right:4px;">
                                    <div class="headingpic"><a href="/kbase/getting-started"><img alt="" src="/structure/design/images/icons/kbase/manual_gettingstarted.jpg" style="width:70px;height:70px;"></a></div>
                                        <div class="cattext"><div class="text"><div class="title1"><a href="/kbase/getting-started" style="color: #a07f3b;">Get Started</a></div>
                                            Find out how to get started on the road to MithScape mastery.</div>
                                        </div>
                                    </div>

                                    <div class="itemborder" style="margin-right:4px;">
                                        <div class="headingpic"><a href="/kbase/controls"><img alt="" src="/structure/design/images/icons/kbase/controls_movement.jpg" style="width:70px;height:70px;"></a></div>
                                            <div class="cattext"><div class="text"><div class="title1"><a href="/kbase/controls" style="color: #a07f3b;">Controls</a></div>
                                                Learn how to move around the world of MithScape.</div>
                                            </div>
                                        </div>
                                    
                                    <div class="itemborder" style="margin-right:4px;">
                                        <div class="headingpic"><a href="kbase/quest-guides"><img alt="" src="/structure/design/images/icons/kbase/manual_areaguide.jpg" style="width:70px;height:70px;"></a></div>
                                            <div class="cattext"><div class="text"><div class="title1"><a href="/kbase/quest-guides" style="color: #a07f3b;">Quests</a></div>
                                                Quest Guides for Quests that are currently implemented in the game.</div>
                                            </div>
                                        </div>

                                    <div class="itemborder" style="margin-right:4px;">
                                        <div class="headingpic"><a href="/kbase/iron-mode"><img alt="" src="/structure/design/images/icons/kbase/combat_armour_types.jpg" style="width:70px;height:70px;"></a></div>
                                            <div class="cattext"><div class="text"><div class="title1"><a href="/kbase/controls" style="color: #a07f3b;">Iron Mode</a></div>
                                                Learn more about the different Iron Modes.</div>
                                            </div>
                                        </div>

                                    <div class="itemborder" style="margin-right:4px;">
                                        <div class="headingpic"><a href="/kbase/skillcape-perks"><img alt="" src="/structure/design/images/icons/kbase/mg_ranging.jpg" style="width:70px;height:70px;"></a></div>
                                            <div class="cattext"><div class="text"><div class="title1"><a href="/kbase/skillcape-perks" style="color: #a07f3b;">Exclusive Skillcape Perks</a></div>
                                                Learn more about the Skillcape Perks.</div>
                                            </div>
                                        </div>
                                
                                    <div class="itemborder" style="margin-right:4px;">
                                        <div class="headingpic"><a href="/kbase/donator-shop"><img alt="" src="/structure/design/images/icons/kbase/customersupport_billing.jpg" style="width:70px;height:70px;"></a></div>
                                            <div class="cattext"><div class="text"><div class="title1"><a href="kbase/perk-shop" style="color: #a07f3b;">Donator Shop</a></div>
                                                Learn about our Donator Shop and credit system.</div>
                                            </div>
                                        </div>

                                    <div class="itemborder" style="margin-right:4px;">
                                        <div class="headingpic"><a href="kbase/game-commands"><img alt="" src="/structure/design/images/icons/kbase/controls_notes.jpg" style="width:70px;height:70px;"></a></div>
                                            <div class="cattext"><div class="text"><div class="title1"><a href="/kbase/game-commands" style="color: #a07f3b;">In-Game Commands</a></div>
                                                A list of useful in-game commands.</div>
                                            </div>
                                        </div>

                                        <div class="container" style="clear:both;"></div>
                                    </div>

                                    <div class="container" style="clear:both;"></div>
                                    <div class="brown_box" style="margin-bottom: 5px;"><div class="inner_brown_box">
                                    
                                    <div class="helptext">
                                        <div class="helptitle"><b>Important Information:</b></div>
                                        
                                        Due to content always being updated, this section is subject to change.
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