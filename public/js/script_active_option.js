
const ActivedOption = () => {

    const option_navigation = document.querySelectorAll('.option-navigation');

    const currentUrl = window.location.href.replace("#", '');

    if(option_navigation.length){
        Array.from(option_navigation).forEach(element => {

            if(currentUrl.includes(element.href)){

                element.classList.add('!text-white');

            }

        });
    }
}

setTimeout(() => {

    ActivedOption();

}, 1000);
