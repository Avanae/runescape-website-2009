<?php
    //  if (register_(sys())) =>) {}

        if (count(get_included_files()) <= 1) {
            die();
        }
    ?>

    </div>
</div>

<div id="footer">
    <div class="contain">
        <div class="footerdesc">
            <strong>Copyright &copy; 2022 MithScape.</strong> MithScape is not affiliated with RuneScape or Jagex Ltd in any way.<br />
        </div>

        <a class="footer-image" href="" target="_blank">
            <img src="/structure/design/images/branding/mithscape.png" height="40" width="150" alt="MithScape" />
        </a>
    </div>
</div>
</div>

<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<script>
    $(document).ready(function () {
        $(".password").keypress(function (e) {
            if (e.which == 13) {
                $(this).closest("form").submit();
            }
        });

        $(".btn").click(function (e) {
            $(".login").submit();
        });

        $(".login").submit(function (e) {
            e.preventDefault();
            login(".login", ".login");
        });

        <?php if (isset($_GET['ref'])) { ?>
        $(".loginpopup").show();
        $(".loginpopup input[type=submit]").click(function (e) {
            e.preventDefault();
            $.post("/structure/system/ActionHandler.php?action=Login", $(".loginpopup form").serialize(), function (data) {
                if (data === "SUCCESS") {
                    window.location.href = "<?php echo $_GET['ref']; ?>";
                } else {
                    sendError(".loginpopup .error", data);
                }
            });
        }); <?php
        } ?>

        $(".play, #play").click(function (e) {
            e.preventDefault();
            $(".playoptions").show();
        });

        $(".fsDialogue > .exit").click(function () {
            $(this).closest(".fsDialogue").hide();
        });

    });

    function sendError(element, error) {
        $(element).html(error);
        $(element).fadeIn(500);
        if (element != ".green-msg") {
            setTimeout(function () {
                $(element).fadeOut(500);
            }, 3000);
        }
    }

    function login(container, form) {
        $.post("/structure/system/ActionHandler.php?action=Login", $(form).serialize(), function (data) {
            if (data == "SUCCESS") {
                window.location.href = "/account/";
            } else {
                $(form).find(".error").html(data);
                $(form).find(".error").css("display", "block");
                $(form).find(".password").val('');
            }
        });
    }

    (adsbygoogle = window.adsbygoogle || []).push({});
</script>