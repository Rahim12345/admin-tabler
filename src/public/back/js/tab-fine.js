$('.nav-item').click(function () {
    let tabID = $(this).find('a').attr('href');
    tabID = tabID.substr(1, tabID.length);

    setActiveTab(tabID);
});

function setActiveTab(tabID) {
    $.ajax({
        type: 'GET',
        url: '/set-cookie?key='+$('#tabUrl').val()+'&value='+tabID
    });
}
