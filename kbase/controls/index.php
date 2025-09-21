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
            <div id="article">
                <div class="sectionHeader">
                    <div class="left-content">
                        <div class="right-content">
                            <h1 class="plaque">
                                Controls 
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="kb-section">
                    <div class="article_theme_1">
                        <div class="article">
                            <div class="topshadow">
                                <div class="bottomborder">
                                    <div class="leftshadow">
                                        <div class="rightshadow">
                                            <div class="leftcorner">
                                                <div class="rightcorner">
                                                    <div class="bottomleft">
                                                    <div class="bottomright">
                                                  
                                                    <div class="links">
                                                        <a href="#Zooming" style="color: #a07f3b;">Zooming</a> | <a href="#Dropping Items" style="color: #a07f3b;">Dropping Items</a> | <a href="#Camera Rotation" style="color: #a07f3b;">Camera Rotation</a> | <a href="#Bank Deposit" style="color: #a07f3b;">Bank Deposit</a>
                                                    </div>

                                                    <br>
                                                  
                                                    <a name="Zooming"></a><br class="clear">
                                                        
                                                    <div class="headings">
                                                        <span class="headertitleleft"><span class="headertitleright" id="Introduction">Zooming</span></span>
                                                    </div>
                                                      
                                                    <br>
                                                    <br>
                                                        <p>
                                                            One of the biggest assumptions is that we do not have any zooming mechanic inside of MithScape since it does not just using the scroll wheel by itself. 
                                                            Jagex hadn't figured out how to limit inputs to interfaces yet. To zoom in and out you must hold the control key and then use the mousewheel.
                                                        </p>
                                                    <br>

                                                    <a name="Dropping Items"></a>
                                                    <br class="clear">
                                                    </p>
                                                    
                                                    <div class="headings">
                                                        <span class="headertitleleft"><span class="headertitleright">Dropping Items</span></span>
                                                    </div>
                                                    
                                                    <br> 

                                                    <p>
                                                        You are not limited to right clicking and dropping each item manually. You are able to use the shift key while left clicking in order to drop items.
                                                    </p>

                                                    <br>

                                                    <a name="Camera Rotation"></a>
                                                    <br class="clear">
                                                    </p>
                                                    
                                                    <div class="headings">
                                                        <span class="headertitleleft"><span class="headertitleright">Camera Rotation</span></span>
                                                    </div>
                                                    
                                                    <br> 

                                                    <p>
                                                        While you are able to use your arrow keys to rotate the camera you are also able to hold down the scroll button on your mouse in order to drag the screen around.
                                                    </p>

                                                    <br>

                                                    <a name="Bank Deposit"></a>
                                                    <br class="clear">
                                                    </p>
                                                    
                                                    <div class="headings">
                                                        <span class="headertitleleft"><span class="headertitleright">Bank Deposit</span></span>
                                                    </div>
                                                    
                                                    <br> 

                                                    <p>
                                                        You are able to click on the pouch icon to see a dialogue menu pop up. It'll give you the options to deposit your inventory, your familiars, or your equipment.
                                                        You are also able to click on the question mark at the top of the bank to check how much your bank is worth.
                                                    </p>

                                                    <br>

                                                    <img height="400" src="/structure/design/images/guides/deposit.png" style="margin-left: 10%;" width="500"/>

                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>

                                                    <div class="backtotop">
                                                        <a href="#top" style="color: #a07f3b;">Back to Top</a>
                                                    </div>
                                                    
                                                    <br>
                                                    
                                                    <center><img alt="" src="/structure/design/images/kbase/hr.png"></center>

                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
  
                <div class="search">
                    <div class="searchtop">
                        <div class="bottombordershad">
                            <div class="leftshadow">
                                <div class="rightshadow">
                                    <div class="topleft">
                                        <div class="topright">
                                            <div class="bottomleftshad">
                                                <div class="bottomrightshad">
                                                    <div class="searchtext">
                                                        <p style="text-align: center;font-size:11px;font-weight:bold; margin-bottom: 0px;"><img src="/structure/design/images/kbase/rphat.png"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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