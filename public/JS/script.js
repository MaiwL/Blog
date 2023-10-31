document.addEventListener("DOMContentLoaded", () => {
    const linkItems = document.querySelectorAll(".link-item");

    linkItems.forEach((linkItem, index) => {
        linkItem.addEventListener("click", () => {
            document.querySelector(".active").classList.remove("active");
            linkItem.classList.add("active");

            const indicator = document.querySelector(".indicator");

            // Vérifiez la largeur de la fenêtre
            const windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            let indicatorPosition;

            switch (true) {
                case (windowWidth < 768):
                    // Si la largeur de la fenêtre est inférieure à 768px
                    indicatorPosition = 65 + 32;
                    break;

                case (windowWidth < 960):
                    // Si la largeur de la fenêtre est inférieure à 960px (mais supérieure à 768px)
                    indicatorPosition = index * 150 + 75;
                    break;

                default:
                    // Si la largeur de la fenêtre est supérieure ou égale à 960px
                    indicatorPosition = index * 250 + 125 ;
                    break;
            }

            indicator.style.left = `${indicatorPosition}px`;
        });
    });
});


// document.addEventListener("DOMContentLoaded", () => {
//     const linkItems = document.querySelectorAll(".link-item");

//     linkItems.forEach((linkItem, index) => {
//         linkItem.addEventListener("click", () => {
//             document.querySelector(".active").classList.remove("active");
//             linkItem.classList.add("active");

//             const indicator = document.querySelector(".indicator");

//             // Vérifiez la largeur de la fenêtre
//             const windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

//             let indicatorPosition;
//             if (windowWidth < 768) {
//                 // Si la largeur de la fenêtre est inférieure à 768px, utilisez 80 + 60
//                 indicatorPosition = index * 65 + 32;
//             } else {
//                 // Sinon, utilisez la formule d'origine index * 65 + 32
                
//                 indicatorPosition = index * 150 + 75;
//             }

//             indicator.style.left = `${indicatorPosition}px`;
//         });
//     });
// });



// document.addEventListener("DOMContentLoaded", () => { 
//     // NavBar Indicator
//     const linkItems = document.querySelectorAll(".link-item");

//     linkItems.forEach((linkItem, index) => {
//         linkItem.addEventListener("click", () => {
//             document.querySelector(".active").classList.remove("active");
//             linkItem.classList.add("active");

//             const indicator = document.querySelector(".indicator");

//             indicator.style.left = `${index * 65 + 32}px`;
//         })
//     })
// });
