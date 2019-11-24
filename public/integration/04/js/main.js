/*
    PagePiling
 */
var stepZIndex = 10;
var prefixPage = "page-";
var supportsWheel = false;
var pageTitle = ['Accueil', 'L\'appartement', 'Le quartier', 'Les actualités', 'Contact et réservation'];
var curPage = 1;
window.pagepiling = document.getElementById("pagePiling");
window.ppNav = document.getElementsByClassName("ppNav")[0];
var totalPages = pagepiling.getElementsByClassName("ppPage").length;
pagepiling.getElementsByClassName("ppPage")[0].classList.add("active");
ppNav.getElementsByTagName("li")[0].classList.add("active");
ppNav.style.zIndex = (totalPages * stepZIndex) + 1;
window.t0 = performance.now();

for (i = 0; i < totalPages; i++) {
    pagepiling.getElementsByClassName("ppPage")[i].id = 'page-' + (i + 1);
    pagepiling.getElementsByClassName("ppPage")[i].style.zIndex = (totalPages - i) * stepZIndex;
    pagepiling.getElementsByClassName("ppPage")[i].style.transform = 'translate3d(0px, 0px, 0px)';
    ppNav.getElementsByTagName("a")[i].href = '#page-' + (i + 1);
    ppNav.getElementsByTagName("a")[i].setAttribute('onclick', 'ppNavigate(' + (i + 1) + ')');
    if (pageTitle[i]) {
        ppNav.getElementsByTagName("a")[i].setAttribute('title', pageTitle[i]);
    } else {
        ppNav.getElementsByTagName("a")[i].setAttribute('title', 'Page ' + (i + 1));
    }
}

function ppNavigateUp(e) {
    if (curPage === 1) return;
    pagepiling.getElementsByClassName("ppPage")[curPage - 1].classList.remove("active");
    pagepiling.getElementsByClassName("ppPage")[curPage - 2].classList.add("active");
    pagepiling.getElementsByClassName("ppPage")[curPage - 2].style.transform = 'translate3d(0px, 0px, 0px)';
    ppNav.getElementsByTagName("li")[curPage - 1].classList.remove("active");
    ppNav.getElementsByTagName("li")[curPage - 2].classList.add("active");
    curPage--;
}

function ppNavigateDown(e) {
    if (curPage === totalPages) return;
    pagepiling.getElementsByClassName("ppPage")[curPage - 1].classList.remove("active");
    ppNav.getElementsByTagName("li")[curPage - 1].classList.remove("active");
    pagepiling.getElementsByClassName("ppPage")[curPage - 1].style.transform = 'translate3d(0px, -100%, 0px)';

    pagepiling.getElementsByClassName("ppPage")[curPage].classList.add("active");
    ppNav.getElementsByTagName("li")[curPage].classList.add("active");
    curPage++;
}

document.addEventListener('wheel', ppScrall);
document.addEventListener('mousewheel', ppScrall);
document.addEventListener('DOMMouseScroll', ppScrall);

function ppScrall(e) {
    var t1 = performance.now();
    if ((t1 - window.t0) < 1000) {
        return;
    }
    window.t0 = performance.now();
    /* Check if wheel event is supported. */
    if (e.type == "wheel") supportsWheel = true;
    else if (supportsWheel) return;
    /* Determine the direction of the scroll (< 0 UP, > 0 DOWN). */
    var delta = ((e.deltaY || -e.wheelDelta || e.detail) >> 10) || 1;
    if (delta < 0) {
        ppNavigateUp();
    }
    if (delta > 0) {
        ppNavigateDown();
    }
}

document.addEventListener('keydown', logKey);

function logKey(e) {
    if (e.code === 'ArrowUp' || e.code === 'ArrowLeft') {
        ppNavigateUp();
    }
    if (e.code === 'ArrowDown' || e.code === 'ArrowRight') {
        ppNavigateDown();
    }
}

function ppNavigate(pageNb) {
    if (pageNb > 0 && pageNb < curPage) {
        mainMenu('close');
        for (var i = curPage; i > pageNb; i--) {
            ppNavigateUp();
        }
    } else if (pageNb > curPage && pageNb <= totalPages) {
        mainMenu('close');
        for (var i = curPage; i < pageNb; i++) {
            ppNavigateDown();
        }
    }
}

/*
    Visit from another website with anchor #page-{i} in the link
 */
var url = document.location.toString();
var hash = url.substring(url.indexOf("#") + 1);
var pageNb = parseInt(hash.replace('page-', ''), 8);
if (!isNaN(pageNb) && pageNb >= curPage && pageNb <= totalPages) {
    for (var i = curPage; i < pageNb; i++) {
        ppNavigateDown();
    }
}

/*
    Menu
 */
function mainMenu(e) {
    if (e === 'close') {
        document.getElementsByClassName('mainMenu')[0].classList.add('close');
        document.getElementsByClassName('topMenu')[0].classList.remove('open');
    } else {
        document.getElementsByClassName('mainMenu')[0].classList.remove('close');
        document.getElementsByClassName('topMenu')[0].classList.add('open');
    }
}

/*
    Popup
 */
function popupOpen(e) {
    document.getElementsByClassName('ppNav')[0].style.display = 'none';
    pagepiling.getElementsByClassName('active')[0].classList.add('popupActive');
    for (i = 0; i < totalPages; i++) {
        pagepiling.getElementsByClassName("ppPage")[i].classList.add('popupBg');
    }
    mainMenu('close');
    document.getElementById(e).classList.remove('close');
}

function popupClose(e) {
    pagepiling.getElementsByClassName('active')[0].classList.remove('popupActive');
    for (i = 0; i < totalPages; i++) {
        pagepiling.getElementsByClassName("ppPage")[i].classList.remove('popupBg');
    }
    mainMenu('open');
    document.getElementById(e).classList.add('close');
    document.getElementsByClassName('ppNav')[0].style.display = 'block';
}