function jsToggleInfoText()
{
    // Toggle state
    jsInfoTextShown = !jsInfoTextShown;
    
    // Show/hide div
    $('jsInfoText').style.display = (jsInfoTextShown ? 'block' : 'none');
    
    // Toggle link text
    $('jsInfoTextLink').innerHTML = '(' + (jsInfoTextShown ? jsInfoTextHide : jsInfoTextShow) + ')';
    
    // Save new state using AJAX
    var url = jsInfoTextUrl + '&state=' + (jsInfoTextShown ? '1' : '0');
    
    new Ajax(url, {
        method: 'get',
        onComplete: function(response) {
            // Do nothing
        }
    }).request();
}