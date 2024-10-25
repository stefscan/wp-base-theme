/**
 * Bouton en JS
 * Exemple de script JS lié à un template WP
 *
 * @summary Simple bouton cliquable
 * @author S.Charette
 *
 * Created at     : 2024-04-24 10:14:28 
 * Last modified  : 2024-04-26 08:48:58
 */

window.addEventListener("DOMContentLoaded", (evt) => {

    let button = document.querySelector("#sample-btn");
    let text = document.querySelector("#text-container");

    button.addEventListener("click", () => {
        text.textContent = "Le bouton a été cliqué!";
    })



});