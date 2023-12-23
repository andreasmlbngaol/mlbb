document.onreadystatechange = function () {
    if (document.readyState !== "complete") {
        document.querySelector(
            "main").style.visibility = "hidden";
        document.querySelector(
            "#loader").style.visibility = "visible";
    } else {
        document.querySelector(
            "#loader").style.display = "none";
        document.querySelector(
            "main").style.visibility = "visible";
    }
};

function createCardElement() {
    jQuery('<a>', {
        id: 'random-pick-a'
    }).appendTo(".random-picker");
    jQuery('<div>', {
        class: 'card heroes-card',
        id: "random-pick-card"   
    }).appendTo("#random-pick-a");
    jQuery('<img>', {
        class: "card-img-top",
        id: "random-pick-img"
    }).appendTo("#random-pick-card");

    jQuery('<div>', {
        class: "card-img-overlay d-flex flex-column justify-content-end m-0 p-0 text-center text-light",
        id: "random-pick-card-overlay"
    }).appendTo("#random-pick-card");

    jQuery('<div>', {
        class: "card-body-container bg-fade bg-gradient",
        id: "random-pick-card-body"
    }).appendTo("#random-pick-card-overlay");

    jQuery('<h5>', {
        class: "card-title mb-1",
        id: "random-pick-card-header"
    }).appendTo("#random-pick-card-body");

    jQuery('<p>', {
        class: "card-text my-0 fs-6",
        id: "random-pick-card-title"
    }).appendTo("#random-pick-card-body");

    jQuery('<p>', {
        class: "card-text my-0 fs-6",
        id: "random-pick-card-role"
    }).appendTo("#random-pick-card-body");
};