
$(document).ready(function() {

    function filterInputs() {

        const inputs = document.querySelectorAll('input[type="number"][id*="command_number_"]');

        const manager = document.getElementById('manager');

        const table = document.getElementById('table');

        const inputRadio = document.querySelector("input[type='radio'][name='client']:checked");


        const produit = Array.from(inputs).filter(function() {
            return this.value !== '' && this.value !== '0';
        });

        const data = {};
        if(produit.length && manager.value && inputRadio){
            data.produit = produit;
            data.manager = manager;
            data.client = inputRadio;
            if(table.value){
                data.table = table;
            }
        }

        return data;
    }

    $('#submitData').on('click', function(event) {

        event.preventDefault();

        const formData = filterInputs();

        if(Object.keys(formData).length){

            const sendCommand = document.getElementById('send-command');

            sendCommand.append(...formData.produit);

            sendCommand.append(formData.manager);

            sendCommand.append(formData.client);

            if(formData.table){
                sendCommand.append(formData.table);
            }


            sendCommand.submit();
        }
    });
});
