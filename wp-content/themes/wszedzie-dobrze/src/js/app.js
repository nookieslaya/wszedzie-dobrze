import '../sass/styles.scss';




import MainMenu from '/includes/homepage/nav/mainMenu';
import gallery from '/includes/gallery-page/gallery/gallery';

import  '/includes/homepage/slider/slider';
//

class Default {


    boot() {
        gallery();
        MainMenu();
    }
}

new Default().boot();
