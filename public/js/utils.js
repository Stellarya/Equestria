// ---------------------------------------------------------------------------------------------------------------------
// -- datatable methods ------------------------------------------------------------------------------------------------
const initCompleteToggle = (inputName, tbl) => {
    $('input[name="' + inputName + '"]').on('click', function () {
        tbl.draw();
    }).trigger('click');
};

// -- confirmation PopoverX --------------------------------------------------------------------------------------------
const initPopoverButton = (element, target, url, data = {}, hrefSuccess = '') => {
    // init popover
    element.popoverButton({
        target: target,
        trigger: 'click',
        placement: 'auto'
    });

    // bind click events
    $(target)
        .on('click', '.popover-footer button[type="submit"]', function () {
            $.ajax({
                url: url,
                type: 'GET',
                data: data,
                dataType: 'json',
                success: function (json) {
                    if (typeof json.id !== "undefined") { // cas particulier de la duplication d'un recrutement / d'une consultation
                        document.location.href = hrefSuccess + json.id
                    } else if (hrefSuccess !== '') {
                        document.location.href = hrefSuccess;
                    } else {
                        location.reload();
                    }
                },
                error: function () {
                    window.location.reload();
                    // console.log('AJAX error.')
                }
            });
        })
        .on('click', '.popover-header .close', function (e) {
            e.preventDefault();
            $(this).popoverX('hide');
        });
}

function jsonMessage(json) {
    if (typeof json.successMessage !== "undefined") {
        return json.successMessage;
    } else {
        return json.errorMessage;
    }
} // --/end confirmation PopoverX --

function activeSidebar(value) {
    let navItem = document.querySelector('[title="'+ value +'"]');
    navItem.className = 'nav-item active';
}

