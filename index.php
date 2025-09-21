<?php
    define("_VALID_PHP", true);
    define("TITLE", "Home");

    require_once($_SERVER ['DOCUMENT_ROOT'] . "/structure/init.php");

    $user = Registry::get("user");
?>

<style>
    .ui-effects-transfer {
        border: 2px solid black;
    }
</style>

<div class='main-body'>
    <div class='inner-body'>
        <div id="content">
            <div id="left-content">
                <?php if (!$user->isLoggedIn()) { ?>
                    <a href="/register" class="createbutton"><img src="/structure/design/images/buttons/btn-create.jpg" alt="Create an Account" /><span class="shim"></span></a>
                <?php } else { ?>
                    <a href="/register=error" class="createbutton"><img src="/structure/design/images/buttons/btn-create.jpg" alt="Create an Account" /><span class="shim"></span></a>
                <?php } ?>    
        
                <!--WEBSITE FEATURES-->
                <div id="features">
                    <div class="narrowHeader"><img src="/structure/design/images/titles/title-websitefeatures.png" alt="Website Features" /></div>
              
                    <div class="section">
                        <div class="feature" style="background-image: url(/structure/design/images/layout/featured_feature_bg.png)">
                        <a href="/kbase/getting-started"><img src="/structure/design/images/icons/kbase/feature_kbsearch_icon.jpg" alt="Getting Started" /></a>
                    
                        <div class="featureTitle">Getting Started</div>
                        <div class="featureDesc">Are you new to MithScape? Check out our <a href="/kbase/getting-started">Getting Started Guide</a>!</div>
                    </div>
                
                    <div class="feature">
                        <a href="/hiscores"><img src="/structure/design/images/icons/kbase/feature_poll_icon.jpg" alt="Hiscores" /></a>
                  
                        <div class="featureTitle">Community Hiscores</div>
                        <div class="featureDesc">See who's on top &amp; check your skill levels! View the <a href="/hiscores">Hiscores</a>.</div>
                    </div>

                    <div class="feature">
                        <a href="/community/index.php?board_id=4&page=1"> <img src="/structure/design/images/icons/kbase/feature-bugreport.jpg" alt="Report a Bug" /></a>
                  
                        <div class="featureTitle">Report a Bug</div>
                        <div class="featureDesc">Found a bug in game? Let us know <a href="/community/index.php?board_id=4&page=1">here</a>.</div>
                    </div>

                    <div class="feature">
                        <a href="/donate"><img src="/structure/design/images/icons/kbase/feature_shop_icon.jpg" alt="Open the Loyalty Shop" /></a>
                    
                        <div class="featureTitle">Loyalty Shop</div>
                        <div class="featureDesc">Experience MithScape at a new level by unlocking perks <a href="/donate">here</a>.</div>
                    </div>
            </div>
        </div>
            
        <!-- ARTICLES -->
        <div id=articles>
            <div class=narrowHeader><img alt="Game Guide" src="/structure/design/images/titles/title-articles.png"></div>
                <div class=section>
                    <div class=articlesBody>
                        <div class=articlesTitle>
                    
                        <img alt="Article of the Week" src="/structure/design/images/titles/aow_title.png">
                    </div>
                  
                    <div class=aowBody style="height: 185px;">
                        <div class=aowHeight>
                            <div class=aowImage><a href="/community/thread/index.php?board_id=1&id=4&page=1"><img alt="" src="/structure/design/images/articles/explore.jpg"></a></div>
                            
                            <p class=aowTitle>Quests, Quests and more Quests</p>
                            <p>We are slowely adding more quests to the game.</p> 
                            
                            <a href="/community/thread/index.php?board_id=1&id=4&page=1" style="left:3px;">Read More...</p></a> 
                        </div>
                    </div>
                </div>

                <div class=section>
                    <div class=articlesBody>
                        <div class=articlesTitle>
                    
                        <img alt="Featured Article" src="/structure/design/images/titles/title-article-featured.png">
                    </div>
                  
                    <div class=aowBody style="height: 195px;">
                        <div class=aowHeight>
                            <div class=aowImage><a href="/community/thread/index.php?board_id=1&id=4&page=1"><img alt="" src="/structure/design/images/articles/wealth.jpg"></a></div>
                            
                            <p class=aowTitle>Banker Overhaul</p>
                            <p>A banker's work is never done, as the branches across MithScape are open every hour of every day.</p> <a href="/community/thread/index.php?board_id=1&id=4&page=1" style="left:3px;">Read More...</a> 
                        </div>
                    </div>
                </div>

                  
                <div class="articlesMore">
                    <a href="/kbase">Browse the Article Archives</a>
                </div>
            </div>
                
            <div class=articlesFooter></div>
            
            </div>
        </div>
    </div>
          
    <div id="right-content">    
        <?php if (!$user->isLoggedIn()) { ?>
            <a href="/login=error" id="playbutton">
        <?php } else { ?>
            <a href="/downloads/MithLauncher.rar" id="playbutton">
        <?php } ?>
        
        <img src="/structure/design/images/buttons/btn-play.png" alt="Download the Game Client" />
        <span class="shim"></span></a>
            
        <div id="recentnews">
            <div class="sectionHeader">
                <div class="left-content">
                    <div class="right-content">
                        <div class="plaque">
                            <div class="large-header"><img src="/structure/design/images/titles/title-gameupdate.png" alt="Latest Updates" />
                        </div>
                    </div>
                </div>
            </div>
            
            <div class='section'>
                <li class="news-row [$collapsed]">
                    <div class='section'>
                        <div class='sectionBody' style="height: 185px;">
                            <div class='sectionHeight'>
                                <div class='recentNews'>
                                    <div class='newsTitle'>
                                        <h3>Happy Halloween!</h3>
                                        <span>2022-10-06 20:00:20</span>
                                    </div>
                                
                                    <a class="newsImage" href=""><img src="/structure/design/images/updates/update-monthly-10.png"></a>
                            
                                    <p style="left: 4px;">Halloween is here shortly and in anticipation for the event, we left something spooky for you at Draynor Manor. Happy Hunting!</p>
                                    
                                    <br>

                                    <a href="/services/m=news/archives/2022-09-26.html"><p style="left: 4px;">Read Thread...</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>

            <div class="sectionHeader">
                <div class="left-content">
                    <div class="right-content">
                        <div class="plaque">
                            <div class="large-header"><img src="/structure/design/images/titles/title-latestupdates.png" alt="Latest Updates" />
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section">
                <?php $user->getModule("NewsFeed")->load(); ?>
            </div>
        </div>
              
        <div class="sectionHeader" style="text-align: center;">
            <div class="left-content">
                <div class="right-content">
                    <div class="plaque">
                        <img src="/structure/design/images/titles/title-moreupdates.png" alt="More Updates" />
                    </div>
                </div>
            </div>
        </div>
              
            <div class="section">
                <div class="sectionBody">
                    <table class="Updates" style="left:3px;">
                        <tr>
                            <td>
                                <strong><a href="/services/m=news/archives/2022-07-31.html">Halloween is coming</a></strong>
                            </td>

                            <td class="UpdatesCategory">
                                Game Updates
                            </td>
                              
                            <td class="UpdatesDate">
                                06-Oct-2022
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong><a href="/services/m=news/archives/2022-07-31.html">Small Hotfixes</a></strong>
                            </td>

                            <td class="UpdatesCategory">
                                Game Updates
                            </td>
                              
                            <td class="UpdatesDate">
                                27-Sept-2022
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong><a href="/services/m=news/archives/2022-07-31.html">Tree Gnome Village & More</a></strong>
                            </td>

                            <td class="UpdatesCategory">
                                Game Updates
                            </td>
                              
                            <td class="UpdatesDate">
                                28-Aug-2022
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong><a href="/services/m=news/archives/2022-07-31.html">Elemental Workshop I and More</a></strong>
                            </td>

                            <td class="UpdatesCategory">
                                Game Updates
                            </td>
                              
                            <td class="UpdatesDate">
                                31-Jul-2022
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong><a href="/services/m=news/archives/2022-07-31.html">Toad Inflation</a></strong>
                            </td>

                            <td class="UpdatesCategory">
                                Game Updates
                            </td>
                              
                            <td class="UpdatesDate">
                                17-Jul-2022
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="moreArchive">
                    <a href="/kbase/updates">Browse the Updates Archive</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php        
    $system->displayStruct("footer");
?>