var controller = new ScrollMagic.Controller();

new ScrollMagic.Scene({
    triggerElement: "#trigger1",
    triggerHook: 0.9, // show, when scrolled 10% into view
    offset: 50, // move trigger to center of element
    reverse: false
})
    .setClassToggle("#reveal1", "visible") // add class to reveal
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#trigger2",
    triggerHook: 0.9, // show, when scrolled 10% into view
    offset: 50, // move trigger to center of element
    reverse: false
})
    .setClassToggle("#reveal2", "visible") // add class to reveal
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#trigger3",
    triggerHook: 0.9, // show, when scrolled 10% into view
    offset: 50, // move trigger to center of element
    reverse: false
})
    .setClassToggle("#reveal3", "visible") // add class to reveal
    .addTo(controller);
