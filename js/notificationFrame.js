$('#notificationsButton').click(function() {
    $('#frameNotifications')[0].contentWindow.location.reload(true);
    return false;
});