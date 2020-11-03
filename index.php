<!-- Уведомление с проверкой на IE -->
<?php \Bitrix\Main\UI\Extension::load("ui.notification"); ?>
<script>
msieversion() 
function msieversion() {
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  // If Internet Explorer, return version number
    {
        BX.UI.Notification.Center.notify({
            content: "Ваша версия браузера устарела и скоро не будет поддерживаться. Чтобы продолжить работать с сайтом, установите Google Chrome, Mozilla Firefox, Apple Safari или Microsoft Edge.",
            position: "Center",
            autoHideDelay: 50000,
            closeButton: false,
            category: "disk-file-deleted",
            actions: [{
                title: "Закрыть",
                events: {
                    click: function(event, balloon, action) {
                        balloon.close();
                    } 
                } 
            }]
        });
   
    }
    return false;
}
</script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<!-- /Уведомление с проверкой на IE -->
