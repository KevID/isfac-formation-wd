/*
    PagePiling
 */
var stepZIndex = 10;
var prefixPage = "page-";
var supportsWheel = false;
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
    ppNav.getElementsByTagName("a")[i].href = '#page-' + (i + 1);
}

function ppNavigateUp(e) {
    if (curPage === 1) return;
    pagepiling.getElementsByClassName("ppPage")[curPage - 1].classList.remove("active");
    pagepiling.getElementsByClassName("ppPage")[curPage - 2].classList.add("active");
    pagepiling.getElementsByClassName("ppPage")[curPage - 2].style.removeProperty("transform");
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