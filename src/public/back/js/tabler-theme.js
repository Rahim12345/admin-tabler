function tableTheme(myClasses) {
    let mode = localStorage.getItem('tablerTheme');

    if(mode === 'dark')
    {
        $.each(myClasses, function (key, myClass) {
            $('.'+myClass).addClass('text-white');
        });
    }
    else
    {
        $.each(myClasses, function (key, myClass) {
            $('.'+myClass).addClass('text-black');
        });
    }
}
