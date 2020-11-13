var controller = new ScrollMagic.Controller();

new ScrollMagic.Scene({
    triggerElement: "#trigger1",
    triggerHook: 0.9, // show, when scrolled 10% into view
    duration: "100%", // hide 10% before exiting view (80% + 10% from bottom)
    offset: 50 // move trigger to center of element
})
    .setClassToggle("#reveal1", "visible") // add class to reveal
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#trigger2",
    triggerHook: 0.9, // show, when scrolled 10% into view
    duration: "100%", // hide 10% before exiting view (80% + 10% from bottom)
    offset: 50 // move trigger to center of element
})
    .setClassToggle("#reveal2", "visible") // add class to reveal
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#trigger3",
    triggerHook: 0.9, // show, when scrolled 10% into view
    duration: "100%", // hide 10% before exiting view (80% + 10% from bottom)
    offset: 50 // move trigger to center of element
})
    .setClassToggle("#reveal3", "visible") // add class to reveal
    .addTo(controller);
