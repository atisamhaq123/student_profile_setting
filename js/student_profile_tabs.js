$(document).ready(function($){
    function loadForm(tab) {
        // $('#student-profile-form-container').html('<p>Loading...</p>');

        $.ajax({
            url: M.cfg.wwwroot + '/local/lat_studentsettings/ajax.php',
            type: 'GET',
            data: { tab: tab }, // no studentid
            success: function(data) {
                $('#student-profile-form-container').html(data);
                 if (tab=="paymenthistory"){
                    addPaymenRows();
                }
            },
            error: function() {
                $('#student-profile-form-container').html('<p>Error loading form1</p>');
            }
        });
    }

    function init() {
        $('.student_profile_tablink').on('click', function(e) {
            e.preventDefault();
            const tab = $(this).data('tab');
            $('.student_profile_tablink').removeClass('student_profile_active');
            $(this).addClass('student_profile_active');
            loadForm(tab);
        });

        // Load first active tab automatically
        const firstTabElement = $('.student_profile_tablink.student_profile_active').first();
        if(firstTabElement.length){
            const firstTab = firstTabElement.data('tab');
            loadForm(firstTab); // first alert should show
            
        }
    }

    init();
});