/* get the form element names for the contact form and loop through them
*  add input event listeners that keep track of the current length of the input value
*  display this information to the user
*/
['name', 'email', 'message'].forEach(name => {
    // get the form input by id along with its text length tracker
    const formElement = document.getElementById(`form-${name}`);
    const tracker = document.getElementById(`${name}-length-tracker`);

    // check to make sure the elements were found; this script is being loaded on pages that don't have the form
    if (formElement && tracker) {
        // set the initial text content to the length of the text that is currently inside it and its max length attribute
        tracker.textContent = `${formElement.value.length} | ${formElement.maxLength}`;
    
        // create an input listener that updates the text content to the following: `current input text length | max length allowed attribute`
        formElement.addEventListener('input', e => {
            tracker.textContent = `${formElement.value.length} | ${formElement.maxLength}`;
        });
    }
    // warn the console that the form element/tracker is missing
    else console.warn(`Form element/tracker for "${name}" was not found.`);
});