import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

// enable the interactive UI components from Flowbite
import 'flowbite';

console.log("yyyyyyyyhhhhhhhhhhh");
console.log("app.js est chargé");

document.getElementById('toggleSwitch').addEventListener('change', function() {
    if (this.checked) {
        console.log('Le switch est activé');
    } else {
        console.log('Le switch est désactivé');
    }
});
