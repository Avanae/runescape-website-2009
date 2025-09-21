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
                                Knowledge Base Article Title    
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
                                                        <a href="#Section 1" style="color: #a07f3b;">Section 1</a> | <a href="#Section 2" style="color: #a07f3b;">Section 2</a>
                                                    </div>

                                                    <br>
                                                  
                                                    <a name="Section 1"></a><br class="clear">
                                                        
                                                    <div class="headings">
                                                        <span class="headertitleleft"><span class="headertitleright" id="Introduction">Section 1</span></span>
                                                    </div>
                                                      
                                                    <br>
                                                    <br>
                                                    <p> Section 1  
                                                    <br>

                                                    <a name="Section 2"></a>
                                                    <br class="clear">
                                                    </p>
                                                    
                                                    <div class="headings">
                                                        <span class="headertitleleft"><span class="headertitleright">Section 2</span></span>
                                                    </div>
                                                    
                                                    <br> 

                                                    <p>Section 2</p>
                                                    <br>
                                                    <ul>
                                                        <li> Some Summing 1</li>
                                                        <li> Some Summing 2</li>
                                                        <li> Some Summing 3</li>
                                                    </ul>
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