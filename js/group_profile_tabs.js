$(document).ready(function($){
    function loadForm(tab) {
        // $('#group-profile-form-container').html('<p>Loading...</p>');

        $.ajax({
            url: M.cfg.wwwroot + '/local/lat_studentsettings/ajax.php',
            type: 'GET',
            data: { tab: tab }, // no groupid
            success: function(data) {
                $('#group-profile-form-container').html(data);
            },
            error: function() {
                $('#group-profile-form-container').html('<p>Error loading form1</p>');
            }
        });
    }

    function init() {
        $('.group_profile_tablink').on('click', function(e) {
            e.preventDefault();
            const tab = $(this).data('tab');
            $('.group_profile_tablink').removeClass('group_profile_active');
            $(this).addClass('group_profile_active');
            loadForm(tab);
        });

        // Load first active tab automatically
        const firstTabElement = $('.group_profile_tablink.group_profile_active').first();
        if(firstTabElement.length){
            const firstTab = firstTabElement.data('tab');
            loadForm(firstTab); // first alert should show
        }
    }

    init();
});