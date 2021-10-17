
$('.show-pass-btn').click(function () {
    var idPass = $(this).find('i').data('id-pass');
    $(this).find('i[data-id-pass=' + idPass + ']').toggle();
});


$('.show-pass-btn').find('i#open-pass-btn').click(function () {
    $('#lock-pass').attr('type', 'text');
});
$('.show-pass-btn').find('i#lock-pass-btn').click(function () {
    $('#lock-pass').attr('type', 'password');
});
$('.show-pass-btn').find('i#open-confirm-btn').click(function () {
    $('#lock-confirm').attr('type', 'text');
});
$('.show-pass-btn').find('i#lock-confirm-btn').click(function () {
    $('#lock-confirm').attr('type', 'password');
});


const DOMstrings = {
    stepsBtnClass: 'multisteps-form__progress-btn',
    stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
    stepsBar: document.querySelector('.multisteps-form__progress'),
    stepsForm: document.querySelector('.multisteps-form__form'),
    stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
    stepFormPanelClass: 'multisteps-form__panel',
    stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
    stepPrevBtnClass: 'js-btn-prev',
    stepNextBtnClass: 'js-btn-next'};


const removeClasses = (elemSet, className) => {

    elemSet.forEach(elem => {

        elem.classList.remove(className);

    });

};

const findParent = (elem, parentClass) => {

    let currentNode = elem;

    while (!currentNode.classList.contains(parentClass)) {
        currentNode = currentNode.parentNode;
    }

    return currentNode;

};

const getActiveStep = elem => {
    return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};

const setActiveStep = activeStepNum => {

    removeClasses(DOMstrings.stepsBtns, 'js-active');

    DOMstrings.stepsBtns.forEach((elem, index) => {

        if (index <= activeStepNum) {
            elem.classList.add('js-active');
        }

    });
};

const getActivePanel = () => {

    let activePanel;

    DOMstrings.stepFormPanels.forEach(elem => {

        if (elem.classList.contains('js-active')) {

            activePanel = elem;

        }

    });

    return activePanel;

};

const setActivePanel = activePanelNum => {

    removeClasses(DOMstrings.stepFormPanels, 'js-active');

    DOMstrings.stepFormPanels.forEach((elem, index) => {
        if (index === activePanelNum) {

            elem.classList.add('js-active');

            setFormHeight(elem);

        }
    });

};

const formHeight = activePanel => {

    const activePanelHeight = activePanel.offsetHeight;

    DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;

};

const setFormHeight = () => {
    const activePanel = getActivePanel();

    formHeight(activePanel);
};

DOMstrings.stepsBar.addEventListener('click', e => {

    const eventTarget = e.target;

    if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
        return;
    }

    const activeStep = getActiveStep(eventTarget);

    setActiveStep(activeStep);

    setActivePanel(activeStep);
});

DOMstrings.stepsForm.addEventListener('click', e => {

    const eventTarget = e.target;

    if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)))
    {
        return;
    }

    const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

    let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

    if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
        activePanelNum--;

    } else {

        activePanelNum++;

    }

    setActiveStep(activePanelNum);
    setActivePanel(activePanelNum);

});

window.addEventListener('load', setFormHeight, false);

window.addEventListener('resize', setFormHeight, false);


const setAnimationType = newType => {
    DOMstrings.stepFormPanels.forEach(elem => {
        elem.dataset.animation = newType;
    });
};

//changing animation
$('.pick-animation__select').change(function () {
    const newAnimationType = animationSelect.value;

});

$(function () {

    $('#number_check').numbermask({
        mask: "# # # # # #"
    });
});

//for progress
$('.up-prodgress-btn-33').click(function () {
    $('.animate-progress').css("width", "66%");
});
$('.up-prodgress-btn-100').click(function () {
    $('.animate-progress').css("width", "100%");
});


$('.reset-pass-success-btn').click(function () {
    $.confirm({
        title: 'Thành công!',
        content: 'Mật khẩu đã được đổi thành công, đăng nhập ngay!',
        type: 'green',
        typeAnimated: true,
        buttons: {
            'Xác nhận': {
                btnClass: 'btn-green',
                action: function () {
                    window.location.href = 'login.php';
                }
            }
        }
    });
});
