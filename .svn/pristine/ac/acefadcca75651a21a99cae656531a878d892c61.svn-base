var ThemeSwitcher = function() {
    var default_theme;
    var theme_panel;
    var initialized = false;
    var base_url= "/";
    var switchTheme = function(theme) {
        var theme_styles = $(".theme_style", theme_panel);
        var active_theme = $("[theme-style="+theme+"]", theme_panel);
        theme_styles.removeClass("active");
        active_theme.addClass("active");
        if (theme == "day") {
            $(".theme_switcher", theme_panel).animate({left:"2px"}, 50, "linear");
        } else if (theme == "night") {
            $(".theme_switcher", theme_panel).animate({left:"35px"}, 50, "linear");
        }
        $("#theme_style_css").attr("href", base_url + "assets/css/themes/" + theme + ".css");
        Cookies.set("theme", theme);
    }
    return {
        init: function() {
            default_theme = "day";
            base_url = $("#BASE_URL").val();
            theme_panel = $(".theme_panel");
            var theme = Cookies.get("theme");
            if (theme == undefined) {
                theme = default_theme;
            }
            switchTheme(theme);
            
            theme_panel.click(function(e) {
                var theme = $(":not(.active)", theme_panel).attr("theme-style");
                ThemeSwitcher.switch(theme);
                e.preventDefault();
            });
            initialized = true;
        },
        switch: function (theme) {
            if (!initialized) 
                this.init();
            switchTheme(theme);
        }
    }
}();

jQuery(document).ready(function() {
    ThemeSwitcher.init();

    $('#signOut').on('click', function(){
        $.post({
            url: 'logout.php',
            success: function(response, status, xhr, $form) {
                // similate 2s delay
                if(status == "success") {
                    window.location.reload();
                    return ;
                }
                setTimeout(function() {
                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                    showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');
                }, 2000);
            }
        });
    });
});
