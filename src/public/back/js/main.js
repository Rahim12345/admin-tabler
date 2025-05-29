$(document).ready(function(){
    $('#general_actions').change(function(){
        $('#searcherForm').submit();
    });

    let tablerTheme = localStorage.getItem('tablerTheme');

    if (tablerTheme == 'dark')
    {
        $('#setLocaleMobile,#setLocaleDestkop').addClass('bg-dark');
    }
});

let headers = {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
};




